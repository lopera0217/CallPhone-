<?php require '../Modelo/Tablas.php';  ?>
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
    <link rel="icon" type="image/png" sizes="16x16" href="../../public/Img/favicon.png">
    <title>Admin Press Admin Template - The Ultimate Bootstrap 4 Admin Template</title>
    
   
    <link href="../../public/Css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="../../public/Css/MyStyle.css">
    <link rel="stylesheet" href="../../public/Css/style.css">
    <link rel="stylesheet" href="../../public/Css/megna-dark.css">
</head>


<body class="fix-header card-no-border">
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
    <div id="main-wrapper">
        <!-- ============================================================== -->
        <!-- Topbar header - style you can find in pages.scss -->
        <!-- ============================================================== -->
        <header class="topbar">
            <nav class="navbar top-navbar navbar-expand-md navbar-light">
                <!-- ============================================================== -->
                <!-- Logo -->
                <!-- ============================================================== -->
                <div class="navbar-header">
                    <a class="navbar-brand" href="#">
                        <!-- Logo icon --><b>
                            <!--You can put here icon as well // <i class="wi wi-sunset"></i> //-->
                            <!-- Dark Logo icon -->
                            <img src="../asset/logo-icon.png" alt="homepage" class="dark-logo" />
                            <!-- Light Logo icon -->
                            <img src="../../public/Img/logo-light-icon.png" alt="homepage" class="light-logo" />
                        </b>
                        <!--End Logo icon -->
                        <!-- Logo text --><span>
                            <!-- dark Logo text -->
                            <img src="../../public/Img/logo-text.png" alt="homepage" class="dark-logo" />
                            <!-- Light Logo text -->
                            <img src="../../public/Img/logo-text.png" class="light-logo" alt="homepage" /></span>
                    </a>
                </div>
                <!-- ============================================================== -->
                <!-- End Logo -->
                <!-- ============================================================== -->
                <div class="navbar-collapse">
                    <!-- ============================================================== -->
                    <!-- toggle and nav items -->
                    <!-- ============================================================== -->
                    <ul class="navbar-nav mr-auto mt-md-0">
                        <!-- This is  -->
                        <li class="nav-item"> <a
                                class="nav-link nav-toggler hidden-md-up text-muted waves-effect waves-dark"
                                href="javascript:void(0)"><i class="mdi mdi-menu"></i></a> </li>
                        <li class="nav-item m-l-10"> <a
                                class="nav-link sidebartoggler hidden-sm-down text-muted waves-effect waves-dark"
                                href="javascript:void(0)"><i class="ti-menu"></i></a> </li>
                        <!-- ============================================================== -->
                    </ul>
                    <!-- ============================================================== -->
                    <!-- User profile and search -->
                    <!-- ============================================================== -->
                    <ul class="navbar-nav my-lg-0">

                        <!-- ============================================================== -->
                        <!-- Profile -->
                        <!-- ============================================================== -->
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle text-muted waves-effect waves-dark" href=""
                                data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><img
                                    src="../../public/Img/8.jpg" alt="user" class="profile-pic" /></a>
                            <div class="dropdown-menu dropdown-menu-right scale-up">
                                <ul class="dropdown-user">
                                    <li>
                                        <div class="dw-user-box">
                                            <div class="u-img"><img src="../assets/images/users/1.jpg" alt="user"></div>
                                            <div class="u-text">
                                                <h4>Steave Jobs</h4>
                                                <p class="text-muted">varun@gmail.com</p><a href="pages-profile.html"
                                                    class="btn btn-rounded btn-danger btn-sm">View Profile</a>
                                            </div>
                                        </div>
                                    </li>
                                    <li role="separator" class="divider"></li>
                                    <li><a href="#"><i class="ti-user"></i> My Profile</a></li>
                                    <li><a href="#"><i class="ti-wallet"></i> My Balance</a></li>
                                    <li><a href="#"><i class="ti-email"></i> Inbox</a></li>
                                    <li role="separator" class="divider"></li>
                                    <li><a href="#"><i class="ti-settings"></i> Account Setting</a></li>
                                    <li role="separator" class="divider"></li>
                                    <li><a href="/Login/Login.html"><i class="fa fa-power-off"></i> Cerrar Sesión</a>
                                    </li>
                                </ul>
                            </div>
                        </li>
                    </ul>
                </div>
            </nav>
        </header>
        <!-- ============================================================== -->
        <!-- End Topbar header -->
        <!-- ============================================================== -->
        <!-- ============================================================== -->
        <!-- Left Sidebar - style you can find in sidebar.scss  -->
        <!-- ============================================================== -->
        <aside class="left-sidebar">
            <!-- Sidebar scroll-->
            <div class="scroll-sidebar">
                <!-- User profile -->
                <div class="user-profile">
                    <!-- User profile image -->
                    <div class="profile-img"> <img src="../../public/Img/8.jpg" alt="user" />
                        <!-- this is blinking heartbit-->
                        <div class="notify setpos"> <span class="heartbit"></span> <span class="point"></span> </div>
                    </div>
                    <!-- User profile text-->
                    <div class="profile-text">
                        <h5>Nombre Usuario</h5>
                        <!-- <a href="#" class="dropdown-toggle u-dropdown" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="true"><i class="mdi mdi-settings"></i></a>
                             <a href="app-email.html" class="" data-toggle="tooltip" title="Email"><i class="mdi mdi-gmail"></i></a> -->
                        <a href="../Login/Login.html" class="" data-toggle="tooltip" title="Cerrar Sesión"><i
                                class="mdi mdi-power"></i></a>

                        <div class="dropdown-menu animated flipInY">
                            <!-- text-->
                            <a href="#" class="dropdown-item"><i class="ti-user"></i> My Profile</a>
                            <!-- text-->
                            <a href="#" class="dropdown-item"><i class="ti-wallet"></i> My Balance</a>
                            <!-- text-->
                            <a href="#" class="dropdown-item"><i class="ti-email"></i> Inbox</a>
                            <!-- text-->
                            <div class="dropdown-divider"></div>
                            <!-- text-->
                            <a href="#" class="dropdown-item"><i class="ti-settings"></i> Account Setting</a>
                            <!-- text-->
                            <div class="dropdown-divider"></div>
                            <!-- text-->
                            <a href="../Login/Login.html" class="dropdown-item"><i class="fa fa-power-off"></i> Logout</a>
                            <!-- text-->
                        </div>
                    </div>
                </div>
                <!-- End User profile text-->
                <!-- Sidebar navigation-->
                <nav class="sidebar-nav">
                    <ul id="sidebarnav">
                        <li class="nav-devider"></li>
                        <li class="nav-small-cap">Menú</li>
                        <li> <a class="has-arrow waves-effect waves-dark" href="#" aria-expanded="false"><i
                                    class="mdi mdi-bullseye"></i><span class="hide-menu">Gestionar</span></a>
                            <ul aria-expanded="false" class="collapse">
                                <li><a href="#">Personas</a></li>
                                <li><a href="#">Usuarios</a></li>
                            </ul>
                        </li>
                    </ul>
                </nav>
                <!-- End Sidebar navigation -->
            </div>
            <!-- End Sidebar scroll-->
        </aside>
        <!-- ============================================================== -->
        <!-- End Left Sidebar - style you can find in sidebar.scss  -->
        <!-- ============================================================== -->

        <!-- Page wrapper  -->
        <!-- ============================================================== -->
        <div class="page-wrapper">

            <!-- Titulo página -->
            <div class="row page-titles">
                <div class="col-md-5 align-self-center">
                    <h3 class="text-themecolor">Registro de usuarios</h3>
                </div>
                <div class="col-md-7 align-self-center">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="javascript:void(0)">Home</a></li>
                        <li class="breadcrumb-item">pages</li>
                        <li class="breadcrumb-item active">Registro de usuarios</li>
                    </ol>
                </div>
            </div>

            <!-- ============================================================== -->
            <!-- Container fluid  -->
            <!-- ============================================================== -->
            <div class="container-fluid">
                <!-- ============================================================== -->
                <!-- Start Page Content -->
                <!-- ============================================================== -->

                <div class="row">
                    <div class="col-lg-12">
                        <div class="card card-outline-success">
                            <div class="card-header MyStyle_Card_Header">
                                <h4 class="m-b-0 text-white">Formulario de registro de usuarios</h4>
                            </div>
                            <div class="card-body">
                                <form action="../Controlador/Recibir_datos.php" class="form-horizontal" method="post">
                                    <div class="form-body">
                                        <h3 class="box-title">Empleado:</h3>
                                        <hr class="m-t-0 m-b-40">
                                        <div class="row">
                                            <div class="col-md-6">
                                                <div class="form-group row">
                                                    <label class="control-label text-right col-md-3">Documento</label>
                                                    <div class="col-md-9">
                                                        <div class="input-group">
                                                            <div class="input-group-prepend">
                                                                <span class="input-group-text" id="basic-addon1" >
                                                                    <i class="ti-credit-card"></i>
                                                                </span>
                                                            </div>
                                                            <input type="text" class="form-control" required="" name="Documento"
                                                                id="exampleInputuname"
                                                                placeholder="Número de documento">
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <!--/span-->
                                            <div class="col-md-6">
                                                <div class="form-group  row">
                                                    <label class="control-label text-right col-md-3">Tipo de
                                                        documento</label>
                                                    <div class="col-md-9">
                                                        <div class="m-b-10">
                                                            <div class="row">
                                                                <div class="col-6">
                                                                    <label class="custom-control custom-radio">
                                                                        <input id="radio3" name="radio" type="radio"
                                                                            class="custom-control-input">
                                                                        <span class="custom-control-label">CC</span>
                                                                    </label>
                                                                    <label class="custom-control custom-radio">
                                                                        <input id="radio4" value="PA" name="radio" type="radio"
                                                                            class="custom-control-input">
                                                                        <span class="custom-control-label">TI</span>
                                                                    </label>

                                                                </div>
                                                                <div class="col-6">
                                                                    <label class="custom-control custom-radio">
                                                                        <input id="radio4" value="CE" name="radio" type="radio"
                                                                            class="custom-control-input">
                                                                        <span class="custom-control-label">CE</span>
                                                                    </label>
                                                                    <label class="custom-control custom-radio">
                                                                        <input id="radio4" value="PA" name="radio" type="radio"
                                                                            class="custom-control-input"> 
                                                                        <span class="custom-control-label">PA </span>
                                                                    </label>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <!--/span-->
                                        </div>
                                        <!--/row-->
                                        <div class="row">
                                            <div class="col-md-6">
                                                <div class="form-group row">
                                                    <label class="control-label text-right col-md-3">Nombre</label>
                                                    <div class="col-md-9">
                                                        <div class="input-group">
                                                            <div class="input-group-prepend">
                                                                <span class="input-group-text" id="basic-addon1">
                                                                    <i class="ti-user"></i>
                                                                </span>
                                                            </div>
                                                            <input type="text" class="form-control" name="Nombre"
                                                                id="exampleInputuname" placeholder="Nombre Completo" required="">
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <!--/span-->
                                            <div class="col-md-6">
                                                <div class="form-group row">
                                                    <label class="control-label text-right col-md-3">Apellidos</label>
                                                    <div class="col-md-9">
                                                        <div class="input-group">
                                                            <div class="input-group-prepend">
                                                                <span class="input-group-text" id="basic-addon1">
                                                                    <i class="ti-user"></i>
                                                                </span>
                                                            </div>
                                                            <input type="text" class="form-control" name="Apellido"
                                                                id="exampleInputuname" placeholder="Apellidos" required="">
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <!--/span-->
                                        </div>
                                        <!--/row-->
                                        <div class="row">
                                            <div class="col-md-6">
                                                <div class="form-group row">
                                                    <label class="control-label text-right col-md-3">Correo</label>
                                                    <div class="col-md-9">
                                                        <div class="input-group">
                                                            <div class="input-group-prepend">
                                                                <span class="input-group-text" id="basic-addon1">
                                                                    <i class="ti-email"></i>
                                                                </span>
                                                            </div>
                                                            <input type="email" class="form-control" name="Correo"
                                                                id="exampleInputuname" placeholder="Ingresar correo" required="">
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="form-group row">
                                                    <label class="control-label text-right col-md-3">Sexo</label>
                                                    <div class="col-md-9">
                                                        <div class="input-group">
                                                            <div class="input-group-prepend">
                                                                <span class="input-group-text" id="basic-addon1">
                                                                    <i class="icon-star"></i>
                                                                </span>
                                                            </div>
                                                            <select class="form-control custom-select" name="Sexo">
                                                                <option value="">Masculino</option>
                                                                <option value="">Femenino</option>
                                                            </select>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="form-group row">
                                                    <label class="control-label text-right col-md-3">Turno</label>
                                                    <div class="col-md-9">
                                                        <div class="input-group">
                                                            <div class="input-group-prepend">
                                                                <span class="input-group-text" id="basic-addon1">
                                                                    <i class=" icon-clock "></i>
                                                                </span>
                                                            </div>
                                                            <select class="form-control custom-select" name="Turno">
                                                                <option value="Turno1">Turno 1</option>
                                                                <option value="Turno2">Turno 2</option>
                                                            </select>
                                                        </div>

                                                    </div>
                                                </div>
                                            </div>
                                            <!--/span-->
                                            <div class="col-md-6">
                                                <div class="card">
                                                    <div class="card-body MyStyle_File_Card">
                                                        <h4 class="card-title">Fotografía</h4>
                                                        <!-- <label for="input-file-now-custom-3">You can combine
                                                            options</label> -->
                                                        <input type="file" id="input-file-now-custom-3" class="dropify"
                                                            data-height="100"
                                                            data-default-file="../../public/Img/8.jpg" />
                                                    </div>
                                                </div>
                                            </div>
                                            <!--/span-->
                                        </div>
                                        <!-- /row -->
                                        <div class="row">
                                            <div class="col-md-6">

                                            </div>
                                        </div>
                                        <!-- /row -->
                                        <h3 class="box-title">Usuario:</h3>
                                        <hr class="m-t-0 m-b-40">
                                        <!--/row-->
                                        <div class="row">
                                            <div class="col-md-6">
                                                <div class="form-group row">
                                                    <label class="control-label text-right col-md-3">Usuario</label>
                                                    <div class="col-md-9">
                                                        <div class="input-group">
                                                            <div class="input-group-prepend">
                                                                <span class="input-group-text" id="basic-addon1">
                                                                    <i class="ti-user"></i>
                                                                </span>
                                                            </div>
                                                            <input type="text" class="form-control" name="Usuario"
                                                                id="exampleInputuname" placeholder="Nombre usuario" required="">
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="form-group row">
                                                    <label class="control-label text-right col-md-3">Tipo de
                                                        usuario</label>
                                                    <div class="col-md-9">
                                                        <div class="input-group">
                                                            <div class="input-group-prepend">
                                                                <span class="input-group-text" id="basic-addon1">
                                                                    <i class="icon-people "></i>
                                                                </span>
                                                            </div>
                                                            <select class="form-control custom-select" name="Rol">
                                                                <?php while ($Roles = mysqli_fetch_array($Usuario_Resultado)) { ?>
                                                                    <option value=<?php echo $Roles['Id_Rol']; ?>><?php echo $Roles['Nombre']; ?> </option>
                                                                <?php } ?> 
                                                            </select>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-6">
                                                <div class="form-group row">
                                                    <label class="control-label text-right col-md-3">Contraseña</label>
                                                    <div class="col-md-9">
                                                        <div class="input-group">
                                                            <div class="input-group-prepend">
                                                                <span class="input-group-text" id="basic-addon1">
                                                                    <i class="ti-lock"></i>
                                                                </span>
                                                            </div>
                                                            <input type="password" class="form-control"
                                                                id="exampleInputuname" name="Contrasena"
                                                                placeholder="Ingresar contraseña" required="">
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <!--/span-->
                                            <div class="col-md-6">
                                                <div class="form-group row">
                                                    <label class="control-label text-right col-md-3">Confirmar</label>
                                                    <div class="col-md-9">
                                                        <div class="input-group">
                                                            <div class="input-group-prepend">
                                                                <span class="input-group-text" id="basic-addon1">
                                                                    <i class="ti-lock"></i>
                                                                </span>
                                                            </div>
                                                            <input type="password" class="form-control"
                                                                id="exampleInputuname" name="Confirmacion"
                                                                placeholder="Confirmar contraseña" required="">
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <!--/span-->
                                        </div>
                                        <!--/row-->
                                    </div>
                                    <hr>
                                    <div class="form-actions">
                                        <div class="row">
                                            <div class="col-md-6">
                                                <div class="row">
                                                    <div class="col-md-offset-3 col-md-9">
                                                        <button type="submit" class="btn btn-success">Guardar</button>
                                                        <button type="button" class="btn btn-inverse">Cancelar</button>
                                                    </div>
                                                </div>
                                            </div>
                                            <!-- <div class="col-md-6"> </div> -->
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- ============================================================== -->
                <!-- End PAge Content -->
                <!-- ============================================================== -->
            </div>
            <!-- End Container fluid  -->
            <!-- ============================================================== -->
        </div>
        <!-- ============================================================== -->
        <!-- End Page wrapper  -->
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
        <script>
            $(document).ready(function () {
                // Basic
                $('.dropify').dropify();

                // Translated
                $('.dropify-fr').dropify({
                    messages: {
                        default: 'Glissez-déposez un fichier ici ou cliquez',
                        replace: 'Glissez-déposez un fichier ou cliquez pour remplacer',
                        remove: 'Supprimer',
                        error: 'Désolé, le fichier trop volumineux'
                    }
                });

                // Used events
                var drEvent = $('#input-file-events').dropify();

                drEvent.on('dropify.beforeClear', function (event, element) {
                    return confirm("Do you really want to delete \"" + element.file.name + "\" ?");
                });

                drEvent.on('dropify.afterClear', function (event, element) {
                    alert('File deleted');
                });

                drEvent.on('dropify.errors', function (event, element) {
                    console.log('Has Errors');
                });

                var drDestroy = $('#input-file-to-destroy').dropify();
                drDestroy = drDestroy.data('dropify')
                $('#toggleDropify').on('click', function (e) {
                    e.preventDefault();
                    if (drDestroy.isDropified()) {
                        drDestroy.destroy();
                    } else {
                        drDestroy.init();
                    }
                })
            });
        </script>



        <!-- ============================================================== -->
        <!-- Style switcher -->
        <!-- ============================================================== -->
     
</body> 

</html>