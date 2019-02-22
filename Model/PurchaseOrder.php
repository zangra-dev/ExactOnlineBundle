<?php

namespace aibianchi\ExactOnlineBundle\Model; 

use aibianchi\ExactOnlineBundle\Model\Base\Model;
/**
 * Class PurchaseOrder extends Model
 *
 * @package aibianchi\ExactOnlineBundle\Model
 * @See https://start.exactonline.nl/docs/HlpRestAPIResourcesDetails.aspx?name=PurchaseOrderPurchaseOrders
 *
 * @property string $PurchaseOrderID Primary key
 * @property float $AmountDC Total amount in the default currency of the company
 * @property float $AmountFC Total amount in the currency of the transaction
 * @property string $Created Creation date
 * @property string $Creator User ID of creator
 * @property string $CreatorFullName Name of creator
 * @property string $Currency Currency code
 * @property string $DeliveryAccount Reference to account for delivery
 * @property string $DeliveryAccountCode Delivery account code
 * @property string $DeliveryAccountName Account name
 * @property string $DeliveryAddress Reference to shipping address
 * @property string $DeliveryContact Reference to contact for delivery
 * @property string $DeliveryContactPersonFullName Name of the contact person of the customer who will receive delivered goods
 * @property string $Description Description of the purchase order
 * @property int $Division Division code
 * @property string $Document Document that is manually linked to the purchase order
 * @property string $DocumentSubject Subject of the document
 * @property bool $DropShipment Shows if it is a drop shipment purchase order
 * @property float $ExchangeRate Allows you to set the currency for the invoice. You can only do this if you have checked the Variable: Currency and Variable: Exchange rate fields in the sales journal settings. Once a line has been created in the invoice, the currency can no longer be changed.
 * @property int $InvoiceStatus Invoice status of purchase order: 10-Open, 20-Partial, 30-Complete, 40-Canceled
 * @property string $Modified Last modified date
 * @property string $Modifier User ID of modifier
 * @property string $ModifierFullName Name of modifier
 * @property string $OrderDate Order date
 * @property int $OrderNumber Human readable id of the purchase order
 * @property int $OrderStatus Purchase order status: 10-Open, 20-Partial, 30-Complete, 40-Canceled
 * @property string $PaymentCondition The payment condition code used for due date and discount calculation
 * @property string $PaymentConditionDescription Description of payment condition
 * @property string $PurchaseAgent Purchase agent
 * @property string $PurchaseAgentFullName Name of purchase agent
 * @property PurchaseOrderLines $PurchaseOrderLines Collection of lines
 * @property string $ReceiptDate This field shows the date the goods are expected to be received.
 * @property int $ReceiptStatus Receipt status of purchase order: 10-Open, 20-Partial, 30-Complete, 40-Canceled
 * @property string $Remarks Include any relevant remarks regarding the purchase order.
 * @property string $SalesOrder Reference to sales order when purchase order generated via back to back sales order
 * @property int $SalesOrderNumber Number of the sales order
 * @property string $ShippingMethod ShippingMethod
 * @property string $ShippingMethodDescription Description of ShippingMethod
 * @property int $Source This shows how the purchase order was created: 1-Manual entry, 2-Import, 3-Other, 4-Purchase order, 5-Sales order, 6-Supplier's items, 7-Subcontract, 8-Purchase order advice, 9-Shop order, 10-MRP calculation
 * @property string $Supplier Reference to supplier account
 * @property string $SupplierCode Code of supplier
 * @property string $SupplierContact Contact of supplier
 * @property string $SupplierContactPersonFullName Contact person full name of supplier
 * @property string $SupplierName Name of supplier
 * @property float $VATAmount Total VAT amount in the currency of the transaction
 * @property string $Warehouse Warehouse
 * @property string $WarehouseCode Code of Warehouse
 * @property string $WarehouseDescription Description of Warehouse
 * @property string $YourRef Shows the reference number associated with the purchase order. Enter a description and reference to make the purchase order easier to identify.
 */
