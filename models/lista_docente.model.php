<?php

    include "conexion.model.php";

    class Profesor{

        public $conn;

        public function __construct(){
            $this->conn = new Conexion();
        }

        public function getProfesor(){
            $consulta = "select * from Profesor";
            return $this->conn->consultar($consulta);
        }

        public function addProfesor($nomP, $core, $tel, $fech, $docA, $turD, $gen, $tipU ){
            $consulta = "insert into Profesor (nombre, correo, telefono, fecha_inicio, asignatura_id, turno_id, genero, tipo_usuario_id) values ('$nomP', '$core', '$tel', '$fech', '$docA', '$turD', '$gen', '$tipU'); ";
            return $this->conn->consultar($consulta);
        }

        public function delProfesor($id){
            $consulta = "delete from Profesor where id_profesor = '$id';";
            return $this->conn->consultar($consulta);
        }
        public function updateProfesor($codigoProfesor, $nombre, $correo, $tel, $asig, $tur, $gen, $tip){
            $consulta = "update Profesor set nombre = '$nombre', correo = '$correo', telefono = '$tel', asignatura_id = '$asig',  turno_id = '$tur',  genero = '$gen',  tipo_usuario_id = '$tip' where id_profesor = $codigoProfesor;";
            return $this->conn->consultar($consulta);
        }
        
    }
