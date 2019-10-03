<!-- <?php $args = array( 'post_type' => 'BannerPopUp', 'posts_per_page' => 1); ?>
<?php $loop = new WP_Query( $args ); ?>
  <?php while ( $loop->have_posts() ) : $loop->the_post(); ?>
<div class="row pop-up">
  <div class="box small-6 large-centered">
    <?php $args = get_post_custom( $post_id); ?>
    <?php if ($args['link'][0] == true ): ?>
    <a href="#" title="Close" class="close">X</a>
    <a href="<?php echo $args['link'] [0]?>" target="_blank">
  <img  src="<?php echo get_the_post_thumbnail_url();?>"></a>
    <?php endif; ?>
  </div>
</div> -->
