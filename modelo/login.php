<?php
require "config/conexion.php";

class Login {
    private $_db;

    public function __construct() {
        $this->_db = new Conexion();
    }

    public function login($usuario, $contraseña) {
        $this->_db->conectar();
        $consulta = $this->_db->conexion->prepare(
            "SELECT * FROM login WHERE usuario = '" . $usuario . "' AND contraseña = '" . $contraseña . "'"
        );
        $consulta->execute();
        $this->_db->desconectar();

        if ($consulta->fetch(PDO::FETCH_OBJ)) {
            return true;
        } else {
            return false;
        }
    }
}
?>
