
<?php

require_once 'view/View.php';
require_once 'model/HomeModel.php';

    class DestinosController {
        public function __construct() {
            $this->view = new View();
            //$this->model = new HomeModel();
        }


    public function showDestinos() {
            $this->view->show("DestinosView.php", null);
        }

}
