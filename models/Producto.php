<?php

    class Producto{

        //variable = datos = atributos
        public $nombre;
        public $valor;
        public $tipo;
        public $foto;
        public $inventatio;
        public $descripcion;


        //metodo especial constructor

        public function __construct($nombreFormulario,$valorFormulario,$tipoFormulario,$fotoFormulario,$inventatioFormulario,$descripcionFormulario){

            $this->nombre = $nombreFormulario;
            $this->valor = $valorFormulario;
            $this->tipo = $tipoFormulario;
            $this->foto = $fotoFormulario;
            $this->inventario = $inventatioFormulario;
            $this->descripcion = $descripcionFormulario;

        }

        //acciones = funciones = metodos
        public function registrar(){

            $consultaSQL= "INSERT INTO productos(nombre,valor,tipo,foto,inventario,descripcion)
            VALUE ('$this->nombre','$this->valor','$this->tipo','$this->foto','$this->inventario',$this->descripcion)";

            return $consultaSQL;

        }

        public function buscar(){

            $consultaSQL="SELECT * FROM productos";
            return $consultaSQL;
        }

        public function eliminar($id){

            $consultaSQL="DELETE FROM productos WHERE id='$id'";
            return $consultaSQL;
        }

        public function editar($id){

            $consultaSQL = "UPDATE productos SET valor='$this->valor',descripcion='$this->descripcion',foto='$this->foto' WHERE id='$id'";

            return $consultaSQL;
        }




    }






?>