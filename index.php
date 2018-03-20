<?php get_header(); ?>

	<div class="section main-content">
		<div class="fluid-container mx-auto">
			<?php if(have_posts()) : ?>
				<div class="flex flex-wrap">
					<div class="w-full sm:w-3/4 px-4 py-8">
						<?php while( have_posts() ) : the_post(); ?>
							<article class="p-4">
								<h2 class="text-2xl"><a href="<?php echo get_the_permalink(); ?>"><?php the_title(); ?></a></h2>

								<p><?php the_excerpt(); ?></p>
								
								<span class="article-date" data-time="<?php echo get_the_date('Y-m-d h:m:s'); ?>"> <i class="fa fa-clock-o" aria-hidden="true"></i> <?php the_date('M d, Y'); ?></span>
							</article>
						<?php endwhile; ?>
					</div>

					<div class="w-full sm:w-1/4 px-4 py-8">
						<?php get_sidebar(); ?>
					</div>
				</div>
			<?php endif; ?>
		</div>
	</div>

<?php get_footer(); ?>