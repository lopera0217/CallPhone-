<?php

require '../Modelo/Tablas.php';

function Agregar_Empleado($Documento,$Radio,$Nombre,$Apellido,$Email,$Sexo,$Turno,$Usuario,$Rol,$Password)
{


    $conexion = conectar();

    $Sql_Usuario = "INSERT INTO 
    usuarios(Id_Rol,Usuario,Contrasena)

    VALUES 

    ($Rol,'$Usuario','$Password')";
    
    mysqli_query($conexion,$Sql_Usuario);

    $Id_Usuario =  Usuario_Consulta($Usuario);

    echo $Id_Usuario;

    $Sql_Empleado = "INSERT INTO 
    empleados(Id_Usuarios, Documento,Nombre,Apellidos,Email,Sexo,Turno)

    VALUES 

    ($Id_Usuario,'$Documento','$Nombre','$Apellido','$Email','$Sexo','$Turno')";

 
    $Usuario_Resultado = mysqli_query($conexion,$Sql_Empleado);


}




