<?php

    include "conexion.model.php";

    class Estudiante{

        public $conn;

        public function __construct(){
            $this->conn = new Conexion();
        }

        public function getEstudiante(){
            $consulta = "select * from Estudiante";
            return $this->conn->consultar($consulta);
        }

        public function addEstudiante($nomE, $edaE, $tut, $tel, $curE, $turE, $gen ){
            $consulta = "insert into Estudiante (nombre, edad, nombre_tutor, telefono, curso_id,  turno_id, genero) values ('$nomE', '$edaE', '$tut', '$tel', '$curE', '$turE', '$gen'); ";
            return $this->conn->consultar($consulta);
        }

        public function delEstudiante($id){
            $consulta = "delete from Estudiante where id_estudiante = '$id';";
            return $this->conn->consultar($consulta);
        }
        public function updateEstudiante($codigoEstudiante, $nomE, $edaE, $tut, $tel, $curE, $turE){
            $consulta = "update Estudiante set nombre = '$nomE', edad = '$edaE', nombre_tutor = '$tut', telefono= '$tel', curso_id = '$curE', turno_id = '$turE' where id_estudiante= $codigoEstudiante;";
            return $this->conn->consultar($consulta);
        }
    }
