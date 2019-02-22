<?php

namespace aibianchi\ExactOnlineBundle\Model; 

use aibianchi\ExactOnlineBundle\Model\Base\Model;
/**
 * Added deprecated SubscriptionTypes class for extends Model backward compatibility
 */
class_alias(__NAMESPACE__ . '\SubscriptionType', __NAMESPACE__ . '\SubscriptionTypes');