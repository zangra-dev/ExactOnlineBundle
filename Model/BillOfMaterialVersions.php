<?php

namespace aibianchi\ExactOnlineBundle\Model; 

use aibianchi\ExactOnlineBundle\Model\Base\Model;
/**
 * Added deprecated BillOfMaterialVersions class for extends Model backward compatibility
 */
class_alias(__NAMESPACE__ . '\BillOfMaterialVersion', __NAMESPACE__ . '\BillOfMaterialVersions');