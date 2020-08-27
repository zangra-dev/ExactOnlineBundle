<?php

namespace ExactOnlineBundle\Manager;

use ExactOnlineBundle\DAO\Connection;
use ExactOnlineBundle\Entity\XmlImportResponse;
use ExactOnlineBundle\Model\Xml\XmlParamsControl;
use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\ORM\EntityManager;

/**
 * Author: Nils méchin <nils@zangra.com>.
 */
class ExactXmlApi extends ExactManager implements ExactXmlApiInterface
{
    protected $em;
    protected $files;
    protected $data;
    protected $exactXmlExportDir = '/home/debian/public/zangra-sylius/web/media/exact/xml/export/';
    protected $options = [];
    protected $nbrElements;
    protected $pageSize;
    protected $bodySize;
    protected $verbose = false;
    protected $limitParts = 10000;
    protected $xRateLimit;
    protected $errors = false;

    public function __construct(EntityManager $em, $options = [])
    {
        parent::__construct($em);
        $this->files = new ArrayCollection();
        $this->data = new ArrayCollection();

        // default options
        $this->options[] = self::RETURN_SIMPLE_XML;
        if (!empty($options)) {
            $this->setOptions($options);
        }
    }

    public function setConfig($config)
    {
        parent::setConfig($config);
    }

    public function import(string $body, array $params = [], array $options = [])
    {
        if (!empty($options)) {
            $this->setOptions($options);
        }

        $url = 'XMLUpload.aspx?Topic='.$this->model::TOPIC;
        $p = $this->formatXmlParams($params, XmlParamsControl::IMPORT);
        $url = $url.$p;

        Connection::setContentType('xml');
        $response = Connection::Request($url, 'POST', $body);
        $this->xRateLimit = Connection::getXRateLimits();

        $xml = $this->simpleXmlLoad($response);

        return $this->parseXmlResponse($xml);
    }

    /**
     * Exact Export XML entities (Topics). Optionally save to file
     * Create request based on models xml Topic and input params.
     * Check params and values validity.
     *
     * @param mixed      $options
     * @param null|mixed $limitParts
     *
     * @return string ResponseBody
     */
    public function export(array $params, $options = [], $limitParts = null)
    {
        if (!empty($options)) {
            $this->setOptions($options);
        }

        if (!empty($limitParts)) {
            $this->limitParts = $limitParts;
        }

        Connection::setContentType('xml');

        $url = 'XMLDownload.aspx?Topic='.$this->model::TOPIC;

        $p = $this->formatXmlParams($params, XmlParamsControl::EXPORT);

        $url = $url.$p;

        return $this->makeRequest($url);
    }

    public function setOptions($options)
    {
        foreach ($options as $option) {
            if (!in_array($option, self::OPTIONS)) {
                throw new \Exception('Unknown constant option', 1);
            }
        }
        $this->options = $options;
    }

    public function getOptions()
    {
        return $this->options;
    }

    /**
     * Get number of elements in current XML file (part).
     * Topic attribute count.
     *
     * @return string (numeric)
     */
    public function getNbrElements()
    {
        return $this->nbrElements;
    }

    /**
     * Get Max number of elements possible in choosen Topic (part).
     * Topic attribute pagesize.
     *
     * @return string (numeric)
     */
    public function getPageSize()
    {
        return $this->pageSize;
    }

    /**
     * Size of response body in bytes.
     *
     * @return int
     */
    public function getBodySize()
    {
        return $this->bodySize;
    }

    /**
     * Get list of paths to saved files.
     *
     * @return ArrayCollection
     */
    public function getFiles()
    {
        return $this->files;
    }

    /**
     * Get list of retrieved raw bodies or SimpleXmlElements.
     *
     * @return ArrayCollection
     */
    public function getData()
    {
        return $this->data;
    }

    /**
     * Get Rate limits of last Request.
     *
     * @return array
     */
    public function getRateLimit()
    {
        return $this->xRateLimit;
    }

