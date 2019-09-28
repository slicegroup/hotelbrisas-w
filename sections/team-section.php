<?php
// $hotel_wp_option array declared in functions.php

global $hotel_wp_option;	
if ( class_exists( 'WP_Customize_Control' ) ) {
   $hotel_wp_default_settings = new hotel_wp_settings();
   $hotel_wp_option = wp_parse_args(  get_option( 'hotel_wp_option', array() ) , $hotel_wp_default_settings->default_data());  
}

//set query args to show specified amount or show all posts from particular category. 
$post_ids = array();
if(absint($hotel_wp_option['team_cat'])!=''){
	array_push($post_ids,absint($hotel_wp_option['team_cat']));
}
if(absint($hotel_wp_option['team_cat2'])!=''){
	array_push($post_ids,absint($hotel_wp_option['team_cat2']));
}
if(absint($hotel_wp_option['team_cat3'])!=''){
	array_push($post_ids,absint($hotel_wp_option['team_cat3']));
}
if(absint($hotel_wp_option['team_cat4'])!=''){
	array_push($post_ids,absint($hotel_wp_option['team_cat4']));
}
if(absint($hotel_wp_option['team_cat5'])!=''){
	array_push($post_ids,absint($hotel_wp_option['team_cat5']));
}
if(absint($hotel_wp_option['team_cat6'])!=''){
	array_push($post_ids,absint($hotel_wp_option['team_cat6']));
}

$args = array( 'post_type' => 'post' , 'post__in' => $post_ids , 'orderby'   => 'post__in', 'order' => 'DESC') ;

$loop = array();
if (count($post_ids)!='0'){
	$loop = get_posts($args);
}

$class = '';
if($hotel_wp_option['team_section_image']!=''){
	$class = 'sectionoverlay';
}

?>
<section id="team" style="background:url('<?php echo esc_url( $hotel_wp_option['team_section_image'] ); ?>') fixed center <?php echo esc_attr( $hotel_wp_option['team_section_image_repeat'] ); ?> <?php echo esc_attr( $hotel_wp_option['team_section_background_color'] ); ?>;">
	<div class="section-padding  <?php echo esc_attr( $class );?>">
		<div class="container">
		
			<div class="row">		
			
				<?php if($hotel_wp_option['team_section_title']!=''): ?>
				<div class="title-wrap">
					<div class="title-box">
						<?php if($hotel_wp_option['team_section_description']!=''): ?>		
							<div class="fancy section-desc"><span><?php echo esc_html($hotel_wp_option['team_section_description']); ?></span></div>
						<?php endif; ?>
						
						<h1 class="section-title text-center"><?php echo esc_html( $hotel_wp_option['team_section_title'] ); ?></h1>
					</div>
				</div>
				<?php endif; ?>			
			
			</div>
			
			<div class="row">
			<!-- first slide-->
			  <?php 
				$i = 0;
				$count = count($loop);
				
				for($i=0 ; $i < $count ; $i++):
				$team_post = $loop[$i];
				
				$team_title = $team_post->post_title;				
				$thumb_id = get_post_thumbnail_id($team_post->ID);
				$alt = get_post_meta($thumb_id, '_wp_attachment_image_alt', true);
				$image = get_the_post_thumbnail_url($team_post->ID, 'full');
				$team_link = get_the_permalink($team_post->ID);
				if($alt==''){
					$alt = $team_title;
				}		   
			?>
				<div class="col-sm-4 col-xs-12">
				   <div class="featured-team">
					<?php if ( ! empty( $image ) ) : ?>
						<div class="image-area">
						 <img class="img" src="<?php echo esc_url( $image ); ?>"  alt="<?php echo esc_attr( $alt ); ?>" />			 
						</div>
					<?php endif; ?>
					
						<div class="team-featured">
								<a class="" href="<?php echo esc_url( $team_link ); ?>"><h4><?php echo esc_html( $team_title );?></h4></a>	
								<p>
								<?php
								$text = $team_post->post_content;
								echo apply_filters('the_content', $text);
								?>
								</p>
						</div>
					</div>
				</div>	
			  <?php if(($i+1)%3 == 0) echo '<div class=clearfix></div>'; ?>
			  <?php endfor; ?>		
			</div>
			
		</div> <!--.container-->
	</div>
</section><!-- #svc-team -->
