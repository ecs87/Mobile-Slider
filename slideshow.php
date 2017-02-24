<?php
if (function_exists('meteor_slideshow')) { ?>
  <div class="super-container slideshow-holder">
		<div class="slideshow-stage desktop">
		</div> <!-- .slideshow-stage -->
		<div class="slideshow-content desktop auto-center">
    	<?php 
				$args = array(
					'page_id' => '957',										
				);						
				$loop = new WP_Query($args);
				if($loop->have_posts()){
					while($loop->have_posts()) : $loop->the_post();
						echo '<div class="ssc-title">'.get_the_title().'</div>';
						echo '<div class="ssc-content">'.get_the_content().'</div>';
						//echo '<div class="ssc-title">'.get_the_title().'</div>';
					endwhile;
				}
				wp_reset_query();
			?>
    </div>
		<div class="slideshow-stage mobile">
    </div> <!-- .slideshow-stage -->
		<div class="slideshow-content mobile auto-center">
    	<?php 
				$args = array(
					'page_id' => '957',										
				);						
				$loop = new WP_Query($args);
				if($loop->have_posts()){
					while($loop->have_posts()) : $loop->the_post();
						echo '<div class="ssc-title">'.get_the_title().'</div>';
						echo '<div class="ssc-content">'.get_the_content().'</div>';
						//echo '<div class="ssc-title">'.get_the_title().'</div>';
					endwhile;
				}
				wp_reset_query();
			?>
    </div>
  </div> <!--  End super-container -->
<?php } ?>
