    <!DOCTYPE html>
    <html lang="en">

    <head>
        <meta charset="utf-8">
        <title>Nombre - El mejor lugar para vivir</title>
        <script type="text/javascript" src="https://platform-api.sharethis.com/js/sharethis.js#property=63d56a1522c346001a22f90e&product=sticky-share-buttons&source=platform" async="async"></script>
        <meta content="width=device-width, initial-scale=1.0" name="viewport">
        <meta content="" name="keywords">
        <meta content="" name="description">

        <!-- Favicon -->
        <link href="img/favicon.ico" rel="icon">

        <!-- Google Web Fonts -->
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;500&family=Playfair+Display:wght@600;700&display=swap" rel="stylesheet">

        <!-- Icon Font Stylesheet -->
        <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css" rel="stylesheet">
        <link rel="stylesheet" href="css/sweetalert2.min.css">

        <!-- Libraries Stylesheet -->
        <link href="lib/animate/animate.min.css" rel="stylesheet">
        <!--<link href="lib/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet">-->

        <!-- Customized Bootstrap Stylesheet -->
        <link href="css/bootstrap.min.css" rel="stylesheet">

        <!-- Template Stylesheet -->
        <link href="css/style.css" rel="stylesheet">
        <link href="css/lightbox.min.css" rel="stylesheet">
        <link href="css/owl.carousel.min.css" rel="stylesheet">
        <link href="css/swiffy-slider.min.css" rel="stylesheet" >
    </head>

    <body>
    <div id="timer"></div>
        <!-- Spinner Start -->
        <div id="spinner" class="show bg-white position-fixed translate-middle w-100 vh-100 top-50 start-50 d-flex align-items-center justify-content-center">
            <div class="spinner-grow text-primary" role="status"></div>
        </div>
        <!-- Spinner End -->



        <div style="position: fixed; top: 20px; left: 20px; z-index: 1030">
            <a id="logotipograndeA" href="#" >
                <img id="logotipogrande" src="img/torre360.png" width="600px" alt="logotipo">
            </a>
        </div>
        <!-- Topbar Start -->
        <div class="container-fluid  navbar-dark fixed-top text-light py-lg-0 px-lg-5 wow fadeIn" data-wow-delay="0.1s" id="MenuPrincipal">
            <!--<div class="container-fluid top-bar bg-dark text-light px-0 wow fadeIn" data-wow-delay="0.1s">-->
            <div class="row gx-0  d-none d-lg-flex">
                <div class="col-lg-3">
                    <!--
                    <a id="logotipograndeA" href="#" class="navbar-brand">
                        <img id="logotipogrande" src="img/torre360.png" width="600px" alt="logotipo">
                    </a>
                    -->
                </div>
                <div class="col-lg-9 px-5 text-start" >
                    <ol class="breadcrumb mb-0">
                        <li class="breadcrumb-item" style="padding-right: 10px"><a class="small text-light" href="#" onclick="gotoInicio()" style="font-size: 15pt;"><span class="enlaces">Inicio</span></a></li>
                        <li class="breadcrumb-item" style="padding-right: 10px"><a class="small text-light" href="#" onclick="goToProyecto()" style="font-size: 15pt"><span class="enlaces">Proyecto</span></a></li>
                        <li class="breadcrumb-item" style="padding-right: 10px"><a class="small text-light" href="#" onclick="goToUbicacion()" style="font-size: 15pt"><span class="enlaces">Ubicación</span></a></li>
                        <li class="breadcrumb-item" style="padding-right: 10px"><a class="small text-light" href="#" onclick="goToNosotros()" style="font-size: 15pt"><span class="enlaces">Nosotros</span></a></li>
                        <li class="breadcrumb-item" style="padding-right: 10px"><a class="small text-light" href="#" onclick="goToContacto()" style="font-size: 15pt"><span class="enlaces">Contacto</span></a></li>
                        <li class="breadcrumb-item" style="padding-right: 10px"><a class="small text-light" href="./folleto.pdf" TARGET="_blank" style="font-size: 15pt"><span class="enlaces">Descargar Folleto</span></a></li>
                        <li class="breadcrumb-item" ><a class="small text-light" href="#" style="font-size: 15pt">Tel. 33 1511 2704</a></li>
                    </ol>
                </div>

            </div>
        </div>
        <!-- Topbar End -->




        <!-- Navbar Start -->
        <nav class="navbar navbar-expand-lg navbar-dark fixed-top py-lg-0 px-lg-5 wow fadeIn" data-wow-delay="0.1s" id="Menu">
            <a href="index.html" class="navbar-brand ms-4 ms-lg-0">
                <img src="img/torre360.png" width="200px" alt="logotipo">
            </a>
            <button type="button" class="navbar-toggler me-4" data-bs-toggle="collapse" data-bs-target="#navbarCollapse">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarCollapse">
                <div class="navbar-nav mx-auto p-4 p-lg-0">
                    <a href="#" class="nav-item nav-link" onclick="gotoInicio()">Inicio</a>
                    <a href="#" class="nav-item nav-link" onclick="goToProyecto()">Proyecto</a>
                    <a href="#" class="nav-item nav-link" onclick="goToNosotros()">Nosotros</a>
                    <a href="#" class="nav-item nav-link" onclick="goToUbicacion()">Ubicación</a>
                    <a href="#" class="nav-item nav-link" onclick="goToContacto()">Contacto</a>
                    <a href="./folleto.pdf" class="nav-item nav-link" target="_blank" >Descargar Folleto</a>
                </div>
                <div class=" d-none d-lg-flex">
                    <div class="flex-shrink-0 btn-lg-square border border-light rounded-circle">
                        <img class="img-fluid center" alt="whatsapp" src="img/whatsapp-icon-logo.png">
                    </div>
                    <div class="ps-3">
                        <small class="text-primary mb-0">WhatsApp</small>
                        <p class="text-light fs-5 mb-0">3333 1511 2704</p>
                    </div>
                </div>
            </div>
        </nav>
        <!-- Navbar End -->


        <!-- Carousel Start -->
        <div class="container-fluid p-0 pb-5 wow fadeIn" data-wow-delay="0.1s">
            <div id="headervideo" class="owl-carousel header-carousel position-relative">
                <div class="owl-carousel-item position-relative">
                    <div style="position:relative;">
                        <div class="bg-primary" style="height: 750px; top: 0; left: 0"></div>
                        <video id="video" autoplay loop controls muted playsinline style=" width: 100%; position: absolute; top: 0; left: 0">
                            <source  src="video/video.mp4" type="video/mp4">
                        </video>
                    </div>

                    <div class="owl-carousel-inner">
                        <div class="container">
                            <div class="row justify-content-start">
                                <div class="col-4"></div>
                                <div class="col-lg-8">
                                    <p class="text-primary text-uppercase fw-bold mb-2">El mejor lugar para vivir</p>
                                    <h1 class="display-1 text-light mb-4 animated slideInDown">Tu nuevo estilo</h1>
                                    <h1 class="display-1 text-light mb-4 animated slideInDown">de vida.</h1>
                                    <p class="text-light fs-5 mb-4 pb-3">¡Sin salir de la ciudad!</p>
                                    <!--<a  href="#" class="btn btn-primary rounded-pill py-3 px-5" onclick="goToProyecto()">Conocer mas...</a>-->
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div id="down" style="display: block; position: fixed; bottom: 0px; width: 100%; z-index: 1000" class="text-center" >
            <a href="#"><h1 class="text-primary" onclick="goToProyecto()" style="font-size: 6em"><i class="fa fa-angle-double-down"></i></h1></a>
        </div>
        <!-- Carousel End -->



        <!-- About Start -->
        <div class="container-xxl py-6" id="divProyecto">
            <div class="container">
                <div class="row g-5">
                    <div class="col-lg-6 wow fadeInUp" data-wow-delay="0.1s">
                        <div class="row img-twice position-relative h-100">
                            <div class="col-6">
                                <img class="img-fluid rounded" src="img/about-1.jpg" alt="">
                            </div>
                            <div class="col-6 align-self-end">
                                <img class="img-fluid rounded" src="img/about-2.jpg" alt="">
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6 wow fadeInUp" data-wow-delay="0.5s">
                        <div class="h-100">
                            <p class="text-primary text-uppercase mb-2">Proyecto</p>
                            <h1 class="display-6 mb-4">Un proyecto diseñado para ti que buscas tenerlo todo.</h1>
                            <p>Ubicado en:</p>
                            <p>C. Pedro Sánchez #3675, Beatriz Hernández, 44760 Guadalajara, Jal. </p>
                            <div class="row g-2 mb-4">
                                <div class="col-sm-6">
                                    <i class="fa fa-check text-primary me-2"></i>Coworking
                                </div>
                                <div class="col-sm-6">
                                    <i class="fa fa-check text-primary me-2"></i>Terraza
                                </div>
                                <div class="col-sm-6">
                                    <i class="fa fa-check text-primary me-2"></i>Area de Juegos
                                </div>
                                <div class="col-sm-6">
                                    <i class="fa fa-check text-primary me-2"></i>Estacionamiento
                                </div>
                                <div class="col-sm-6">
                                    <i class="fa fa-check text-primary me-2"></i>Area de picnic
                                </div>
                                <div class="col-sm-6">
                                    <i class="fa fa-check text-primary me-2"></i>Piscina
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- About End -->
        <div id="imagenfondo01" class="section Fondo01">

        </div>
        <!-- Service Start -->
        <div class="container-xxl py-6">
            <div class="container">
                <div class="row g-5">
                    <div class="col-lg-6 wow fadeInUp" data-wow-delay="0.1s">
                        <h1 class="display-6 mb-4">¿Quieres vivir en la mejor ubicación?</h1>
                        <p class="mb-5">Ubicación privilegiada, fácil acceso a vialidades importantes y rápidas de la zona metropolitana como:.</p>
                        <div class="row gy-5 gx-4">
                            <div class="col-sm-6 wow fadeIn" data-wow-delay="0.1s">
                                <div class="d-flex align-items-center mb-3">
                                    <div class="flex-shrink-0 btn-square bg-primary rounded-circle me-3">
                                        <i class="fa fa-map-marker text-white"></i>
                                    </div>
                                    <h5 class="mb-0">Excelente ubicación</h5>
                                </div>
                                <div class="row g-2 mb-4">
                                <div class="col-sm-8">
                                    <i class="fa fa-solid fa-circle text-primary me-2"></i>Javier Mina<br>
                                    <i class="fa fa-solid fa-circle text-primary me-2"></i>Periferíco Oriente<br>
                                
                                    <i class="fa fa-solid fa-circle text-primary me-2"></i>Plutarco Elías Calles<br>
                               
                                    <i class="fa fa-solid fa-circle text-primary me-2"></i>Circunvalacíon<br>     
                               
                                    <i class="fa fa-solid fa-circle text-primary me-2"></i>Av. Artesanos
                                </div>
                            </div>
                            </div>
                            <div class="col-sm-6 wow fadeIn" data-wow-delay="0.2s">
                                <div class="d-flex align-items-center mb-3">
                                    <div class="flex-shrink-0 btn-square bg-primary rounded-circle me-3">
                                        <i class="fa fa-map-marked text-white"></i>
                                    </div>
                                    <h5 class="mb-0">Patio de ingreso</h5>
                                </div>
                                <span>Lorem ipsum dolor sit amet, consectetur adipisicing elit.</span>
                            </div>
                            <div class="col-sm-6 wow fadeIn" data-wow-delay="0.3s">
                                <div class="d-flex align-items-center mb-3">
                                    <div class="flex-shrink-0 btn-square bg-primary rounded-circle me-3">
                                        <i class="fa fa-coffee text-white"></i>
                                    </div>
                                    <h5 class="mb-0">Lobby</h5>
                                </div>
                                <span>Lorem ipsum dolor sit amet, consectetur adipisicing elit.</span>
                            </div>
                            <div class="col-sm-6 wow fadeIn" data-wow-delay="0.4s">
                                <div class="d-flex align-items-center mb-3">
                                    <div class="flex-shrink-0 btn-square bg-primary rounded-circle me-3">
                                        <i class="fa fa-play-circle text-white"></i>
                                    </div>
                                    <h5 class="mb-0">Área de coworking</h5>
                                </div>
                                <span>Lorem ipsum dolor sit amet, consectetur adipisicing elit.</span>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6 wow fadeInUp" data-wow-delay="0.5s">
                        <div class="row img-twice position-relative h-100">
                            <div class="col-6">
                                <img class="img-fluid rounded" src="img/service-1.jpg" alt="">
                            </div>
                            <div class="col-6 align-self-end">
                                <img class="img-fluid rounded" src="img/service-2.jpg" alt="">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Service End -->

        <!--
        <div class="section Fondo02">
        Colocar Carrusel
        </div>
        -->
    <div data-slider-nav-autoplay-interval="3000" class="container b-5 wow fadeIn swiffy-slider slider-item-reveal slider-nav-outside slider-nav-round slider-nav-visible slider-indicators-outside slider-indicators-round slider-indicators-dark slider-nav-animation slider-nav-animation-fadein slider-item-first-visible slider-nav-autoplay" data-wow-delay="0.1s">
        <ul class="slider-container">
            <li>
                <div class="contenedorimagen">
                    <img class="img-fluid" src="img/carousel-1.jpg" alt=""/>
                    <p class="texto-encima"
                       style="font-size: 2em; font-weight: bold; -webkit-text-stroke: 1px black; color: white; ">Amplia Habitación</p>
                </div>
            </li>
            <li>
                <div class="contenedorimagen">
                    <img class="img-fluid" src="img/carousel-2.jpg" alt=""/>
                    <p class="texto-encima"
                       style="font-size: 2em; font-weight: bold; -webkit-text-stroke: 1px black; color: white; ">Barra de Granito</p>
                </div>
            </li>
            <li>
                <div class="contenedorimagen">
                    <img class="img-fluid" src="img/carousel-3.jpg" alt=""/>
                    <p class="texto-encima"
                       style="font-size: 2em; font-weight: bold; -webkit-text-stroke: 1px black; color: white; ">Moderno y Funcional</p>
                </div>
            </li>
            <li>
                <div class="contenedorimagen">
                    <img class="img-fluid" src="img/carousel-4.jpg" alt=""/>
                    <p class="texto-encima"
                       style="font-size: 2em; font-weight: bold; -webkit-text-stroke: 1px black; color: white; ">Tina en Habitación</p>
                </div>
            </li>
            <li>
                <div class="contenedorimagen">
                    <img class="img-fluid" src="img/carousel-5.jpg" alt=""/>
                    <p class="texto-encima"
                       style="font-size: 2em; font-weight: bold; -webkit-text-stroke: 1px black; color: white; ">Vista Planta Baja</p>
                </div>
            </li>
            <li>
                <div class="contenedorimagen">
                    <img class="img-fluid" src="img/carousel-6.jpg" alt=""/>
                    <p class="texto-encima"
                       style="font-size: 2em; font-weight: bold; -webkit-text-stroke: 1px black; color: white; ">Iluminacion natural</p>
                </div>
            </li>
        </ul>

        <button type="button" class="slider-nav"></button>
        <button type="button" class="slider-nav slider-nav-next"></button>

        <div class="slider-indicators">
            <button class="active"></button>
            <button></button>
            <button></button>
            <button></button>
            <button></button>
            <button></button>
        </div>
    </div>
