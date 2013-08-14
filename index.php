<?php get_header(); ?>

<?php get_sidebar(); ?>
<div id="content">

 
	<div id="inner-content" class="wrap clearfix">

		<div id="main" class="eightcol last clearfix" role="main">

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
