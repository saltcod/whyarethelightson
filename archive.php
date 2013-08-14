<?php get_header(); ?>
<?php get_sidebar(); ?>
			<div id="content">

				<div id="inner-content" class="wrap clearfix">

						<div id="main" class="eightcol last clearfix" role="main">

							<?php if (is_category()) { ?>
								<h1 class="archive-title h2">
									<span><?php _e("Posts Categorized:", "bonestheme"); ?></span> <?php single_cat_title(); ?>
								</h1>

							<?php } elseif (is_tag()) { ?>
								<h1 class="archive-title h2">
									<span><?php _e("Posts Tagged:", "bonestheme"); ?></span> <?php single_tag_title(); ?>
								</h1>

							<?php } elseif (is_author()) {
								global $post;
								$author_id = $post->post_author;
							?>
								<h1 class="archive-title h2">

									<span><?php _e("Posts By:", "bonestheme"); ?></span> <?php the_author_meta('display_name', $author_id); ?>

								</h1>
							<?php } elseif (is_day()) { ?>
								<h1 class="archive-title h2">
									<span><?php _e("Daily Archives:", "bonestheme"); ?></span> <?php the_time('l, F j, Y'); ?>
								</h1>

							<?php } elseif (is_month()) { ?>
									<h1 class="archive-title h2">
										<span><?php _e("Monthly Archives:", "bonestheme"); ?></span> <?php the_time('F Y'); ?>
									</h1>

							<?php } elseif (is_year()) { ?>
									<h1 class="archive-title h2">
										<span><?php _e("Yearly Archives:", "bonestheme"); ?></span> <?php the_time('Y'); ?>
									</h1>
							<?php } ?>

							<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
					<?php get_template_part( 'content', get_post_format() );?>
				<?php endwhile; ?>

				<?php else : ?>
					<?php get_template_part( 'no-results', 'index' ); ?>
				<?php endif; ?>

						</div> <!-- end #main -->

						

								</div> <!-- end #inner-content -->

			</div> <!-- end #content -->

<?php get_footer(); ?>
