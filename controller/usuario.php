<?php
    require_once("../config/conexion.php");
    require_once("../model/Usuario.php");

    $usuario = new Usuario();
    
    switch($_GET["op"]){
        case "registrar":
            $datos = $usuario->get_usuario_correo($_POST["email"]);
            if(is_array($datos) == true && count($datos) == 0){
                $usuario->registrar_usuario($_POST["nomb_y_apell"], $_POST["email"], $_POST["contrasenia"]);
                echo "Registrado";
            } else {
                echo "Correo Existente. Intente con otro correo.";
            }
            break;
    }
?>