<?php
/**
 * Solvingmagento_BundleExtended adminhtml block class override
 *
 * PHP version 5.3
 *
 * @category  Solvingmagento
 * @package   Solvingmagento_BundleExtended
 * @author    Oleg Ishenko <oleg.ishenko@solvingmagento.com>
 * @license   http://opensource.org/licenses/osl-3.0.php  Open Software License (OSL 3.0)
 * @version   GIT: <0.1.0>
 * @link      http://www.solvingmagento.com/
 *
 */

/** Solvingmagento_BundleExtended_Block_Adminhtml_Catalog_Product_Edit_Tab_Bundle_Option
 *
 * @category Solvingmagento
 * @package  Solvingmagento_BundleExtended
 *
 * @author   Oleg Ishenko <oleg.ishenko@solvingmagento.com>
 * @license  http://opensource.org/licenses/osl-3.0.php  Open Software License (OSL 3.0)
 * @version  Release: <package_version>
 * @link     http://www.solvingmagento.com/
 */

class Solvingmagento_BundleExtended_Block_Adminhtml_Catalog_Product_Edit_Tab_Bundle_Option 
    extends Mage_Bundle_Block_Adminhtml_Catalog_Product_Edit_Tab_Bundle_Option
{
    /** 
     * Class construct, sets a custom template
     * 
     * @return void
     */
    public function __construct()
    {
        $this->setTemplate('bundleextended/product/edit/bundle/option.phtml');
        $this->setCanReadPrice(true);
        $this->setCanEditPrice(true);
    }
}