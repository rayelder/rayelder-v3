<?php
/**
 * Template Name: Works
 *
 * @package WordPress
 * @subpackage Twenty_Fourteen
 * @since Twenty Fourteen 1.0
 */

get_header(); ?>

<div class="centered margin-top-two">

	
		<?php
			// Start the Loop.
			while ( have_posts() ) : the_post();

				// Include the page content template.
				get_template_part( 'content', 'page' );

			endwhile;
		?>
</div>

<?php get_footer(); ?>