<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <link rel="icon" type="image/vnd.microsoft.icon" href="<?php echo get_template_directory_uri();?>/assets/imgs/favicon.ico" sizes="16x16 32x32">
  <link href="https://fonts.googleapis.com/css?family=Poppins:400,500,600,700,800,900&display=swap" rel="stylesheet">
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"
    integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
  <link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.css">
  <link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick-theme.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.css">
  <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/assets/css/events.css">
  <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/assets/css/animate.css">
  <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/assets/css/medias.css">
  <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/assets/css/offcanvas.css">
  <link rel="icon" type="image/vnd.microsoft.icon" href="<?php echo get_template_directory_uri(); ?>/assets/img/favicon.ico">
  <title>Hotel Brisas Paraguaná</title>
	<?php wp_head(); ?>
</head>

<body>



  <?php $current_file =  $_SERVER['SERVER_NAME'] . $_SERVER['REQUEST_URI'];
     $url_page = 'localhost/hotel-nuevo/';
             ?>     <!-- START NAVBAR -->
    <header class="n-scroll">

          <div class="container">

            <nav class="navbar navbar-expand-lg  navbar-dark ">
              <a class="navbar-brand mr-auto mr-lg-0" href="<?php echo bloginfo('url');?>">
                <img class="logo-navbar" src="<?php echo get_template_directory_uri(); ?>/assets/img/Logo Brisas GRIS.png" alt="">

              </a>

              <button class="navbar-toggler p-0 border-0" type="button" data-toggle="offcanvas">
                <i class="fa fa-bars" aria-hidden="true"></i>
              </button>

              <div class="navbar-collapse offcanvas-collapse" id="navbarsExampleDefault">
                <div class="btn-nav">
                  <img class="logo-navbar" src="<?php echo get_template_directory_uri(); ?>/assets/img/Logo Brisas GRIS.png" alt="">

                  <button class="navbar-toggler color p-0 border-0" type="button" data-toggle="offcanvas">
                    <i class="fa fa-times color " aria-hidden="true"></i>
                  </button>
                </div>
										<ul class="navbar-nav">
											<li class="nav-item active">
												<a class="nav-link nav-custom" href="<?php echo bloginfo('url').'/#';?>">Inicio <span class="sr-only">(current)</span></a>
											</li>
											<li class="nav-item">
												<a class="nav-link nav-custom" href="<?php bloginfo('url'); ?>/index.php/hotel-rooms/">Habitaciones</a>
											</li>
											<li class="nav-item">
												<a class="nav-link nav-custom" href="<?php echo bloginfo('url').'/#services';?>">Servicios</a>
											</li>
											<li class="nav-item">
												<a class="nav-link nav-custom" href="<?php bloginfo('url'); ?>/index.php/gallery/">Galería</a>
											</li>
											<li class="nav-item">
												<a class="nav-link nav-custom" href=""<?php echo bloginfo('url').'/#salones';?>"">Salones</a>
											</li>
											<li class="nav-item">
												<a class="nav-link nav-custom" href="#footer"> Contáctanos</a>
											</li>
                      <li class="nav-item reservar">
                        <a class="btn-red btn-general" href="#openModal">Reservar</a>
                          <div id="openModal" class="modalDialog">
                          	<div>
                          		<a href="#close" title="Close" class="close">X</a>
                              <?php echo dynamic_sidebar('id-booking-navbar'); ?>
                          	</div>
                          </div>
                      </li>
										</ul>
								</div>
							</nav>
						</div>
		</header>
