<?php
require_once "config/conexion.php"; // Incluye la conexión
class LoginController{
    public static function index(){
        require "vista/front/formLogin.php"; // Muestra el formulario
    }

    public static function auth(){
        if($_SERVER['REQUEST_METHOD'] === 'POST'){
            $conexion = (new Conexion())->conectar();
            $usuariol = $_POST["txtUsuariol"] ?? "";
            $contraseña = $_POST["txtcontraseña"] ?? ""; // Validación básica
            if(empty($usuariol) || empty($contraseña)){
                header("Location: ". urlsite ."page=login&msg=Usuariol y contraseña requeridos");
                exit;
            }
            // Ejemplo de autenticación (Usa password_hash() en producción)
            $consulta = $conexion->prepare("SELECT * FROM usuarios WHERE email = ?");
            $consulta->execute([$usuariol]);
            $user = $consulta->fetch();
            if($user && password_verify($contraseña, $user['password'])){ 
                // Inicia sesión y redirige
                session_start();
                $_SESSION['user'] = $user;
                header("Location: ". urlsite ."page=iniclo");
            }else{
                header("Location: ". urlsite ."page=login&msg=Credenciales+incorrectas");
            }
        }
}
}
?>