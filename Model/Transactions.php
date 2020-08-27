<?php

namespace ExactOnlineBundle\Model;

use ExactOnlineBundle\Model\Base\Model;
/**
 * Added deprecated Transactions class for extends Model backward compatibility
 */
class_alias(__NAMESPACE__ . '\Transaction', __NAMESPACE__ . '\Transactions');