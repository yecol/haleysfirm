<?php 
global $accesspress_ray_options, $post, $allowedtags;
$accesspress_ray_settings = get_option( 'accesspress_ray_options', $accesspress_ray_options );
$accesspress_ray_blog_cat = $accesspress_ray_settings['blog_cat'];
$accesspress_ray_call_to_action_post_id = $accesspress_ray_settings['call_to_action_post'];
$accesspress_ray_featured_title = $accesspress_ray_settings['featured_title'];
$accesspress_ray_featured_text = $accesspress_ray_settings['featured_text'];
$featured_post1 = $accesspress_ray_settings['featured_post1'];
$featured_post2 = $accesspress_ray_settings['featured_post2'];
$featured_post3 = $accesspress_ray_settings['featured_post3'];
$featured_post4 = $accesspress_ray_settings['featured_post4'];
$show_fontawesome_icon = $accesspress_ray_settings['show_fontawesome'];
$testimonial_category = $accesspress_ray_settings['testimonial_cat'];
$accesspress_ray_featured_bar = $accesspress_ray_settings['featured_bar'];
$accesspress_ray_hide_blogmore = $accesspress_ray_settings['hide_blogmore'];
$accesspress_ray_call_to_action_post_char = (isset($accesspress_ray_settings['call_to_action_post_char']) ? $accesspress_ray_settings['call_to_action_post_char'] : 650 );
$accesspress_ray_show_blog_number = (isset($accesspress_ray_settings['show_blog_number']) ? $accesspress_ray_settings['show_blog_number'] : 3 ) ;
$accesspress_ray_show_blog = $accesspress_ray_settings['show_blog'];
$accesspress_ray_blog_title = $accesspress_ray_settings['blog_title'];
?>

<section id="about-section">
	<div class="ak-container clearfix">
	<?php
		
			if(!empty($accesspress_ray_call_to_action_post_id)){
			
			$query1 = new WP_Query( 'p='.$accesspress_ray_call_to_action_post_id );
				while ($query1->have_posts()) : $query1->the_post(); ?>
					 
					<h1 class="roboto-light main-title"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h1>
						
					<div class="welcome-detail">
					
					<?php if($accesspress_ray_settings['call_to_action_post_content'] == 0 || empty($accesspress_ray_settings['call_to_action_post_content'])){ ?>
						<p class="welcome-content"><?php echo accesspress_ray_excerpt( get_the_content() , $accesspress_ray_call_to_action_post_char ) ?></p>
						<?php if(!empty($accesspress_ray_settings['call_to_action_post_readmore'])){?>
							<a href="<?php the_permalink(); ?>" class="read-more bttn"><?php echo esc_html($accesspress_ray_settings['call_to_action_post_readmore']); ?></a>
						<?php }
						
					}else{ 
						the_content();
					} ?>
						<a href="http://haleysfirm.com/2015/12/05/2016-recruit/" class="read-more bttn"> 2016年国际营火热报名中 </a>
					
					</div>
					
				<?php endwhile;	
				wp_reset_postdata(); 
				}
				
				else{ ?>
				
				<h1 class="roboto-light main-title"><a href="#"><?php _e('Welcome to AccessPress Ray','accesspress_ray') ?></a></h1>
				<div  class="welcome-detail">
				<p><?php _e('Free Responsive, Multipurpose Business and Corporate Theme perfect for any business.','accesspress_ray') ?></p>
				<a class="read-more bttn" href="#"><?php _e('Read More','accesspress_ray') ?></a>
				</div>

			<?php } ?>
	</div>
</section>

