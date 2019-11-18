<?php

function conectar()

{
$usuario = "root";
$contrasena = "tu_contraseña";  // en mi caso tengo contraseña pero en casa caso introducidla aquí.
$servidor = "localhost";
$basededatos = "callphone";


$conexion = mysqli_connect( $servidor, $usuario, "" ,$basededatos)
 or 
 die ("No se ha podido conectar al servidor de Base de datos");

 return $conexion;

}