    /**
     * @return mixed
     */
    public function getXmlExportDir()
    {
        return $this->exactXmlExportDir;
    }

    /**
     * @param mixed $exactXmlExportDir
     *
     * @return self
     */
    public function setXmlExportDir($exactXmlExportDir)
    {
        $this->exactXmlExportDir = $exactXmlExportDir;

        return $this;
    }

    public function clearAll()
    {
        $this->files->clear();
        $this->data->clear();
    }

    public function clearFiles()
    {
        $this->files->clear();
    }

    public function clearData()
    {
        $this->data->clear();
    }

    /**
     * @return mixed
     */
    public function haveErrors()
    {
        return true === $this->errors;
    }

    /**
     * [parseXmlResponse description].
     *
     * @param [type] $xml [description]
     *
     * @return [type] [description]
     */
    private function parseXmlResponse($xml)
    {
        foreach ($xml->Messages->children() as $message) {
            if (!$this->errors && 2 !== (int) $message['type']) {
                $this->errors = true;
            }

            $xmlResponseObject = new XmlImportResponse();
            $xmlResponseObject->setMessage((string) $message->Description);
            $xmlResponseObject->setType((int) $message['type']);
            $xmlResponseObject->setTopicNode((string) $message->Topic['node']);
            $xmlResponseObject->setTopicCode((string) $message->Topic['code']);
            $xmlResponseObject->setDataKey((string) $message->Topic->Data['keyAlt']);
            $xmlResponseObject->setDateTime(new \DateTime((string) $message->Date));

            $this->data->add($xmlResponseObject);
        }
    }

    private function formatXmlParams(array $params, $type)
    {
        $p = '';
        if (empty($params)) {
            return $p;
        }

        $xmlParamsChecker = new XmlParamsControl($type);
        $xmlParamsChecker->check($this->model::TOPIC, $params);

        foreach ($params as $key => $param) {
            $p .= '&Params_'.$key.'='.$param;
        }

        return $p;
    }

    private function simpleXmlLoad($responseBody)
    {
        $xml = simplexml_load_string($responseBody);

        if (false === $xml) {
            $msg = '';
            foreach (libxml_get_errors() as $error) {
                $msg .= $error->message.' ';
            }

            throw new \Exception('Exact Xml error. '.$msg, 1);
        }

        return $xml;
    }

    /**
     * Make request (recursive).
     * Check valid xml in response.
     * Get next page if available.
     * Store written file in an arrayCollection.
     *
     * @param string $url
     * @param int    $counter
     *
     * @return string raw body
     */
    private function makeRequest($url, $counter = 1)
    {
        if (in_array(self::VERBOSE, $this->options)) {
            echo $counter.' Fetch:'."\n";
            echo __METHOD__."\n";
            echo $url."\n";
        }

        $responseBody = Connection::Request($url, 'GET');
        $this->xRateLimit = Connection::getXRateLimits();

        $xml = $this->simpleXmlLoad($responseBody);

        $this->nbrElements = (string) $xml->Topics->Topic['count'];
        $this->pageSize = (string) $xml->Topics->Topic['pagesize'];
        $this->bodySize = strlen($responseBody);

        if (in_array(self::FILE_OPTION_SAVE, $this->options)) {
            $this->files[] = $this->saveData($responseBody, $counter);
        }

        if (in_array(self::COLLECT_ALL_PARTS, $this->options)) {
            if (in_array(self::RETURN_SIMPLE_XML, $this->options)) {
                $this->data[] = $xml;
            } else {
                $this->data[] = $responseBody;
            }
        } else {
            if (in_array(self::RETURN_SIMPLE_XML, $this->options)) {
                $responseBody = $xml;
            }
        }

        if (in_array(self::GET_PARTS, $this->options)) {
            if ($counter < $this->limitParts) {
                if (null !== $url = $this->getNextPage($xml, $url)) {
                    $this->makeRequest($url, ++$counter);
                }
            }
        }

        return $responseBody;
    }

