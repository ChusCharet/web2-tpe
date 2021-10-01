<?php 

function getProducts (){
    $db = new PDO('mysql:host=localhost;'.'dbname=db_tpe;charset=utf8', 'root', '');

    $sentencia = $db->prepare("select * from producto");
    $sentencia->execute();
    $producto = $sentencia->fetchAll(PDO::FETCH_OBJ);
    return $producto;

}

function insertProduct($id_producto, $precio, $color, $tamaño, $id_estilo) {
    $db = new PDO('mysql:host=localhost;'.'dbname=db_tpe;charset=utf8', 'root', '');
    $sentencia = $db->prepare("INSERT INTO producto(id_producto, precio, color, tamaño, id_estilo) VALUES(?, ?, ?, ?, ?)");
    $sentencia->execute(array($id_producto, $precio, $color, $tamaño, $id_estilo));

};