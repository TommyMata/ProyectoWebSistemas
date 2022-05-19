<?php

require_once 'view/View.php';
require_once 'model/HomeModel.php';

class HomeController {
    public function __construct() {
        $this->view = new View();
        //$this->model = new HomeModel();
    }

    public function show() {
        $destinos = [
            0 => [
                "nombre" => "bar",
                "desc" => "foo",
                "precio" => 100,
                "capacidad" => 8,
                "img" => 'public\img\1.jpg',
                "provincia" => "foo"
            ],
            1 => [
                "nombre" => "bar",
                "desc" => "foo",
                "precio" => 100,
                "capacidad" => 8,
                "img" => 'public\img\1.jpg',
                "provincia" => "foo"
            ],
            2 => [
                "nombre" => "bar",
                "desc" => "foo",
                "precio" => 100,
                "capacidad" => 8,
                "img" => 'public\img\1.jpg',
                "provincia" => "foo"
            ],
            3 => [
                "nombre" => "bar",
                "desc" => "foo",
                "precio" => 100,
                "capacidad" => 8,
                "img" => 'public\img\1.jpg',
                "provincia" => "foo"
            ],
            4 => [
                "nombre" => "bar",
                "desc" => "foo",
                "precio" => 100,
                "capacidad" => 8,
                "img" => 'public\img\1.jpg',
                "provincia" => "foo"
            ],
        ];
        $this->view->show("HomeView.php", $destinos);
    }

    public function showSiteMap() {
        $this->view->show("SiteMap.php", null);
    }

}
