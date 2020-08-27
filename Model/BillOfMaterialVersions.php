<?php

namespace ExactOnlineBundle\Model;

use ExactOnlineBundle\Model\Base\Model;
/**
 * Added deprecated BillOfMaterialVersions class for extends Model backward compatibility
 */
class_alias(__NAMESPACE__ . '\BillOfMaterialVersion', __NAMESPACE__ . '\BillOfMaterialVersions');