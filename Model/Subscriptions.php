<?php

namespace aibianchi\ExactOnlineBundle\Model; 

use aibianchi\ExactOnlineBundle\Model\Base\Model;
/**
 * Added deprecated Subscriptions class for extends Model backward compatibility
 */
class_alias(__NAMESPACE__ . '\Subscription', __NAMESPACE__ . '\Subscriptions');