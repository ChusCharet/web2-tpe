<?php

class ProductView{

    function __construct() {
        
    }

    function showProducts($producto) {
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
    
            
            foreach ($producto as $product) {
                $html.= '<li>'.$product->id_producto.': $'.$product->precio.' '.$product->color.''.$product->tamaño.''.$product->fk_id_estilo.''.' <a href="deleteProduct/'.$product->id_producto.'">Borrar</a> - <a href="noProduct/'.$product->id_producto.'">Sin Stock</a>'. '</li>';
            }
           
           
    
            $html .='
    
            </ul>
        
            <form action="createProduct" method="post">
                <label>Precio: </label>
                <input type="number" name="precio" id="precio">
                <label>Color: </label>
                <input type="color" name="color" id="color">
                <label>Tamaño: </label>
                <input type="text" name="tamaño" id="">
                <label>Estilo</label>
                <select name="fk_id_estilo" value="Estilo"> 
                <option value="1: animal">1</option>
                <option value="2: festividades">2</option>
                <option value="3: personalizado">3</option>
                </select>
                <input type="submit" value="Guardar">
            </form>
            
        </body>
        </html>';
    
        echo $html;
    
    }

}