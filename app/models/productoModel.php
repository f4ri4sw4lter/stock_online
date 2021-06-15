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

    function insert($datos){
        try{
            $query = $this->db->connect()->prepare('INSERT INTO Productos(nombre,precio,descripcion,categoria,imagen,imagen_post)
                                                        VALUES(:nombre,:precio,:descripcion,:categoria,:imagen,:imagen_post)');
            
            $query->execute(['nombre'      => $datos['nombre'],
                             'precio'      => $datos['precio'],
                             'descripcion' => $datos['descripcion'],
                             'categoria'   => $datos['categoria'],
                             'imagen'      => $datos['imagen'],
                             'imagen_post' => $datos['imagen_post']
            ]);
        }catch(PDOException $e){
            print_r('ERROR DE CONEXION: '.$e->getMessage());
        }        
    }
}