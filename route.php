<?php
require_once "producto.php";
require_once "db.php";

define('BASE_URL', '//'.$_SERVER['SERVER_NAME'] . ':' . $_SERVER['SERVER_PORT'] . dirname($_SERVER['PHP_SELF']).'/');



//lee la acción
if (!empty($_GET['action'])) {
    $action = $_GET['action'];
}
else {
    $action = 'home'; //acción por default si no envian
}

$params = explode('/', $action); //parsea la acción

//determina que camino seguir según la acción
switch ($params[0]) {
    case 'home':
        showHome();
        break;
    default:
        echo('404 Page not found');
        break;
}