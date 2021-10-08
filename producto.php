<?php


function createProduct() {
    
    insertProduct($_POST['precio'],$_POST['color'],$_POST['tamaño'],$_POST['fk_id_estilo']);
    header("Location: home");
}

function deleteProduct($id) {
    deleteProductFromDb($id);
    header("Location: ".BASE_URL."home");
}
