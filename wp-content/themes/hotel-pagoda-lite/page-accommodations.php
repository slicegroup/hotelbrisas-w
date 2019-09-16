
<?php
/**
* The template for displaying all pages
*
* This is the template that displays all pages by default.
* Please note that this is the WordPress construct of pages
* and that other 'pages' on your WordPress site may use a
* different template.Matrimonial Standard
*
* @link https://codex.wordpress.org/Template_Hierarchy
*
* @package WordPress
* @subpackage Twenty_Seventeen
* @since 1.0
* @version 1.0
*/
?>

<?php get_header(); ?>


<!-- MEDIA BANNER -->
<section class="banner-room">
  <div class="mask-banner">
    <h2 class="title-banner container">Nuestras Habitaciones</h2>
  </div>
</section>
<!-- END BANNER -->

<div class="container">
    <?php echo do_shortcode('[mphb_rooms class="grid"]'); ?>
</div>
<?php get_footer(); ?>
