<?php
require_once 'app/controllers/errores.php';

class App{
    function __construct(){
        $this->url = isset($_GET['url']) ? $_GET['url'] : null;
        $this->url = rtrim($this->url,"/");
        $this->url = explode('/',$this->url);

        if(empty($this->url[0])){
            $this->url[0] = 'main';
        }
        $archivoController = 'app/controllers/'.$this->url[0].'.php';
        
        if(file_exists($archivoController)){ //Si existe el controlador
            require_once  $archivoController;
            $controller = new $this->url[0]; 
            $controller->loadModel($this->url[0]);

            if(isset($this->url[1])){   //Si existe el metodo
                $controller->{$this->url[1]}();
            }
        }else{
            $controller = new Errores();
        }
    }

}