<?php

    class BaseDatos{

        //ATRIBUTOS=VARIABLES=DATOS
        public $usuario="root";
        public $passwordBD="";
        public $servidorBD="mysql:host=localhost;";
        public $nombreBD="dbname =tienda";
        

        //METODO ESPECIAL CONSTRUCTOR
        public function __construct(){}

        //METODOS=ACCIONES=FUNCIONES
        public function conectar(){

            //MANEJO DE ERRORES
            try{

                $datos=$this->servidorBD.$this->nombreBD;
                $conexion= new PDO($datos,$this->usuario,$this->passwordBD);

               // echo("exito conectandonos a la bd");
                return $conexion;

            }catch(PDOException $error){

                die("Tenemos un problema ".$error->getMessage());

            }

        }

        public function insertarRegistro($consultaSQL){

            try{
                //1. construir un puente con la bd
                $conexion=$this->conectar();

                //2. preparar la bd para que reciba mi consulta
                $operacion=$conexion->prepare($consultaSQL);

                //3. Ejecutar la operacion
                $resultado=$operacion->execute();

                return $resultado;

            }catch(PDOException $error){

                die("Tenemos un problema con los datos ".$error->getMessage());

            }

        }

        public function buscarRegistros($consultaSQL){

             try{
                //1. construir un puente con la bd
                $conexion=$this->conectar();

                //2. preparar la bd para que reciba mi consulta
                $operacion=$conexion->prepare($consultaSQL);

                //3.Establecer el formato de los daos consultados
                $operacion->setFetchMode(PDO::FETCH_ASSOC);

                //4. Ejecutar la operacion
                $operacion->execute();

                return $operacion->fetchAll();

            }catch(PDOException $error){

                 die("Tenemos un problema ".$error->getMessage());

            }

        }


        
    }
   
    







?>