<?php

$host = "localhost";
$user = "u575201282_lucas";
$pass = "Cake+cake20";
$db = "u575201282_cake_cake";

function conectar()
    {global $host, $user, $pass, $db; 
     $cnx = mysqli_connect ($host, $user, $pass, $db);
     if (mysqli_connect_errno()){
        echo "Conexión fallida" .mysqli_connect_error();
        exit(); } 
    return $cnx;}

$conexion = conectar();
    
?>