<section id="mid-section" class="featured-section clearfix">
	<div class="ak-container">
		<?php if(!empty($accesspress_ray_featured_title)): ?>
		<h3 class="roboto-light main-title"><?php echo esc_html($accesspress_ray_featured_title); ?></h3>
		<?php endif; ?>

		<?php if(!empty($accesspress_ray_featured_text)): ?>
		<div class="sub-desc"><?php echo wp_kses_post($accesspress_ray_featured_text); ?></div>
		<?php endif; ?>

		<div class="featured-post-wrapper clearfix">

			<div id="featured-post-5" class="featured-post">

				<figure class="featured-image">
				<img src="<?php echo get_template_directory_uri().'/images/demo/feature-i18n.jpg' ?>">
				</figure>

				<div class="featured-content">
					<h2 class="featured-title">真正的国际营</h2>
					<p><?php _e('营地学员来自世界各地，无论是课堂学习还是户外活动，不同国籍、不同文化背景的学生都融合在一起，既能广交朋友，又能有效提高英语水平和跨文化交际能力。加入我们，你的人生将增添一段精彩的历程！','accesspress_ray'); ?></p>
				</div>
			</div>

			<div id="featured-post-6" class="featured-post">

				<figure class="featured-image">
				<img src="<?php echo get_template_directory_uri().'/images/demo/feature-activity.jpg' ?>">
				</figure>

				<div class="featured-content">
					<h2 class="featured-title">丰富有趣的活动</h2>
					<p><?php _e('我们的国际营活动结合了运动、创意和挑战三个因素。户外活动除了常见的足球、网球、游泳，还有棒球、板球、曲棍球、皮划艇、射箭、攀岩、气枪、四轮越野车、迷你高尔夫、绕绳垂降、定向越野、野外生存等等。','accesspress_ray'); ?></p>
				</div>
			</div>

			<div id="featured-post-7" class="featured-post">

				<figure class="featured-image">
				<img src="<?php echo get_template_directory_uri().'/images/demo/feature-teach.jpg' ?>">
				</figure>

				<div class="featured-content">
					<h2 class="featured-title">专业的教师教练团队</h2>
					<p><?php _e('英语教师全部来自英语系国家并具备英语教师资历，拥有先进的教学理念和丰富的教学阅历；户外教练拥有教学执照，训练有素，并经过严格筛选。我们确保营地工作人员充满爱心，具备必要的资格和适合的个性。','accesspress_ray'); ?></p>
				</div>
			</div>

			<div id="featured-post-8" class="featured-post">

				<figure class="featured-image">
				<img src="<?php echo get_template_directory_uri().'/images/demo/feature-camp.jpg' ?>">
				</figure>

				<div class="featured-content">
					<h2 class="featured-title">寄宿制中学营地</h2>
					<p><?php _e('营地为著名的私立寄宿制学校！一流的设施、安全的环境、风景如画的校园，2-6人间的寝室，还有精心准备的国际化三餐（水果、饮料、甜点、沙拉自助）。你不仅可以获得夏令营历练，还可以深入感受海外留学生活。','accesspress_ray'); ?></p>
				</div>
			</div>

		<?php 
		if(!empty($featured_post1) || !empty($featured_post2) || !empty($featured_post3) || !empty($featured_post4)){
		    if(!empty($featured_post1)) { ?>
				<div id="featured-post-1" class="featured-post">
					
					<?php
						$query2 = new WP_Query( 'p='.$featured_post1 );
						// the Loop
						while ($query2->have_posts()) : $query2->the_post(); 
							
							if( $show_fontawesome_icon == 0 ){
							?>
							<figure class="featured-image">
									<?php 							
									if( has_post_thumbnail()){
									$image = wp_get_attachment_image_src( get_post_thumbnail_id( $post->ID ), 'accesspress-ray-featured-thumbnail', false ); 
									?>
									<img src="<?php echo esc_url($image[0]); ?>" alt="<?php the_title(); ?>">
									<?php }else { ?>
									<img src="<?php echo get_template_directory_uri(); ?>/images/demo/featured-fallback.jpg" alt="<?php the_title(); ?>">
									<?php } 
									?>
							</figure>
							<?php } ?>	

							
							<?php 
							if($show_fontawesome_icon == 1){ ?>
							<div class="featured-icon">
							<i class="fa <?php echo esc_attr($accesspress_ray_settings['featured_post1_icon']) ?>"></i>
							</div>		
							<?php } ?>
							
							

							<div class="featured-content">
								<h2 class="featured-title"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
								<p><?php echo accesspress_ray_excerpt( get_the_content() , 160 ) ?></p>
							</div>
						<?php endwhile;
						wp_reset_postdata(); ?>
				
				</div>
			<?php }

			if(!empty($featured_post2)) { ?>
				<div id="featured-post-2" class="featured-post">
					
					<?php
						$query3 = new WP_Query( 'p='.$featured_post2 );
						// the Loop
						while ($query3->have_posts()) : $query3->the_post();
							
							if( $show_fontawesome_icon == 0 ){
							?>
							<figure class="featured-image">
									<?php 							
									if( has_post_thumbnail()){
									$image = wp_get_attachment_image_src( get_post_thumbnail_id( $post->ID ), 'accesspress-ray-featured-thumbnail', false ); 
									?>
									<img src="<?php echo esc_url($image[0]); ?>" alt="<?php the_title(); ?>">
									<?php }else { ?>
									<img src="<?php echo get_template_directory_uri(); ?>/images/demo/featured-fallback.jpg" alt="<?php the_title(); ?>">
									<?php } 
									?>
							</figure>
							<?php } ?>	

							
							<?php 
							if($show_fontawesome_icon == 1){ ?>
							<div class="featured-icon">
							<i class="fa <?php echo esc_attr($accesspress_ray_settings['featured_post2_icon']) ?>"></i>
							</div>		
							<?php } ?>
							
							

							<div class="featured-content">
								<h2 class="featured-title"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
								<p><?php echo accesspress_ray_excerpt( get_the_content() , 160 ) ?></p>
							</div>
						<?php endwhile;
						wp_reset_postdata(); ?>
				
				</div>
			<?php } ?>
			
			<div class="clearfix hide"></div>

			<?php if(!empty($featured_post3)) { ?>
				<div id="featured-post-3" class="featured-post">
					<?php
						$query4 = new WP_Query( 'p='.$featured_post3 );
						// the Loop
						while ($query4->have_posts()) : $query4->the_post(); 
							if( $show_fontawesome_icon == 0 ){
							?>
							<figure class="featured-image">
									<?php 							
									if( has_post_thumbnail()){
									$image = wp_get_attachment_image_src( get_post_thumbnail_id( $post->ID ), 'accesspress-ray-featured-thumbnail', false ); 
									?>
									<img src="<?php echo esc_url($image[0]); ?>" alt="<?php the_title(); ?>">
									<?php }else { ?>
									<img src="<?php echo get_template_directory_uri(); ?>/images/demo/featured-fallback.jpg" alt="<?php the_title(); ?>">
									<?php } 
									?>
							</figure>
							<?php } ?>	

							
							<?php 
							if($show_fontawesome_icon == 1){ ?>
							<div class="featured-icon">
							<i class="fa <?php echo esc_attr($accesspress_ray_settings['featured_post3_icon']) ?>"></i>
							</div>		
							<?php } ?>
							
							

							<div class="featured-content">
								<h2 class="featured-title"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
								<p><?php echo accesspress_ray_excerpt( get_the_content() , 160 ) ?></p>
							</div>
						<?php endwhile;
						wp_reset_postdata(); ?>
				
				</div>
			<?php } 

			if(!empty($featured_post4)) { ?>
				<div id="featured-post-4" class="featured-post">
					<?php
						$query5 = new WP_Query( 'p='.$featured_post4 );
						// the Loop
						while ($query5->have_posts()) : $query5->the_post(); 
							if( $show_fontawesome_icon == 0 ){
							?>
							<figure class="featured-image">
									<?php 							
									if( has_post_thumbnail()){
									$image = wp_get_attachment_image_src( get_post_thumbnail_id( $post->ID ), 'accesspress-ray-featured-thumbnail', false ); 
									?>
									<img src="<?php echo esc_url($image[0]); ?>" alt="<?php the_title(); ?>">
									<?php } 
									?>
							</figure>
							<?php } ?>	

							
							<?php 
							if($show_fontawesome_icon == 1){ ?>
							<div class="featured-icon">
							<i class="fa <?php echo esc_attr($accesspress_ray_settings['featured_post4_icon']) ?>"></i>
							</div>		
							<?php } ?>
							
							

							<div class="featured-content">
								<h2 class="featured-title"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
								<p><?php echo accesspress_ray_excerpt( get_the_content() , 160 ) ?></p>
							</div>
						<?php endwhile;
						wp_reset_postdata(); ?>
				
				</div>
			<?php }
		}
			 ?>
		</div>	
	</div>
