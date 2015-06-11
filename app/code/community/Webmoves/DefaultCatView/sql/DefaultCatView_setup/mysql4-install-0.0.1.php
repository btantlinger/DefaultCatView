<?php
/**
 * Webmoves
 *
 * NOTICE OF LICENSE
 *
 * This source file is subject to the Open Software License (OSL 3.0)
 * that is bundled with this package in the file LICENSE.txt.
 * It is also available through the world-wide-web at this URL:
 * http://opensource.org/licenses/osl-3.0.php
 * If you did not receive a copy of the license and are unable to
 * obtain it through the world-wide-web, please send an email
 * to license@magentocommerce.com so we can send you a copy immediately.
 *
 * @category    Webmoves
 * @package     Webmoves_DefaultCatView
 * @license     http://opensource.org/licenses/osl-3.0.php Open Software License (OSL 3.0)
 * @author      Bob Tantlinger <bob.tantlinger@gmail.com>
 */
$installer = $this;
$installer->startSetup();
$attribute  = array(
    'type'          =>  'varchar',
    'label'         =>  'Show Products as',
    'input'         =>  'select',
    'source'        =>  'defaultcatview/category_attribute_source_view',
    'global'        =>  Mage_Catalog_Model_Resource_Eav_Attribute::SCOPE_STORE,
    'visible'       =>  true,
    'required'      =>  false,
    'user_defined'  =>  true,
    'default'       =>  0,
    'group'         =>  "Display Settings"
);
$installer->addAttribute('catalog_category', 'default_cat_list_view', $attribute);
$installer->endSetup();
?>