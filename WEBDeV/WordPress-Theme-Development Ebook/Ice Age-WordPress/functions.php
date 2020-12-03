	<?php
	
	/* Register Navigation Menu */
		
		if ( function_exists( 'register_nav_menu' ) ) {
			register_nav_menu( 'main-menu', 'Ice Menu' );
		}

	/* Register sidebars/widgets */
 
			/*Footer 1 Widget Area*/
		
	register_sidebar( array(
			'name' => __( 'Footer 1', 'iceage' ),
			'id' => 'widget1',
			'before_widget' => '<div class="footer fixed widget1 img">',
	        'after_widget' => '</div>',
	        'before_title' => '<h2>',
	        'after_title' => '</h2>',
	    ) );	
		
		
			/*Footer 2 Widget Area*/
			
	register_sidebar( array(
			'name' => __( 'Footer 2', 'iceage' ),
			'id' => 'widget2',
			'before_widget' => '<div class="footer fixed widget2 img">',
	        'after_widget' => '</div>',
	        'before_title' => '<h2>',
	        'after_title' => '</h2>',
	    ) );	
		
			/*Footer 3 Widget Area*/
			register_sidebar( array(
			'name' => __( 'Footer 3', 'iceage' ),
			'id' => 'widget3',
			'before_widget' => '<div class="footer fixed widget3 img">',
	        'after_widget' => '</div>',
	        'before_title' => '<h2>',
	        'after_title' => '</h2>',
	    ) );	
			/*Copyright Widget Area*/
			register_sidebar( array(
			'name' => __( 'Copyright', 'iceage' ),
			'id' => 'copyright',
			'before_widget' => '<div class="footer copyright">',
	        'after_widget' => '</div>',
	        'before_title' => '<h2>',
	        'after_title' => '</h2>',
	    ) );
	?>

	