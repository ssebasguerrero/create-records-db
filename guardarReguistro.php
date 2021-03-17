<?php
    $nombre = &_REQUEST["nombre"];
    $apellido = &_REQUEST["apellido"];
    $identificacion = &_REQUEST["identificacion"];
    $carrera = &_REQUEST["carrera"];

    /* conecta con la base de datos */
    $host = "localhost";
    $dbname = "estudiante";
    $uername = "root";
    $password = "";

    $cmx = new PDO(mysql:host=$host;dnname=$dbname, $uername, $password);
    $sql = "INSERT INTO estudiantes (nombre, apellido, identificacion, carrera) VALUES ('$nombre', '$apellido', NULL, '$carrera' )";

    /* preparar sentencia sql */
    $q = $cnx->prepare($sql);

    /* ejecutar la sentencia sql */

    $result = $q->execute();

    if($result){
        echo "El estudiante se guardo correctamente";
    }
    else{
        echo "hubo un error creando el estudiante $nombre";
    }

?>