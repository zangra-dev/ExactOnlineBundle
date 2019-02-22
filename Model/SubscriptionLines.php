<?php

namespace aibianchi\ExactOnlineBundle\Model; 

use aibianchi\ExactOnlineBundle\Model\Base\Model;
/**
 * Added deprecated SubscriptionLines class for extends Model backward compatibility
 */
class_alias(__NAMESPACE__ . '\SubscriptionLine', __NAMESPACE__ . '\SubscriptionLines');