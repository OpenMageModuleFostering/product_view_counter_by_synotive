<?php
/**
 * SPL
 *
 * NOTICE OF LICENSE
 *
 * This source file is subject to the Open Software License (OSL 3.0)
 * that is bundled with this package in the file LICENSE.txt.
 * It is also available through the world-wide-web at this URL:
 * http://opensource.org/licenses/osl-3.0.php
 *
 * @category    SPL
 * @package     SPL_ProductViewcounter
 * @copyright   Copyright (c) 2015 SPL. 
 * @license     http://opensource.org/licenses/osl-3.0.php  Open Software License (OSL 3.0)
 */
class SPL_ProductViewcounter_Block_ProductViewcounter extends Mage_Catalog_Block_Product_View
{


    protected function _prepareLayout()
	{


        if(Mage::getStoreConfig('productviewcounter/module_config/enabled')==1)
        {
                $simpleBlock  = $this->getLayout()->getBlock('product.info.addto');
	
		if ($simpleBlock) {
			$simpleBlock->setTemplate('productviewcounter/productviewcounter.phtml');
		}
		
        }


	
	
        }
}