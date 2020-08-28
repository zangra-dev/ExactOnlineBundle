<?php

namespace ExactOnlineBundle\Model\Base;

/**
 * Author: Jefferson Bianchi <jefferson@zangra.com>
 * Author: Nils méchin <nils@zangra.com>
 * Author: Maxime Lambot <maxime@lambot.com>.
 */
abstract class Model
{
    public function toJson()
    {
        $json = [];
        foreach ($this as $key => $value) {
            if ('url' === $key or 'primaryKey' === $key) {
                continue;
            }

            if (null === $value) {
                continue;
            }

            // If an array of entity is passed to the json, it squizzed it,
            // rebuild an proper array without being entity and pass it to the $json array
            if ('SalesOrderLines' == $key) {
                $value = $this->encodeLines($value);
            }

            if ('SalesInvoiceLines' == $key) {
                $value = $this->encodeLines($value);
            }

            if ('SalesOrderIDs' == $key) {
                $value = $this->encodeLines($value);
            }

            if ('GoodsDeliveryLines' == $key) {
                $value = $this->encodeLines($value);
            }

            $json[$key] = $value;
        }

        return json_encode($json);
    }

    private function encodeLines($value)
    {
        $salesOrderLines = [];
        foreach ($value as $line) {
            $salesOrderLine = [];
            foreach ($line as $entryKey => $entry) {
                if ('url' === $entryKey or 'primaryKey' === $entryKey) {
                    continue;
                }
                if (null === $entry) {
                    continue;
                }
                $salesOrderLine[$entryKey] = $entry;
            }
            array_push($salesOrderLines, $salesOrderLine);
        }

        return $salesOrderLines;
    }
}