</section>

<section id="top-section" class="events-section clearfix">
	<div id="latest-events" class="ak-container clearfix">

			<?php
			if(!empty($accesspress_ray_blog_cat)){

	            $loop = new WP_Query( array(
	                'cat' => $accesspress_ray_blog_cat,
	                'posts_per_page' => $accesspress_ray_show_blog_number,
	            )); ?>

	        <h1 class="roboto-light main-title"><a href="<?php echo get_category_link($accesspress_ray_blog_cat); ?>"><?php echo get_cat_name($accesspress_ray_blog_cat); ?></a></h1>
			<div class="event-list-wrapper clearfix">
			<div class="event-slider">
	        <?php while ($loop->have_posts()) : $loop->the_post(); ?>

	        	<div class="event-list clearfix">
	        		
	        		<figure class="event-thumbnail clearfix">
						<a href="<?php the_permalink(); ?>">
						<?php 
						if( has_post_thumbnail() ){
						$image = wp_get_attachment_image_src( get_post_thumbnail_id( $post->ID ), 'accesspress-ray-featured-thumbnail', false ); 
						?>
						<img src="<?php echo esc_url($image[0]); ?>" alt="<?php the_title(); ?>">
						<?php }else{
						?>
						<img src="<?php echo get_template_directory_uri() ?>/images/blog-fallback.jpg">
						<?php	
						} 

						if($accesspress_ray_settings['show_blogdate'] == 1){ ?>
							<div class="event-date">
							<span class="event-date-day"><?php echo get_the_date('j'); ?></span>
							<span class="event-date-month"><?php echo get_the_date('M'); ?></span>
							</div>
						<?php } ?>
						</a>
					</figure>	

					<div class="event-detail clearfix">
		        		<h4 class="event-title">
		        			<a href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
		        		</h4>

		        		<div class="event-excerpt">
		        			<?php echo accesspress_ray_excerpt( get_the_content() , 210 ) ?>
		        		</div>

						<a class="read-more-btn" href="<?php echo the_permalink(); ?>"><?php echo esc_html($accesspress_ray_settings['read_more_text']);?><span class="read-icon-wrap"><i class="fa fa-angle-right"></i></span></a>

	        		</div>
	        	</div>
	        
	        <?php endwhile; ?>
			</div>
			<?php if($accesspress_ray_hide_blogmore != 1 ) { ?>
	        <a href="<?php echo get_category_link($accesspress_ray_blog_cat); ?>" class="view-all clearfix"><?php _e('view all','accesspress_ray');?></a>
			<?php }else{ ?>
			<div class="clearfix">&nbsp;</div>
			<?php } ?>
			</div>

	        <?php wp_reset_postdata(); 

	        } else { ?>
	        
	        <h1 class="roboto-light main-title">Latest Blogs</h1>
	        <div class="event-list-wrapper clearfix">
	        <div class="event-slider">
		        <?php for ( $event_count=1 ; $event_count < 4 ; $event_count++ ) { ?>

		    
		        <div class="event-list clearfix">
						<figure class="event-thumbnail  ">
							<a href="#"><img src="<?php echo get_template_directory_uri().'/images/demo/blog'.$event_count.'.jpg'; ?>" alt="<?php echo 'event'.$event_count; ?>">
							<div class="event-date">
								<span class="event-date-day"><?php echo $event_count; ?></span>
								<span class="event-date-month"><?php echo "Mar"; ?></span>
							</div>
							</a>
						</figure>	

						<div class="event-detail clearfix">
			        		<h4 class="event-title">
			        			<a href="#"><?php echo __('Blog Post ','accesspress_ray'). $event_count; ?></a>
			        		</h4>

			        		<div class="event-excerpt">
			        			<?php _e('Lorem ipsum dolor sit amet, consectetur adipiscing elit. Morbi cursus, purus id ultrices tristique, velit ante accumsan metus, non porttitor tortor elit pellentesque felis...','accesspress_ray') ?>
			        		</div>

			        		<a class="read-more-btn" href="#"><?php _e('Read More','accesspress_ray') ?> <span class="read-icon-wrap"><i class="fa fa-angle-right"></i></span></a>
		        		</div>
		        </div>		        
		        <?php } ?>
		        </div>
		        <a href="#" class="view-all clearfix"><?php _e('view all','accesspress_ray') ?></a>
		    </div>
	        <?php }  ?>	
	</div>
