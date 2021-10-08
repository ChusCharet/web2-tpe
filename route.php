<?php
require_once "producto.php";
require_once "db.php";
require_once "Controller/ProductController.php";

define('BASE_URL', '//'.$_SERVER['SERVER_NAME'] . ':' . $_SERVER['SERVER_PORT'] . dirname($_SERVER['PHP_SELF']).'/');



//lee la acción
if (!empty($_GET['action'])) {
    $action = $_GET['action'];
}
else {
    $action = 'home'; //acción por default si no envian
}

$params = explode('/', $action); //parsea la acción

$productController = new ProductController();

//determina que camino seguir según la acción
switch ($params[0]) {
    case 'home':
        $productController->showHome();
        break;
    case 'createProduct':
        createProduct();
        break;
    case 'deleteProduct':
        deleteProduct($params[1]);
        break;
    default:
        echo('404 Page not found');
        break;
}
