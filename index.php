<?php
    require "config/config.php";
    $page = "index";
    if(isset($_GET['page'])){
        $page=$_GET['page'];
    }
    switch($page){
        case 'login':
            require "controlador/LoginController.php";
            LoginController::index();
            break;
        case 'logout':
            require "controlador/LoginController.php";
            LoginController::auth();
            break;
        case 'admin': echo "Iniciaste Sesion. Felicitaciones"; break;
        default:
            echo "<a href='".urlsite."?page=login'>INICIAR SESION.</a>";
            break;
    }
?>