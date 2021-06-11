<?php

namespace App\Models;

use App\Models\Database;

class VisorProductos{
    function __construct__(){
        $this->arr_productos = [];
    }

    function verProductos(){
        $connect = new Database();
        
    }
}