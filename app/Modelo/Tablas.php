<?php

include("../Conexion/Conexion.php");

     $Sql = "SELECT * FROM roles";

    $conexion = conectar();

    $Usuario_Resultado = mysqli_query($conexion,$Sql);


    function Usuario_Consulta($Usuario)
    {
        $conexion = conectar();

        $Sql_Consultar = "SELECT * FROM usuarios WHERE Usuario = '$Usuario'";

        $Id_Usuario = mysqli_query($conexion,$Sql_Consultar);

        $Id= mysqli_fetch_array($Id_Usuario);

        return $Id['Id_Usuarios'];
    }

    function Usuario_inicio($Usuario)
    {
        $conexion = conectar();

        $Sql_Consultar = "SELECT * FROM usuarios WHERE Usuario = '$Usuario'";

        $Id_Usuario = mysqli_query($conexion,$Sql_Consultar);

        $Id= mysqli_fetch_array($Id_Usuario);

        return $Id['Contrasena'];
    }




     
    