class PurchaseOrder extends Model 
{
        protected $primaryKey = 'PurchaseOrderID';
        protected $purchaseOrderLines;
        protected $PurchaseOrderID;
        protected $AmountDC;
        protected $AmountFC;
        protected $Created;
        protected $Creator;
        protected $CreatorFullName;
        protected $Currency;
        protected $DeliveryAccount;
        protected $DeliveryAccountCode;
        protected $DeliveryAccountName;
        protected $DeliveryAddress;
        protected $DeliveryContact;
        protected $DeliveryContactPersonFullName;
        protected $Description;
        protected $Division;
        protected $Document;
        protected $DocumentSubject;
        protected $DropShipment;
        protected $ExchangeRate;
        protected $InvoiceStatus;
        protected $Modified;
        protected $Modifier;
        protected $ModifierFullName;
        protected $OrderDate;
        protected $OrderNumber;
        protected $OrderStatus;
        protected $PaymentCondition;
        protected $PaymentConditionDescription;
        protected $PurchaseAgent;
        protected $PurchaseAgentFullName;
        protected $PurchaseOrderLines;
        protected $ReceiptDate;
        protected $ReceiptStatus;
        protected $Remarks;
        protected $SalesOrder;
        protected $SalesOrderNumber;
        protected $ShippingMethod;
        protected $ShippingMethodDescription;
        protected $Source;
        protected $Supplier;
        protected $SupplierCode;
        protected $SupplierContact;
        protected $SupplierContactPersonFullName;
        protected $SupplierName;
        protected $VATAmount;
        protected $Warehouse;
        protected $WarehouseCode;
        protected $WarehouseDescription;
        protected $YourRef;
        protected $url = 'purchaseorder/PurchaseOrders';


    /**
     * @return mixed
     */
    public function getPrimaryKey()
    {
        return $this->primaryKey;
    }

    /**
     * @param mixed $primaryKey
     *
     * @return self
     */
    public function setPrimaryKey($primaryKey)
    {
        $this->primaryKey = $primaryKey;

        return $this;
    }

    /**
     * @return mixed
     */
    public function getPurchaseOrderLines()
    {
        return $this->purchaseOrderLines;
    }

    /**
     * @param mixed $purchaseOrderLines
     *
     * @return self
     */
    public function setPurchaseOrderLines($purchaseOrderLines)
    {
        $this->purchaseOrderLines = $purchaseOrderLines;

        return $this;
    }

    /**
     * @return mixed
     */
    public function getPurchaseOrderID()
    {
        return $this->PurchaseOrderID;
    }

    /**
     * @param mixed $PurchaseOrderID
     *
     * @return self
     */
    public function setPurchaseOrderID($PurchaseOrderID)
    {
        $this->PurchaseOrderID = $PurchaseOrderID;

        return $this;
    }

    /**
     * @return mixed
     */
    public function getAmountDC()
    {
        return $this->AmountDC;
    }

    /**
     * @param mixed $AmountDC
     *
     * @return self
     */
    public function setAmountDC($AmountDC)
    {
        $this->AmountDC = $AmountDC;

        return $this;
    }

    /**
     * @return mixed
     */
    public function getAmountFC()
    {
        return $this->AmountFC;
    }

    /**
     * @param mixed $AmountFC
     *
     * @return self
     */
    public function setAmountFC($AmountFC)
    {
        $this->AmountFC = $AmountFC;

        return $this;
    }

    /**
     * @return mixed
     */
    public function getCreated()
    {
        return $this->Created;
    }

    /**
     * @param mixed $Created
     *
     * @return self
     */
    public function setCreated($Created)
    {
        $this->Created = $Created;

        return $this;
    }

    /**
     * @return mixed
     */
    public function getCreator()
    {
        return $this->Creator;
    }

    /**
     * @param mixed $Creator
     *
     * @return self
     */
    public function setCreator($Creator)
    {
        $this->Creator = $Creator;

        return $this;
    }

    /**
     * @return mixed
     */
    public function getCreatorFullName()
    {
        return $this->CreatorFullName;
    }

    /**
     * @param mixed $CreatorFullName
     *
     * @return self
     */
    public function setCreatorFullName($CreatorFullName)
    {
        $this->CreatorFullName = $CreatorFullName;

        return $this;
    }

    /**
     * @return mixed
     */
    public function getCurrency()
    {
        return $this->Currency;
    }

    /**
     * @param mixed $Currency
     *
     * @return self
     */
    public function setCurrency($Currency)
    {
        $this->Currency = $Currency;

        return $this;
    }

    /**
     * @return mixed
     */
    public function getDeliveryAccount()
    {
        return $this->DeliveryAccount;
    }

    /**
     * @param mixed $DeliveryAccount
     *
     * @return self
     */
    public function setDeliveryAccount($DeliveryAccount)
    {
        $this->DeliveryAccount = $DeliveryAccount;

        return $this;
    }

    /**
     * @return mixed
     */
    public function getDeliveryAccountCode()
    {
        return $this->DeliveryAccountCode;
    }

