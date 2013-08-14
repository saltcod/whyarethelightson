
<article id="post-<?php the_ID(); ?>" <?php post_class('clearfix'); ?> role="article">

 

 
	<section class="entry-content clearfix">
		<?php if ( has_post_thumbnail() ) {
			the_post_thumbnail('full');
			whylights_the_post_thumbnail_caption();
		} ?>
		<h1 class="post-title h2"><a href="<?php the_permalink() ?>" rel="bookmark" title="<?php the_title_attribute(); ?>"><?php the_title(); ?></a></h1>
		<?php the_content(); ?>
	</section> <!-- end article section -->

	<footer class="article-footer">
		<p class="tags"><?php the_tags('<span class="tags-title">' . __('<i class=icon-tag></i>', 'bonestheme') . '</span> ', ', ', ''); ?></p>

	</footer> <!-- end article footer -->

	<?php // comments_template(); // uncomment if you want to use them ?>

			</article> <!-- end article -->