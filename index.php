<?php get_header(); ?>

	<section class="page__body">
		<div class="page__body__content">		

			<?php
			if ( have_posts() ) {

				// Load posts loop.
				while ( have_posts() ) {
					the_post();
					get_template_part( 'template-parts/content/content' );
				}


			} else {

				// If no content, include the "No posts found" template.
				get_template_part( 'template-parts/content/content', 'none' );

			}
			?>

		</div>
	</section><!-- .content-area -->

<?php get_footer(); ?>
