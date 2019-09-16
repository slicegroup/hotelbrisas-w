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

<?php $args = array( 'post_type' => 'Gallery'); ?>
<?php $loop = new WP_Query( $args ); ?>


<section>
  <div class="container padding-top-bottom">
    <h2 class="title-section">Galería</h2>
    <div class="row">
      <?php $args = array( 'post_type' => 'Gallery', 'posts_per_page' => 4); ?>
      <?php $loop = new WP_Query( $args ); ?>
      <?php while ( $loop->have_posts() ) : $loop->the_post(); ?>
      <div class="col-lg-6">
        <h3 class="title-g"><?php the_title(); ?></h3>
        <div class="gallery-hidden wow animated zoomIn"
          style="visibility: visible; animation-delay:.3s; animation-name: zoomIn;">
          <img class="img-gallery w" src="<?php echo get_the_post_thumbnail_url(); ?>" alt="">
        </div>
      </div>
    <?php endwhile; ?>
    </div>
  </div>
</section>
<?php get_footer(); ?>
