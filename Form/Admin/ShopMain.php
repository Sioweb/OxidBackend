<?php

namespace Ci\Oxid\FormBuilder\Form\Admin;

class Forms implements \Sioweb\Lib\Formgenerator\Core\FormInterface
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
                    'fields' => [
                        'oxproductive', 'oxactive', 'oxcompany', 'oxfname', 'oxlname', 'oxstreet', 'oxzip', 'oxcity', 'oxcountry', 'oxtelefon', 'oxtelefax', 'oxurl', 'oxbankname', 'oxbankcode', 'oxbanknumber', 'oxbiccode', 'oxibannumber', 'oxvatnumber', 'oxtaxnumber', 'oxhrbnr', 'oxcourt', 'oxname', 'oxsmtp', 'oxsmtpuser', 'oxinfoemail', 'oxorderemail', 'oxowneremail', 'oxordersubject', 'oxregistersubject', 'oxforgotpwdsubject', 'oxsendednowsubject'
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
                'type' => 'checkbox'
            ],
            'oxactive' => [
                'type' => 'checkbox'
            ],
            'oxcompany' => [
                'type' => 'text'
            ],
            'oxfname' => [
                'type' => 'text'
            ],
            'oxlname' => [
                'type' => 'text'
            ],
            'oxstreet' => [
                'type' => 'text'
            ],
            'oxzip' => [
                'type' => 'text'
            ],
            'oxcity' => [
                'type' => 'text'
            ],
            'oxcountry' => [
                'type' => 'text'
            ],
            'oxtelefon' => [
                'type' => 'text'
            ],
            'oxtelefax' => [
                'type' => 'text'
            ],
            'oxurl' => [
                'type' => 'text'
            ],
            'oxbankname' => [
                'type' => 'text'
            ],
            'oxbankcode' => [
                'type' => 'text'
            ],
            'oxbanknumber' => [
                'type' => 'text'
            ],
            'oxbiccode' => [
                'type' => 'text'
            ],
            'oxibannumber' => [
                'type' => 'text'
            ],
            'oxvatnumber' => [
                'type' => 'text'
            ],
            'oxtaxnumber' => [
                'type' => 'text'
            ],
            'oxhrbnr' => [
                'type' => 'text'
            ],
            'oxcourt' => [
                'type' => 'text'
            ],
            'oxname' => [
                'type' => 'text'
            ],
            'oxsmtp' => [
                'type' => 'text'
            ],
            'oxsmtpuser' => [
                'type' => 'text'
            ],
            'oxinfoemail' => [
                'type' => 'text'
            ],
            'oxorderemail' => [
                'type' => 'text'
            ],
            'oxowneremail' => [
                'type' => 'text'
            ],
            'oxordersubject' => [
                'type' => 'text'
            ],
            'oxregistersubject' => [
                'type' => 'text'
            ],
            'oxforgotpwdsubject' => [
                'type' => 'text'
            ],
            'oxsendednowsubject' => [
                'type' => 'text'
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
