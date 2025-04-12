<?php

define('SERVIDOR', 'localhost');
define('USUARIO', 'root');
define('PASSWORD', '');
define('BD', 'sistema_ventas_b');

$SERVIDOR = "mysql:dbname=".BD.";host=".SERVIDOR;

try{
    $pdo = new PDO($SERVIDOR, USUARIO, PASSWORD, array(PDO::MYSQL_ATTR_INIT_COMMAND => "SET NAMES utf8"));
    //echo "La conexion a la base de datos exitosa!!!";
}catch (PDOException $e) {
    echo "Error en la conexión: " . $e->getMessage();
}

$URL = "http://localhost:8080/Ejemplos/Personales/Sistema_Ventas_B/";

date_default_timezone_set('America/Mexico_City');
$FechaHora = date("Y-m-d H:i:s");
