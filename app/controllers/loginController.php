<?php

require_once './app/models/userModel.php';
require_once './app/views/loginView.php';

class LoginController {
    private $model;
    private $view;

    public function __construct(){
        $this->model= new UserModel();
        $this->view= new LoginView();
    }

    public function showFormLogin() {
        $this->view->showFormLogin();
    }

    public function verifyUser() {
    
        $email = $_POST['email'];
        $password = $_POST['password'];

        $user = $this->model->getUser($email);

        if ($user && password_verify($password, $user->password)) {

            // inicio una session para este usuario
            session_start();
            $_SESSION['USER_ID'] = $user->id;
            $_SESSION['USER_EMAIL'] = $user->email;
            $_SESSION['IS_LOGGED'] = true;

            header("Location: " . BASE_URL . "administrador");//VER SI ESTA BIEN LA URL
        } else {
           $this->view->showFormLogin("El usuario o la contraseña no existe.");
        }

    }

    public function logout() {
        session_start();
        session_destroy();
        header("Location: " . BASE_URL);
    }

}