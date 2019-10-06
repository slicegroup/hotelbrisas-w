<!-- <?php
/**
 * The template for displaying all pages
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site may use a
 * different template.
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package WordPress
 * @subpackage Twenty_Seventeen
 * @since 1.0
 * @version 1.0
 */
 ?> -->
<?php get_header(); ?>


  <!-- MEDIA BANNER -->
  <section class="banner-room">
    <div class="mask-banner">
      <h2 class="title-banner container">Solicitud de Eventos</h2>
    </div>
  </section>
  <!-- END BANNER -->

  <section class="multi_step_form form-flex">
    <div class="container padding-top-bottom">
      <div class="">
        <?php echo FrmFormsController::get_form_shortcode( array( 'id' => 3, 'title' => false, 'description' => false ) ); ?>

      </div>
    </div>
  </section>

<?php get_footer(); ?>
