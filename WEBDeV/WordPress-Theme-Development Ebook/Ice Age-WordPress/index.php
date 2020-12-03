<!DOCTYPE html>

<html>
		<head>
			<title> Ice Age - WordPress theme</title>
			
			<style type="text/css"></style>
			
			<link rel="stylesheet" type="text/css" href="<?php echo get_template_directory_uri(); ?>/style.css">
		
		<?php wp_head(); ?>
		</head>


<body>
<div class='main header'>

	<div class='logo'>
	
		<a href=" <?php echo home_url(); ?> "><img src="<?php echo get_template_directory_uri(); ?>/images/logo.png" alt='logo'></a>
		
	</div>
	
	

		<div class='ice_menu'>
		
			<?php wp_nav_menu(); ?>
		
		</div>
		
		
		
	</div>

	
<!-- Post Content-->
	
					<div class=" main content">


					<?php if(have_posts()) : ?><?php while(have_posts())  : the_post(); ?>

					<h2><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>

					<p><?php the_content(); ?></p>

					<?php endwhile; ?>

					<?php else : ?>

					<h3><?php _e('404 Error&#58; Not Found'); ?></h3>

					<?php endif; ?>
					
					</div>
					
					
					
<!-- Post Content-->




		<div class='footer'>

						
						<?php dynamic_sidebar('widget1'); ?>
						
						<?php dynamic_sidebar('widget2'); ?>
											
						<?php dynamic_sidebar('widget3'); ?>
			
						<?php dynamic_sidebar('copyright'); ?>
			
		</div>


<?php wp_footer(); ?>
</body>
</html>