</section>

<?php
if(is_active_sidebar( 'textblock-1' ) || is_active_sidebar( 'textblock-2' ) || is_active_sidebar( 'textblock-3' )):
	if($accesspress_ray_featured_bar != 1) :?>

<section id="bottom1-section" class="business-section clearfix">
	<div class="ak-container">
		<div class="business-activities-wrapper clearfix">
	        <div class="business-wrapper clearfix">
			<?php if ( is_active_sidebar( 'textblock-1' ) ) : ?>
			  <?php dynamic_sidebar( 'textblock-1' ); ?>
			<?php endif; ?>	
			</div>
	        
	        <div class="business-wrapper clearfix">
	        <?php 
	        if ( is_active_sidebar( 'textblock-2' ) ) : ?>
			  <?php dynamic_sidebar( 'textblock-2' ); ?>
	        <?php endif; ?>	
			</div>    
	        

	        <div class="business-wrapper clearfix">
				<?php 
				if ( is_active_sidebar( 'textblock-3' ) ) {
					dynamic_sidebar( 'textblock-3' );
				}
				?>
			</div>
		</div>
	</div>
</section>
<?php 
	endif; 
endif;
?>

<?php if($accesspress_ray_show_blog == 1){ ?>
<section id="accesspress-blog">
<div class="ak-container" id="blog-post">
<h3 class="roboto-light main-title"><?php echo esc_html($accesspress_ray_blog_title); ?></h3>
	<div id="primary" class="content-area">
		<main id="main" class="site-main" role="main">

		<?php if ( have_posts() ) : ?>

			<?php 
			while ( have_posts() ) : the_post(); 
			get_template_part( 'content', 'summary' );
			endwhile;
			?>

			<?php accesspress_ray_paging_nav(); ?>

		<?php else : ?>

			<?php get_template_part( 'content', 'none' ); ?>

		<?php endif; ?>
		<?php wp_reset_query(); ?>
		</main><!-- #main -->
	</div><!-- #primary -->

	<?php get_sidebar('right'); ?>
</div>
</section>
<?php } ?>

<?php
if(!empty($accesspress_ray_settings['google_map'])) { 
?>           
<section id="google-map" class="clearfix">
		<?php 
		global $accesspress_ray_options;
		$allowed = array(
			'iframe' => array(
				'src' => array()
				)
			);
		$accesspress_ray_settings = get_option( 'accesspress_ray_options', $accesspress_ray_options );
        	
        echo wp_kses($accesspress_ray_settings['google_map'] , $allowed);
					
		if(!empty($accesspress_ray_settings['contact_address'])) { ?>
		<div class="google-section-wrap ak-container">			
		<div class="ak-contact-address">
		<h3><?php _e('Contact Us', 'accesspress_ray'); ?></h3>
		<?php echo wpautop($accesspress_ray_settings['contact_address']);
			do_action( 'accesspress_ray_social_links' ); 
		?>
		</div>
		</div>

		<?php } ?>
		
</section>
<?php } ?>