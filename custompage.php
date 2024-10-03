<?php

if (!defined('_PS_VERSION_')) {
    exit;
}

class CustomPage extends Module
{
    public function __construct()
    {
        $this->name = 'custompage';
        $this->tab = 'front_office_features';
        $this->version = '1.0.0';
        $this->author = 'TuNombre';
        $this->need_instance = 0;

        parent::__construct();

        $this->displayName = $this->l('Custom Page');
        $this->description = $this->l('Creates a custom page in PrestaShop.');
    }

    public function install() 
    {
        if (!parent::install() || !$this->registerHook('displayHeader')) {
            return false;
        }
        return true;
    }

    public function uninstall()
    {
        if (!parent::uninstall()) {
            return false;
        }
        return true;
    }

    public function hookDisplayHeader()
    {
        // Verificar si la página se accede a través del enlace específico
        if (basename($_SERVER['PHP_SELF']) === 'custompage.php') {
            $this->context->smarty->assign([
                'content' => 'This is the content of the custom page.'
            ]);

            return $this->display(__FILE__, 'custompage.tpl');
        }
    }
}
