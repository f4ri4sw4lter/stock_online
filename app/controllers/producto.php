<?php

class Producto extends Controller{
    function __construct(){
        parent::__construct();
        $this->view->render('producto/index');
    }

    function selectProducto(){
        $db = new Database();
    }

    function insert(){
        $nombre = $_POST['nombre'];
        $precio = $_POST['precio'];
        $descripcion = $_POST['descripcion'];
        $categoria = $_POST['categoria'];
        $imagen = $_POST['imagen'];
        $imagen_post = $_POST['imagen_post'];

        if($this->model->insert(['nombre'      => $nombre, 
                                 'precio'      => $precio,
                                 'descripcion' => $descripcion,
                                 'categoria'   => $categoria,
                                 'imagen'      => $imagen,
                                 'imagen_post' => $imagen_post
        ])){
            echo 'se agrego Producto';
        }else{
            echo 'NO se agrego Producto';
        }
        
    }
}