    /**
     * Get next paging if any.
     * Adds or replace TSPaging timestamp (TSPaging=0x000000008DDDC820 hex timestamp)
     * and returns the new url or null.
     *
     * @param string $url
     *
     * @return null|string
     */
    private function getNextPage(\SimpleXMLElement $xml, $url)
    {
        if (empty($this->nbrElements) || empty($this->pageSize)) {
            return null;
        }

        $url = preg_replace('/&TSPaging=0x[0-9A-F]{16}/', '', $url);
        if ($this->nbrElements == $this->pageSize) {
            $tsPaging = '&TSPaging='.(string) $xml->Topics->Topic['ts_d'];

            return $url.$tsPaging;
        }

        return null;
    }

    /**
     * Save response body to file.
     *
     * @param string $responseBody
     * @param int    $counter
     * @param string $type
     *
     * @return string $filename
     */
    private function saveData($responseBody, $counter, $type = 'xml')
    {
        $filename = $this->model::TOPIC.'_'.date('YmdHi').'-'.$counter;
        $file = $this->exactXmlExportDir.$filename.'.'.$type;

        if (is_dir($this->exactXmlExportDir)) {
            file_put_contents($file, $responseBody);

            return $filename;
        }

        throw new \Exception($file.' could not be written. Dir exists ? Permission ?', 1);
    }
}

/*
TOPICS

<option value="APs">A/P</option>
<option value="ARs">A/R</option>
<option value="Accounts">Accounts</option>
<option value="AllocationRules">Allocation rules</option>
<option value="AssemblyOrders">Assembly orders</option>
<option value="AssetGroups">Asset groups</option>
<option value="Balances">Balance</option>
<option value="BankLinks">Bank links</option>
<option value="BillOfMaterials" selected="selected">Bill of materials</option>
<option value="BudgetScenarios">Budget scenarios</option>
<option value="Budgets">Budgets</option>
<option value="Administrations">Companies</option>
<option value="UserAdministrations">Company access rights</option>
<option value="Costcenters">Cost centres</option>
<option value="Costunits">Cost units</option>
<option value="DepreciationMethods">Depreciation methods</option>
<option value="Documents">Documents</option>
<option value="ExchangeRates">Exchange rates</option>
<option value="ExtraFieldDefinitions">Extra field definitions</option>
<option value="FinYears">Financial years</option>
<option value="FinishedAssemblies">Finished assemblies</option>
<option value="GLAccountClassifications">G/L Account Classifications</option>
<option value="GLAccounts">G/L Accounts</option>
<option value="Deliveries">Goods deliveries</option>
<option value="Receipts">Goods receipts</option>
<option value="ItemGroups">Item groups</option>
<option value="Items">Items</option>
<option value="ItemWarehouse">Items by warehouses</option>
<option value="Journals">Journals</option>
<option value="Layouts">Layouts</option>
<option value="DDMandates">Mandates</option>
<option value="ManufacturedBillofMaterials">Manufactured bill of materials</option>
<option value="MatchSets">Matching</option>
<option value="PaymentConditions">Payment conditions</option>
<option value="PurchaseOrders">Purchase orders</option>
<option value="Invoices">Sales invoices</option>
<option value="SalesOrders">Sales orders</option>
<option value="Settings">Settings</option>
<option value="ShippingMethods">Shipping methods</option>
<option value="StockCounts">Stock counts</option>
<option value="StockPositions">Stock positions</option>
<option value="Titles">Titles</option>
<option value="GLTransactions">Transactions</option>
<option value="Users">Users</option>
<option value="VATs">VAT codes</option>
<option value="WarehouseTransfers">Warehouse transfers</option>
<option value="Warehouses">Warehouses</option>
<option value="WebShopSalesOrders">Web shop sales orders</option>

 */
