<?php

namespace Sioweb\Oxid\Backend\Form\Admin;

class ShopConfiguration implements \Sioweb\Lib\Formgenerator\Core\FormInterface
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
                'SHOP_OPTIONS_GROUP_GLOBAL' => [
                    'legend' => 'SHOP_OPTIONS_GROUP_GLOBAL',
                    'attributes' => [
                        'data-toggle="false"'
                    ],
                    'fields' => ['aHomeCountry']
                ],
                'SHOP_OPTIONS_GROUP_SEARCH' => [
                    'legend' => 'SHOP_OPTIONS_GROUP_SEARCH',
                    'attributes' => [
                        'data-toggle="false"'
                    ],
                    'fields' => ['blAutoSearchOnCat', 'aSearchCols', 'blSearchUseAND']
                ],
                'SHOP_OPTIONS_GROUP_STOCK' => [
                    'legend' => 'SHOP_OPTIONS_GROUP_STOCK',
                    'attributes' => [
                        'data-toggle="false"'
                    ],
                    'fields' => ['blUseStock', 'blAllowNegativeStock', 'sStockWarningLimit', 'blStockOnDefaultMessage', 'blStockOffDefaultMessage']
                ],
                'SHOP_OPTIONS_GROUP_ARTICLES' => [
                    'legend' => 'SHOP_OPTIONS_GROUP_ARTICLES',
                    'attributes' => [
                        'data-toggle="false"'
                    ],
                    'fields' => ['iNrofSimilarArticles', 'iNrofCustomerWhoArticles', 'iNrofNewcomerArticles', 'iNrofCrossellArticles', 'blShowSorting', 'aSortCols', 'blOverrideZeroABCPrices', 'blWarnOnSameArtNums', 'blNewArtByInsert', 'blDisableDublArtOnCopy', 'blAllowSuggestArticle', 'bl_perfLoadReviews', 'includeProductReviewLinksInEmail']
                ],
                'SHOP_OPTIONS_GROUP_ORDER' => [
                    'legend' => 'SHOP_OPTIONS_GROUP_ORDER',
                    'attributes' => [
                        'data-toggle="false"'
                    ],
                    'fields' => ['sMidlleCustPrice', 'sLargeCustPrice', 'blAllowUnevenAmounts', 'iMinOrderPrice', 'blShowOrderButtonOnTop', 'blConfirmAGB', 'blEnableIntangibleProdAgreement', 'blStoreCreditCardInfo', 'blShowTSInternationalFeesMessage', 'blShowTSCODMessage']
                ],
                'SHOP_OPTIONS_GROUP_VAT' => [
                    'legend' => 'SHOP_OPTIONS_GROUP_VAT',
                    'attributes' => [
                        'data-toggle="false"'
                    ],
                    'fields' => ['dDefaultVAT', 'blEnterNetPrice', 'blShowNetPrice', 'sAdditionalServVATCalcMethod', 'blShowVATForDelivery', 'blDeliveryVatOnTop', 'blShowVATForPayCharge', 'blPaymentVatOnTop', 'blShowVATForWrapping', 'blWrappingVatOnTop', 'blShippingCountryVat', 'blVatIdCheckDisabled', 'sVatIdCheckInterfaceWsdl']
                ],
                'SHOP_OPTIONS_GROUP_PICTURES' => [
                    'legend' => 'SHOP_OPTIONS_GROUP_PICTURES',
                    'attributes' => [
                        'data-toggle="false"'
                    ],
                    'fields' => ['iUseGDVersion', 'blAutoIcons']
                ],
                'SHOP_OPTIONS_GROUP_SHOP_FRONTEND' => [
                    'legend' => 'SHOP_OPTIONS_GROUP_SHOP_FRONTEND',
                    'attributes' => [
                        'data-toggle="false"'
                    ],
                    'fields' => ['shop_config', 'sCntOfNewsLoaded']
                ],
                'SHOP_OPTIONS_GROUP_PRIVATESALES' => [
                    'legend' => 'SHOP_OPTIONS_GROUP_PRIVATESALES',
                    'attributes' => [
                        'data-toggle="false"'
                    ],
                    'fields' => ['blPsLoginEnabled', 'blBasketExcludeEnabled', 'blPsBasketReservationEnabled', 'iPsBasketReservationTimeout']
                ],
                'SHOP_OPTIONS_GROUP_INVITATIONS' => [
                    'legend' => 'SHOP_OPTIONS_GROUP_INVITATIONS',
                    'attributes' => [
                        'data-toggle="false"'
                    ],
                    'fields' => ['blInvitationsEnabled', 'dPointsForInvitation', 'dPointsForRegistration']
                ],
                'SHOP_OPTIONS_GROUP_SHOP_DOWNLOADABLEARTICLES' => [
                    'legend' => 'SHOP_OPTIONS_GROUP_SHOP_DOWNLOADABLEARTICLES',
                    'attributes' => [
                        'data-toggle="false"'
                    ],
                    'fields' => ['blEnableDownloads', 'sDownloadsDir', 'iMaxDownloadsCount', 'iLinkExpirationTime', 'iDownloadExpirationTime', 'iMaxDownloadsCountUnregistered']
                ],
                'SHOP_OPTIONS_GROUP_ADMINISTRATION' => [
                    'legend' => 'SHOP_OPTIONS_GROUP_ADMINISTRATION',
                    'attributes' => [
                        'data-toggle="false"'
                    ],
                    'fields' => ['aCMSfolder', 'blOrderOptInEmail', 'aOrderfolder', 'sLocalDateFormat', 'sLocalTimeFormat', 'blSendTechnicalInformationToOxid', 'blCheckForUpdates']
                ],
                'SHOP_OPTIONS_GROUP_OTHER_SETTINGS' => [
                    'legend' => 'SHOP_OPTIONS_GROUP_OTHER_SETTINGS',
                    'attributes' => [
                        'data-toggle="false"'
                    ],
                    'fields' => ['aMustFillFields', 'contactFormRequiredFields', 'aCurrencies', 'blExclNonMaterialFromDelivery', 'blBidirectCross', 'iRatingLogsTimeout', 'iRssItemsCount', 'bl_rssTopShop', 'bl_rssBargain', 'bl_rssNewest', 'bl_rssCategories', 'bl_rssSearch', 'bl_rssRecommLists', 'bl_rssRecommListArts', 'blCalculateDelCostIfNotLoggedIn', 'sGiCsvFieldEncloser', 'sCSVSign', 'iExportNrofLines', 'iCntofMails', 'blShowCookiesNotification', 'sParcelService']
                ],
                'SHOP_OPTIONS_BANK_INFORMATION' => [
                    'legend' => 'SHOP_OPTIONS_BANK_INFORMATION',
                    'attributes' => [
                        'data-toggle="false"'
                    ],
                    'fields' => ['blSkipDebitOldBankInfo']
                ],
                'SHOP_OPTIONS_GROUP_ACCOUNT_SETTINGS' => [
                    'legend' => 'SHOP_OPTIONS_GROUP_ACCOUNT_SETTINGS',
                    'attributes' => [
                        'data-toggle="false"'
                    ],
                    'fields' => ['blAllowUsersToDeleteTheirAccount', 'blAllowUsersToManageTheirReviews']
                ],
            ],
        ];
    }

    public function loadFieldConfig()
    {
        return [
            'aHomeCountry' => [
                'help' => 'HELP_SHOP_CONFIG_INLANDCUSTOMERS',
                'label' => 'SHOP_CONFIG_INLANDCUSTOMERS',
                'type' => 'select',
                'multiple' => true,
                'name' => 'confarrs[[{ $FIELDNAME }]]',
                'options_callback' => ['Sioweb\Oxid\Backend\Controller\Admin\ShopConfiguration', 'getHomeCountries']
            ],
            'blAutoSearchOnCat' => [
                'help' => 'HELP_SHOP_CONFIG_AUTOSEARCHONCAT',
                'label' => 'SHOP_CONFIG_AUTOSEARCHONCAT',
                'type' => 'checkbox',
                'name' => 'confbools[[{ $FIELDNAME }]]',
            ],
            'aSearchCols' => [
                'help' => 'HELP_SHOP_CONFIG_SEARCHFIELDS',
                'label' => 'SHOP_CONFIG_SEARCHFIELDS',
                'type' => 'textarea',
                'multiple' => true,
                'name' => 'confarrs[[{ $FIELDNAME }]]',
            ],
            'blSearchUseAND' => [
                'help' => 'HELP_',
                'label' => 'SHOP_CONFIG_SEARCHUSEAND',
                'type' => 'checkbox',
                'name' => 'confbools[[{ $FIELDNAME }]]',
            ],
            'blUseStock' => [
                'help' => 'HELP_SHOP_CONFIG_USESTOCK',
                'label' => 'SHOP_CONFIG_USESTOCK',
                'type' => 'checkbox',
                'name' => 'confbools[[{ $FIELDNAME }]]',
            ],
            'blAllowNegativeStock' => [
                'help' => 'HELP_SHOP_CONFIG_USENEGATIVESTOCK',
                'label' => 'SHOP_CONFIG_USENEGATIVESTOCK',
                'type' => 'checkbox',
                'name' => 'confbools[[{ $FIELDNAME }]]',
            ],
            'sStockWarningLimit' => [
                'help' => 'HELP_SHOP_CONFIG_STOCKWARNINGLIMIT',
                'label' => 'SHOP_CONFIG_STOCKWARNINGLIMIT',
                'type' => 'text',
                'name' => 'confstrs[[{ $FIELDNAME }]]',
            ],
            'blStockOnDefaultMessage' => [
                'help' => 'HELP_SHOP_CONFIG_STOCKONDEFAULTMESSAGE',
                'label' => 'SHOP_CONFIG_STOCKONDEFAULTMESSAGE',
                'type' => 'checkbox',
                'name' => 'confbools[[{ $FIELDNAME }]]',
            ],
            'blStockOffDefaultMessage' => [
                'help' => 'HELP_SHOP_CONFIG_STOCKOFFDEFAULTMESSAGE',
                'label' => 'SHOP_CONFIG_STOCKOFFDEFAULTMESSAGE',
                'type' => 'checkbox',
                'name' => 'confbools[[{ $FIELDNAME }]]',
            ],
            'iNrofSimilarArticles' => [
                'help' => 'HELP_SHOP_CONFIG_NUMBEROFSIMILARARTICLES',
                'label' => 'SHOP_CONFIG_NUMBEROFSIMILARARTICLES',
                'type' => 'text',
                'name' => 'confstrs[[{ $FIELDNAME }]]',
            ],
            'iNrofCustomerWhoArticles' => [
                'help' => 'HELP_SHOP_CONFIG_NROFCUSTOMERWHOARTICLES',
                'label' => 'SHOP_CONFIG_NROFCUSTOMERWHOARTICLES',
                'type' => 'text',
                'name' => 'confstrs[[{ $FIELDNAME }]]',
            ],
            'iNrofNewcomerArticles' => [
                'help' => 'HELP_SHOP_CONFIG_NROFNEWCOMERARTICLES',
                'label' => 'SHOP_CONFIG_NROFNEWCOMERARTICLES',
                'type' => 'text',
                'name' => 'confstrs[[{ $FIELDNAME }]]',
            ],
            'iNrofCrossellArticles' => [
                'help' => 'HELP_SHOP_CONFIG_NUMBEROFCROSSSELLARTICLES',
                'label' => 'SHOP_CONFIG_NUMBEROFCROSSSELLARTICLES',
                'type' => 'text',
                'name' => 'confstrs[[{ $FIELDNAME }]]',
            ],
            'blShowSorting' => [
                'help' => 'HELP_SHOP_CONFIG_SORTITEMSLIST',
                'label' => 'SHOP_CONFIG_SORTITEMSLIST',
                'type' => 'checkbox',
                'name' => 'confbools[[{ $FIELDNAME }]]',
            ],
            'aSortCols' => [
                'help' => 'HELP_SHOP_CONFIG_SORTFIELDS',
                'label' => 'SHOP_CONFIG_SORTFIELDS',
                'type' => 'textarea',
                'multiple' => true,
                'name' => 'confarrs[[{ $FIELDNAME }]]',
            ],
            'blOverrideZeroABCPrices' => [
                'help' => 'HELP_SHOP_CONFIG_OVERRIDEZEROABCPRICES',
                'label' => 'SHOP_CONFIG_OVERRIDEZEROABCPRICES',
                'type' => 'checkbox',
                'name' => 'confbools[[{ $FIELDNAME }]]',
            ],
            'blWarnOnSameArtNums' => [
                'help' => 'HELP_SHOP_CONFIG_WARNONSAMEARTNUMS',
                'label' => 'SHOP_CONFIG_WARNONSAMEARTNUMS',
                'type' => 'checkbox',
                'name' => 'confbools[[{ $FIELDNAME }]]',
            ],
            'blNewArtByInsert' => [
                'help' => 'HELP_SHOP_CONFIG_NEWARTBYINSERT',
                'label' => 'SHOP_CONFIG_NEWARTBYINSERT',
                'type' => 'checkbox',
                'name' => 'confbools[[{ $FIELDNAME }]]',
            ],
            'blDisableDublArtOnCopy' => [
                'help' => 'HELP_SHOP_CONFIG_DISABLEARTDUBLICATES',
                'label' => 'SHOP_CONFIG_DISABLEARTDUBLICATES',
                'type' => 'checkbox',
                'name' => 'confbools[[{ $FIELDNAME }]]',
            ],
            'blAllowSuggestArticle' => [
                'help' => 'HELP_SHOP_CONFIG_ALLOW_SUGGEST_ARTICLE',
                'label' => 'SHOP_CONFIG_ALLOW_SUGGEST_ARTICLE',
                'type' => 'checkbox',
                'name' => 'confbools[[{ $FIELDNAME }]]',
            ],
            'bl_perfLoadReviews' => [
                'help' => 'HELP_SHOP_CONFIG_LOADREVIEWS',
                'label' => 'SHOP_CONFIG_LOADREVIEWS',
                'type' => 'checkbox',
                'name' => 'confbools[[{ $FIELDNAME }]]',
            ],
            'includeProductReviewLinksInEmail' => [
                'help' => 'HELP_SHOP_CONFIG_INCLUDE_PRODUCT_REVIEW_LINKS_IN_ORDER_EMAIL',
                'label' => 'SHOP_CONFIG_INCLUDE_PRODUCT_REVIEW_LINKS_IN_ORDER_EMAIL',
                'type' => 'checkbox',
                'name' => 'confbools[[{ $FIELDNAME }]]',
            ],
            'sMidlleCustPrice' => [
                'help' => 'HELP_SHOP_CONFIG_MIDLLECUSTOMERPRICE',
                'label' => 'SHOP_CONFIG_MIDLLECUSTOMERPRICE',
                'type' => 'text',
                'name' => 'confstrs[[{ $FIELDNAME }]]',
            ],
            'sLargeCustPrice' => [
                'help' => 'HELP_SHOP_CONFIG_LARGECUSTOMERPRICE',
                'label' => 'SHOP_CONFIG_LARGECUSTOMERPRICE',
                'type' => 'text',
                'name' => 'confstrs[[{ $FIELDNAME }]]',
            ],
            'blAllowUnevenAmounts' => [
                'help' => 'HELP_SHOP_CONFIG_ALLOWUNEVENAMOUNTS',
                'label' => 'SHOP_CONFIG_ALLOWUNEVENAMOUNTS',
                'type' => 'checkbox',
                'name' => 'confbools[[{ $FIELDNAME }]]',
            ],
            'iMinOrderPrice' => [
                'help' => 'HELP_SHOP_CONFIG_MINORDERPRICE',
                'label' => 'SHOP_CONFIG_MINORDERPRICE',
                'type' => 'text',
                'name' => 'confstrs[[{ $FIELDNAME }]]',
            ],
            'blShowOrderButtonOnTop' => [
                'help' => 'HELP_SHOP_CONFIG_SHOWORDERBUTTONONTHETOP',
                'label' => 'SHOP_CONFIG_SHOWORDERBUTTONONTHETOP',
                'type' => 'checkbox',
                'name' => 'confbools[[{ $FIELDNAME }]]',
            ],
            'blConfirmAGB' => [
                'help' => 'HELP_SHOP_CONFIG_CONFIRMAGB',
                'label' => 'SHOP_CONFIG_CONFIRMAGB',
                'type' => 'checkbox',
                'name' => 'confbools[[{ $FIELDNAME }]]',
            ],
            'blEnableIntangibleProdAgreement' => [
                'help' => 'HELP_SHOP_CONFIG_ENABLE_INTANGIBLE_PRODUCTS_AGREEMENT',
                'label' => 'SHOP_CONFIG_ENABLE_INTANGIBLE_PRODUCTS_AGREEMENT',
                'type' => 'checkbox',
                'name' => 'confbools[[{ $FIELDNAME }]]',
            ],
            'blStoreCreditCardInfo' => [
                'help' => 'HELP_SHOP_CONFIG_STORECREDITCARDINFO',
                'label' => ['SHOP_CONFIG_STORECREDITCARDINFO', 'HELP_SHOP_CONFIG_ATTENTION'],
                'type' => 'checkbox',
                'name' => 'confbools[[{ $FIELDNAME }]]',
            ],
            'blShowTSInternationalFeesMessage' => [
                'help' => 'HELP_SHOP_CONFIG_SHOWTSINTERNATIONALFEESMESSAGE',
                'label' => 'SHOP_CONFIG_SHOWTSINTERNATIONALFEESMESSAGE',
                'type' => 'checkbox',
                'name' => 'confbools[[{ $FIELDNAME }]]',
            ],
            'blShowTSCODMessage' => [
                'help' => 'HELP_SHOP_CONFIG_SHOWTSCODMESSAGE',
                'label' => 'SHOP_CONFIG_SHOWTSCODMESSAGE',
                'type' => 'checkbox',
                'name' => 'confbools[[{ $FIELDNAME }]]',
            ],
            'dDefaultVAT' => [
                'help' => 'HELP_SHOP_CONFIG_DEFAULTVAT',
                'label' => 'SHOP_CONFIG_DEFAULTVAT',
                'name' => 'confnum[[{ $FIELDNAME }]]',
                'type' => 'checkbox',
            ],
            'blEnterNetPrice' => [
                'help' => 'HELP_SHOP_CONFIG_ENTERNETPRICE',
                'label' => 'SHOP_CONFIG_ENTERNETPRICE',
                'type' => 'checkbox',
                'name' => 'confbools[[{ $FIELDNAME }]]',
            ],
            'blShowNetPrice' => [
                'help' => 'HELP_SHOP_CONFIG_VIEWNETPRICE',
                'label' => 'SHOP_CONFIG_VIEWNETPRICE',
                'type' => 'checkbox',
                'name' => 'confbools[[{ $FIELDNAME }]]',
            ],
            'sAdditionalServVATCalcMethod' => [
                'label' => 'SHOP_CONFIG_ADDITIONAL_SERVICE_VAT_CALCULATION_METHOD',
                'type' => 'text',
                'name' => 'confstrs[[{ $FIELDNAME }]]',
            ],
            'blShowVATForDelivery' => [
                'help' => 'HELP_SHOP_CONFIG_CALCULATEVATFORDELIVERY',
                'label' => 'SHOP_CONFIG_CALCULATEVATFORDELIVERY',
                'type' => 'checkbox',
                'name' => 'confbools[[{ $FIELDNAME }]]',
            ],
            'blDeliveryVatOnTop' => [
                'help' => 'HELP_SHOP_CONFIG_CALCDELVATONTOP',
                'label' => 'SHOP_CONFIG_CALCDELVATONTOP',
                'type' => 'checkbox',
                'name' => 'confbools[[{ $FIELDNAME }]]',
            ],
            'blShowVATForPayCharge' => [
                'help' => 'HELP_SHOP_CONFIG_CALCULATEVATOFORPAYCHARGE',
                'label' => 'SHOP_CONFIG_CALCULATEVATOFORPAYCHARGE',
                'type' => 'checkbox',
                'name' => 'confbools[[{ $FIELDNAME }]]',
            ],
            'blPaymentVatOnTop' => [
                'help' => 'HELP_SHOP_CONFIG_CALCPAYVATONTOP',
                'label' => 'SHOP_CONFIG_CALCPAYVATONTOP',
                'type' => 'checkbox',
                'name' => 'confbools[[{ $FIELDNAME }]]',
            ],
            'blShowVATForWrapping' => [
                'help' => 'HELP_SHOP_CONFIG_CALCULATEVATFORWRAPPING',
                'label' => 'SHOP_CONFIG_CALCULATEVATFORWRAPPING',
                'type' => 'checkbox',
                'name' => 'confbools[[{ $FIELDNAME }]]',
            ],
            'blWrappingVatOnTop' => [
                'help' => 'HELP_SHOP_CONFIG_CALCWRAPVATONTOP',
                'label' => 'SHOP_CONFIG_CALCWRAPVATONTOP',
                'type' => 'checkbox',
                'name' => 'confbools[[{ $FIELDNAME }]]',
            ],
            'blShippingCountryVat' => [
                'help' => 'HELP_SHOP_CONFIG_SHIPPINGCOUNTRYVAT',
                'label' => 'SHOP_CONFIG_SHIPPINGCOUNTRYVAT',
                'type' => 'checkbox',
                'name' => 'confbools[[{ $FIELDNAME }]]',
            ],
            'blVatIdCheckDisabled' => [
                'help' => 'HELP_SHOP_CONFIG_DISABLEONLINEVATIDCHECK',
                'label' => 'SHOP_CONFIG_DISABLEONLINEVATIDCHECK',
                'type' => 'checkbox',
                'name' => 'confbools[[{ $FIELDNAME }]]',
            ],
            'sVatIdCheckInterfaceWsdl' => [
                'help' => 'HELP_SHOP_CONFIG_ALTVATIDCHECKINTERFACEWSDL',
                'label' => 'SHOP_CONFIG_ALTVATIDCHECKINTERFACEWSDL',
                'type' => 'text',
                'name' => 'confstrs[[{ $FIELDNAME }]]',
            ],
            'iUseGDVersion' => [
                'help' => 'HELP_SHOP_CONFIG_USEGDVERSION',
                'label' => 'SHOP_CONFIG_USEGDVERSION',
                'type' => 'text',
                'name' => 'confstrs[[{ $FIELDNAME }]]',
            ],
            'blAutoIcons' => [
                'help' => 'HELP_SHOP_CONFIG_AUTOICONS',
                'label' => 'SHOP_CONFIG_AUTOICONS',
                'type' => 'checkbox',
                'name' => 'confbools[[{ $FIELDNAME }]]',
            ],
            'sCntOfNewsLoaded' => [
                'help' => 'HELP_SHOP_CONFIG_CNTOFNEWS',
                'label' => 'SHOP_CONFIG_CNTOFNEWS',
                'type' => 'text',
                'name' => 'confstrs[[{ $FIELDNAME }]]',
            ],
            'blPsLoginEnabled' => [
                'help' => 'HELP_SHOP_CONFIG_PSLOGIN',
                'label' => 'SHOP_CONFIG_PSLOGIN',
                'type' => 'text',
                'name' => 'confstrs[[{ $FIELDNAME }]]',
            ],
            'blBasketExcludeEnabled' => [
                'help' => 'HELP_SHOP_CONFIG_BASKETEXCLUDE',
                'label' => 'SHOP_CONFIG_BASKETEXCLUDE',
                'type' => 'text',
                'name' => 'confstrs[[{ $FIELDNAME }]]',
            ],
            'blPsBasketReservationEnabled' => [
                'help' => 'HELP_SHOP_CONFIG_BASKETRESERVATION',
                'label' => 'SHOP_CONFIG_BASKETRESERVATION',
                'type' => 'text',
                'name' => 'confstrs[[{ $FIELDNAME }]]',
            ],
            'iPsBasketReservationTimeout' => [
                'help' => 'HELP_SHOP_CONFIG_BASKETRESERVATIONTIMEOUT',
                'label' => 'SHOP_CONFIG_BASKETRESERVATIONTIMEOUT',
                'type' => 'text',
                'name' => 'confstrs[[{ $FIELDNAME }]]',
            ],
            'blInvitationsEnabled' => [
                'help' => 'HELP_SHOP_CONFIG_INVITATION',
                'label' => 'SHOP_CONFIG_INVITATION',
                'type' => 'text',
                'name' => 'confstrs[[{ $FIELDNAME }]]',
            ],
            'dPointsForInvitation' => [
                'help' => 'HELP_SHOP_CONFIG_POINTSFORINVITATION',
                'label' => 'SHOP_CONFIG_POINTSFORINVITATION',
                'type' => 'text',
                'name' => 'confstrs[[{ $FIELDNAME }]]',
            ],
            'dPointsForRegistration' => [
                'help' => 'HELP_SHOP_CONFIG_POINTSFORREGISTRATION',
                'label' => 'SHOP_CONFIG_POINTSFORREGISTRATION',
                'type' => 'text',
                'name' => 'confstrs[[{ $FIELDNAME }]]',
            ],
            'blEnableDownloads' => [
                'help' => 'HELP_SHOP_CONFIG_POINTSFORINVITATION',
                'label' => 'HELP_SHOP_CONFIG_POINTSFORINVITATION',
                'type' => 'checkbox',
                'name' => 'confbools[[{ $FIELDNAME }]]',
            ],
            'sDownloadsDir' => [
                'help' => 'HELP_SHOP_CONFIG_DOWNLOADS_PATH',
                'label' => 'SHOP_CONFIG_DOWNLOADS_PATH',
                'type' => 'text',
                'name' => 'confstrs[[{ $FIELDNAME }]]',
            ],
            'iMaxDownloadsCount' => [
                'help' => 'HELP_SHOP_CONFIG_MAX_DOWNLOADS_COUNT',
                'label' => 'GENERAL_MAX_DOWNLOADS_COUNT',
                'type' => 'text',
                'name' => 'confstrs[[{ $FIELDNAME }]]',
            ],
            'iLinkExpirationTime' => [
                'help' => 'HELP_SHOP_CONFIG_LINK_EXPIRATION_TIME',
                'label' => 'GENERAL_LINK_EXPIRATION_TIME',
                'type' => 'text',
                'name' => 'confstrs[[{ $FIELDNAME }]]',
            ],
            'iDownloadExpirationTime' => [
                'help' => 'HELP_SHOP_CONFIG_DOWNLOAD_EXPIRATION_TIME',
                'label' => 'GENERAL_DOWNLOAD_EXPIRATION_TIME',
                'type' => 'text',
                'name' => 'confstrs[[{ $FIELDNAME }]]',
            ],
            'iMaxDownloadsCountUnregistered' => [
                'help' => 'HELP_SHOP_CONFIG_LINK_EXPIRATION_TIME_UNREGISTERED',
                'label' => 'GENERAL_LINK_EXPIRATION_TIME_UNREGISTERED',
                'type' => 'text',
                'name' => 'confstrs[[{ $FIELDNAME }]]',
            ],
            'aCMSfolder' => [
                'help' => 'HELP_SHOP_CONFIG_CMSFOLDER',
                'label' => 'SHOP_CONFIG_CMSFOLDER',
                'type' => 'textarea',
                'name' => 'confaarrs[[{ $FIELDNAME }]]',
            ],
            'blOrderOptInEmail' => [
                'help' => 'HELP_SHOP_CONFIG_ORDEROPTINEMAIL',
                'label' => 'SHOP_CONFIG_ORDEROPTINEMAIL',
                'type' => 'checkbox',
                'name' => 'confbools[[{ $FIELDNAME }]]',
            ],
            'aOrderfolder' => [
                'help' => 'HELP_SHOP_CONFIG_ORDERFOLDER',
                'label' => 'SHOP_CONFIG_ORDERFOLDER',
                'type' => 'textarea',
                'name' => 'confaarrs[[{ $FIELDNAME }]]',
            ],
            'sLocalDateFormat' => [
                'help' => 'HELP_SHOP_CONFIG_DATEFORMAT',
                'label' => 'SHOP_CONFIG_DATEFORMAT',
                'type' => 'text',
                'name' => 'confstrs[[{ $FIELDNAME }]]',
            ],
            'sLocalTimeFormat' => [
                'help' => 'HELP_SHOP_CONFIG_TIMEFORMAT',
                'label' => 'SHOP_CONFIG_TIMEFORMAT',
                'type' => 'text',
                'name' => 'confstrs[[{ $FIELDNAME }]]',
            ],
            'blSendTechnicalInformationToOxid' => [
                'help' => 'HELP_SHOP_CONFIG_SEND_TECHNICAL_INFORMATION_TO_OXID',
                'label' => 'SHOP_CONFIG_SEND_TECHNICAL_INFORMATION_TO_OXID',
                'type' => 'checkbox',
                'name' => 'confbools[[{ $FIELDNAME }]]',
            ],
            'blCheckForUpdates' => [
                'label' => 'SHOP_CONFIG_CHECK_UPDATES',
                'type' => 'checkbox',
                'name' => 'confbools[[{ $FIELDNAME }]]',
            ],
            'aMustFillFields' => [
                'help' => 'HELP_SHOP_CONFIG_MUSTFILLFIELDS',
                'label' => 'SHOP_CONFIG_MUSTFILLFIELDS',
                'type' => 'textarea',
                'multiple' => true,
                'name' => 'confarrs[[{ $FIELDNAME }]]',
            ],
            'contactFormRequiredFields' => [
                'help' => 'SHOP_CONFIG_FIELDS_CONTACTFORM',
                'label' => 'HELP_SHOP_CONFIG_FIELDS_CONTACTFORM',
                'type' => 'select',
                'multiple' => true,
                'name' => 'confarrs[[{ $FIELDNAME }]]',
            ],
            'aCurrencies' => [
                'help' => 'HELP_SHOP_CONFIG_SETORDELETECURRENCY',
                'label' => 'SHOP_CONFIG_SETORDELETECURRENCY',
                'type' => 'textarea',
                'multiple' => true,
                'name' => 'confarrs[[{ $FIELDNAME }]]',
            ],
            'blExclNonMaterialFromDelivery' => [
                'help' => 'HELP_SHOP_CONFIG_EXCLUDENONMATERIALPRODUCTS',
                'label' => 'SHOP_CONFIG_EXCLUDENONMATERIALPRODUCTS',
                'type' => 'checkbox',
                'name' => 'confbools[[{ $FIELDNAME }]]',
            ],
            'blBidirectCross' => [
                'help' => 'HELP_SHOP_CONFIG_BIDIRECTCROSS',
                'label' => 'SHOP_CONFIG_BIDIRECTCROSS',
                'type' => 'checkbox',
                'name' => 'confbools[[{ $FIELDNAME }]]',
            ],
            'iRatingLogsTimeout' => [
                'help' => 'HELP_SHOP_CONFIG_DELETERATINGLOGS',
                'label' => 'SHOP_CONFIG_DELETERATINGLOGS',
                'type' => 'text',
                'name' => 'confstrs[[{ $FIELDNAME }]]',
            ],
            'iRssItemsCount' => [
                'help' => 'HELP_SHOP_CONFIG_RSSITEMSCOUNT',
                'label' => 'SHOP_CONFIG_RSSITEMSCOUNT',
                'type' => 'text',
                'name' => 'confstrs[[{ $FIELDNAME }]]',
            ],
            'bl_rssTopShop' => [
                'help' => 'HELP_SHOP_CONFIG_RSSTOPSHOP',
                'label' => 'SHOP_CONFIG_RSSTOPSHOP',
                'type' => 'checkbox',
                'name' => 'confbools[[{ $FIELDNAME }]]',
            ],
            'bl_rssBargain' => [
                'help' => 'HELP_SHOP_CONFIG_RSSBARGAIN',
                'label' => 'SHOP_CONFIG_RSSBARGAIN',
                'type' => 'checkbox',
                'name' => 'confbools[[{ $FIELDNAME }]]',
            ],
            'bl_rssNewest' => [
                'help' => 'HELP_SHOP_CONFIG_RSSNEWEST',
                'label' => 'SHOP_CONFIG_RSSNEWEST',
                'type' => 'checkbox',
                'name' => 'confbools[[{ $FIELDNAME }]]',
            ],
            'bl_rssCategories' => [
                'help' => 'HELP_SHOP_CONFIG_RSSCATEGORIES',
                'label' => 'SHOP_CONFIG_RSSCATEGORIES',
                'type' => 'checkbox',
                'name' => 'confbools[[{ $FIELDNAME }]]',
            ],
            'bl_rssSearch' => [
                'help' => 'HELP_SHOP_CONFIG_RSSSEARCH',
                'label' => 'SHOP_CONFIG_RSSSEARCH',
                'type' => 'checkbox',
                'name' => 'confbools[[{ $FIELDNAME }]]',
            ],
            'bl_rssRecommLists' => [
                'help' => 'HELP_SHOP_CONFIG_RSSARTRECOMMLISTS',
                'label' => 'SHOP_CONFIG_RSSARTRECOMMLISTS',
                'type' => 'checkbox',
                'name' => 'confbools[[{ $FIELDNAME }]]',
            ],
            'bl_rssRecommListArts' => [
                'help' => 'HELP_SHOP_CONFIG_RSSRECOMMLISTARTS',
                'label' => 'SHOP_CONFIG_RSSRECOMMLISTARTS',
                'type' => 'checkbox',
                'name' => 'confbools[[{ $FIELDNAME }]]',
            ],
            'blCalculateDelCostIfNotLoggedIn' => [
                'help' => 'HELP_SHOP_CONFIG_DELIVERYCOSTS',
                'label' => 'SHOP_CONFIG_DELIVERYCOSTS',
                'type' => 'checkbox',
                'name' => 'confbools[[{ $FIELDNAME }]]',
            ],
            'sGiCsvFieldEncloser' => [
                'label' => 'SHOP_CONFIG_CSVFIELDENCLOSER',
                'type' => 'text',
                'name' => 'confstrs[[{ $FIELDNAME }]]',
            ],
            'sCSVSign' => [
                'help' => 'HELP_SHOP_CONFIG_CSVSEPARATOR',
                'label' => 'SHOP_CONFIG_CSVSEPARATOR',
                'type' => 'text',
                'name' => 'confstrs[[{ $FIELDNAME }]]',
            ],
            'iExportNrofLines' => [
                'help' => 'HELP_SHOP_CONFIG_EXPORTNUMBEROFLINES',
                'label' => 'SHOP_CONFIG_EXPORTNUMBEROFLINES',
                'type' => 'text',
                'name' => 'confstrs[[{ $FIELDNAME }]]',
            ],
            'iCntofMails' => [
                'help' => 'HELP_SHOP_CONFIG_NUMBEROFEMAILSPERTICK',
                'label' => 'SHOP_CONFIG_NUMBEROFEMAILSPERTICK',
                'type' => 'text',
                'name' => 'confstrs[[{ $FIELDNAME }]]',
            ],
            'blShowCookiesNotification' => [
                'help' => 'HELP_SHOP_CONFIG_CONFIRMCOOKIE',
                'label' => 'SHOP_CONFIG_CONFIRMCOOKIE',
                'type' => 'checkbox',
                'name' => 'confbools[[{ $FIELDNAME }]]',
            ],
            'sParcelService' => [
                'help' => 'HELP_SHOP_CONFIG_PARCELSERVICE',
                'label' => 'SHOP_CONFIG_PARCELSERVICE',
                'type' => 'text',
                'name' => 'confstrs[[{ $FIELDNAME }]]',
            ],
            'blSkipDebitOldBankInfo' => [
                'help' => 'HELP_SHOP_CONFIG_DEBIT_OLD_BANK_INFORMATION_NOT_ALLOWED',
                'label' => 'SHOP_CONFIG_DEBIT_OLD_BANK_INFORMATION_NOT_ALLOWED',
                'type' => 'checkbox',
                'name' => 'confbools[[{ $FIELDNAME }]]',
            ],
            'blAllowUsersToDeleteTheirAccount' => [
                'label' => 'SHOP_CONFIG_ALLOW_USERS_TO_DELETE_THEIR_ACCOUNT',
                'type' => 'checkbox',
                'name' => 'confbools[[{ $FIELDNAME }]]',
            ],
            'blAllowUsersToManageTheirReviews' => [
                'label' => 'SHOP_CONFIG_ALLOW_USERS_MANAGE_REVIEWS',
                'type' => 'checkbox',
                'name' => 'confbools[[{ $FIELDNAME }]]',
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

