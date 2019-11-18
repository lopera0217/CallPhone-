<?php

include("../Modelo/Agregar.php");

    if(isset($_POST['Nombre']) and isset( $_POST['radio']) and isset($_POST['Nombre']) and isset($_POST['Apellido']) and isset($_POST['Correo']) and isset($_POST['Sexo']) and isset($_POST['Turno']) and isset($_POST['Contrasena']) and isset($_POST['Confirmacion'])){


  
        $Documento = $_POST['Documento'];
        $Radio = $_POST['radio'];
        $Nombre = $_POST['Nombre'];
        $Apellido = $_POST['Apellido'];
        $Email = $_POST['Correo'];
        $Sexo = $_POST['Sexo'];
        $Turno = $_POST['Turno'];
        $Usuario = $_POST['Usuario'];
        $Rol = $_POST['Rol'];
        $Password = $_POST['Contrasena'];
        $Password_2 = $_POST['Confirmacion'];


            Agregar_Empleado($Documento,$Radio,$Nombre,$Apellido,$Email,$Sexo,$Turno,$Usuario,$Rol,$Password);

            header('location:../Vista/index.php');
    

    }

    if(isset($_POST['Usuario_inicio']) and isset($_POST['Contrasena_inicio']))
    {
        $Usuario = $_POST['Usuario_inicio'];
        $Contrasena = $_POST['Contrasena_inicio'];

        $Contrasena_BD = Usuario_inicio($Usuario);

        if($Contrasena)
        {
            if($Contrasena_BD ==  $Contrasena)
            {
                header('location:../Vista/Registro.php');
            }
            else
            {
                header('location:../Vista/index.php');
            }
            
        }
        else
        {
            header('location:../Vista/index.php');
        }


    }
    else
    {

        header('location:../Vista/index.php');

    }
