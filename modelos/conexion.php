<?php

class Conexion{
    static public function conectar(){
        $link = new PDO("mysql:host=localhost;dbname=sistema2024",
                        "root",
                        "");
// utf8
        $link->exec("set names utf8");
        return $link;
    }
}
