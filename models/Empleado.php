<?php 


    class Empleado{


        //VARIABLES=DATOS=ATRIBUTOS
        public $nombre;
        public $apellido;
        public $email;
        public $edad;
        public $descripcion;
        public $foto;


        //METODO ESPECIAL CONSTRUCTOR
        public function __construct($nombreFormulario,$apellidoFormulario,$emailFormulario,$edadFormulario,$descripcionFormulario,$fotoFormulario){

            $this->nombre=$nombreFormulario;
            $this->apellido=$apellidoFormulario;
            $this->email=$emailFormulario;
            $this->edad=$edadFormulario;
            $this->descripcion=$descripcionFormulario;
            $this->foto=$fotoFormulario;

        }

        //ACCIONES=FUNCIONES=METODOS

        public function registrar(){

            $consultaSQL="INSERT INTO empleados(nombre,apellido,email,edad,descripcion,foto) 
            VALUES ('$this->nombre','$this->apellido','$this->email','$this->edad','$this->descripcion','$this->foto')";

            return $consultaSQL; 

        }
        

        public function buscar(){

            $consultaSQL="SELECT * FROM empleados";
            return $consultaSQL;
        }

        public function eliminar($id){
            $consultaSQL="DELETE FROM empleados WHERE id='$id'";
            return $consultaSQL;
        }

        public function editar($id){

            $consultaSQL="UPDATE empleados SET nombre='$this->nombre',descripcion='$this->descripcion',foto='$this->foto' WHERE id='$id'";

            return $consultaSQL;

        }

       




    }





?>