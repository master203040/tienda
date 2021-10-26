<?php

  
    if(!isset($_SESSION)){
        session_start();
    }

    //1. Incluir el modelo de la BD
    //   Incluir el modelo Empleado
    include("../models/BaseDatos.php");
    include("../models/Producto.php");
    

    //2.  Recoger los datos de la vista
    if(isset($_POST["boton"])){

        $nombre=$_POST["nombre"];
        $valor=$_POST["valor"];
        $tipo=$_POST["tipo"];
        $foto=$_POST["foto"];
        $descripcion=$_POST["descripcion"];
        $inventario=$_POST["inventario"];



        //3. Creo un objeto(variable) del modelo EMPLEADO
        $producto=new Producto($nombre,$valor, $tipo,$foto,$descripcion,$inventario);

    
       //4. Ejecutar el metodo insertar registro de la bd
       $baseDatos=new BaseDatos();
       $resultado=$baseDatos->insertarRegistro($producto->registro());

       //5. valido el resultado
       if($resultado){

           $_SESSION['mensaje']="exito en el registro";

           header("Location:../views/registro.php");
           

        }else{
           echo("upss... Tenemos problemas para registrar datos");
        }
        
        

    }else{
        echo("no deberias estar aquí");
    }


?>