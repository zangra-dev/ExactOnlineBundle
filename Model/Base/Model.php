<?php

namespace ExactOnlineBundle\Model\Base;

/**
 * Author: Jefferson Bianchi / Maxime Lambot
 * Email : jefferson@zangra.com / maxime@zangra.com.
 */
abstract class Model
{
    public function toJson()
    {
        $json = [];
        foreach ($this as $key => $value) {
            if (('url' == $key) || ('primaryKey' == $key)) {
            } else {
                $json[$key] = $value;
            }
        }

        return json_encode($json);
    }
}
