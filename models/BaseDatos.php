<?php

class BaseDatos{

    public $usuario = "root";
    public $passworldDB = "";
    public $servidorDB = "mysgl:host = localhost;";
    public $nombreDB = "dbname = theshop";

    // metodos especial constructor
    public function __construct(){}

    //metodo = accion = funciones 
    public function conectarConBD(){


        try {

            $datosGeneralesBD = $this-> $servidorDB.$this->nombreDB;
            $conexion = new PDO( $datosGeneralesBD,$this->usuario,$this->passworldDB);
            echo("exit connection a DB");


        } catch (PDOException  $error) {
            
            die("problema en el servidor ".$error ->getMessage());
        }

    }

    public function insertarRegistro($consultaSQL){

        try {
            
            //1.construir una puente con la BD
            $conexion = $this->conectarConBD();

            //2.prepara BD para que reciba mi consulta
            $operacion =$conexion->prepare($consultaSQL);

            //3.ejecutar la operacion 
            $resultado = $operacion ->execute();

            return $resutado;

        } catch () {
            
            die ("problema en el servidor ".$error ->getMessage()")
        }
        
    }

}



?>