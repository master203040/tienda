<?php

    class Producto{

        //variable = datos = atributos
        public $nombre;
        public $valor;
        public $tipo;
        public $foto;
        public $inventario;
        public $descripcion;


        //metodo especial constructor

        public function __construct($nombreFormulario,$valorFormulario,$tipoFormulario,$fotoFormulario, $inventarioFormulario,$descripcionFormulario){

            $this->nombre=$nombreFormulario;
            $this->valor=$valorFormulario;
            $this->tipo=$tipoFormulario;
            $this->foto=$fotoFormulario;
            $this->inventario=$inventarioFormulario;
            $this->descripcion=$descripcionFormulario;

        }

        //acciones = funciones = metodos
        public function registro(){

            $consultaSQL="INSERT INTO productos(nombre,valor,tipo,foto,descripcion,inventario) VALUES ('$this->nombre','$this->valor','$this->tipo','$this->foto','$this->descripcion','$this->inventario')";
           

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