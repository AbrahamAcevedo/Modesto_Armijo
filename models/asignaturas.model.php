<?php

    include "conexion.model.php";

    class Asignaturas{

        public $conn;

        public function __construct(){
            $this->conn = new Conexion();
        }

        public function getAsignaturas(){
            $consulta = "select * from Asignatura";
            return $this->conn->consultar($consulta);
        }


        public function addAsignatura($nom, $cur, $tur){
            $consulta = "insert into Asignatura (nombre, curso_id, turno_id ) values ('$nom', '$cur', '$tur'); ";

            return $this->conn->consultar($consulta);
        }

        public function delAsignatura($id){
            $consulta = "delete from Asignatura where id_asignatura = '$id';";
            return $this->conn->consultar($consulta);
        }

        public function updateAsignatura($codigoAsignatura,$nombreAsignatura, $cursoAsignatura, $turnoAsignatura){
            $consulta = "update Asignatura set nombre = '$nombreAsignatura', curso_id = '$cursoAsignatura', turno_id = '$turnoAsignatura' where id_asignatura = $codigoAsignatura;";
            return $this->conn->consultar($consulta);
        }

    }
