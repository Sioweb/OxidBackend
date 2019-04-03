<?php

namespace Sioweb\Oxid\Backend\Controller\Admin;

use Ci\Oxid\FormBuilder\Core\FormRender;
use Sioweb\Lib\Formgenerator\Core\Form as FormGenerator;

class ShopMain extends ShopMain_parent
{
    /**
     * Current class template name.
     *
     * @var string
     */
    protected $_sThisTemplate = 'formbuilder_shop_main.tpl';

    public function render()
    {
        parent::render();

        $shopId = $this->_aViewData["oxid"] = $this->getEditObjectId();
        
        $Form = new FormGenerator(
            new FormRender,
            oxNew(\Sioweb\Oxid\Backend\Form\Admin\ShopMain::class)
        );

        if (isset($shopId) && $shopId != self::NEW_SHOP_ID) {
            // load object
            $ShopModel = $this->_aViewData["edit"];

            
            $FormData = ['editval' => []];
            foreach ($ShopModel->getFieldNames() as $name) {
                if (!empty($ShopModel->{'oxshops__' . $name}->value)) {
                    $FormData['editval']['oxshops__' . $name] = $ShopModel->{'oxshops__' . $name}->value;
                }
            }
            $FormData['subjlang'] = \OxidEsales\Eshop\Core\Registry::getConfig()->getRequestParameter("subjlang");
            $Form->setFieldValues($FormData);
        }
        
        $Form->ignorePostData([
            'subjlang'
        ]);
        $Form->setFormData();

        $this->_aViewData["form"] = implode("\n", $Form->generate());
        return $this->_sThisTemplate;
    }
}