<!--
        <div id="carrusel" class="container pb-5 wow fadeIn" data-wow-delay="0.1s" >
            <div class="row">
                <div class="col-1"></div>
                <div class="col-10">
                    <div class="owl-carousel header-carousel  position-relative">
                        <div class="item">
                            <div class="contenedorimagen">
                                <img class="img-fluid" src="img/carousel-1.jpg" alt=""/>
                                <p class="texto-encima"
                                   style="font-size: 2em; font-weight: bold; -webkit-text-stroke: 1px black; color: white; ">Lorem ipsum dolor sit amet,</p>
                            </div>
                        </div>
                        <div class="item position-relative">
                            <div class="contenedorimagen">
                                <img class="img-fluid" src="img/carousel-2.jpg" alt=""/>
                                <p class="texto-encima"
                                   style="font-size: 2em; font-weight: bold; -webkit-text-stroke: 1px black; color: white; ">Lorem ipsum dolor sit amet,</p>
                            </div>
                        </div>
                        <div class="item position-relative">
                            <div class="contenedorimagen">
                                <img class="img-fluid" src="img/carousel-3.jpg" alt=""/>
                                <p class="texto-encima"
                                   style="font-size: 2em; font-weight: bold; -webkit-text-stroke: 1px black; color: white; ">Lorem ipsum dolor sit amet,</p>
                            </div>
                        </div>
                        <div class="item position-relative">
                            <div class="contenedorimagen">
                                <img class="img-fluid" src="img/carousel-4.jpg" alt=""/>
                                <p class="texto-encima"
                                   style="font-size: 2em; font-weight: bold; -webkit-text-stroke: 1px black; color: white; ">Lorem ipsum dolor sit amet,</p>
                            </div>
                        </div>
                        <div class="item position-relative">
                            <div class="contenedorimagen">
                                <img class="img-fluid" src="img/carousel-5.jpg" alt=""/>
                                <p class="texto-encima"
                                   style="font-size: 2em; font-weight: bold; -webkit-text-stroke: 1px black; color: white; ">Lorem ipsum dolor sit amet,</p>
                            </div>
                        </div>
                        <div class="item position-relative">
                            <div class="contenedorimagen">
                                <img class="img-fluid" src="img/carousel-6.jpg" alt=""/>
                                <p class="texto-encima"
                                   style="font-size: 2em; font-weight: bold; -webkit-text-stroke: 1px black; color: white; ">Lorem ipsum dolor sit amet,</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-1"></div>
            </div>
        </div>
