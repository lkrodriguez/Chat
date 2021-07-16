<?php
//Conexion con la  db
$servidor = "localhost";
$usuario = "root";
$password = "";
$base_datos = ""; //Nombre de la base de datos 

$conexion = new mysqli($servidor, $usuario, $password, $base_datos);


//Funcion para colocar la solo la Hora en el chat 
function formatearFecha($fecha){
    return date('g:i a', strtotime($fecha));
}




?>