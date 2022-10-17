<?php

require_once './libs/smarty-4.2.1/libs/Smarty.class.php';

class LoginView {
    private $smarty;

    public function __construct() {
        $this->smarty = new Smarty();
    }

    function showFormLogin($error = null) {
        $this->smarty->assign('titulo', 'Log in');
        $this->smarty->assign("error", $error);
        $this->smarty->display('Login.tpl');
    }


}