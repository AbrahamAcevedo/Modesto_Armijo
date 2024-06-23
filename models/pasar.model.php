<?php

    include "conexion.model.php";

    class  MostrarAsistencia{

        public $conn;

        public function __construct(){
            $this->conn = new Conexion();
        }

        public function getMostrarAsistencia(){
            $consulta = "select * from MostrarAsistencia ";
            return $this->conn->consultar($consulta);
        }
        public function addMostrarAsistencia($estu, $est){
            $consulta = "insert into MostrarAsistencia (estudiante_id, estado) values ('$estu', '$est'); ";
            return $this->conn->consultar($consulta);
       
        }
    }
?>