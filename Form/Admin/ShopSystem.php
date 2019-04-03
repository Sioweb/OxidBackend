<?php

namespace Sioweb\Oxid\Backend\Form\Admin;

class ShopSystem implements \Sioweb\Lib\Formgenerator\Core\FormInterface
{
    public function loadData()
    {
        return [
            'form' => [
                'formname' => 'myform',
                'table' => 'oxshops',
                'fieldname' => 'editval[[{ $TABLE }]__[{ $FIELDNAME }]]',
                'palettes' => $this->loadPalettes(),
                'fields' => $this->loadFieldConfig(),
            ],
        ];
    }

    public function loadPalettes()
    {
        return [
            'default' => [
                'SHOP_OPTIONS_GROUP_ORDER' => [
                    'legend' => 'SHOP_OPTIONS_GROUP_ORDER',
                    'attributes' => [
                        'data-toggle="false"'
                    ],
                    'fields' => ['blOtherCountryOrder', 'blDisableNavBars', 'blStoreIPs', 'blOrderDisWithoutReg']
                ],
                'SHOP_OPTIONS_GROUP_VARIANTS' => [
                    'legend' => 'SHOP_OPTIONS_GROUP_VARIANTS',
                    'attributes' => [
                        'data-toggle="false"'
                    ],
                    'fields' => ['blVariantsSelection', 'blVariantParentBuyable', 'blVariantInheritAmountPrice', 'blShowVariantReviews', 'blUseMultidimensionVariants']
                ],
                'SHOP_OPTIONS_GROUP_PICTURES' => [
                    'legend' => 'SHOP_OPTIONS_GROUP_PICTURES',
                    'attributes' => [
                        'data-toggle="false"'
                    ],
                    'fields' => ['sDefaultImageQuality', 'blInlineImgEmail']
                ],
                'SHOP_OPTIONS_GROUP_ADMINISTRATION' => [
                    'legend' => 'SHOP_OPTIONS_GROUP_ADMINISTRATION',
                    'attributes' => [
                        'data-toggle="false"'
                    ],
                    'fields' => ['aInterfaceProfiles']
                ],
                'SHOP_OPTIONS_GROUP_OTHER_SETTINGS' => [
                    'legend' => 'SHOP_OPTIONS_GROUP_OTHER_SETTINGS',
                    'attributes' => [
                        'data-toggle="false"'
                    ],
                    'fields' => ['iServerTimeShift', 'blShowRememberMe', 'iAttributesPercent', 'blGBModerate', 'aLogSkipTags', 'iSmartyPhpHandling', 'sUtilModule']
                ],
                'submit' => [
                    'fields' => ['submit']
                ],
            ],
        ];
    }

