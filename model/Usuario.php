<?php
    class Usuario extends Conectar{

        public function registrar_usuario($nomb_y_apell, $email, $contraseña){
            $conectar=parent::conexion();
            parent::set_names();
            $sql="INSERT INTO usuario(nomb_y_apell, email, contraseña) VALUE(?,?,?)";
            $sql = $conectar->prepare($sql);
            $sql->bindValue(1, $nomb_y_apell);
            $sql->bindValue(2, $email);
            $sql->bindValue(3, $contraseña);
            $sql->execute();
        }
    }
?>