    /**
     * @param mixed $DeliveryAccountCode
     *
     * @return self
     */
    public function setDeliveryAccountCode($DeliveryAccountCode)
    {
        $this->DeliveryAccountCode = $DeliveryAccountCode;

        return $this;
    }

    /**
     * @return mixed
     */
    public function getDeliveryAccountName()
    {
        return $this->DeliveryAccountName;
    }

    /**
     * @param mixed $DeliveryAccountName
     *
     * @return self
     */
    public function setDeliveryAccountName($DeliveryAccountName)
    {
        $this->DeliveryAccountName = $DeliveryAccountName;

        return $this;
    }

    /**
     * @return mixed
     */
    public function getDeliveryAddress()
    {
        return $this->DeliveryAddress;
    }

    /**
     * @param mixed $DeliveryAddress
     *
     * @return self
     */
    public function setDeliveryAddress($DeliveryAddress)
    {
        $this->DeliveryAddress = $DeliveryAddress;

        return $this;
    }

    /**
     * @return mixed
     */
    public function getDeliveryContact()
    {
        return $this->DeliveryContact;
    }

    /**
     * @param mixed $DeliveryContact
     *
     * @return self
     */
    public function setDeliveryContact($DeliveryContact)
    {
        $this->DeliveryContact = $DeliveryContact;

        return $this;
    }

    /**
     * @return mixed
     */
    public function getDeliveryContactPersonFullName()
    {
        return $this->DeliveryContactPersonFullName;
    }

    /**
     * @param mixed $DeliveryContactPersonFullName
     *
     * @return self
     */
    public function setDeliveryContactPersonFullName($DeliveryContactPersonFullName)
    {
        $this->DeliveryContactPersonFullName = $DeliveryContactPersonFullName;

        return $this;
    }

    /**
     * @return mixed
     */
    public function getDescription()
    {
        return $this->Description;
    }

    /**
     * @param mixed $Description
     *
     * @return self
     */
    public function setDescription($Description)
    {
        $this->Description = $Description;

        return $this;
    }

    /**
     * @return mixed
     */
    public function getDivision()
    {
        return $this->Division;
    }

    /**
     * @param mixed $Division
     *
     * @return self
     */
    public function setDivision($Division)
    {
        $this->Division = $Division;

        return $this;
    }

    /**
     * @return mixed
     */
    public function getDocument()
    {
        return $this->Document;
    }

    /**
     * @param mixed $Document
     *
     * @return self
     */
    public function setDocument($Document)
    {
        $this->Document = $Document;

        return $this;
    }

    /**
     * @return mixed
     */
    public function getDocumentSubject()
    {
        return $this->DocumentSubject;
    }

    /**
     * @param mixed $DocumentSubject
     *
     * @return self
     */
    public function setDocumentSubject($DocumentSubject)
    {
        $this->DocumentSubject = $DocumentSubject;

        return $this;
    }

    /**
     * @return mixed
     */
    public function getDropShipment()
    {
        return $this->DropShipment;
    }

    /**
     * @param mixed $DropShipment
     *
     * @return self
     */
    public function setDropShipment($DropShipment)
    {
        $this->DropShipment = $DropShipment;

        return $this;
    }

    /**
     * @return mixed
     */
    public function getExchangeRate()
    {
        return $this->ExchangeRate;
    }

    /**
     * @param mixed $ExchangeRate
     *
     * @return self
     */
    public function setExchangeRate($ExchangeRate)
    {
        $this->ExchangeRate = $ExchangeRate;

        return $this;
    }

    /**
     * @return mixed
     */
    public function getInvoiceStatus()
    {
        return $this->InvoiceStatus;
    }

    /**
     * @param mixed $InvoiceStatus
     *
     * @return self
     */
    public function setInvoiceStatus($InvoiceStatus)
    {
        $this->InvoiceStatus = $InvoiceStatus;

        return $this;
    }

    /**
     * @return mixed
     */
    public function getModified()
    {
        return $this->Modified;
    }

    /**
     * @param mixed $Modified
     *
     * @return self
     */
    public function setModified($Modified)
    {
        $this->Modified = $Modified;

        return $this;
    }

    /**
     * @return mixed
     */
    public function getModifier()
    {
        return $this->Modifier;
    }

    /**
     * @param mixed $Modifier
     *
     * @return self
     */
    public function setModifier($Modifier)
    {
        $this->Modifier = $Modifier;

        return $this;
    }

    /**
     * @return mixed
     */
    public function getModifierFullName()
    {
        return $this->ModifierFullName;
    }