    public function loadFieldConfig()
    {
        return [
            'blOtherCountryOrder' => [
                'type' => 'checkbox',
                'name' => 'confbools[[{ $FIELDNAME }]]',
                'help' => 'HELP_SHOP_SYSTEM_OTHERCOUNTRYORDER',
                'label' => 'SHOP_SYSTEM_OTHERCOUNTRYORDER',
            ],
            'blDisableNavBars' => [
                'type' => 'checkbox',
                'name' => 'confbools[[{ $FIELDNAME }]]',
                'help' => 'HELP_SHOP_SYSTEM_DISABLENAVBARS',
                'label' => 'SHOP_SYSTEM_DISABLENAVBARS',
            ],
            'blStoreIPs' => [
                'type' => 'checkbox',
                'name' => 'confbools[[{ $FIELDNAME }]]',
                'help' => 'HELP_SHOP_SYSTEM_STOREIPS',
                'label' => 'SHOP_SYSTEM_STOREIPS',
            ],
            'blOrderDisWithoutReg' => [
                'type' => 'checkbox',
                'name' => 'confbools[[{ $FIELDNAME }]]',
                'help' => 'HELP_SHOP_SYSTEM_ORDERDISNOREG',
                'label' => 'SHOP_SYSTEM_ORDERDISNOREG',
            ],
            'blVariantsSelection' => [
                'type' => 'checkbox',
                'name' => 'confbools[[{ $FIELDNAME }]]',
                'help' => 'HELP_SHOP_SYSTEM_VARIANTSSELECTION',
                'label' => 'SHOP_SYSTEM_VARIANTSSELECTION',
            ],
            'blVariantParentBuyable' => [
                'type' => 'checkbox',
                'name' => 'confbools[[{ $FIELDNAME }]]',
                'help' => 'HELP_SHOP_SYSTEM_VARIANTPARENTBUYABLE',
                'label' => 'SHOP_SYSTEM_VARIANTPARENTBUYABLE',
            ],
            'blVariantInheritAmountPrice' => [
                'type' => 'checkbox',
                'name' => 'confbools[[{ $FIELDNAME }]]',
                'help' => 'HELP_SHOP_SYSTEM_VARIANTINHERITAMOUNTPRICE',
                'label' => 'SHOP_SYSTEM_VARIANTINHERITAMOUNTPRICE',
            ],
            'blShowVariantReviews' => [
                'type' => 'checkbox',
                'name' => 'confbools[[{ $FIELDNAME }]]',
                'help' => 'HELP_SHOP_SYSTEM_SHOWVARIANTREVIEWS',
                'label' => 'SHOP_SYSTEM_SHOWVARIANTREVIEWS',
            ],
            'blUseMultidimensionVariants' => [
                'type' => 'checkbox',
                'name' => 'confbools[[{ $FIELDNAME }]]',
                'help' => 'HELP_SHOP_SYSTEM_USEMULTIDIMENSIONVARIANTS',
                'label' => 'SHOP_SYSTEM_USEMULTIDIMENSIONVARIANTS',
            ],
            'sDefaultImageQuality' => [
                'type' => 'text',
                'name' => 'confstrs[[{ $FIELDNAME }]]',
                'help' => 'HELP_SHOP_SYSTEM_DEFAULTIMAGEQUALITY',
                'label' => 'SHOP_SYSTEM_DEFAULTIMAGEQUALITY',
            ],
            'blInlineImgEmail' => [
                'type' => 'checkbox',
                'name' => 'confbools[[{ $FIELDNAME }]]',
                'help' => 'HELP_SHOP_SYSTEM_INLINEIMGEMAIL',
                'label' => 'SHOP_SYSTEM_INLINEIMGEMAIL',
            ],
            'aInterfaceProfiles' => [
                'type' => 'textarea',
                'name' => 'confaarrs[[{ $FIELDNAME }]]',
                'help' => 'HELP_SHOP_SYSTEM_INTERFACEPROFILES',
                'label' => 'SHOP_SYSTEM_INTERFACEPROFILES',
            ],
            'iServerTimeShift' => [
                'type' => 'text',
                'name' => 'confstrs[[{ $FIELDNAME }]]',
                'help' => 'HELP_SHOP_SYSTEM_ISERVERTIMESHIFT',
                'label' => 'SHOP_SYSTEM_ISERVERTIMESHIFT',
            ],
            'blShowRememberMe' => [
                'type' => 'checkbox',
                'name' => 'confbools[[{ $FIELDNAME }]]',
                'help' => 'HELP_SHOP_SYSTEM_SHOWREMEMBERME',
                'label' => 'SHOP_SYSTEM_SHOWREMEMBERME',
            ],
            'iAttributesPercent' => [
                'type' => 'text',
                'name' => 'confstrs[[{ $FIELDNAME }]]',
                'help' => 'HELP_SHOP_SYSTEM_ATTRIBUTESPERCENT',
                'label' => 'SHOP_SYSTEM_ATTRIBUTESPERCENT',
            ],
            'blGBModerate' => [
                'type' => 'checkbox',
                'name' => 'confbools[[{ $FIELDNAME }]]',
                'help' => 'HELP_SHOP_SYSTEM_GBMODERATE',
                'label' => 'SHOP_SYSTEM_GBMODERATE',
            ],
            // [{include file="include/ldap_options.tpl"}]
            'aLogSkipTags' => [
                'type' => 'textarea',
                'name' => 'confarrs[[{ $FIELDNAME }]]',
                'help' => 'HELP_SHOP_SYSTEM_LOGSKIPTAGS',
                'label' => 'SHOP_SYSTEM_LOGSKIPTAGS',
            ],
            'iSmartyPhpHandling' => [
                'type' => 'select',
                'name' => 'confstrs[[{ $FIELDNAME }]]',
                'help' => 'HELP_SHOP_SYSTEM_SMARTYPHPHANDLING',
                'label' => 'SHOP_SYSTEM_SMARTYPHPHANDLING',
                'options' => [
                    ['key' => 0, 'value' => 'SHOP_SYSTEM_SMARTYPHPHANDLING_REMOVE'],
                    ['key' => 1, 'value' => 'SHOP_SYSTEM_SMARTYPHPHANDLING_PASSTHRU'],
                    ['key' => 2, 'value' => 'SHOP_SYSTEM_SMARTYPHPHANDLING_QUOTE'],
                    ['key' => 3, 'value' => 'SHOP_SYSTEM_SMARTYPHPHANDLING_ALLOW'],
                ]
            ],
            'sUtilModule' => [
                'type' => 'text',
                'name' => 'confstrs[[{ $FIELDNAME }]]',
                'help' => 'HELP_SHOP_SYSTEM_UTILMODULE',
                'label' => 'SHOP_SYSTEM_UTILMODULE',
            ],
            'submit' => [
                'name' => 'save',
                'type' => 'submit',
                'value' => 'Senden',
                'attributes' => [
                    'onclick="Javascript:document.myedit.fnc.value=\'save\'"',
                ],
            ],
        ];
    }
}

