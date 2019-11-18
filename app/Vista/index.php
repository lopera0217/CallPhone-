<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <!-- Tell the browser to be responsive to screen width -->
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <!-- Favicon icon -->
    
    <title>Admin Press Admin Template - The Ultimate Bootstrap 4 Admin Template</title>
    <!-- Bootstrap Core CSS -->
    <link rel="icon" type="image/png" sizes="16x16" href="../../public/Img/favicon.png">
    <link href="../../public/Css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="../../public/Css/MyStyle.css">
    <link rel="stylesheet" href="../../public/Css/style.css">
    <link rel="stylesheet" href="../../public/Css/megna-dark.css">
  
   
</head>

<body>
    <!-- ============================================================== -->
    <!-- Preloader - style you can find in spinners.css -->
    <!-- ============================================================== -->
    <div class="preloader">
        <svg class="circular" viewBox="25 25 50 50">
            <circle class="path" cx="50" cy="50" r="20" fill="none" stroke-width="2" stroke-miterlimit="10" /> </svg>
    </div>
    <!-- ============================================================== -->
    <!-- Main wrapper - style you can find in pages.scss -->
    <!-- ============================================================== -->
    <section id="wrapper">
        <div class="login-register MyStyle_login_fondo">
            <div class="login-box card MyStyle_login_box">

                <div class="row">
                    <div class="col-6">
                        <div class="card-body MyStyle_Card1_Fondo zoomInLeft animated">
                            
                        </div>
                    </div>
                    <div class="col-6">
                        <div class="card-body MyStyle_Card2_box ">
                            <div class="MyStyle_Box_Logo">
                                <img src="../../public/Img/logo.jpg" class="MyStyle_Logo_Empresa" alt="">
                            </div>
                            
                            <form class="form-horizontal form-material" id="loginform" action="../Controlador/Recibir_datos.php" method="post">
                                <!-- <h3 class="box-title m-b-20">Ekatemp S</h3> -->
                                <div class="form-group ">
                                    <div class="col-xs-12">
                                        <input class="form-control MyStyle_Form_Control" type="text" required=""
                                            placeholder="Usuario" name="Usuario_inicio">
                                    </div>
                                </div>
                                <div class="form-group">
                                    <div class="col-xs-12">
                                        <input class="form-control MyStyle_Form_Control" type="password" required=""
                                            placeholder="Contraseña" name="Contrasena_inicio">
                                    </div>
                                </div>

                                <div class="form-group text-center m-t-20">
                                    <div class="col-xs-12">
                                        <button
                                            class="btn btn-lg btn-block text-uppercase MyStyle_Btn_Login"
                                            type="submit">Iniciar Sesión
                                        </button>
                                    </div>
                                </div>
                                <div class="form-group  text-center">
                                    <div class="col-md-12 font-14 ">
                                        <a href="javascript:void(0)" id="to-recover" class="text-dark">
                                            <i class="fa fa-lock m-r-5"></i>
                                            Recuperar Contraseña</a>
                                    </div>
                                </div>
                            </form>

                            <form class="form-horizontal" id="recoverform" action="index.html">
                                <a href="javascript:void(0)" id="to-login" class="MyStyle_btn_Regresar"><i class="fa fa-mail-reply"></i></a>
                                <div class="form-group ">
                                    <div class="col-xs-12">
                                        <h3>Recuperar Contraseña</h3>
                                        <p class="text-muted">Ingresa tu correo y sigue las instrucciones.
                                        </p>
                                    </div>
                                </div>
                                <div class="form-group ">
                                    <div class="col-xs-12">
                                        <input class="form-control" type="text" required="" placeholder="Email"> </div>
                                </div>
                                <div class="form-group text-center m-t-20">
                                    <div class="col-xs-12">
                                        <button
                                            class="btn btn-lg btn-block text-uppercase MyStyle_Btn_Login"
                                            type="submit">Restablecer</button>
                                    </div>
                                </div>
                                <!-- <div class="form-group text-center m-t-20">
                                        <div class="col-xs-12">
                                            <button
                                                class="btn btn-lg btn-block text-uppercase MyStyle_Btn_Login"
                                                type="submit">Iniciar Sesión
                                            </button>
                                        </div>
                                    </div> -->
                            </form>
                        </div>
                    </div>
                    <!-- Columna -->
                </div>
            </div>
        </div>
    </section>
    <!-- ============================================================== -->
    <!-- End Wrapper -->
    <!-- ============================================================== -->
    <!-- ============================================================== -->
    <!-- All Jquery -->
    <!-- ============================================================== -->
    <script src="../../public/Js/jquery.min.js"></script>
    <script src="../../public/Js/bootstrap.min.js"></script>
    <!-- Bootstrap tether Core JavaScript -->
    <script src="../../public/Js/custom.min.js"></script>
    <!-- slimscrollbar scrollbar JavaScript -->
    <script src="../../public/Js/jquery.slimscroll.js"></script>
    <!--Wave Effects -->
    <script src="../../public/Js/jquery.sparkline.min.js"></script>
    <!--Menu sidebar -->
    <script src="../../public/Js/jQuery.style.switcher.js"></script>
    <!--stickey kit -->
    <script src="../../public/Js/popper.min.js"></script>
    <script src="../../public/Js/sidebarmenu.js"></script>
    <!--Custom JavaScript -->
    <script src="../../public/Js/sticky-kit.min.js"></script>
    <!-- ============================================================== -->
    <!-- Style switcher -->
    <!-- ============================================================== -->
    <script src="../../public/Js/waves.js"></script>
</body>

</html>