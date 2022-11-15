<?php

require_once './libs/smarty-4.2.1/libs/Smarty.class.php';

class vendedoresView{
    private $smarty;

    public function __construc(){
        $this->smarty= new Smarty();
    }

    function vistaVendedores($vendedores)
    {
        $this->smarty->assign('Vendedores' ,$vendedores);

        $this->smarty->display('vendedores.tpl');
    }

}