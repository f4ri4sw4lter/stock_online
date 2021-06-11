<?php

//namespace App\Libs;

class App{
    function __construct(){
        $this->url = $_GET['url'];
        $this->url = rtrim($this->url,"/");
        $this->url = explode('/',$this->url);

        var_dump($this->url);
        $archivoController = 'controllers/'.$this->url[0].'.php';
        var_dump($archivoController);

    
        require_once $archivoController;
        
        
    }

}