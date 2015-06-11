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

class Webmoves_DefaultCatView_Block_Catalog_Product_List_Toolbar extends Mage_Catalog_Block_Product_List_Toolbar {
    protected function _construct() {
        parent::_construct();
        $category = Mage::registry('current_category');
        if ($category) {
            $params = $this->getRequest()->getParams();
            $mode = Mage::getResourceModel('catalog/category')->getAttributeRawValue(
                    $category->getId(), "default_cat_list_view", Mage::app()->getStore()->getId());

            if ((!empty($mode)) && empty($params['mode']) && ($mode == 'list' || $mode == 'grid')) {
                $this->setData('_current_grid_mode', $mode);
            }
        }
    }
}
