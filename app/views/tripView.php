<?php

require_once './libs/smarty-4.2.1/libs/Smarty.class.php';

class tripView
{

    private $smarty;

    public function __construct() {
        $this->smarty = new Smarty(); 
    }

function showViajes($viajes){
    $this->smarty->assign('viajes',$viajes);

    $this->smarty->display('listaViaje.tpl');

}

function showEditViajes($edit)
{
    $this->smarty->assign('edit',$edit);

    $this->smarty->display('form_edit.tpl');
}

   
}