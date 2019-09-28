<?php 	
/**
 * Displays testimonials
 * @package hotel-wp-lite
 * @since 1.0
 */

global $hotel_wp_option;	
if ( class_exists( 'WP_Customize_Control' ) ) {
   $hotel_wp_default_settings = new hotel_wp_settings();
   $hotel_wp_option = wp_parse_args(  get_option( 'hotel_wp_option', array() ) , $hotel_wp_default_settings->default_data());  
}

//set query args to show specified amount or show all posts from particular category. 
$post_ids = array();
if(absint($hotel_wp_option['testimonial_cat'])!=''){
	array_push($post_ids,absint($hotel_wp_option['testimonial_cat']));
}
if(absint($hotel_wp_option['testimonial_cat2'])!=''){
	array_push($post_ids,absint($hotel_wp_option['testimonial_cat2']));
}
if(absint($hotel_wp_option['testimonial_cat3'])!=''){
	array_push($post_ids,absint($hotel_wp_option['testimonial_cat3']));
}

$args = array( 'post_type' => 'post' , 'post__in' => $post_ids , 'orderby'   => 'post__in', 'order' => 'DESC') ;
$loop = array();
if (count($post_ids)!='0'){
	$loop = get_posts($args);
}

$class = '';
if($hotel_wp_option['testimonial_section_image']!=''){
	$class = 'sectionoverlay';
}

?>
<section id="testimonilas" style="background:url('<?php echo esc_url( $hotel_wp_option['testimonial_section_image'] ); ?>') fixed center  <?php echo esc_attr( $hotel_wp_option['testimonial_section_image_repeat'] ); ?> <?php echo esc_attr( $hotel_wp_option['testimonial_section_background_color'] ); ?>;">
<div class="svc-section-body section-padding  <?php echo esc_attr( $class );?>" >  
  <div class="container">
 
	<div class="row">		
	
		<?php if($hotel_wp_option['testimonial_section_title']!=''): ?>
		<div class="title-wrap">
			<div class="title-box">
				<?php if($hotel_wp_option['testimonial_section_description']!=''): ?>		
					<div class="fancy section-desc"><span><?php echo esc_html($hotel_wp_option['testimonial_section_description']); ?></span></div>
				<?php endif; ?>				
				<h1 class="section-title text-center"><?php echo esc_html( $hotel_wp_option['testimonial_section_title'] ); ?></h1>
			</div>
		</div>
		<?php endif; ?>
	
	</div>  

  <div class="row">
      <?php 
		  $i = 0;
		  $count = count($loop);
		  for($i=0 ; $i < $count ; $i++):
		  $testimonial_post = $loop[$i];
		  $post_title = $testimonial_post->post_title;
		   
	  ?>
          <div class="col-sm-4 col-xs-12">           
              <table border="0">
			   <tr class="no-border">			     
				 <td><?php echo('<p class="testimonial-title">'.esc_html($post_title).'</p>'); ?></td>
			   </tr>
			   <tr class="no-border">
			     <td class="text-center">
				 <?php 
					$thumb_id = get_post_thumbnail_id($testimonial_post->ID);
					$alt = get_post_meta($thumb_id, '_wp_attachment_image_alt', true);
					if($alt == ''){
						$alt = $post_title;
					}	
					if($thumb_id){					 
				 		echo "<img class='testimonial-image' src=".esc_url(get_the_post_thumbnail_url($testimonial_post->ID, 'full'))." alt='".esc_attr($alt)."' />";
				 	}
				 ?>
				 </td>			   
			   </tr>
			   <tr class="no-border">
			     <td class="text-center">
				 <?php 
				 $content = $testimonial_post->post_content;
				 echo apply_filters('the_content', $content); 
				 ?>				 
				 </td>
			   </tr>
			   <tr class="no-border">
			   	<td class="text-center"><img src="<?php echo esc_url(HOTEL_WP_TEMPLATE_DIR_URI.'/images/stars.png'); ?>" class="star-rating"/></td>
			   </tr>
			  </table>
        
      </div>
	  <?php if(($i+1)%3 == 0) echo '<div class=clearfix></div>'; ?>
      <?php endfor; ?>
	</div>

  </div> <!--container-->
 </div> 
</section>
