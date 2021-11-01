
<?php

    if(!isset($_SESSION)){
        session_start();
    }


    include("../models/BaseDatos.php");
    include("../models/Producto.php");

    //2. Creo un objeto(variable) del modelo Producto
    $producto=new Producto(null,null,null,null,null,null);

     //4. Ejecutar el metodo buscar registro de la bd
     $baseDatos=new BaseDatos();
     $producto=$baseDatos->buscarRegistros($producto->buscar());

     //print_r($producto);




?>