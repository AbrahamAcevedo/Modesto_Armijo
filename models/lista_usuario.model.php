<?php

    include "conexion.model.php";

    class Usuario{

        public $conn;

        public function __construct(){
            $this->conn = new Conexion();
        }

        public function getUsuario(){
            $consulta = "select * from Usuario";
            return $this->conn->consultar($consulta);
        }

        public function addUsuario($user, $contra, $tip){
            $consulta = "insert into Usuario (username, contraseña, tipo_usuario_id) values ('$user', '$contra', '$tip'); ";
            return $this->conn->consultar($consulta);
        }

        public function delUsuario($id){
            $consulta = "delete from Usuario where id_usuario = '$id';";
            return $this->conn->consultar($consulta);
        }
        public function updateUsuario($codigoUsuario, $nombreUsuario, $contraseñaUsuario, $tipoUsuario){
            $consulta = "update Usuario set username = '$nombreUsuario', contraseña = '$contraseñaUsuario', tipo_usuario_id = '$tipoUsuario' where id_usuario= $codigoUsuario;";
            return $this->conn->consultar($consulta);
        }
    }
?>