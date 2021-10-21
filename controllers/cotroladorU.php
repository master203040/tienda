<?php

  //incluir el modelo de BaseDatos
  //incluir el modelo Productos
  include("../models/BaseDatos.php");
  include("../models/Producto.php")
    
  //2.recoger los datos de la visita 
 
  if(isset($_POST["boton"])){

    $nombre=$_POST["nombre"];
    $valor=$_POST["valor"];
    $tipo=$_POST["tipo"];
    $foto=$_POST["foto"];
    $inventario=$_POST["inventario"];
    $descripcion=$_POST["descripcion"];

    //creo un objecto(variable) de modelo Producto
    $producto = new Producto($nombre,$valor,$tipo,$foto,$inventario,$descripcion);


    //ejecutar el metodo insertar registros de la Base Datos
    $baseDatos = new BaseDatos();
    $resultado = $baseDatos->insertarRegistro($producto->regitrar());

    //valido el resultado
    if($resultado){
     echo("exito en el registro");
     header("Location:../views/registro.php");
     
    }else{

      echo("ups tenemos un prblema");
    }

  }else{

    echo("upss... Tenemos problemas para registrar datos");
  }
    
    
    
    
  

?>