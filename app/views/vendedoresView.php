<?php

require_once './libs/smarty-4.2.1/libs/Smarty.class.php';

class vendedoresView{
    private $smarty;

    public function __construc(){
        $this->smarty= new Smarty();
    }

    function showVendedores($vendedores)
    {
        $this->smarty->assign('vendedores', $vendedores);
        $this->smarty->display('vendedores.tpl');
    }

}