<?php

class AgregarProducto extends Controller{
    function __construct(){
        parent::__construct();
        $this->view->render('agregarproducto/index');
    }
}