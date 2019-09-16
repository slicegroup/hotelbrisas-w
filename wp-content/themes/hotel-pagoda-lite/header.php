<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Hotel_Pagoda
 */

?>
<!doctype html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	  <meta http-equiv="X-UA-Compatible" content="ie=edge">
	  <link href="https://fonts.googleapis.com/css?family=Poppins:400,500,600,700,800,900&display=swap" rel="stylesheet">
	  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"
	    integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
	  <link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.css">
	  <link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick-theme.css">
	  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.css">
	  <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/assets/css/animate.css">
	  <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/assets/css/main.css">
	  <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/assets/css/medias.css">
	  <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/assets/css/offcanvas.css">

	<?php wp_head(); ?>
</head>

<body>
  <?php $current_file = basename($_SERVER['PHP_SELF']).'/blog';?> <!-- esto es para saber si estoy en el home o no-->
  <header class="navscroll">
    <!-- START NAVBAR -->



    <div class="container ">

      <nav class="navbar navbar-expand-lg  navbar-dark ">
        <a class="navbar-brand mr-auto mr-lg-0" href="#">
          <img class="logo-navbar" src="<?php echo get_template_directory_uri(); ?>/assets/img/Logo Brisas BLANCO.png" alt="">
        </a>

        <button class="navbar-toggler p-0 border-0" type="button" data-toggle="offcanvas">
          <i class="fa fa-bars" aria-hidden="true"></i>
        </button>

        <div class="navbar-collapse offcanvas-collapse" id="navbarsExampleDefault">
          <div class="btn-nav">
            <img class="logo-navbar" src="<?php echo get_template_directory_uri(); ?>/assets/img/Logo Brisas BLANCO.png" alt="">
            <button class="navbar-toggler p-0 border-0" type="button" data-toggle="offcanvas">
              <i class="fa fa-times" aria-hidden="true"></i>
            </button>
          </div>
          <ul class="navbar-nav">
            <li class="nav-item active">
              <a class="nav-link nav-custom" href="#"> Inicio <span class="sr-only">(current)</span></a>
            </li>
            <li class="nav-item">
              <a class="nav-link nav-custom" href="#room"> Habitaciones</a>
            </li>
            <li class="nav-item">
              <a class="nav-link nav-custom" href="#services">Servicios</a>
            </li>
            <li class="nav-item">
              <a class="nav-link nav-custom" href="#gallery">Galería</a>
            </li>
            <li class="nav-item">
              <a class="nav-link nav-custom" href="#events">Eventos</a>
            </li>
            <li class="nav-item">
              <a class="nav-link nav-custom" href="#">Salones</a>
            </li>
            <li class="nav-item">
              <a class="nav-link nav-custom" href="#footer"> Contáctanos</a>
            </li>
          </ul>
          <ul>
            <li class="social  social-nav">
              <a href="https://www.instagram.com/hotelbrisas/" , target="_blank"><i class="fa fa-instagram"
                  aria-hidden="true"></i>
              </a> <a href="https://www.facebook.com/hotelbrisasparaguana/" , target="_blank"><i class="fa fa-facebook"
                  aria-hidden="true"></i>
              </a> <a href="https://twitter.com/Hotelbrisas" , target="_blank"><i class="fa fa-twitter"
                  aria-hidden="true"></i>
              </a>
            </li>
          </ul>
        </div>
      </nav>
    </div>
    </header>
    <!-- END NAVBAR -->
