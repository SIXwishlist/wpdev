<?
/* SIDERBARS
------------------------------------------------- */
if ( function_exists('register_sidebar') )
register_sidebar(array('name'=>'Front Page Top',
		'id'=>'fp-top',
		'before_widget' => '',//'<li id="%1$s" class="widget %2$s">',
		'after_widget' => '',//'</li>',
		'before_title' => '<h2 class="widgettitle">',
		'after_title' => '</h2>',
));

register_sidebar(array('name'=>'Front Page 1',
		'id'=>'fp1',
		'before_widget' => '',//'<li id="%1$s" class="widget %2$s">',
		'after_widget' => '',//'</li>',
		'before_title' => '<h2 class="widgettitle">',
		'after_title' => '</h2>',
));

register_sidebar(array('name'=>'Front Page 2',
		'id'=>'fp2',
		'before_widget' => '',//'<li id="%1$s" class="widget %2$s">',
		'after_widget' => '',//'</li>',
		'before_title' => '<h2 class="widgettitle">',
		'after_title' => '</h2>',
));

register_sidebar(array('name'=>'Front Page 3',
		'id'=>'fp3',
		'before_widget' => '',//'<li id="%1$s" class="widget %2$s">',
		'after_widget' => '',//'</li>',
		'before_title' => '<h2 class="widgettitle">',
		'after_title' => '</h2>',
));

register_sidebar(array('name'=>'Front Page Bottom',
		'id'=>'fp-bottom',
		'before_widget' => '',//'<li id="%1$s" class="widget %2$s">',
		'after_widget' => '',//'</li>',
		'before_title' => '<h2 class="widgettitle">',
		'after_title' => '</h2>',
));

register_sidebar(array('name'=>'Blog Page Sidebar',
		'id'=>'blog-page-sidebar',
		'before_widget'	=>	'<aside id="meta" class="widget well widget_meta">',
			'after_widget'	=>	'</aside>',
			'before_title'	=>	'<h2 class="widget-title">',
			'after_title'	=>	'</h2>',
));

register_sidebar(array('name'=>'Default Page Sidebar',
		'id'=>'page-sidebar',
		'before_widget'	=>	'<aside id="meta" class="widget well widget_meta">',
			'after_widget'	=>	'</aside>',
			'before_title'	=>	'<h2 class="widget-title">',
			'after_title'	=>	'</h2>',
));

register_sidebar(array('name'=>'Footer Left',
		'id'=>'footer-left',
		'before_widget' => '',//'<li id="%1$s" class="widget %2$s">',
		'after_widget' => '',//'</li>',
		'before_title' => '<h2 class="widgettitle">',
		'after_title' => '</h2>',
));

register_sidebar(array('name'=>'Footer Middle',
		'id'=>'footer-middle',
		'before_widget' => '',//'<li id="%1$s" class="widget %2$s">',
		'after_widget' => '',//'</li>',
		'before_title' => '<h2 class="widgettitle">',
		'after_title' => '</h2>',
));

register_sidebar(array('name'=>'Footer Right',
		'id'=>'footer-right',
		'before_widget' => '',//'<li id="%1$s" class="widget %2$s">',
		'after_widget' => '',//'</li>',
		'before_title' => '<h2 class="widgettitle">',
		'after_title' => '</h2>',
));

 register_sidebar( array ( 'name' => 'Portfolio Template Side',
       'id' => 'portfolio-template-side',
       'before_widget'	=>	'<aside id="meta" class="widget well widget_meta">',
			'after_widget'	=>	'</aside>',
			'before_title'	=>	'<h2 class="widget-title">',
			'after_title'	=>	'</h2>',
        ) );


//add_filter('bloginfo','dbo_replace_name',10, 2);
function dbo_replace_name(){
	$full = get_bloginfo( 'name' , 'display' );
	$words = explode(' ',$full);
	$firstSix = array_slice($words,0,6,true);
	$lastBit = array_slice($words,6);
	$firstSix = implode(' ',$firstSix);$lastBit = implode(' ',$lastBit); 
	return $firstSix."<span class='hidden'> $lastBit</span>";
}

// replace default bootstrap styles with replacement to take off the 1200px option
function dbo_bootstrap_register_scripts_styles() {

	if ( ! is_admin() ) {
		$theme_version = _the_bootstrap_version();
		$suffix = ( defined('SCRIPT_DEBUG') AND SCRIPT_DEBUG ) ? '' : '.min';
			
		/**
		 * Scripts
		 */
		wp_register_script(
			'tw-bootstrap',
			get_stylesheet_directory_uri() . "/js/bootstrap{$suffix}.js",// change from parent theme ( get_template_directory ) to child theme ( get_stylesheet_directory )
			array('jquery'),
			'2.0.3',
			true
		);
		
		wp_register_script(
			'the-bootstrap',
			get_stylesheet_directory_uri() . "/js/the-bootstrap{$suffix}.js",// change from parent theme ( get_template_directory ) to child theme ( get_stylesheet_directory )
			array('tw-bootstrap'),
			$theme_version,
			true
		);

		wp_enqueue_style(
			'fancybox-css',
			get_stylesheet_directory_uri() . "/css/jquery.fancybox.css",// replace with my style was get_template_directory_uri
			array(),
			'2.1.4'
		);
		
		// try adding fancybox
		wp_enqueue_script('fancybox',
			get_stylesheet_directory_uri() . "/js/jquery.fancybox.pack.js",array('jquery'),'2.1.4'
		);

				
		/**
		 * Styles
		 */
		wp_register_style(
			'tw-bootstrap',
			get_stylesheet_directory_uri() . "/css/bootstrap{$suffix}.css",// replace with my style was get_template_directory_uri
			array(),
			'2.0.3'
		);
		
		wp_register_style(
			'the-bootstrap',
			get_stylesheet_directory_uri() . "/css/style{$suffix}.css",// replace with my style was get_template_directory_uri
			array('tw-bootstrap'),
			$theme_version
		);
	}
}
remove_action( 'init', 'the_bootstrap_register_scripts_styles' );
add_action('init', 'dbo_bootstrap_register_scripts_styles' );

add_filter('body_class','dbo_change_cat_body_class',1);

function dbo_change_cat_body_class($c){	  
	  if (WIDE_HEADER):
		$c[]='wide-header';
	  endif;
	return $c;
}

function the_bootstrap_header_style() {

	// If no custom options for text are set, let's bail
	// get_header_textcolor() options: get_theme_support( 'custom-header', 'default-text-color' ) is default, hide text (returns 'blank') or any hex value
	if ( get_theme_support( 'custom-header', 'default-text-color' ) != get_header_textcolor() ) :
	?>
	<style type="text/css">
		<?php if ( 'blank' == get_header_textcolor() ) : ?>
		#branding hgroup {
			position: absolute !important;
			clip: rect(1px 1px 1px 1px); /* IE6, IE7 */
			clip: rect(1px, 1px, 1px, 1px);
		}
		<?php else : ?>
		/*
		#site-description {
			color: #<?php echo get_header_textcolor(); ?> !important;
		}
		*/
		<?php endif; ?>
	</style>
	<?php
	endif;
}

// adds the ability to use shortcodes in widget areas
add_filter('widget_text', 'do_shortcode');

?>