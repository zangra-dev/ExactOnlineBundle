<?php

namespace ExactOnlineBundle\Model\Xml;

use ExactOnlineBundle\Model\Item as BaseItem;

class Item extends BaseItem
{
    public const TOPIC = 'Items';
    // protected $container;
    // protected $model;

    // public function __construct()
    // {
    //     move to common class
    //     $dom = new \DOMDocument();
    //     $dom->encoding = 'utf-8';
    //     $dom->xmlVersion = '1.0';
    //     $dom->formatOutput = true;
    //     $root = $dom->createElement("eExact");
    //     $root->setAttributeNS('http://www.w3.org/2001/XMLSchema-instance', 'xsi:noNamespaceSchemaLocation', 'eExact-XML.xsd');
    //     $dom->appendChild($root);

    //     // Items
    //     $this->container = $dom->createElement('Items');
    //     $root->appendChild($this->container);

    //     $this->dom = $dom;
    // }

    // public function setModel($item = null)
    // {
    //     $this->model = $this->dom->createElement('Item');
    //     $this->container->appendChild($this->model);

    //     $ID = $this->dom->createAttribute('ID');
    //     $ID->value = '{654654654654}';
    //     $this->model->appendChild($ID);

    //     $code = $this->dom->createAttribute('code');
    //     $code->value = 'light.001.001';
    //     $this->model->appendChild($code);

    //     $searchcode = $this->dom->createAttribute('searchcode');
    //     $searchcode->value = 'light.001.001';
    //     $this->model->appendChild($searchcode);
    // }
}
