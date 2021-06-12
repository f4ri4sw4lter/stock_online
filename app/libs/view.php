<?php

class View{
    function __construct(){
    }

    function render($nombre){
        require 'app/views/' . $nombre . '.php';
    }
}