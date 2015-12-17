<?php

/**
 * Template Name: Custom Resep
 */

get_header(); ?>

	<div id="primary">
		<div id="content" role="main">

			<?php while ( have_posts() ) : the_post(); ?>

				<h1><?php the_title(); ?></h1>
				<?php the_content(); ?>

				<?php 

				// check for rows (parent repeater)
				if( have_rows('resep_ku') ): ?>
					<div id="to-do-lists">
					<?php 

					// loop through rows (parent repeater)
					while( have_rows('resep_ku') ): the_row(); ?>
						<div>
							<h3><?php the_sub_field('title'); ?></h3>
							<?php 

							// check for rows (sub repeater)
							if( have_rows('bahan_bahan') ): ?>
								<ul>
								<?php 

								// loop through rows (sub repeater)
								while( have_rows('bahan_bahan') ): the_row();

									// display each item as a list - with a class of completed ( if completed )
									?>
									<li <?php if( get_sub_field('completed') ){ echo 'class="completed"'; } ?>><?php the_sub_field('name'); ?></li>
								<?php endwhile; ?>
								</ul>
							<?php endif; //if( get_sub_field('items') ): ?>
						</div>	

					<?php endwhile; // while( has_sub_field('to-do_lists') ): ?>
					</div>
				<?php endif; // if( get_field('to-do_lists') ): ?>

			<?php endwhile; // end of the loop. ?>

		</div><!-- #content -->
	</div><!-- #primary -->

<?php get_sidebar(); ?>
<?php get_footer(); ?>