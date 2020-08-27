<?php

namespace ExactOnlineBundle\Model;

use ExactOnlineBundle\Model\Base\Model;
/**
 * Added deprecated BillOfMaterialMaterials class for extends Model backward compatibility
 */
class_alias(__NAMESPACE__ . '\BillOfMaterialMaterial', __NAMESPACE__ . '\BillOfMaterialMaterials');