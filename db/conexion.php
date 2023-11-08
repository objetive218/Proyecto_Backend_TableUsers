<?php

    $host = 'localhost';
    $usuario = 'root';
    $contraseña = '';
    $basedatos = 'proyecto_backend';

    $conexion = new mysqli($host,$usuario,$contraseña,$basedatos);

    if ($conexion->connect_errno) {
        echo "fallos en conexión";
        exit();
    }

?>