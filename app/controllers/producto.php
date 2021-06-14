<?php

class Producto extends Controller{
    function __construct(){
        parent::__construct();
        $this->view->render('producto/index');
    }

    function loadProducto(){
        $db = new Database();
        $db->connect();

    }
}