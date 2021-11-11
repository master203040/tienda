<?php

     if(!isset($_SESSION)){
        session_start();
    }

    //1. Incluir el modelo de la BD
    //   Incluir el modelo Empleado
    include("../models/BaseDatos.php");
    include("../models/Empleado.php");

    if(isset($_POST["botonEditar"])){

        //Recibo los datos a editar
        $nombre=$_POST["nombre"];
        $descripcion=$_POST["descripcion"];
        $foto=$_POST["foto"];

        //Recibo el id
        $id=$_GET["id"];
       

        // Creo un objeto(variable) del modelo EMPLEADO
        $empleado=new Empleado($nombre,null,null,null,$descripcion,$foto);

    
       //Ejecutar el metodo insertar registro de la bd
       $baseDatos=new BaseDatos();
       $resultado=$baseDatos->insertarRegistro($empleado->editar($id));

       //5. valido el resultado
       if($resultado){

           $_SESSION['mensaje']="success editing record";

           header("Location:../views/listaempleado.php");
           

       }else{
           echo("upss... Tenemos problemas para registrar datos");
       }
        
        

    }else{
        echo("no deberias estar aquí");
    }




?>