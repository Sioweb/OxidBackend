<?php

namespace Sioweb\Oxid\Backend\Controller\Admin;

use Sioweb\Lib\Formgenerator\Core\FormRender;
use Sioweb\Lib\Formgenerator\Core\Form as FormGenerator;

class ShopMain
{
    public function render()
    {
        parent::render();
        
        $FormGenerator = new FormGenerator(
            new FormRender,
            new \Sioweb\Oxid\Backend\Form\Admin\ShopMain
        );
        
        die('dasdasd');


        if (isset($shopId) && $shopId != self::NEW_SHOP_ID) {
            // load object
            $shop = oxNew(\OxidEsales\Eshop\Application\Model\Shop::class);
        }
        return 'formbuilder_shop_main.tpl';
    }
}