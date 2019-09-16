<section class="banner-home">
  <?php $args = array( 'post_type' => 'Banner', 'posts_per_page' => 5); ?>
  <?php $loop = new WP_Query( $args ); ?>
  <div class="single-banner">
    <?php while ( $loop->have_posts() ) : $loop->the_post(); ?>
    <div class="item-banner" , style="background-image:url('<?php echo get_the_post_thumbnail_url();?>')">
      <div class="mask-banner">
        <h2 class="title-banner container"><?php the_title(); ?></h2>

        <?php $args = get_post_custom( $post_id); ?>
        <?php if ($args['promotion_link'][0] == true ): ?>
          <a class="btn-general btn-banner" target="_blank" href="<?php echo $args['promotion_link'] [0]?>"><?php echo $args['button_title'] [0]?></a>
        <?php endif; ?>

      </div>
    </div>
    <?php endwhile; ?>
  </div>
</section>
