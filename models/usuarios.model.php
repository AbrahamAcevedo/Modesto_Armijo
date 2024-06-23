<?php
include_once "conexion.model.php";
class Users {
    private $db;
    public $usuario;
    public $contrasena;

    public function __construct() {
        $this->db = new Conexion();
    }

    public function authenticate() {
        $consulta = "select * from usuario where username = '$this->usuario' and contraseña = '$this->contrasena';";
        return $this->db->consultar($consulta);
    }
}