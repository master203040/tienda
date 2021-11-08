<?php 

    if(!isset($_SESSION)){
        session_start();
    }

    //1. Incluir el modelo de la BD
    //   Incluir el modelo Empleado
    include("../models/BaseDatos.php");
    include("../models/Empleado.php");
    

    //2.  Recoger los datos de la vista
    if(isset($_POST["boton"])){

        $nombre=$_POST["nombre"];
        $apellido=$_POST["apellido"];
        $email=$_POST["email"];
        $edad=$_POST["edad"];
        $descripcion=$_POST["descripcion"];
        $foto=$_POST["foto"];



        //3. Creo un objeto(variable) del modelo EMPLEADO
        $empleado=new Empleado($nombre,$apellido,$email,$edad,$descripcion,$foto);

    
       //4. Ejecutar el metodo insertar registro de la bd
       $baseDatos=new BaseDatos();
       $resultado=$baseDatos->insertarRegistro($empleado->registrar());

       //5. valido el resultado
       if($resultado){

           $_SESSION['mensaje']="successful registration";

           header("Location:../views/user.php");
           

        }else{
           echo("upss... Tenemos problemas para registrar datos");
        }
        
        

    }else{
        echo("no deberias estar aquí");
    }

   


?>