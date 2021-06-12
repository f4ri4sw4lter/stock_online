<?php

class Main extends Controller{
    function __construct(){
        parent::__construct();
        $this->view->render('main/index');
    }

    function presentacion(){
        echo '<p>Hola soy un Main</p>';
    }
}