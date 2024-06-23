<?php

    include "conexion.model.php";

    class AsistenciaEstudiante{

        public $conn;

        public function __construct(){
            $this->conn = new Conexion();
        }

        public function getAsistenciaEstudiante(){
            $consulta = "select * from AsistenciaEstudiante";
            return $this->conn->consultar($consulta);
        }

        public function addAsistenciaEstudiante($curss, $fech, $turn, $asig, $pro){
            $consulta = "insert into AsistenciaEstudiante (curso_id, fecha, turno_id, asignatura_id, profesor_id ) values ('$curss', '$fech', '$turn', '$asig', '$pro'); ";
            return $this->conn->consultar($consulta);
        }

        public function delAsistenciaEstudiante($id){
            $consulta = "delete from AsistenciaEstudiante where id_asistencia_estudiante = '$id';";
            return $this->conn->consultar($consulta);
        }
        public function updateAsistenciaEstudiante($codigoAsistencia, $curso, $turno, $asignatura, $profesor){
            $consulta = "update AsistenciaEstudiante set curso_id = '$curso', turno_id = '$turno', asignatura_id = '$asignatura', profesor_id = '$profesor' where id_asistencia_estudiante = $codigoAsistencia;";
            return $this->conn->consultar($consulta);
        }
    }
