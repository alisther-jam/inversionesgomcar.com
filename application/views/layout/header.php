<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <meta name="keywords" content="HTML,CSS,XML,JavaScript">
    <meta name="description" content="html template">
    <meta name="author" content="JD-Themes">
    <!--color theme of the status-bar (Chrome, Firefox OS and Opera)-->
    <meta name="theme-color" content="#0288d1">
    <!--iOS safari status-bar-->
    <meta name="apple-mobile-web-app-capable" content="yes">
    <meta name="apple-mobile-web-app-status-bar-style" content="black-transcluent">
    <!--windows phone status-bar-->
    <meta name="msapplication-navbutton-color" content="#0288d1">
    <meta name="msapplication-TileColor" content="#0288d1">
    <meta name="msapplication-TileImage" content="img/favicon.ico">
    <!--favicon
    <link rel="icon" type="image/vnd.microsoft.icon" href="img/favicon.ico">
    <link rel="SHORTCUT ICON" type="image/x-icon" href="img/favicon.ico">-->
    <!--page title-->
    <title>INVERSIÓNES | GOMCAR</title>
    <!--сonnecting css files-->
    <!--font-awesome-->
    <link rel="stylesheet" href="<?=base_url()?>template/css/font-awesome.min.css">
    <!--owl-carousel-->
    <link rel="stylesheet" href="<?=base_url()?>template/css/owl.carousel.css">
    <!--owl-theme-->
    <link rel="stylesheet" href="<?=base_url()?>template/css/owl.theme.default.css">
    <!--core(bootstrap)-->
    <link rel="stylesheet" href="<?=base_url()?>template/css/bootstrap.css">
    <!--main css(custom)-->
    
    <link rel="stylesheet" type="text/css" href="<?=base_url()?>template/css/lightbox.min.css">
    
    <script type="text/javascript" src="<?=base_url()?>template/js/lightbox-plus-jquery.min.js">
	</script>
    
    <link rel="stylesheet" href="<?=base_url()?>template/css/main.css">
    <link rel="stylesheet" href="<?=base_url()?>template/css/estilos.css">
    <style type="text/css">
        #bienvenido-section{
            background-image: url("<?=base_url()?>img/fondo.png");
        }
        #informes-section{
            background-image: url("<?=base_url()?>img/fondo2.png");
        }
        #cabecera{
            background: url('<?=base_url()?>img/cabecera.png');
            
        }
    </style>
    <script src="<?=base_url()?>template/js/modernizr-custom.js"></script>
    <!--jQuery-->
    <script src="<?=base_url()?>template/js/jquery-3.2.1.min.js"></script>
    <!--connecting js files-->
    <!--modernizr.js-->
   
</head>
<body>
<!--page wrapper-->
<main id="wrapper" class="d-flex flex-column">
    <header>
        <div class="top-bar">
            <div class="container d-flex justify-content-between align-items-center">
                <div class="info-box d-flex">
                    <a href="tel:013015679" class="mr-3"><i class="fa fa-phone"></i>(01) 259 2516 - 995 911 487</a>
                    <a href="mailto:informes@inversionesgomcar.com"><i class="fa fa-envelope"></i>informes@inversionesgomcar.com</a>
                </div>
                <div class="social-box">
                    <a href="https://es-la.facebook.com/inversionesgomcar/" target="_blank"><i class="fa fa-facebook"></i></a>
                    <a href="https://api.whatsapp.com/send?phone=51995911487" target="_blank"><i class="fa fa-whatsapp"></i></a>
                    
                </div>
            </div>
        </div>
        <nav class="navbar navbar-expand-lg navbar-light">
            <div class="container">
                <a class="navbar-brand d-flex align-items-center" href="<?=base_url()?>inicio" style="width: 50%;">
                    <img src="<?=base_url()?>img/logo.png" class="img-fluid" alt="" style="width: 200px;">
                </a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav"
                        aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                    <i class="fa fa-bars"></i>
                </button>
                <div class="collapse navbar-collapse navbar-right justify-content-end" id="navbarNav">
                    <ul class="navbar-nav">
                        <li class="nav-item">
                            <a class="nav-link font-weight-medium <?php if($seccion=="inicio") echo "active"; else echo ""; ?>" href="<?=base_url()?>inicio">Inicio</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link font-weight-medium <?php if($seccion=="nosotros") echo "active"; else echo ""; ?>" href="<?=base_url()?>nosotros">Nosotros</a>
                        </li>
                        <!--
                        <li class="nav-item">
                            <div class="dropdown">
                                <a class="nav-link dropdown-toggle font-weight-medium" href="#" id="dropdown-elements1"
                                   data-toggle="dropdown"
                                   aria-haspopup="true" aria-expanded="false">Servicios <i class="fa fa-angle-down"></i></a>
                                <div class="dropdown-menu" aria-labelledby="dropdown-elements1">
                                    <a class="dropdown-item" href="#">Estructuras metálicas</a>
                                    <a class="dropdown-item" href="#">Equipos en acero inoxidables</a>
                                    <a class="dropdown-item" href="#">Construcción y obras civiles</a>
                                    <a class="dropdown-item" href="#">Alquiler de equipos y unidades de transporte</a>
                                </div>
                            </div>
                        </li>
                        -->
                          <!-- <li class="nav-item"> -->
                            <!-- <a class="nav-link font-weight-medium <?php if($seccion=="servicios") echo "active"; else echo ""; ?>" href="<?=base_url()?>servicios">Servicios</a> -->
                        <!-- </li> -->
                        <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          Dropdown
        </a>
        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
          <a class="dropdown-item" href="<?=base_url()?>aceros">Action</a>
          <a class="dropdown-item" href="#">Another action</a>
          <div class="dropdown-divider"></div>
          <a class="dropdown-item" href="#">Something else here</a>
        </div>
      </li>
                       <li class="nav-item">
                            <a class="nav-link font-weight-medium <?php if($seccion=="contactanos") echo "active"; else echo ""; ?>" href="<?=base_url()?>contactanos">Contáctanos</a>
                        </li>

                    </ul>
                </div>
            </div>
        </nav>
    </header>