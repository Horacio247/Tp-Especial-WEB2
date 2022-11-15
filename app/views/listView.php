<?php

require_once './libs/smarty-4.2.1/libs/Smarty.class.php';

class listView {
    private $smarty;

    public function __construct() {
        $this->smarty = new Smarty(); 
    }

    function showViajes($viajes)
    {
        $this->smarty->assign('count', count($viajes)); 
        $this->smarty->assign('viajes', $viajes);

        // mostrar el tpl
        $this->smarty->display('homeViaje.tpl');
    }


}