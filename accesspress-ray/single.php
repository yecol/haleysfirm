<?php
/**
 * The Template for displaying all single posts.
 *
 * @package AccessPress Ray
 */

get_header();
global $accesspress_ray_options, $post;
$accesspress_ray_settings = get_option( 'accesspress_ray_options', $accesspress_ray_options );
$cat_blog = $accesspress_ray_settings['blog_cat'];
$post_class = get_post_meta( $post -> ID, 'accesspress_ray_sidebar_layout', true );
?>

<div class="ak-container">
	<?php 
		if ($post_class=='both-sidebar') { ?>
			<div id="primary-wrap" class="clearfix"> 
		<?php }
	?>
	<div id="primary" class="content-area yl-post-main">
		<main id="main" class="site-main" role="main">

		<?php while ( have_posts() ) : the_post(); ?>

			<?php get_template_part( 'content', 'single' ); ?>

			<?php // accesspress_ray_post_nav(); ?>

		<?php endwhile; // end of the loop. ?>

		</main><!-- #main -->
	</div><!-- #primary -->
	
	<?php 
	get_sidebar('left'); 

	if ($post_class=='both-sidebar') { ?>
		</div> 
	<?php }

	get_sidebar('right'); ?>
</div>

<?php get_footer(); ?>