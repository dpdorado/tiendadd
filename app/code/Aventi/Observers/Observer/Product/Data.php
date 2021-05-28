<?php
/**
 * Aventi_Observers
 *
 * NOTICE OF LICENSE
 *
 * This source file is subject to the Open Software License (OSL 3.0)
 * that is available through the world-wide-web at this URL:
 * http://opensource.org/licenses/osl-3.0.php
 *
 * @category   Observers
 * @package    Aventi_Observers
 * @copyright  Copyright (c) 2015-2018 Damián Culotta. (http://www.damianculotta.com.ar/)
 * @license    http://opensource.org/licenses/osl-3.0.php  Open Software License (OSL 3.0)
 */

namespace Aventi\Observers\Observer\Product;

use Magento\Framework\Event\ObserverInterface;

class Data implements ObserverInterface
{

    /**
     * @param \Magento\Framework\Event\Observer $observer
     */
    public function execute(\Magento\Framework\Event\Observer $observer)
    {
        $product = $observer->getProduct();

        $originalName = $product->getName();

        $modifiedName = $originalName . ' - MODIFICADO POR EL OBSERVER';

        $product->setName($modifiedName);
    }

}