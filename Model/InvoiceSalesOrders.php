<?php

namespace aibianchi\ExactOnlineBundle\Model; 

use aibianchi\ExactOnlineBundle\Model\Base\Model;
/**
 * Added deprecated InvoiceSalesOrder class for extends Model backward compatibility
 */
class_alias(__NAMESPACE__ . '\InvoiceSalesOrder', __NAMESPACE__ . '\InvoiceSalesOrders');