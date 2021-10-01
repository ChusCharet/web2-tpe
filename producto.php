<?php

function showHome() {

    $html = '<!DOCTYPE html>
    <html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Document</title>
        <base href="'.BASE_URL.'"/>
    </head>
    <body>
        <h1> AMIGURUMIS </h1>
        <ul> ';

        $producto = getProducts();
        foreach ($producto as $product) {
            $html.= '<li>'.$product->id_producto.': $'.$product->precio.'  </li>';
        }
        
        

        $html .='

        </ul>
    
        <form action="createProduct" method="post">
            <input type="text" name="producto" id="producto">
            <input type="number" name="precio" id="precio">
            <input type="text" name="color" id="color">
            <input type="text" name="tamaño" id="">
            <input type="text" name="estilo" id="estilo">
            <input type="submit" value="Guardar">
        </form>
        
    </body>
    </html>';

    echo $html;



}