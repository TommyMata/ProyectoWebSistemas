<?php

require_once 'view/View.php';
require_once 'model/HomeModel.php';

class LoginController {

    public function __construct() {
        $this->view = new View();
            //$this->model = new HomeModel();
    }
    

    public function showLogin() {
        $this->view->show("LoginView.php", null);
    }


    public function showRegistrarse() {
        $this->view->show("RegistrarseView.php", null);
    }

}
