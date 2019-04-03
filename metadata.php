<?php

/**
 * Metadata version
 */
$sMetadataVersion = '2.0';

/**
 * Module information
 */
$aModule = [
    'id' => 'SiowebOxidBackend',
    'title' => '<i></i><b style="color: #005ba9">Sioweb</b> | Backend',
    'description' => '.',
    'version' => '1.0',
    'url' => 'https://www.sioweb.de',
    'email' => 'support@sioweb.com',
    'author' => 'Sascha Weidner',
    'extend' => [
        \OxidEsales\Eshop\Application\Controller\Admin\ShopMain::class =>
            \Sioweb\Oxid\Backend\Controller\Admin\ShopMain::class,
        \OxidEsales\Eshop\Application\Controller\Admin\ShopConfiguration::class =>
            \Sioweb\Oxid\Backend\Controller\Admin\ShopConfiguration::class,
        \OxidEsales\Eshop\Application\Controller\Admin\ShopSystem::class =>
            \Sioweb\Oxid\Backend\Controller\Admin\ShopSystem::class,
    ],
    'events' => [
        'onActivate' => '\Sioweb\Oxid\Backend\Core\Events::onActivate',
        'onDeactivate' => '\Sioweb\Oxid\Backend\Core\Events::onDeactivate',
    ],
    'templates' => [
        'formbuilder_shop_main.tpl' => 'sioweb/Backend/views/admin/tpl/form/formbuilder_shop_main.tpl',
        'formbuilder_shop_config.tpl' => 'sioweb/Backend/views/admin/tpl/form/formbuilder_shop_config.tpl',
        'formbuilder_shop_system.tpl' => 'sioweb/Backend/views/admin/tpl/form/formbuilder_shop_system.tpl',
    ],
    // 'blocks' => [
    //     [
    //         'template' => 'headitem.tpl',
    //         'block' => 'admin_headitem_inccss',
    //         'file' => 'admin_headitem_inccss.tpl',
    //     ],
    // ]
];
