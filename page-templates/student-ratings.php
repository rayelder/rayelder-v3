<?php
/**
 * Template Name: Student Ratings
 *
 * @package WordPress
 * @subpackage Twenty_Fourteen
 * @since Twenty Fourteen 1.0
 */

get_header(); ?>

<div class="centered margin-top-two">
	
		<?php
			// Start the Loop.
			while ( have_posts() ) : the_post(); ?>

				<div class="row">
	<div class="column6">
		<?php the_title( '<h1>Student Rating Summary:', '</h1>' ); ?>
		<h4>Fall 2013</h4>
	</div>
</div>

	<div class="entry-content">
		<?php the_content(); ?>
	</div><!-- .entry-content --><?php

				// If comments are open or we have at least one comment, load up the comment template.
				if ( comments_open() || get_comments_number() ) {
					comments_template();
				}
			endwhile;
		?>
</div>


				

<?php
//get_sidebar();
get_footer(); ?>
