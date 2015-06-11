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
class Webmoves_DefaultCatView_Model_Category_Attribute_Source_View extends Mage_Eav_Model_Entity_Attribute_Source_Abstract {

    public function getAllOptions() {
        if (!$this->_options) {
            $this->_options = array(
               
                array(
                    'value' => '',
                    'label' => 'Default',
                ),
                array(
                    'value' => 'list',
                    'label' => 'List',
                ),
                array(
                    'value' => 'grid',
                    'label' => 'Grid',
                )
            );
        }
        return $this->_options;
    }
}
