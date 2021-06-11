<?php

namespace App\Models;

class Producto{
    function __construct__($nombre,$precio,$descripcion,$categoria,$imagen){
        $this->nombre = $nombre;
        $this->precio = $precio;
        $this->descripcion = $descripcion;
        $this->categoria = $categoria;
        $this->imagen = $imagen;
    }

}