<?php

class ProductModel{

    private $db;
    function __construct() {
        $this->db = new PDO('mysql:host=localhost;'.'dbname=db_tpe;charset=utf8', 'root', ''); 
        
    }

    function getProducts(){
        $sentencia = $this->db->prepare("select * from producto");
        $sentencia->execute();
        $producto = $sentencia->fetchAll(PDO::FETCH_OBJ);
        return $producto;
    
    }

}