    /**
     * @param mixed $ModifierFullName
     *
     * @return self
     */
    public function setModifierFullName($ModifierFullName)
    {
        $this->ModifierFullName = $ModifierFullName;

        return $this;
    }

    /**
     * @return mixed
     */
    public function getOrderDate()
    {
        return $this->OrderDate;
    }

    /**
     * @param mixed $OrderDate
     *
     * @return self
     */
    public function setOrderDate($OrderDate)
    {
        $this->OrderDate = $OrderDate;

        return $this;
    }

    /**
     * @return mixed
     */
    public function getOrderNumber()
    {
        return $this->OrderNumber;
    }

    /**
     * @param mixed $OrderNumber
     *
     * @return self
     */
    public function setOrderNumber($OrderNumber)
    {
        $this->OrderNumber = $OrderNumber;

        return $this;
    }

    /**
     * @return mixed
     */
    public function getOrderStatus()
    {
        return $this->OrderStatus;
    }

    /**
     * @param mixed $OrderStatus
     *
     * @return self
     */
    public function setOrderStatus($OrderStatus)
    {
        $this->OrderStatus = $OrderStatus;

        return $this;
    }

    /**
     * @return mixed
     */
    public function getPaymentCondition()
    {
        return $this->PaymentCondition;
    }

    /**
     * @param mixed $PaymentCondition
     *
     * @return self
     */
    public function setPaymentCondition($PaymentCondition)
    {
        $this->PaymentCondition = $PaymentCondition;

        return $this;
    }

    /**
     * @return mixed
     */
    public function getPaymentConditionDescription()
    {
        return $this->PaymentConditionDescription;
    }

    /**
     * @param mixed $PaymentConditionDescription
     *
     * @return self
     */
    public function setPaymentConditionDescription($PaymentConditionDescription)
    {
        $this->PaymentConditionDescription = $PaymentConditionDescription;

        return $this;
    }

    /**
     * @return mixed
     */
    public function getPurchaseAgent()
    {
        return $this->PurchaseAgent;
    }

    /**
     * @param mixed $PurchaseAgent
     *
     * @return self
     */
    public function setPurchaseAgent($PurchaseAgent)
    {
        $this->PurchaseAgent = $PurchaseAgent;

        return $this;
    }

    /**
     * @return mixed
     */
    public function getPurchaseAgentFullName()
    {
        return $this->PurchaseAgentFullName;
    }

    /**
     * @param mixed $PurchaseAgentFullName
     *
     * @return self
     */
    public function setPurchaseAgentFullName($PurchaseAgentFullName)
    {
        $this->PurchaseAgentFullName = $PurchaseAgentFullName;

        return $this;
    }

    /**
     * @return mixed
     */
    public function getPurchaseOrderLines()
    {
        return $this->PurchaseOrderLines;
    }

    /**
     * @param mixed $PurchaseOrderLines
     *
     * @return self
     */
    public function setPurchaseOrderLines($PurchaseOrderLines)
    {
        $this->PurchaseOrderLines = $PurchaseOrderLines;

        return $this;
    }

    /**
     * @return mixed
     */
    public function getReceiptDate()
    {
        return $this->ReceiptDate;
    }

    /**
     * @param mixed $ReceiptDate
     *
     * @return self
     */
    public function setReceiptDate($ReceiptDate)
    {
        $this->ReceiptDate = $ReceiptDate;

        return $this;
    }

    /**
     * @return mixed
     */
    public function getReceiptStatus()
    {
        return $this->ReceiptStatus;
    }

    /**
     * @param mixed $ReceiptStatus
     *
     * @return self
     */
    public function setReceiptStatus($ReceiptStatus)
    {
        $this->ReceiptStatus = $ReceiptStatus;

        return $this;
    }

    /**
     * @return mixed
     */
    public function getRemarks()
    {
        return $this->Remarks;
    }

    /**
     * @param mixed $Remarks
     *
     * @return self
     */
    public function setRemarks($Remarks)
    {
        $this->Remarks = $Remarks;

        return $this;
    }

    /**
     * @return mixed
     */
    public function getSalesOrder()
    {
        return $this->SalesOrder;
    }

    /**
     * @param mixed $SalesOrder
     *
     * @return self
     */
    public function setSalesOrder($SalesOrder)
    {
        $this->SalesOrder = $SalesOrder;

        return $this;
    }

    /**
     * @return mixed
     */
    public function getSalesOrderNumber()
    {
        return $this->SalesOrderNumber;
    }

    /**
     * @param mixed $SalesOrderNumber
     *
     * @return self
     */
    public function setSalesOrderNumber($SalesOrderNumber)
    {
        $this->SalesOrderNumber = $SalesOrderNumber;

        return $this;
    }

