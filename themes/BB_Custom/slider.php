<?php

$args = array('post_type'=> 'slide', 'orderby' => 'ID', 'order' => 'ASC');
$mySlider = new WP_Query($args); ?>

<div class="flexslider clearfix">
<ul class="slides">
<?php
	while ( $mySlider->have_posts() ) {
		$mySlider->the_post(); ?>
		<li class="clearfix">
		<div class="c8">
		<?php if(has_post_thumbnail()) { 
                the_post_thumbnail('large');
              } else {} ?>
          </div>
			<div class="c4 end">
				<h2 class="slide-title"><?php the_title(); ?></h2> 
				<div class="slide-description desktop"><?php the_content(); ?></div>
			</div>
		</li>

	<?php }
	
wp_reset_postdata(); ?>