<?php
class Conexion {
    public $conexion;

    public function conectar() {
        try {
            $dsn = "mysql:host=localhost;dbname=" . DB_NAME . ";charset=utf8"; // Añade charset UTF-8
            $opciones = [
                PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,
                PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC
            ];
            $this->conexion = new PDO($dsn, DB_USER, DB_PASSWORD, $opciones);
            return $this->conexion;
        } catch (PDOException $e) {
            die("Error de conexión: " . $e->getMessage()); // Cuando falla la conexión claramente
        }
    }

    public function desconectar() {
        $this->conexion = null;
 }
}
?>