    /**
     * @return mixed
     */
    public function getShippingMethod()
    {
        return $this->ShippingMethod;
    }

    /**
     * @param mixed $ShippingMethod
     *
     * @return self
     */
    public function setShippingMethod($ShippingMethod)
    {
        $this->ShippingMethod = $ShippingMethod;

        return $this;
    }

    /**
     * @return mixed
     */
    public function getShippingMethodDescription()
    {
        return $this->ShippingMethodDescription;
    }

    /**
     * @param mixed $ShippingMethodDescription
     *
     * @return self
     */
    public function setShippingMethodDescription($ShippingMethodDescription)
    {
        $this->ShippingMethodDescription = $ShippingMethodDescription;

        return $this;
    }

    /**
     * @return mixed
     */
    public function getSource()
    {
        return $this->Source;
    }

    /**
     * @param mixed $Source
     *
     * @return self
     */
    public function setSource($Source)
    {
        $this->Source = $Source;

        return $this;
    }

    /**
     * @return mixed
     */
    public function getSupplier()
    {
        return $this->Supplier;
    }

    /**
     * @param mixed $Supplier
     *
     * @return self
     */
    public function setSupplier($Supplier)
    {
        $this->Supplier = $Supplier;

        return $this;
    }

    /**
     * @return mixed
     */
    public function getSupplierCode()
    {
        return $this->SupplierCode;
    }

    /**
     * @param mixed $SupplierCode
     *
     * @return self
     */
    public function setSupplierCode($SupplierCode)
    {
        $this->SupplierCode = $SupplierCode;

        return $this;
    }

    /**
     * @return mixed
     */
    public function getSupplierContact()
    {
        return $this->SupplierContact;
    }

    /**
     * @param mixed $SupplierContact
     *
     * @return self
     */
    public function setSupplierContact($SupplierContact)
    {
        $this->SupplierContact = $SupplierContact;

        return $this;
    }

    /**
     * @return mixed
     */
    public function getSupplierContactPersonFullName()
    {
        return $this->SupplierContactPersonFullName;
    }

    /**
     * @param mixed $SupplierContactPersonFullName
     *
     * @return self
     */
    public function setSupplierContactPersonFullName($SupplierContactPersonFullName)
    {
        $this->SupplierContactPersonFullName = $SupplierContactPersonFullName;

        return $this;
    }

    /**
     * @return mixed
     */
    public function getSupplierName()
    {
        return $this->SupplierName;
    }

    /**
     * @param mixed $SupplierName
     *
     * @return self
     */
    public function setSupplierName($SupplierName)
    {
        $this->SupplierName = $SupplierName;

        return $this;
    }

    /**
     * @return mixed
     */
    public function getVATAmount()
    {
        return $this->VATAmount;
    }

    /**
     * @param mixed $VATAmount
     *
     * @return self
     */
    public function setVATAmount($VATAmount)
    {
        $this->VATAmount = $VATAmount;

        return $this;
    }

    /**
     * @return mixed
     */
    public function getWarehouse()
    {
        return $this->Warehouse;
    }

    /**
     * @param mixed $Warehouse
     *
     * @return self
     */
    public function setWarehouse($Warehouse)
    {
        $this->Warehouse = $Warehouse;

        return $this;
    }

    /**
     * @return mixed
     */
    public function getWarehouseCode()
    {
        return $this->WarehouseCode;
    }

    /**
     * @param mixed $WarehouseCode
     *
     * @return self
     */
    public function setWarehouseCode($WarehouseCode)
    {
        $this->WarehouseCode = $WarehouseCode;

        return $this;
    }

    /**
     * @return mixed
     */
    public function getWarehouseDescription()
    {
        return $this->WarehouseDescription;
    }

    /**
     * @param mixed $WarehouseDescription
     *
     * @return self
     */
    public function setWarehouseDescription($WarehouseDescription)
    {
        $this->WarehouseDescription = $WarehouseDescription;

        return $this;
    }

    /**
     * @return mixed
     */
    public function getYourRef()
    {
        return $this->YourRef;
    }

    /**
     * @param mixed $YourRef
     *
     * @return self
     */
    public function setYourRef($YourRef)
    {
        $this->YourRef = $YourRef;

        return $this;
    }

    /**
     * @return mixed
     */
    public function getUrl()
    {
        return $this->url;
    }

    /**
     * @param mixed $url
     *
     * @return self
     */
    public function setUrl($url)
    {
        $this->url = $url;

        return $this;
    }
}
