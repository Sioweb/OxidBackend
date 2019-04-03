<?php

namespace Sioweb\Oxid\Backend\Controller\Admin;

/**
 * Admin shop system setting manager.
 * Collects shop system settings, updates it on user submit, etc.
 * Admin Menu: Main Menu -> Core Settings -> System.
 */
class ShopSystem extends \Sioweb\Oxid\Backend\Controller\Admin\ShopConfiguration
{
    /**
     * Current class template name.
     *
     * @var string
     */
    protected $_sThisTemplate = 'formbuilder_shop_system.tpl';

    protected function getAdminForm()
    {
        return \Sioweb\Oxid\Backend\Form\Admin\ShopSystem::class;
    }
}
