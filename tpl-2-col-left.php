<?php 

/* Template Name: 2 Col, Left Sidebar */

get_header(); ?>	
	<section class="section main-content">

		<div class="fluid-container mx-auto">
			<div class="flex flex-wrap">

				<div class="w-full sm:w-1/4 px-4 py-8">
					<?php get_sidebar(); ?>
				</div>

				<div class="w-full sm:w-3/4 px-4 py-8">
					<?php if( have_posts() ) : ?>
						<?php while( have_posts() ) : the_post(); ?>
							<h1 class="pb-2 mb-2"><?php the_title(); ?></h1>

							<?php the_content(); ?>
						<?php endwhile; ?>
					<?php endif; ?>
				</div>

			</div>
		</div>

	</section>
<?php get_footer(); ?>