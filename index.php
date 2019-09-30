<?php
/**
 * The template for displaying all pages
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site may use a
 * different template.
 *
 * @link
 *
 * @package Hotel Brisas Paraguaná
 */

get_header();
?>
<!-- <div class='preloader'>
	<img src="<?php echo get_template_directory_uri(); ?>/assets/img/hotel.svg" alt="">
</div> -->

<div class="row pop-up">
  <div class="box small-6 large-centered">
    <a href="#" class="close-button">&#10006;</a>
    <a href="#">
  <img  src="<?php echo get_template_directory_uri(); ?>/assets/img/events.jpg"></a>
  </div>
</div>
  <!-- BANNER HOME -->
	<?php get_template_part('partials/banner') ?>
  <!-- END BANNER HOME -->

  <!-- WIDGET BOOKING -->
  <section class="booking-section">
    <div class=" booking animated fadeIn" style="visibility: visible; animation-delay: 1.5s; animation-name: fadeIn;">
        <div class="row">
					<div class="container">
						<div class=""  style="display: flex;">
  						<?php echo do_shortcode('[hotel_booking]'); ?>
						</div>
					</div>

        </div>
    </div>
  </section>

  <!-- END WIDGET BOOKING -->
  <!-- SECTION ROOM -->
  <?php get_template_part('partials/home-room') ?>

  <!-- END ROOM -->
  <!-- SERVICES -->
  <?php get_template_part('partials/services') ?>

  <!-- END SERVICES -->
<!-- GALLERY -->
<?php get_template_part('partials/home-gallery') ?>

<!-- END GALLERY -->

<!-- EVENTS -->
<section class="events" id="events">
  <div class="container padding-top-bottom">
    <div class="item-event wow animated slideInUp"
      style="visibility: visible; animation-delay:.3s; animation-name: slideInUp;">
      <img class=" img-event" src="<?php echo get_template_directory_uri(); ?>/assets/img/events.jpg" alt="">
      <div class="info-event info-event">
        <h2 class="title-section">Eventos</h2>

        <p class="description-event">
          Nuestros salones son ideales para crear hermosas decoraciones y hacer únicos sus eventos. Reserve con
          nosotros y celebre sus momentos por todo lo alto.
        </p>
        <div  class="info-soli">
        <a class="btn-general btn-red" href="<?php bloginfo('url');?>/index.php/apply-for/">Solicitar Información</a>
      </div>
      </div>

    </div>
  </div>
</section>
<!-- END EVENTS -->

<!-- SPACE -->
<?php get_template_part('partials/space') ?>

<!-- END SPACE -->

  	<?php get_footer(); ?>
