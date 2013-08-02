<?php
/*
Template Name: Nate Jones Homepage
*/
?>

<?php get_header(); ?>
			<h2><?php bloginfo('description'); ?></h2>
		</div>
	</div>
	<div class="row two" id="statement">
		<div class="large-10 small-centered columns post-box">
	        <?php
	        $args=array(
	            'post_type' => 'manifest',
	            'post_status' => 'publish',
	            'posts_per_page' => 1
	        );
	        $the_query = new WP_Query($args);
	        if($the_query->have_posts()) : while ( $the_query->have_posts() ) : $the_query->the_post();
	            echo the_content();
	        endwhile;
	        endif;
	        wp_reset_postdata();
	        ?>
        </div>
    </div>


	<div class="row three work" id="work">
		<div class="large-12 small-12 small-centered columns action">
			<a href="#contact" class="scroll">work with nate</a>
		</div>
		<div class="large-12 columns">
			<div class="row">		
            <?php
            $args=array(
                'post_type' => 'work',
                'post_status' => 'publish',
                'posts_per_page' => 12
            );
            $the_query = new WP_Query($args);
            if($the_query->have_posts()) : while ( $the_query->have_posts() ) : $the_query->the_post();
			$large_image_url = wp_get_attachment_image_src( get_post_thumbnail_id($post->ID), 'large');
				echo '<div class="large-4 columns gallery"><a href="' . get_permalink() . '" class="th radius"><img src="' . $large_image_url[0] . '" title="' . the_title_attribute('echo=0') . '" /><small>' . get_the_title() . '</small></a></div>';
            endwhile;
            endif;
			wp_reset_query();
            ?>
		</div>
	</div>
	</div>

	<div class="row four" id="bio">
            <?php
            $args=array(
                'post_type' => 'bio',
                'post_status' => 'publish',
                'posts_per_page' => 1
            );
            $the_query = new WP_Query($args);
            if($the_query->have_posts()) : while ( $the_query->have_posts() ) : $the_query->the_post();
			$large_image_url = wp_get_attachment_image_src( get_post_thumbnail_id($post->ID), 'large');
				echo '<div class="large-4 large-offset-1 columns headshot" style="background-image: url(\'' . $large_image_url[0] . '\');"></div>';
				echo '<div class="large-7 columns"><p>' . get_the_content() . '</p></div>';
            endwhile;
            endif;
			wp_reset_query();
            ?>
	</div>

		
	<div class="row five" id="contact">
		<div class="large-10 small-centered columns">
	        <?php
	        $args=array(
	            'post_type' => 'project',
	            'post_status' => 'publish',
	            'posts_per_page' => 1
	        );
	        $the_query = new WP_Query($args);
	        if($the_query->have_posts()) : while ( $the_query->have_posts() ) : $the_query->the_post();
	            echo the_content();
	        endwhile;
	        endif;
	        wp_reset_postdata();
	        ?>
        </div>
    </div>

<?php get_footer(); ?>