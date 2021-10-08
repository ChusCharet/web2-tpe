<?php 

function connectToDb() {
    return new PDO('mysql:host=localhost;'.'dbname=db_tpe;charset=utf8', 'root', ''); 
}



function insertProduct($precio, $color, $tamaño, $fk_id_estilo) {
    $db = connectToDb();
    $sentencia = $db->prepare("INSERT INTO producto(precio, color, tamaño, fk_id_estilo) VALUES(?, ?, ?, ?)");
    $sentencia->execute(array($precio, $color, $tamaño, $fk_id_estilo));

};

function deleteProductFromDb ($id) {
    $db = connectToDb();
    $sentencia = $db->prepare("DELETE FROM producto WHERE id_producto=?");
    $sentencia->execute(array($id));
}

