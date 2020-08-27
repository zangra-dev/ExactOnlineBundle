<?php

namespace ExactOnlineBundle\Model;

use ExactOnlineBundle\Model\Base\Model;

// Added deprecated SubscriptionTypes class for extends Model backward compatibility
class_alias(__NAMESPACE__.'\SubscriptionType', __NAMESPACE__.'\SubscriptionTypes');
