
<?php

require_once 'view/View.php';
require_once 'model/HomeModel.php';

    class RecomendacionesController {
        public function __construct() {
            $this->view = new View();
            //$this->model = new HomeModel();
        }


    
    public function showRecomendaciones() {
        $this->view->show("RecomendacionesView.php", null);
    }
}
