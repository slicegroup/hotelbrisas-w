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
 <section class="checkout-page" id="room">
   <div class="container">
     <h2 class="title-section">Detalles de facturación</h2>
     <div class="chechout-container">
       <?php echo do_shortcode('[woocommerce_checkout]'); ?>
     </div>
 </section>
 <?php get_footer(); ?>
