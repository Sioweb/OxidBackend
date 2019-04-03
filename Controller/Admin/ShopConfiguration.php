<?php

namespace Sioweb\Oxid\Backend\Controller\Admin;

use Ci\Oxid\FormBuilder\Core\FormRender;
use Sioweb\Lib\Formgenerator\Core\Form as FormGenerator;

class ShopConfiguration extends ShopConfiguration_parent
{
    /**
     * Current class template name.
     *
     * @var string
     */
    protected $_sThisTemplate = 'formbuilder_shop_main.tpl';

    public function getHomeCountries()
    {
        $soxId = $this->_aViewData["oxid"] = $this->getEditObjectId();
        $aDbVariables = $this->loadConfVars($soxId, $this->_getModuleForConfigVars());
        $aConfVars = $aDbVariables['vars'];

        // #251A passing country list
        $oCountryList = oxNew(\OxidEsales\Eshop\Application\Model\CountryList::class);
        $oCountryList->loadActiveCountries(\OxidEsales\Eshop\Core\Registry::getLang()->getObjectTplLanguage());
        $arrCountries = [];
        
        if (isset($aConfVars['arr']["aHomeCountry"]) && count($aConfVars['arr']["aHomeCountry"]) && count($oCountryList)) {
            foreach ($oCountryList as $sCountryId => $oCountry) {
                $arrCountries[$sCountryId] = [
                    'key' => $sCountryId,
                    'value' => $oCountry->oxcountry__oxtitle->value
                ];
                if (in_array($oCountry->oxcountry__oxid->value, $aConfVars['arr']["aHomeCountry"])) {
                    $arrCountries[$sCountryId]['active'] = 1;
                }
            }
        }

        return $arrCountries;
        // return $this->_aViewData["countrylist"];
    }

    /**
     * Executes parent method parent::render(), passes shop configuration parameters
     * to Smarty and returns name of template file "shop_config.tpl".
     *
     * @return string
     */
    public function render()
    {
        $config = $this->getConfig();

        $parentTemplate = parent::render();
        if(strpos($parentTemplate, 'popup') !== false) {
            return $parentTemplate;
        }
        
        $Form = new FormGenerator(
            new FormRender,
            oxNew($this->getAdminForm())
        );


        $soxId = $this->_aViewData["oxid"] = $this->getEditObjectId();

        $Form->stringVariables([
            'oxid' => $soxId,
        ]);
        
        if (isset($soxId) && $soxId != "-1") {
            $aDbVariables = $this->loadConfVars($soxId, $this->_getModuleForConfigVars());
            $aConfVars = $aDbVariables['vars'];
            $aConfVars['str']['sVersion'] = $config->getConfigParam('sVersion');
            $FormFields = $Form->getFields();
            foreach($aConfVars as $type => $params) {
                foreach($params as $param => $paramValue) {
                    if (!empty($paramValue) && $FormFields[$param] !== null) {
                        $FormFields[$param]->setValue($paramValue);
                    }
                }
            }
        }
        
        // $Form->ignorePostData([
        //     'subjlang'
        // ]);
        $Form->setFormData();

        $this->_aViewData["form"] = implode("\n", $Form->generate());
        return $this->_sThisTemplate;
    }

    protected function getAdminForm()
    {
        return \Sioweb\Oxid\Backend\Form\Admin\ShopConfiguration::class;
    }
}
