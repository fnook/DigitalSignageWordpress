<?php
/**
 * Index
 *
 * Standard loop for the front-page
 *
 * @package WordPress
 * @subpackage Foundation, for WordPress
 * @since Foundation, for WordPress 1.0
 */

get_header(); ?>

<div class="row">
    <!-- Main Content -->
    <div class="large-12 columns" role="content">
	    <div class="row">
			<div class="post-box large-12 columns" id="headline">
    			<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
			</div>
	    </div>
		<?php foundation_pagination(); ?>
    </div>
    <!-- End Main Content -->

<?php get_footer(); ?>