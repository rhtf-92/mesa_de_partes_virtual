<!doctype html>
<html lang="es">

    <head>
        <meta charset="utf-8">
        <title>Acceso | DSI - Mesa de Partes</title>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta content="Sistema de Mesa de Partes Virtual - P.E. Desarrollo de Sistemas de Informacion _ IESTP SUISA" name="description">
        <meta content="Themesbrand" name="author">
        <!-- preloader css -->
        <link rel="stylesheet" href="../../assets/css/preloader.min-1.css" type="text/css">
        <!-- Bootstrap Css -->
        <link href="../../assets/css/bootstrap.min-1.css" id="bootstrap-style" rel="stylesheet" type="text/css">
        <!-- Icons Css -->
        <link href="../../assets/css/icons.min-1.css" rel="stylesheet" type="text/css">
        <!-- App Css-->
        <link href="../../assets/css/app.min-1.css" id="app-style" rel="stylesheet" type="text/css">
        <!-- AlertifyJS CSS -->
        <link rel="stylesheet" href="../../assets/css/alertify.min.css"/>
        <link rel="stylesheet" href="../../assets/css/default.min.css"/>
    </head>

    <body>

    <!-- <body data-layout="horizontal"> -->
        <div class="auth-page">
            <div class="container-fluid p-0">
                <div class="row g-0">
                    <div class="col-xxl-3 col-lg-4 col-md-5">
                        <div class="auth-full-page-content d-flex p-sm-5 p-4">
                            <div class="w-100">
                                <div class="d-flex flex-column h-100">
                                    <div class="mb-4 mb-md-5 text-center">
                                        <a href="../../" class="d-block auth-logo">
                                            <img src="../../assets/picture/logo-sm-1.png" alt="" height="100"> <span class="logo-txt">DSI - IESTP SUISA</span>
                                        </a>
                                    </div>
                                    <div class="auth-content my-auto">
                                        <div class="text-center">
                                            <h5 class="mb-0">Registrar Cuenta</h5>
                                            <p class="text-muted mt-2">Llene el formulario para registrar su cuenta.</p>
                                        </div>
                                        <form id="formRegistro" class="needs-validation custom-form mt-4 pt-2" novalidate="" action="index.html">                            
                                            <div class="mb-3">
                                                <label for="email" class="form-label">CORREO ELECTÓNICO:</label>
                                                <input type="email" class="form-control" id="email" name="email" placeholder="Ingrese su correo electrónico" required="">
                                                <div class="validation-error text-danger"></div>
                                            </div>
                                            
                                            <div class="mb-3">
                                                <label for="nomb_y_apell" class="form-label">NOMBRES Y APELLIDOS:</label>
                                                <input type="text" class="form-control" id="nomb_y_apell" name="nomb_y_apell" placeholder="Ingrese sus Nombres" required="">
                                                <div class="validation-error text-danger"></div>  
                                            </div>
                    
                                            <div class="mb-3">
                                                <label for="contrasenia" class="form-label">CONTRASEÑA:</label>
                                                <input type="password" class="form-control" id="contrasenia" name="contrasenia" placeholder="Ingrese su contraseña" required="">
                                                <div class="validation-error text-danger"></div>
                                            </div>

                                            <div class="mb-3">
                                                <label for="pswd_confirm" class="form-label">CONFIRMAR CONTRASEÑA:</label>
                                                <input type="password" class="form-control" id="pswd_confirm" name="pswd_confirm" placeholder="Confirme su contraseña" required="">
                                                <div class="validation-error text-danger"></div>
                                            </div>

                                            <div class="mb-4">
                                                <p class="mb-0">Al registrarse Ud. acepta los <a href="#" class="text-primary"><strong>Términos y Condiciones</strong></a></p>
                                            </div>
                                            <div class="mb-3">
                                                <button class="btn btn-primary w-100 waves-effect waves-light" type="submit" id="submit" name="submit" >Registrar</button>
                                            </div>
                                        </form>

                                        <!-- <div class="mt-4 pt-2 text-center">
                                            <div class="signin-other-title">
                                                <h5 class="font-size-14 mb-3 text-muted fw-medium">- Sign up using -</h5>
                                            </div>

                                            <ul class="list-inline mb-0">
                                                <li class="list-inline-item">
                                                    <a href="javascript:void()" class="social-list-item bg-primary text-white border-primary">
                                                        <i class="mdi mdi-facebook"></i>
                                                    </a>
                                                </li>
                                                <li class="list-inline-item">
                                                    <a href="javascript:void()" class="social-list-item bg-info text-white border-info">
                                                        <i class="mdi mdi-twitter"></i>
                                                    </a>
                                                </li>
                                                <li class="list-inline-item">
                                                    <a href="javascript:void()" class="social-list-item bg-danger text-white border-danger">
                                                        <i class="mdi mdi-google"></i>
                                                    </a>
                                                </li>
                                            </ul>
                                        </div> -->

                                        <div class="mt-5 text-center">
                                            <p class="text-muted mb-0">Ya tiene una cuenta? <a href="../../index.php" class="text-primary fw-semibold"> Inicie Sesion </a> </p>
                                        </div>
                                    </div>
                                    <div class="mt-4 mt-md-5 text-center">
                                        <p class="mb-0">© <script>document.write(new Date().getFullYear())</script> DSI_Lover´s <i class="mdi mdi-heart text-danger"></i> Unidad de Innovación Tecnológica</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- end auth full page content -->
                    </div>
                    <!-- end col -->

                    <!-- CARRUSEL -->
                    <div class="col-xxl-9 col-lg-8 col-md-7">
                        <div class="auth-bg pt-md-5 p-4 d-flex">
                            <div class="bg-overlay bg-primary"></div>
                            <ul class="bg-bubbles">
                                <li></li>
                                <li></li>
                                <li></li>
                                <li></li>
                                <li></li>
                                <li></li>
                                <li></li>
                                <li></li>
                                <li></li>
                                <li></li>
                            </ul>
                            <!-- end bubble effect -->
                            <div class="row justify-content-center align-items-center">
                                <div class="col-xl-7">
                                    <div class="p-0 p-sm-4 px-xl-0">
                                        <div id="reviewcarouselIndicators" class="carousel slide" data-bs-ride="carousel">
                                            <div class="carousel-indicators carousel-indicators-rounded justify-content-start ms-0 mb-0">
                                                <button type="button" data-bs-target="#reviewcarouselIndicators" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
                                                <button type="button" data-bs-target="#reviewcarouselIndicators" data-bs-slide-to="1" aria-label="Slide 2"></button>
                                                <button type="button" data-bs-target="#reviewcarouselIndicators" data-bs-slide-to="2" aria-label="Slide 3"></button>
                                            </div>
                                            <!-- end carouselIndicators -->
                                            <div class="carousel-inner">
                                                <div class="carousel-item active">
                                                    <div class="testi-contain text-white">
                                                        <i class="bx bxs-quote-alt-left text-success display-6"></i>

                                                        <h4 class="mt-4 fw-medium lh-base text-white">“I feel confident
                                                            imposing change
                                                            on myself. It's a lot more progressing fun than looking back.
                                                            That's why
                                                            I ultricies enim
                                                            at malesuada nibh diam on tortor neaded to throw curve balls.”
                                                        </h4>
                                                        <div class="mt-4 pt-3 pb-5">
                                                            <div class="d-flex align-items-start">
                                                                <div class="flex-shrink-0">
                                                                    <img src="../../assets/picture/avatar-1.jpg" class="avatar-md img-fluid rounded-circle" alt="...">
                                                                </div>
                                                                <div class="flex-grow-1 ms-3 mb-4">
                                                                    <h5 class="font-size-18 text-white">Richard Drews
                                                                    </h5>
                                                                    <p class="mb-0 text-white-50">Web Designer</p>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>

                                                <div class="carousel-item">
                                                    <div class="testi-contain text-white">
                                                        <i class="bx bxs-quote-alt-left text-success display-6"></i>

                                                        <h4 class="mt-4 fw-medium lh-base text-white">“Our task must be to
                                                            free ourselves by widening our circle of compassion to embrace
                                                            all living
                                                            creatures and
                                                            the whole of quis consectetur nunc sit amet semper justo. nature
                                                            and its beauty.”</h4>
                                                        <div class="mt-4 pt-3 pb-5">
                                                            <div class="d-flex align-items-start">
                                                                <div class="flex-shrink-0">
                                                                    <img src="../../assets/picture/avatar-2.jpg" class="avatar-md img-fluid rounded-circle" alt="...">
                                                                </div>
                                                                <div class="flex-grow-1 ms-3 mb-4">
                                                                    <h5 class="font-size-18 text-white">Rosanna French
                                                                    </h5>
                                                                    <p class="mb-0 text-white-50">Web Developer</p>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>

                                                <div class="carousel-item">
                                                    <div class="testi-contain text-white">
                                                        <i class="bx bxs-quote-alt-left text-success display-6"></i>

                                                        <h4 class="mt-4 fw-medium lh-base text-white">“I've learned that
                                                            people will forget what you said, people will forget what you
                                                            did,
                                                            but people will never forget
                                                            how donec in efficitur lectus, nec lobortis metus you made them
                                                            feel.”</h4>
                                                        <div class="mt-4 pt-3 pb-5">
                                                            <div class="d-flex align-items-start">
                                                                <img src="../../assets/picture/avatar-3.jpg" class="avatar-md img-fluid rounded-circle" alt="...">
                                                                <div class="flex-1 ms-3 mb-4">
                                                                    <h5 class="font-size-18 text-white">Ilse R. Eaton</h5>
                                                                    <p class="mb-0 text-white-50">Manager
                                                                    </p>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <!-- end carousel-inner -->
                                        </div>
                                        <!-- end review carousel -->
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- end CARRUSEL -->

                </div>
                <!-- end row -->
            </div>
            <!-- end container fluid -->
        </div>


        <!-- JAVASCRIPT -->
        <script src="../../assets/js/jquery.min.js"></script>
        <script src="../../assets/js/bootstrap.bundle.min.js"></script>
        <script src="../../assets/js/metisMenu.min.js"></script>
        <script src="../../assets/js/simplebar.min.js"></script>
        <script src="../../assets/js/waves.min.js"></script>
        <script src="../../assets/js/feather.min.js"></script>
        <!-- pace js -->
        <script src="../../assets/js/pace.min.js"></script>

        <!-- validation init -->
        <!-- <script src="../../assets/js/validation.init.js"></script> -->
        <script src="https://cdnjs.cloudflare.com/ajax/libs/validator/13.6.0/validator.min.js"></script>
        <!-- AlertifyJS JS -->
        <script src="../../assets/js/alertify.min.js"></script>
        <!-- AGREGAMOS EL SCRIPT DE view/registo/registro.js -->
        <script type="text/javascript" src="registro.js"></script>

    </body>

</html>