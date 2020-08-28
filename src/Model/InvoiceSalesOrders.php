<?php

namespace ExactOnlineBundle\Model;

use ExactOnlineBundle\Model\Base\Model;

// Added deprecated InvoiceSalesOrder class for extends Model backward compatibility
class_alias(__NAMESPACE__.'\InvoiceSalesOrder', __NAMESPACE__.'\InvoiceSalesOrders');
