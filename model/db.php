<?php
class Conectar{

    public static function conexion(){
        $direccion = "127.0.0.1";
        $usuario = "root";
        $contrasenya = "vIu5oSLpNMM7";
        $bd = "faltriquera";    
        $conexion=new mysqli($direccion, $usuario, $contrasenya, $bd);
        return $conexion;
    }
}
?>