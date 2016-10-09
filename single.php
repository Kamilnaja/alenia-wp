
<?php get_header(); ?>

	<div id="primary" class="container content-area">
		<div class="row">
			<main id="main" class="site-main container" role="main">
				<div id="post-content">
					<?php
					while ( have_posts() ) : the_post();

						get_template_part( 'template-parts/content', get_post_format() );

						the_post_navigation();

						// If comments are open or we have at least one comment, load up the comment template.
						if ( comments_open() || get_comments_number() ) :
							comments_template();
						endif;

					endwhile; // End of the loop.
					?>
				</div>
				<div id="sidebar">
				<?php 
					get_sidebar();
			?>

		</div>
			</main><!-- #main -->
	</div><!-- #primary -->

<?php

get_footer();
