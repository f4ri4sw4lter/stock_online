<?php

class productoModel extends Model{
    function __construct__($nombre,$precio,$descripcion,$categoria,$imagen,$imagen_post){
        $this->nombre = $nombre;
        $this->precio = $precio;
        $this->descripcion = $descripcion;
        $this->categoria = $categoria;
        $this->imagen = $imagen;
        $this->imagen_post = $imagen_post;
    }
}