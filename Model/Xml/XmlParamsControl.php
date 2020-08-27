<?php

namespace ExactOnlineBundle\Model\Xml;

use ExactOnlineBundle\DAO\Exception\ApiException;

/**
 * XmlParamsControl.
 *
 * Validate URL parameters against a xml file
 * before sending a Download request.
 */
class XmlParamsControl
{
    const IMPORT = 'Import';
    const EXPORT = 'Export';

    private $xmlTopicParameters = '/home/debian/public/zangra-sylius/web/bundles/exactbundle/XMLTopicParameters.xml';
    private $xml;
    private $type;

    public function __construct($type = self::EXPORT)
    {
        if (!file_exists($this->xmlTopicParameters)) {
            throw new ApiException('File xmlTopicParameters can not be read at: '.$this->xmlTopicParameters, 1);
        }

        $this->type = $type;
        $this->xml = simplexml_load_file($this->xmlTopicParameters) or die;
    }

    /**
     * Extract topic from xml file if exists or throws an error.
     *
     * @param string $topic
     *
     * @throws ApiException
     *
     * @return bool
     */
    public function check($topic, array $params)
    {
        // Check that topic exists
        $xmlParams = $this->xml->xpath('//Topic[@code="'.$topic.'"]');
        if (empty($xmlParams)) {
            throw new ApiException('Parameter: '.$topic.' does not exists', 1);
        }

        // Check that param and value is correct for specified topic
        foreach ($params as $param => $value) {
            $this->checkParam($xmlParams, $param, $value, $topic);
        }

        return true;
    }

    /**
     * Check topic parameters and values.
     *
     * @param array  $xmlParams
     * @param string $param
     * @param string $value
     * @param string $topic
     *
     * @throws ApiException
     *
     * @return bool
     */
    private function checkParam($xmlParams, $param, $value, $topic)
    {
        foreach ($xmlParams[0]->Parameters->{$this->type}->Parameter as $xmlParam) {
            if ('Params_'.$param == $xmlParam['name']) {
                $type = $xmlParam['type'];

                if ('Boolean' == $type) {
                    if (is_bool($value) || '1' == $value || '0' == $value) {
                        return true;
                    }
                }
                if ('String' == $type && is_string($value)) {
                    return true;
                }
                if ('Integer' == $type && is_numeric($value)) {
                    return true;
                }
                if ('Date' == $type && $this->validateDate($value)) {
                    return true;
                }

                throw new ApiException('Expecting type: "'.$type.'" and got value: '.$value.'. If it\'s a date type check format in Exact', 1);
            }
        }

        throw new ApiException(
            'XML Parameter "(Params_)'.$param.'" does not exists for topic "'.$topic.'". Available params: '.$this->stringParams($xmlParams),
            1
        );
    }

    /**
     * Validate date (format and date) in Exact format.
     *
     * @param string $date
     * @param string $format
     *
     * @return bool
     */
    private function validateDate($date, $format = 'd-m-Y')
    {
        $d = \DateTime::createFromFormat($format, $date);

        return $d && $d->format($format) == $date;
    }

    /**
     * Convert Parameters to string values.
     *
     * @return string
     */
    private function stringParams(array $xmlParams)
    {
        $str = '';
        foreach ($xmlParams[0]->Parameters->Export->Parameter as $xmlParam) {
            $str .= $xmlParam['name'].', ';
        }

        return $str;
    }
}
