<?php

   if(!isset($_SESSION)){
    session_start();
    }


  //incluir el modelo de BaseDatos
  //incluir el modelo Productos
  include("../models/BaseDatos.php");
  include("../models/Producto.php");
    
  //2.recoger los datos de la visita 
  if(isset($_POST["boton"])){

    $nombre = $_POST['nombre'];
    $valor = $_POST['valor'];
    $tipo = $_POST['tipo'];
    $foto = $_POST['foto'];
    $inventario = $_POST['inventario'];
    $descripcion = $_POST['descripcion'];


    
    //3. Creo un objeto(variable) del modelo EMPLEADO
    $producto =new Producto($nombre,$valor,$tipo,$foto,$inventario,$descripcion);

    //4. Ejecutar el metodo insertar registro de la bd
    $baseDatos = new BaseDatos();
    $resultado=$baseDatos->insertarRegistro($producto->registrar());

    //5. valido el resultado
    if($resultado){

      $_SESSION['mensaje'] ="exito en el registro";

      header("Location:../views/registro.php");
           

    }else{
      echo("upss... Tenemos problemas para registrar datos");
    }

    
  }else{
    echo("no deberias estar aquí");
  }


?>