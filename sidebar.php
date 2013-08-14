<div class="sidebar fourcol first clearfix" role="complementary">

	<header class="header" role="banner">

		<div id="inner-header" class="wrap clearfix">

			<!-- to use a image just replace the bloginfo('name') with your img src and remove the surrounding <p> -->
			<div class="logo"><img src="<?php echo get_template_directory_uri();?>/library/images/lightbulb@2x.png"></div>
			<p class="site-title h1"><a href="<?php echo home_url(); ?>" rel="nofollow"><?php bloginfo('name'); ?></a></p>

			<!-- if you'd like to use the site description you can un-comment it below -->
			<p class="site-description">Lights are needlessly left in in public buildings every night in St. John's. Let's do something about it.</p>

			<nav role="navigation">
				<?php bones_main_nav(); ?>
			</nav>

		</div> <!-- end #inner-header -->

	</header> <!-- end header -->


	<?php if ( is_active_sidebar( 'sidebar1' ) ) : ?>

	<?php dynamic_sidebar( 'sidebar1' ); ?>

<?php else : ?>

	<!-- This content shows up if there are no widgets defined in the backend. -->


<?php endif; ?>

#whyarethelightson

</div>