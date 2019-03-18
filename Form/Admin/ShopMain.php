<?php

namespace Sioweb\Oxid\Backend\Form\Admin;

class ShopMain implements \Sioweb\Lib\Formgenerator\Core\FormInterface
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
                'default' => [
                    'class' => 'w50',
                    'fields' => [
                        'oxproductive', 'oxactive', 'oxcompany', 'oxfname', 'oxlname', 'oxstreet', 'oxzip', 'oxcity', 'oxcountry', 'oxtelefon', 'oxtelefax', 'oxurl', 'oxbankname', 'oxbankcode', 'oxbanknumber', 'oxbiccode', 'oxibannumber', 'oxvatnumber', 'oxtaxnumber', 'oxhrbnr', 'oxcourt'
                    ],
                ],
                'mail' => [
                    'class' => 'w50',
                    'fields' => [
                        'subjlang', 'oxname', 'oxsmtp', 'oxsmtpuser', 'oxsmtppwd', 'oxinfoemail', 'oxorderemail', 'oxowneremail', 'oxordersubject', 'oxregistersubject', 'oxforgotpwdsubject', 'oxsendednowsubject'
                    ],
                ],
                'submit' => [
                    'fields' => ['submit'],
                ],
            ],
        ];
    }

    public function loadFieldConfig()
    {
        return [
            'oxproductive' => [
                'type' => 'checkbox',
                'label' => 'SHOP_MAIN_PRODUCTIVE',
                'help' => 'HELP_SHOP_MAIN_PRODUCTIVE',
            ],
            'oxactive' => [
                'type' => 'checkbox',
                'label' => 'GENERAL_ACTIVE',
                'help' => 'HELP_GENERAL_ACTIVE',
            ],
            'oxcompany' => [
                'type' => 'text',
                'label' => 'SHOP_MAIN_COMPANY',
                'help' => 'HELP_SHOP_MAIN_COMPANY',
            ],
            'oxfname' => [
                'type' => 'text',
                'outerclass' => 'w33',
                'label' => 'GENERAL_NAME',
                'help' => 'HELP_ENERAL_NAME',
            ],
            'oxlname' => [
                'type' => 'text',
                'outerclass' => 'w66',
            ],
            'oxstreet' => [
                'type' => 'text',
                'label' => 'GENERAL_STREET',
                'help' => 'HELP_GENERAL_STREET',
            ],
            'oxzip' => [
                'type' => 'text',
                'outerclass' => 'w33',
                'label' => 'GENERAL_ZIPCITY',
                'help' => 'HELP_GENERAL_ZIPCITY',
            ],
            'oxcity' => [
                'type' => 'text',
                'outerclass' => 'w66',
            ],
            'oxcountry' => [
                'type' => 'text',
                'label' => 'GENERAL_COUNTRY',
                'help' => 'HELP_GENERAL_COUNTRY',
            ],
            'oxtelefon' => [
                'type' => 'text',
                'label' => 'GENERAL_TELEPHONE',
                'help' => 'HELP_GENERAL_TELEPHONE',
            ],
            'oxtelefax' => [
                'type' => 'text',
                'label' => 'GENERAL_FAX',
                'help' => 'HELP_GENERAL_FAX',
            ],
            'oxurl' => [
                'type' => 'text',
                'label' => 'GENERAL_URL',
                'help' => 'HELP_GENERAL_URL',
            ],
            'oxbankname' => [
                'type' => 'text',
                'label' => 'SHOP_MAIN_BANKNAME',
                'help' => 'HELP_SHOP_MAIN_BANKNAME',
            ],
            'oxbankcode' => [
                'type' => 'text',
                'label' => 'SHOP_MAIN_BANKCODE',
                'help' => 'HELP_SHOP_MAIN_BANKCODE',
            ],
            'oxbanknumber' => [
                'type' => 'text',
                'label' => 'SHOP_MAIN_BANKNUMBER',
                'help' => 'HELP_SHOP_MAIN_BANKNUMBER',
            ],
            'oxbiccode' => [
                'type' => 'text',
                'label' => 'SHOP_MAIN_BICCODE',
                'help' => 'HELP_SHOP_MAIN_BICCODE',
            ],
            'oxibannumber' => [
                'type' => 'text',
                'label' => 'SHOP_MAIN_IBANNUMBER',
                'help' => 'HELP_SHOP_MAIN_IBANNUMBER',
            ],
            'oxvatnumber' => [
                'type' => 'text',
                'label' => 'SHOP_MAIN_VATNUMBER',
                'help' => 'HELP_SHOP_MAIN_VATNUMBER',
            ],
            'oxtaxnumber' => [
                'type' => 'text',
                'label' => 'SHOP_MAIN_TAXNUMBER',
                'help' => 'HELP_SHOP_MAIN_TAXNUMBER',
            ],
            'oxhrbnr' => [
                'type' => 'text',
                'label' => 'SHOP_MAIN_HRBNR',
                'help' => 'HELP_SHOP_MAIN_HRBNR',
            ],
            'oxcourt' => [
                'type' => 'text',
                'label' => 'SHOP_MAIN_COURT',
                'help' => 'HELP_SHOP_MAIN_COURT',
            ],
            'oxname' => [
                'type' => 'text',
                'id' => 'oLockTarget',
                'label' => 'SHOP_MAIN_SHOPNAME',
                'help' => 'HELP_SHOP_MAIN_SHOPNAME',
            ],
            'oxsmtp' => [
                'type' => 'text',
                'label' => 'SHOP_MAIN_SMTPSERVER',
                'help' => 'HELP_SHOP_MAIN_SMTPSERVER',
            ],
            'oxsmtpuser' => [
                'type' => 'text',
                'label' => 'SHOP_MAIN_SMTPUSER',
                'help' => 'HELP_SHOP_MAIN_SMTPUSER',
            ],
            'oxsmtppwd' => [
                'type' => 'password',
                'label' => 'SHOP_MAIN_SMTPPASSWORD',
                'help' => [
                    'SHOP_MAIN_SMTPPWUNSET',
                    'HELP_SHOP_MAIN_SMTPPASSWORD'
                ]
            ],
            'oxinfoemail' => [
                'type' => 'text',
                'label' => 'SHOP_MAIN_INFOEMAIL',
                'help' => 'HELP_SHOP_MAIN_INFOEMAIL',
            ],
            'oxorderemail' => [
                'type' => 'text',
                'label' => 'SHOP_MAIN_ORDEREMAIL',
                'help' => 'HELP_SHOP_MAIN_ORDEREMAIL',
            ],
            'oxowneremail' => [
                'type' => 'text',
                'label' => 'SHOP_MAIN_OWNEREMAIL',
                'help' => 'HELP_SHOP_MAIN_OWNEREMAIL',
            ],
            'oxordersubject' => [
                'type' => 'text',
                'label' => 'SHOP_MAIN_ORDERSUBJECT',
                'help' => 'HELP_SHOP_MAIN_ORDERSUBJECT',
            ],
            'oxregistersubject' => [
                'type' => 'text',
                'label' => 'SHOP_MAIN_REGISTERSUBJECT',
                'help' => 'HELP_SHOP_MAIN_REGISTERSUBJECT',
            ],
            'oxforgotpwdsubject' => [
                'type' => 'text',
                'label' => 'SHOP_MAIN_FORGOTPWDSUBJECT',
                'help' => 'HELP_SHOP_MAIN_FORGOTPWDSUBJECT',
            ],
            'oxsendednowsubject' => [
                'type' => 'text',
                'label' => 'SHOP_MAIN_NOWSENDEDSUBJECT',
                'help' => 'HELP_SHOP_MAIN_NOWSENDEDSUBJECT',
            ],
            'subjlang' => [
                'type' => 'select',
                'static' => true,
                'name' => 'subjlang',
                'submitOnChange' => true,
                'options' => [
                    [
                        'key' => 0,
                        'value' => 'Deutsch'
                    ],
                    [
                        'key' => 1,
                        'value' => 'English'
                    ],
                ]
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
