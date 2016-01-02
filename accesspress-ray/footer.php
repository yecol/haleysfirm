<?php
/**
 * The template for displaying the footer.
 *
 * Contains the closing of the #content div and all content after
 *
 * @package AccessPress Ray
 */
?>
<?php 
global $post, $accesspress_ray_options;
$accesspress_ray_settings = get_option( 'accesspress_ray_options', $accesspress_ray_options );
?>
	</div><!-- #content -->

	<footer id="colophon">
	<?php 
		if ( is_active_sidebar( 'footer-1' ) ||  is_active_sidebar( 'footer-2' )  || is_active_sidebar( 'footer-3' )  || is_active_sidebar( 'footer-4' ) ) : ?>
		<div id="top-footer">
		<div class="ak-container">
			<div class="footer1 footer">
			</div>

			<div class="footer2 footer">

			<aside id="categories-4" class="yb-footer-title"><h3 class="widget-title">联系信息</h3>
				<ul>
					<li class="cat-item yb-footer-item">联系人： 蒋老师</li>
					<li class="cat-item yb-footer-item">info@haleysfirm.com</li>
				</ul>
				</aside>
			</div>

			<div class="clearfix hide"></div>

			<div class="footer3 footer">
				<aside id="categories-4" class="yb-footer-title"><h3 class="widget-title">本公司经英国大使馆注册认证</h3>
				<ul>
					<li class="cat-item yb-footer-item"><img src="<?php echo get_template_directory_uri().'/images/demo/bc.png' ?>"></li>
				</ul>
				</aside>
			</div>

			<div class="footer4 footer">
				
			</div>
		</div>
		</div>
		<?php endif; ?>

		<div id="middle-footer" class="footer-menu">
			<div class="ak-container">
				<?php wp_nav_menu( array( 'theme_location' => 'secondary', 'depth' => -1) ); 	?>
			</div>
		</div>

		<div id="bottom-footer">
		<div class="ak-container">
			<div class="footer-wrap clearfix">
				<div class="copyright">
					<?php _e('Copyright', 'accesspress_ray'); ?> &copy; <?php echo date('Y') ?> 
					<a href="<?php echo home_url(); ?>">
					<?php if(!empty($accesspress_ray_settings['footer_copyright'])){
						echo $accesspress_ray_settings['footer_copyright']; 
						}else{
							echo bloginfo('name');
						} ?>
					</a>. <a href="<?php echo esc_url( 'http://wordpress.org/' ); ?>"><?php printf( __( 'Powered by %s', 'accesspress_ray' ), 'WordPress' ); ?></a>
					<span class="sep"> | </span>
					<?php _e( 'Theme:', 'accesspress_ray' ) ?> <a href="<?php echo esc_url('http://accesspressthemes.com/');?>" title="AccessPress Themes" target="_blank">AccessPress Ray</a>
				</div><!-- .copyright -->
			</div><!-- .footer-wrap -->

			<?php if($accesspress_ray_settings['show_social_footer'] == 0){?>
			<div class="footer-socials clearfix">
	            <?php
					do_action( 'accesspress_ray_social_links' ); 
				?>
			</div>
			<?php } ?>
		</div>
		</div>
	</footer><!-- #colophon -->
</div><!-- #page -->
<div class="multi-border">
	<ul>
		<li class="dark-green"></li>
		<li class="yellow"></li>
		<li class="cream"></li>
		<li class="orange"></li>
		<li class="light-green"></li>				
	</ul>
</div>
<?php wp_footer(); ?>

</body>
</html>
