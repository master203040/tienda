<?php

     if(!isset($_SESSION)){
        session_start();
    }

    //1. Incluir el modelo de la BD
    //   Incluir el modelo Producto
    include("../models/BaseDatos.php");
    include("../models/Producto.php");

    if(isset($_POST["buttonedit"])){

        //Recibo los datos a editar
        $valor=$_POST["valor"];
        $descripcion=$_POST["descripcion"];

        //Recibo el id
        $id=$_GET["id"];
       

        // Creo un objeto(variable) del modelo Producto
        $producto=new Producto(null,$valor,null,null,null,$descripcion);

    
       //Ejecutar el metodo insertar registro de la bd
       $baseDatos=new BaseDatos();
       $resultado=$baseDatos->insertarRegistro($producto->editar($id));

       //5. valido el resultado
       if($resultado){

        $_SESSION['mensaje']="success editing record";

        header("Location:../views/index.php");
           

       }else{
        echo("upss... Tenemos problemas para registrar datos");
       }
        
        

    }else{
        echo("no deberias estar aquí");
    }




?>