-->

        <div class="container-xxl py-6">
            <div class="container">
                <div class="row g-5">
                    <div class="col-lg-3 wow fadeInUp" data-wow-delay="0.1s">
                        <h1 class="display-6 mb-4">Conocer más del proyecto</h1>
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Cumque deleniti harum impedit quaerat sunt voluptatum! Consequatur deleniti distinctio, esse fugit itaque laboriosam magnam minus qui quod sit, suscipit temporibus voluptatem?</p>
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Cumque deleniti harum impedit quaerat sunt voluptatum! Consequatur deleniti distinctio, esse fugit itaque laboriosam magnam minus qui quod sit, suscipit temporibus voluptatem?</p>
                    </div>
                    <div class="col-lg-9 wow fadeInUp" data-wow-delay="0.5s">
                        <video autoplay muted width="100%" src="video/video1.mp4" controls loop></video>
                    </div>
                </div>
            </div>
        </div>

        <div id="Fondo03" class="section Fondo03">

        </div>

        <div class="container-xxl py-6">
            <div class="container wow fadeInUp" data-wow-delay="0.5s">
                <h3 class="text-center mb-5">Galería</h3>
                <div class="row">
                    <div class="col-md-4 mb-4">
                        <a class="example-image-link" href="galeria/image-1.jpg" data-lightbox="example-set" ><img class="example-image img-fluid" src="galeriathumbs/thumb-1.jpg" alt=""/></a>
                    </div>
                    <div class="col-md-4 mb-4">
                        <a class="example-image-link" href="galeria/image-2.jpg" data-lightbox="example-set" ><img class="example-image  img-fluid" src="galeriathumbs/thumb-2.jpg" alt=""/></a>
                    </div>
                    <div class="col-md-4 mb-4">
                        <a class="example-image-link" href="galeria/image-3.jpg" data-lightbox="example-set" ><img class="example-image  img-fluid" src="galeriathumbs/thumb-3.jpg" alt=""/></a>
                    </div>
                    <div class="col-md-4 mb-4">
                        <a class="example-image-link" href="galeria/image-4.jpg" data-lightbox="example-set" ><img class="example-image  img-fluid" src="galeriathumbs/thumb-4.jpg" alt=""/></a>
                    </div>
                    <div class="col-md-4 mb-4">
                        <a class="example-image-link" href="galeria/image-5.jpg" data-lightbox="example-set" ><img class="example-image  img-fluid" src="galeriathumbs/thumb-5.jpg" alt=""/></a>
                    </div>
                    <div class="col-md-4 mb-4">
                        <a class="example-image-link" href="galeria/image-6.jpg" data-lightbox="example-set" ><img class="example-image  img-fluid" src="galeriathumbs/thumb-6.jpg" alt=""/></a>
                    </div>
                </div>
            </div>
        </div>

        <div class="container-xxl py-6">
            <div class="container">
                <div class="row g-5">
                    <div class="col-lg-4 wow fadeInUp" data-wow-delay="0.1s">
                        <h1 class="display-6 mb-4">Recorrido virtual</h1>
                        <p>¡Espacios inteligentes, funcionales, iluminación natural, un concepto único en la zona!</p>
                    </div>
                    <div class="col-8 wow fadeIn" data-wow-delay="0.05s">
                        <iframe width='100%' height='360' src='https://roundme.com/embed/937243/2940103' frameborder='0' webkitallowfullscreen mozallowfullscreen allowfullscreen></iframe>
                    </div>
                </div>
            </div>
        </div>

        <div class="container-xxl py-3" id="divubicacion">
            <div class="container">
                <div class="row g-5">
                    <div class="col-lg-12 wow fadeInUp" data-wow-delay="0.5s">
                        <div class="h-100">
                            <div class="row">
                                <div class="col-12 text-center">
                                    <h1 class="display-6 mb-4">Tú entorno</h1>
                                    <p class="text-primary text-uppercase mb-2" style="font-size: 1.5em;">Entretenimiento</p>
                                    <p>¡Cerca de los establecimientos que necesitas, para que puedas dedicar  tiempo a lo realmente importante!</p>
                                </div>
                                <div class="col-3">
                                    <div class="card" style="border: 0">
                                        <div class="card-body">
                                            <img src="img/entretenimiento01.jpg" class="img-fluid">
                                        </div>
                                        <div class="card-footer text-center" style="border: 0; background-color: transparent">
                                            <p>Punto Oriente</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-3">
                                    <div class="card" style="border: 0">
                                        <div class="card-body">
                                            <img src="img/entretenimiento02.jpg" class="img-fluid">
                                        </div>
                                        <div class="card-footer text-center" style="border: 0; background-color: transparent">
                                            <p>Punto Oriente</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-3">
                                    <div class="card" style="border: 0">
                                        <div class="card-body">
                                            <img src="img/entretenimiento03.jpg" class="img-fluid">
                                        </div>
                                        <div class="card-footer text-center" style="border: 0; background-color: transparent">
                                            <p>Gran Terraza Oblatos</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-3">
                                    <div class="card" style="border: 0">
                                        <div class="card-body">
                                            <img src="img/entretenimiento04.jpg" class="img-fluid">
                                        </div>
                                        <div class="card-footer text-center" style="border: 0; background-color: transparent">
                                            <p>Gran Terraza Oblatos</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="container-xxl py-3" >
            <div class="container">
                <div class="row g-5">
                    <div class="col-lg-12 wow fadeInUp" data-wow-delay="0.5s">
                        <div class="h-100">
                            <div class="row">
                                <div class="col-12 text-center">
                                    <p class="text-primary text-uppercase mb-2" style="font-size: 1.5em;">Actividades Recreativas</p>
                                    <!--<h1 class="display-6 mb-4">Lorem ipsum dolor sit </h1>-->
                                    <p>Disfruta de la cercanía de la vía recreativa los fines de semana y de actividades al aire libre en los parques de alrededor.</p>
                                </div>
                                <div class="col-3">
                                    <div class="card" style="border: 0">
                                        <div class="card-body">
                                            <img src="img/recreativo01.jpg" class="img-fluid">
                                        </div>
                                        <div class="card-footer text-center" style="border: 0; background-color: transparent">
                                            <p>Parque Solidaridad</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-3">
                                    <div class="card" style="border: 0">
                                        <div class="card-body">
                                            <img src="img/recreativo02.jpg" class="img-fluid">
                                        </div>
                                        <div class="card-footer text-center" style="border: 0; background-color: transparent">
                                            <p>Parque Solidaridad</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-3">
                                    <div class="card" style="border: 0">
                                        <div class="card-body">
                                            <img src="img/recreativo03.jpg" class="img-fluid">
                                        </div>
                                        <div class="card-footer text-center" style="border: 0; background-color: transparent">
                                            <p>Vía recreativa</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-3">
                                    <div class="card" style="border: 0">
                                        <div class="card-body">
                                            <img src="img/recreativo04.jpg" class="img-fluid">
                                        </div>
                                        <div class="card-footer text-center" style="border: 0; background-color: transparent">
                                            <p>Parque el Cuadro</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="container-xxl py-3" >
            <div class="container">
                <div class="row g-5">
                    <div class="col-lg-12 wow fadeInUp" data-wow-delay="0.5s">
                        <div class="h-100">
                            <div class="row">
                                <div class="col-12 text-center">
                                    <p class="text-primary text-uppercase mb-2" style="font-size: 1.5em;">Comercio</p>
                                    <p>Encuentra todo lo que necesites en las dos plazas comerciales cercanas a tu nuevo hogar.</p>
                                </div>
                                <div class="col-3">
                                    <div class="card" style="border: 0">
                                        <div class="card-body">
                                            <img src="img/comercio01.jpg" class="img-fluid">
                                        </div>
                                        <div class="card-footer text-center" style="border: 0; background-color: transparent">
                                            <p>Supermercados</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-3">
                                    <div class="card" style="border: 0">
                                        <div class="card-body">
                                            <img src="img/comercio02.jpg" class="img-fluid">
                                        </div>
                                        <div class="card-footer text-center" style="border: 0; background-color: transparent">
                                            <p>Tiendas departamentales</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-3">
                                    <div class="card" style="border: 0">
                                        <div class="card-body">
                                            <img src="img/comercio03.jpg" class="img-fluid">
                                        </div>
                                        <div class="card-footer text-center" style="border: 0; background-color: transparent">
                                            <p>Bienes para el hogar</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-3">
                                    <div class="card" style="border: 0">
                                        <div class="card-body">
                                            <img src="img/comercio04.jpg" class="img-fluid">
                                        </div>
                                        <div class="card-footer text-center" style="border: 0; background-color: transparent">
                                            <p>Tiendas de conveniencia</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>



        <div class="container-xxl py-3" >
            <div class="container">
                <div class="row g-5">
                    <div class="col-lg-12 wow fadeInUp" data-wow-delay="0.5s">
                        <div class="h-100">
                            <div class="row">
                                <div class="col-12 text-center">
                                    <p class="text-primary text-uppercase mb-2" style="font-size: 1.5em;">Servicios</p>
                                    <!--<h1 class="display-6 mb-4">Lorem ipsum dolor sit </h1>-->
                                    <p>Centros educativos y hospitales.</p>
                                </div>
                                <div class="col-3">
                                    <div class="card" style="border: 0">
                                        <div class="card-body">
                                            <img src="img/servicios01.jpg" class="img-fluid">
                                        </div>
                                        <div class="card-footer text-center" style="border: 0; background-color: transparent">
                                            <p>CECYTEJ</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-3">
                                    <div class="card" style="border: 0">
                                        <div class="card-body" >
                                            <img src="img/servicios02.jpg" class="img-fluid">
                                        </div>
                                        <div class="card-footer text-center" style="border: 0; background-color: transparent">
                                            <p>CTRO. MÉDICO DE OCCIDENTE</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-3">
                                    <div class="card" style="border: 0">
                                        <div class="card-body">
                                            <img src="img/servicios03.jpg" class="img-fluid">
                                        </div>
                                        <div class="card-footer text-center" style="border: 0; background-color: transparent">
                                            <p>PREPA 18</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-3">
                                    <div class="card" style="border: 0">
                                        <div class="card-body">
                                            <img src="img/servicios04.jpg" class="img-fluid">
                                        </div>
                                        <div class="card-footer text-center" style="border: 0; background-color: transparent">
                                            <p>Iglesia de la luz del mundo</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="container-xxl py-6">
            <div class="container">
                <div class="row g-5">
                    <div class="col-lg-8 wow fadeInUp" data-wow-delay="0.5s">
                       <video autoplay muted src="video/video2.mp4" width="100%" controls></video>
                    </div>
                    <div class="col-lg-4 wow fadeInUp" data-wow-delay="0.1s">
                        <h1 class="display-6 mb-4">Ubicación del proyecto</h1>
                        <p>C. Pedro Sánchez #3675, Beatriz Hernández, 44760 Guadalajara, Jal.</p>
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Cumque deleniti harum impedit quaerat sunt voluptatum! Consequatur deleniti distinctio, esse fugit itaque laboriosam magnam minus qui quod sit, suscipit temporibus voluptatem?</p>
                    </div>
                </div>
            </div>
        </div>

        <div class="section Fondo04">

        </div>

        <!-- Team Start -->
        <div class="container-xxl py-3" id="divNosotros">
            <div class="container">
                <div class="text-center mx-auto mb-5 wow fadeInUp" data-wow-delay="0.1s" style="max-width: 500px;">
                    <p class="text-primary text-uppercase mb-2">Nosotros</p>
                    <h1 class="display-6 mb-4">Empresa lider en el Ramo</h1>
                    <span>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Consectetur dignissimos dolore doloremque dolores earum, et, eum expedita fugit id minima minus mollitia nulla provident quas, reprehenderit vel vitae. Ad, distinctio!</span>

                </div>
                <div class="row wow mb-5" >
                    <div class="col-12 text-center wow fadeInUp" data-wow-delay="0.1s">
                        <h1 class="display-6 mb-4">Algunos de nuestros proyectos más importantes</h1>
                    </div>
                </div>
                <div class="row g-4">
                    <div class="col-lg-3 col-md-6 wow fadeInUp" data-wow-delay="0.1s">
                        <div class="team-item text-center rounded overflow-hidden">
                            <img class="img-fluid" src="img/team-1.jpg" alt="">
                            <div class="team-text">
                                <div class="team-title">
                                    <h5>Torre Paris</h5>
                                    <span>Guadalajara</span>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6 wow fadeInUp" data-wow-delay="0.3s">
                        <div class="team-item text-center rounded overflow-hidden">
                            <img class="img-fluid" src="img/team-2.jpg" alt="">
                            <div class="team-text">
                                <div class="team-title">
                                    <h5>Plaza Real Center</h5>
                                    <span>Zapopan</span>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6 wow fadeInUp" data-wow-delay="0.5s">
                        <div class="team-item text-center rounded overflow-hidden">
                            <img class="img-fluid" src="img/team-3.jpg" alt="">
                            <div class="team-text">
                                <div class="team-title">
                                    <h5>Real View Towers</h5>
                                    <span>Zapopan</span>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6 wow fadeInUp" data-wow-delay="0.7s">
                        <div class="team-item text-center rounded overflow-hidden">
                            <img class="img-fluid" src="img/team-4.jpg" alt="">
                            <div class="team-text">
                                <div class="team-title">
                                    <h5>Encantame Towers</h5>
                                    <span>Puerto Peñasco Sonora</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>


            </div>
        </div>
        <!-- Team End -->
        <div class="container-xxl   py-6" id="interes">
            <div id="final"  class="container">
                <div class="text-center mx-auto wow fadeInUp" data-wow-delay="0.1s" style="max-width: 500px;">
                    <h1 class="display-6">Información de Interés</h1>
                </div>
                <div class="row wow" >
                    <div class="row g-4 pt-1">
                        <div class="col-lg-4 wow fadeInUp" data-wow-delay="0.1s">
                            <div class="card">
                                <div class="card-body  text-center">
                                    <a href="#" data-bs-toggle="modal" data-bs-target="#Seccion1"><img src="img/seccion01.jpg" class="img-fluid"></a>
                                </div>
                                <div class="card-footer text-center">
                                    <a href="#" style="color: #0e0c0a" data-bs-toggle="modal" data-bs-target="#Seccion1"><p>5 Ventajas de vivir en un desarrollo vertical</p></a>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4 wow fadeInUp" data-wow-delay="0.1s">
                            <div class="card">
                                <div class="card-body  text-center">
                                    <a href="#" data-bs-toggle="modal" data-bs-target="#Seccion2"><img src="img/seccion02.jpg" class="img-fluid"></a>
                                </div>
                                <div class="card-footer text-center">
                                    <a href="#" style="color: #0e0c0a" data-bs-toggle="modal" data-bs-target="#Seccion2"><p>Estos son los 5 estilos de interiorismo más importantes que debes conocer</p></a>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4 wow fadeInUp" data-wow-delay="0.1s">
                            <div class="card">
                                <div class="card-body text-center">
                                    <a href="#" data-bs-toggle="modal" data-bs-target="#Seccion3"><img src="img/seccion03.jpg" class="img-fluid"></a>
                                </div>
                                <div  class="card-footer text-center">
                                    <a href="#" style="color: #0e0c0a" data-bs-toggle="modal" data-bs-target="#Seccion3"><p>5 ciudades de México para invertir en bienes raíces</p></a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Product Start -->
        <div class="container-xxl  pt-0" id="divContacto">
            <div class="container">
                <div class="bg-primary text-light rounded-bottom p-3 mt-3 wow fadeInUp rounded" data-wow-delay="0.1s">
                    <div class="row g-4 align-items-center">
                        <div class="col-lg-12 ">
                            <div id="map" style="height: 300px; width: 100%"></div>
                           <!-- <iframe  src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3732.531007188564!2d-103.34800698501749!3d20.68865100467761!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x8428b1e83d5f998f%3A0xce791627cd935e0a!2sC.%20Bel%C3%A9n%20787%2C%20Centro%20Barranquitas%2C%2044280%20Guadalajara%2C%20Jal.!5e0!3m2!1ses-419!2smx!4v1665340752591!5m2!1ses-419!2smx"
                                     width="100%" height="300px" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade" scrolling="no"></iframe>-->
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Product End -->

        <!-- Footer Start -->
        <div class="container-fluid bg-dark text-light footer my-6 mb-0 py-5 wow fadeIn" data-wow-delay="0.1s">
            <div class="container py-5" >
                <div class="row g-5 align-items-center" style="padding-bottom: 150px">
                    <div class="col-lg-8">
                        <h4 class="text-light mb-4" style="font-size: 2rem">Contacto</h4>
                        <p class="mb-2" style="font-size: 1.5rem">Domicilio Corporativo</p>
                        <p class="mb-2" style="font-size: 1.5rem"><i class="fa fa-map-marker-alt me-3"></i>Av. Chapultepec Nte. 15A, Piso 21 int 21 A, Colonia Ladrón de Guevara, Lafayette, 44600 Guadalajara, Jal.</p>
                        <p class="mb-2" style="font-size: 1.5rem">Domicilio Proyecto</p>
                        <p class="mb-2" style="font-size: 1.5rem"><i class="fa fa-map-marker-alt me-3"></i>C. Pedro Sánchez #3675, Beatriz Hernández, 44760 Guadalajara, Jal.</p>
                        <p class="mb-2" style="font-size: 1.5rem"><i class="fa fa-phone-alt me-3"></i>33 1511 2704</p>
                        <p class="mb-2" style="font-size: 1.5rem"><i class="fa fa-envelope me-3"></i><a href="mailto:ventas@torre360.mx">ventas@torre360.mx</a></p>
                        <p class="mb-2" style="font-size: 1.5rem"><i class="fa fa-envelope me-3"></i><a href="mailto:contacto@torre360.mx">contacto@torre360.mx</a></p>
                    </div>
                    <div class="col-4">
                        <div class="row">
                            <div class="col-12 align-content-lg-end">
                                <div class="text-center">
                                    <img class="img-fluid" alt="" style="wpadding-bottom: 10px" src="img/triptico.png">
                                    <br>
                                    <a href="./folleto.pdf" target="_blank">
                                        <button class="btn mb-5" style="font-size: 1.3em; background-color: #FF3DEE; color: white" >
                                            Descargar más broshure
                                        </button>
                                    </a>
                                </div>
                            </div>
                            <div class="col-5"></div>
                            <div class="col-7">
                                <!--
                                <div class="m-5 text-center text-white">
                                    <div class="row">
                                        <div class="col-12">
                                            <p>Compartir ahora</p>
                                        </div>
                                        <div class="col-4">
                                            <h3 style="cursor:pointer;"><a class="text-white"><i class="fa fa-envelope"></i></a></h3>
                                        </div>
                                        <div class="col-4">
                                            <h3 style="cursor:pointer;"><a class="text-white"><i class="fab fa-whatsapp"></i></a></h3>
                                        </div>
                                        <div class="col-4">
                                            <h3 style="cursor:pointer;"><a  class="text-white"><i class="fab fa-facebook"></i></a></h3>
                                        </div>
                                    </div>
                                    -->
                                </div>
                            </div>
                            <div class="col-5"></div>
                            <div class="col-7">
                                <p class="text-white">Proyecto desarrollado por:</p>
                                <img alt="global" src="img/logoglobal.jpg" class="img-fluid">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Footer End -->


        <!-- Copyright Start -->
        <!--
        <div class="container-fluid copyright text-light py-4 wow fadeIn" data-wow-delay="0.1s">
            <div class="container">
                <div class="row">
                    <div class="col-md-6 text-center text-md-start mb-3 mb-md-0">
                        &copy; <a href="#">Your Site Name</a>, All Right Reserved.
                    </div>
                    <div class="col-md-6 text-center text-md-end">
                        Designed By <a href="https://htmlcodex.com">HTML Codex</a>
                        <br>Distributed By: <a class="border-bottom" href="https://themewagon.com" target="_blank">ThemeWagon</a>
                    </div>
                </div>
            </div>
        </div>-->
        <!-- Copyright End -->

        <div id="modalcompartir" class="animated fadeIn">
            <div id="modalinicioCompartir" class="animated fadeInUp">
                <div class="m-5 text-center text-white">
                    <div class="row">
                        <div class="col-12 pb-5">
                            <p>Compartir ahora</p>
                        </div>
                        <div class="col-4">
                            <h3 style="cursor:pointer;"><a class="text-white"><i class="fa fa-envelope"></i></a></h3>
                        </div>
                        <div class="col-4">
                            <h3 style="cursor:pointer;"><a class="text-white"><i class="fab fa-whatsapp"></i></a></h3>
                        </div>
                        <div class="col-4">
                            <h3 style="cursor:pointer;"><a  class="text-white"><i class="fab fa-facebook"></i></a></h3>
                        </div>
                        <div class="col-12 pt-5">
                            <p style="cursor:pointer;" onclick="CerrarCompartir()">Regresar</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!--Modal-->
        <div id="modalcontenedor" class="animated fadeIn">
            <div id="modalinicio" class="animated fadeInUp">
                <div class="contenedorimagen">
                    <img id="invitacion1" alt="foto" src="img/invitacion-1.jpg">
                    <img id="invitacion2" alt="foto" src="img/invitacion-2.jpg">
                    <img id="invitacion3" alt="foto" src="img/invitacion-3.jpg">
                    <img id="invitacion4" alt="foto" src="img/invitacion-4.jpg">
                    <img id="invitacion5" alt="foto" src="img/invitacion-5.jpg">
                    <h1 class="text-light mb-4 texto-encima">Evento de preventa</h1>
                    <button class="btn btn-outline-primary botonminimizar" onclick="minimizar()"><i class="fab bi-arrow-down"></i></button>
                </div>
                <div class="m-3">
                    <?php
                                    if (!$_POST) {
                    ?>
                    <p class="text-light">Más información</p>
                    <form action="index.php" method="POST" onsubmit="return ValidarForm()">
                        <div class="mb-3">
                            <div class="row">
                                <div class="col-6">
                                    <label for="inputNombre" class="form-label text-light">
                                        Nombre:
                                    </label>
                                    <input type="text" id="inputNombre" class="form-control" name="name">
                                </div>
                                <div class="col-6">
                                    <label for="inputCorreo" class="form-label text-light">
                                        Correo
                                    </label>
                                    <input id="inputCorreo" class="form-control" type="email" name="correo">
                                </div>
                            </div>
                        </div>
                        <div class="row align-items-lg-center">
                            <div class="col-4">
                                <div class="mb-3">
                                    <label for="inputTelefono" class="form-label text-light">
                                        Teléfono
                                    </label>
                                    <input id="inputTelefono" class="form-control" type="text" name="telefono">
                                </div>
                            </div>
                            <div class="col-6">
                                <div class="mb-3">
                                    <label for="inputTelefono" class="form-label text-light">
                                        Mensaje
                                    </label>
                                    <input id="inputMensaje" class="form-control" type="text" name="mensaje">
                                </div>
                            </div>
                            <div class="col-2">
                                <input class="btn btn-primary mt-3" style="width: 80px" value="Enviar" type="submit">
                            </div>
                        </div>
                    </form>
                    <?php
                                    } else {
                                        $cuerpo = "Formulario enviado\n";
                                        $cuerpo .= "Nombre: " . $_POST["name"] . "\n";
                                        $cuerpo .= "Correo: " . $_POST["correo"] . "\n";
                                        $cuerpo .= "Teléfono: " . $_POST["telefono"] . "\n";
                                        $cuerpo .= "Mensaje: " . $_POST["mensaje"] . "\n";
                                        mail("ventas@torre360.mx,contacto@torre360.mx,fortran19@gmail.com","Formulario Torre360 Recibido",$cuerpo);
                                        echo "<h2 style='color: white'>Gracias muy pronto se pondrán en contacto con usted. Se ha enviado correctamente.</h2>";
                                    }
                    ?>
                </div>
            </div>
        </div>

        <div id="modalminimizado" class="animated fadeInDown" onclick="maximizar()">
            <div class="card" style="width: 390px; margin-left: 10px; margin-bottom: 10px; background-color: rgb(0,0,0, 0.6);">
                <div class="card-body">
                    <div class="row">
                        <div class="col-12">
                            <img id="minimizado1" alt="" class="img-fluid" src="img/t_invitacion-1.jpg">
                            <img id="minimizado2" alt="" class="img-fluid"   src="img/t_invitacion-2.jpg">
                            <img id="minimizado3" alt="" class="img-fluid"   src="img/t_invitacion-3.jpg">
                            <img id="minimizado4" alt="" class="img-fluid"   src="img/t_invitacion-4.jpg">
                            <img id="minimizado5" alt="" class="img-fluid"   src="img/t_invitacion-5.jpg">
                        </div>
                        <div class="col-12">
                            <button class="btn btn-outline-primary">
                                <h5 class="text-white text-center">
                                    Grandes descuentos por preventa<i class="text-primary fab bi-arrow-up" ></i>
                                </h5>
                            </button>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="modal fade" id="Seccion1" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog modal-lg">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLabel">Seccion 1</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                        <div class="container">
                            <div class="text-center pb-5">
                                <img src="img/seccion01.jpg">
                            </div>
                            <p>Los desarrollos verticales son una excelente opción no sólo para adquirir el hogar de tus sueños, sino también para proteger y multiplicar el patrimonio familiar.</p>

                            <p>Comprar un departamento para vivir, revender o rentar es quizás una de las mejores maneras de proteger tus ahorros.</p>

                            <p>El rápido crecimiento de las ciudades a nivel mundial ha obligado a buscar soluciones habitacionales innovadoras, confortables y con calidad de vida en espacios cada día más reducidos.</p>

                            <p>Es por eso que los desarrollos verticales han surgido como la mejor opción y ofrecen las siguientes ventajas…</p>


                            <h3>1. Cuidado del medio ambiente</h3>


                            <p>Estas edificaciones contribuyen con la densificación urbana, al permitir congregar un mayor número de personas en un espacio menor, retrasando o evitando el avance de las zonas urbanas hacia las áreas rurales y agrícolas.<p>

                            <p>Aunque en los desarrollos verticales los espacios son más pequeños que en las viviendas horizontales, estos están diseñados para aprovechar al máximo cada centímetro y ofrecer áreas confortables que permitan a las personas satisfacer sus necesidades económicas, materiales y sociales.</p>


                            <h3>2. Ahorro</h3>


                            <p>Vivir cerca del lugar de trabajo y la escuela de los hijos representa un gran ahorro en tiempo de traslado y gastos de transporte.</p>

                            <p>Los desarrollos verticales también disminuyen el gasto en servicios como recolección de basura, agua, mantenimiento y vigilancia, ya que los montos se dividen entre el número de viviendas del edificio.<p>


                            <h3>3. Seguridad</h3>


                            <p>Por lo general los desarrollos verticales cuentan con vigilancia privada, control de accesos y algunos otros mecanismos que aumentan los niveles estándar de seguridad en comparación con las viviendas horizontales.<p>


                            <h3>4. Ciudades más eficientes y fáciles de mantener</h3>


                            <p>Los desarrollos verticales hacen a las ciudades más eficientes y fáciles de mantener ya que generan menos gastos y consumen menos agua y energía.</p>

                            <p>Los defensores de este tipo de edificaciones aseguran que una ciudad vertical puede llegar a ahorrar más de 70% de energía y disminuir cerca de 90% las emisiones de contaminación.</p>


                            <h3>5. Costos accesibles</h3>


                            <p>Los precios de los departamentos son mucho más accesibles y por lo general están ubicados en buenas zonas y cuentan con amenidades que además de ofrecer diversión y confort, agregan valor a la propiedad.</p>
                        </div>



                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                    </div>
                </div>
            </div>
        </div>

        <div class="modal fade" id="Seccion2" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog  modal-xl">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLabel2">Seccion 2</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                        <br>
                        <h2> Estos son los 5 estilos de interiorismo más importantes que debes conocer </h2>
                        <p> Hemos recopilado un resumen de los 5 estilos de interiorismo y tendencias de decoración del hogar más populares para que tengas una mejora idea de lo que funciona para ti. Seguro que encuentras la inspiración adecuada para amueblar tu nuevo hogar Estos  clásicos estarán de moda siempre</p>
                        <br>
                        <h4> 1. Estilo de mobiliario mediterráneo </h4>
                        <p>La base está formada por colores claros como el blanco, el beige y tonos terrosos como el verde oliva, el terracota y el ocre, que pueden complementarse con frescos toques de color de amarillo cálido, naranja y azul ultramar. Los materiales más populares son la arcilla, la rafia y el lino, así como las maderas regionales del olivo o el pino. Para el suelo y las paredes, son especialmente adecuados, los mosaicos de colores o los azulejos hechos a mano. Y, por supuesto, no pueden faltar coloridas vajillas de cerámica, así como las plantas y hierbas mediterráneas, que no solo sirven para decorar, sino que son perfectas para cocinar.</p>
                        <h4>2. Muebles y accesorios de estilo rústico</h4>
                        <p>El acogedor encanto de las cabañas originarias de la Gran Bretaña del siglo XVII  se puede trasladar a la ciudad. Las vigas de madera, los ladrillos, el mobiliario puede tener unos cuantos años a sus espaldas, porque las pequeñas manchas y rastros de uso están permitidos e incluso son deseados para el aspecto campestre. Además de los hallazgos de madera maciza del mercado de pulgas, ya sea en su estado original o pintada de blanco, también puedes traer reliquias preciadas como marcos de fotos, manteles o el jarrón de la abuela. Un juego de té, preferiblemente con motivos florales, o un sofá Chesterfield lo hacen "muy británico". El mobiliario lúdico también funciona con acogedores cojines de lino o nuevas fundas, e incluso un viejo sofá puede tener un estilo de casa de campo.</p>
                        <h4>3. Aspecto usado e industrial</h4>
                        <p>El más desenfadado de todos los estilos de interiorismo es el look industrial, una tendencia que surgió más bien por necesidad en los años 60 y que aún hoy se nutre de sus imperfecciones. Las paredes de ladrillo sin enlucir, las tuberías expuestas y las construcciones de acero no se ocultan en la vivienda como es habitual, sino que se escenifican deliberadamente al amueblar. En combinaciones con madera no tratada y, por tanto, patinada, cuero agrietado y cemento rugoso, se crea un aspecto de uso relajado con un toque de taller. Pero si todavía no quieres renunciar a la comodidad, puedes ayudar con pieles y cojines de terciopelo de colores en tonos oscuros de óxido, verde o azul. Las plantas fáciles de cuidar, como los cactus, los vasos de colores y una vieja alfombra persa también sirven para dar un toque de color. Y en cuanto a los muebles, también puedes mezclar lo viejo con lo nuevo y hacerlo tú mismo: puedes construir fácilmente armarios y estanterías con tubos de acero o cobre usados.</p>
                        <h4>4. Mobiliario minimalista</h4>
                        <p>El minimalismo no solo consiste en eliminar toda la decoración en favor de superficies y paredes limpias, sino también en dejar fuera los objetos que no se utilizan: un amplio conjunto de sofás, por ejemplo, puede sustituir a varios muebles de asiento pequeños y una mesa de comedor puede incluso sustituir a un puesto de trabajo. </p>
                        <p>Se centra en los tonos neutros a la hora de amueblar (blanco), aunque también es posible un uso deliberado y parcial del color. La combinación de diferentes texturas o el uso de patrones a gran escala en forma de formas geométricas y tipografías también armonizan bien con un entorno purista y despejado. </p>
                        <h4>5. Tradición y clásicos</h4>
                        <p>Para los amantes del estilo de vida clásico, puede ser un poco más, especialmente cuando se trata de la calidad y la durabilidad. Porque, como su nombre indica, el mobiliario clásico-tradicional no sigue las tendencias actuales y, por tanto, es ante todo una cosa: ¡atemporal en su decoración!</p>
                        <p>Por lo general, los techos claros y las paredes pintadas en tonos crema y arena son la base de los muebles oscuros de madera maciza, elaboradamente decorados, de cerezo, nogal o castaño. Los cuencos de cristal o los jarrones con flores frescas dan un toque elegante a las mesas, que pueden proceder de tu anticuario favorito,  tapices, un gran espejo con marco de estilo barroco.</p>
                        <p>Los tejidos pesados de brocado o terciopelo en colores apagados como el burdeos, el café o el verde son adecuados para las cortinas, o  para los sofás, los sillones y los cojines a juego en el hogar. Y los estampados llamativos con cuadros o rayas también son bienvenidos en las habitaciones amuebladas de forma clásica.</p>

                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                    </div>
                </div>
            </div>
        </div>

        <div class="modal fade" id="Seccion3" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog  modal-xl">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLabel3">Seccion 3</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                        ...
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                    </div>
                </div>
            </div>
        </div>

        <!-- Back to Top -->
        <a href="#" class="btn btn-lg btn-primary btn-lg-square rounded-circle back-to-top"><i class="bi bi-arrow-up"></i></a>
        <a href="#"><img class="whatsup" alt="whatsapp" src="img/whatsapp-icon-logo.png"></a>
        <a href="#" class="btn btn-lg btn-primary btn-lg-square facebook" style="background-color: #0d6efd"><i class="fab fa-facebook-f"></i></a>
        <a href="#" class="btn btn-lg btn-primary btn-lg-square messegner" style="background-color: #0d6efd"><i class="fab fa-facebook-messenger"></i></a>
        <a id="botondescargar" class="descargar animated fadeInUp" target="_blank">
            <div style="text-align: right">
                <img id="botonflotante" class="animated fadeIn" src="/img/botonflotante.png" alt="" style="width: 75%; cursor: pointer" onclick="window.open('./folleto.pdf')" id="botondescargar')">
            </div>
        </a>
        <div class="sharethis-sticky-share-buttons" ></div>

        <!-- JavaScript Libraries -->
        <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.bundle.min.js"></script>
        <script src="lib/wow/wow.min.js"></script>
        <script src="lib/easing/easing.min.js"></script>
        <script src="lib/waypoints/waypoints.min.js"></script>
        <script src="lib/counterup/counterup.min.js"></script>
        <!--<script src="lib/owlcarousel/owl.carousel.min.js"></script>-->
        <script src="css/owl.carousel.min.js"></script>
        <script type="text/javascript" src="https://maps.google.com/maps/api/js?sensor=true"></script>
        <script src="https://cdn.jsdelivr.net/npm/scroll-utility@4.0.0/dist/scroll-utility.js"></script>
        <script src="js/sweetalert2.all.min.js"></script>
        <script src="js/gmaps.js"></script>
        <script src="js/lightbox.js"></script>
        <script src="js/buzz.min.js"></script>
        <!-- Template Javascript -->
        <script src="js/main.js"></script>
    <script src="js/swiffy-slider.min.js"></script>
        <script type="application/javascript">
            var map = new GMaps({
                el: '#map',
                lat: 20.672828690525364,
                lng: -103.39748986065388,
                draggable: false,
                scrollwheel:false,
                zoom: 15
            });
        </script>
    </body>
    </html>
