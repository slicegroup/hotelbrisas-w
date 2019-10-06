  <section class="gallery" id="gallery">
    <div class="container padding-top-bottom">
      <h2 class="title-section">Galería</h2>
      <div class="row">
        <?php $args = array( 'post_type' => 'Gallery', 'posts_per_page' => 4); ?>
        <?php $loop = new WP_Query( $args ); ?>
        <?php while ( $loop->have_posts() ) : $loop->the_post(); ?>
        <div class="col-lg-6">
          <div class="gallery-hidden wow animated zoomIn"
            style="visibility: visible; animation-delay:.3s; animation-name: zoomIn;">
            <img class="img-gallery w" src="<?php echo get_the_post_thumbnail_url(); ?>" alt="">
          </div>
        </div>
      <?php endwhile; ?>
      </div>
      <div class="box-btn">
        <a class="btn-general btn-red" href="<?php bloginfo('url'); ?>/index.php/gallery/">Ver Más</a>
      </div>
    </div>
  </section>
