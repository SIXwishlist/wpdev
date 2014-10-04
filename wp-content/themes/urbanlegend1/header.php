<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" 
	"http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head profile="http://gmpg.org/xfn/11">

<title><?php wp_title(' - ', true, 'right');	 bloginfo('name'); ?></title>
<meta http-equiv="Content-Type" content="<?php bloginfo('html_type'); ?>; charset=<?php bloginfo('charset'); ?>" />

<link rel="stylesheet" href="<?php bloginfo('stylesheet_url'); ?>" type="text/css" media="screen" />
<link rel="stylesheet" href="<?php bloginfo('stylesheet_directory');?>/jquery.fancybox-1.3.1.css" type="text/css" media="screen" />
<?php 
	if (is_page('Contact')):?>
	<link rel="stylesheet" href="<?php bloginfo('stylesheet_directory');?>/dark-rounded.css" type="text/css" media="screen" />
	<?php endif; ?>

<link rel="stylesheet" href="<?php bloginfo('stylesheet_directory');?>/print.css" type="text/css" media="print" />

<link rel="shortcut icon" type="image/x-icon" href="/favicon.ico" />
<link rel="alternate" type="application/rss+xml" title="<?php bloginfo('name'); ?> RSS Feed" href="<?php bloginfo('rss2_url'); ?>" />
<link rel="alternate" type="application/atom+xml" title="<?php bloginfo('name'); ?> Atom Feed" href="<?php bloginfo('atom_url'); ?>" />
<link rel="pingback" href="<?php bloginfo('pingback_url'); ?>" />		


<?php  wp_head(); 

	if (is_page('Portfolio')):?>
	<script type="text/javascript">
			//$(document).ready(function() {
			jQuery(document).ready(function($) {
			
			//var pCont = $("#content .post:gt(2)"); applies to all elements GREATER THAN the third
			var allCont = $("#content .post");
			allCont.children().not("h3, h3 + small").toggle();
			allCont.find("h3 a").attr('title','click to show or hide this entry');
			allCont.find("h3").on("click",function(e){
				e.preventDefault();
				$(this).closest('div').children().not("h3, h3 + small").slideToggle(500);

			});
			
			/* This is basic - uses default settings */
	
				//$("a#single_image").fancybox();
	
			/* Using custom settings */
	
			$("a.iframe").fancybox({
					'hideOnContentClick': true,
					'autoDimensions':false,
					'width':800,
					'height':520
					
			});

			/* Apply fancybox to multiple items 
	
			$("a.group").fancybox({
			'transitionIn'	:	'elastic',
			'transitionOut'	:	'elastic',
			'speedIn'		:	600, 
			'speedOut'		:	200, 
			'overlayShow'	:	false
			});
			*/

			});

	</script>
<?php 
	endif;
	?>
</head>
<body <?php body_class();?>>
<div id="header">
	<div id="headerimg">
		<h1><a href="<?php echo get_option('home'); ?>/" rel="bookmark" title="Permanent Link to Urban Legend Web Design"><?php
		if (strstr($_SERVER['SERVER_NAME'],"urbanlegendweb.co.nz")):
					the_ttftext('Urban Legend Web',$style = 'Urban Legend', $overrides = "");
		else:
					the_title();
		endif;?></a></h1>
		<div class="description"><?php bloginfo('description'); ?></div>
		<ul id="mainmenu"><?php 
					/*if (!is_page(array('about','contact'))):
						wp_list_pages('exclude=22&title_li=' ); 
					else: 
						wp_list_pages('exclude=18&title_li=');
					endif;*/
					if (strstr($_SERVER['SERVER_NAME'],"urbanlegendweb.co.nz")):
						wp_list_pages('exclude=211,528&title_li=');
					else:
						wp_list_pages('exclude=211,578&title_li=');
					endif;
						
					?></ul>
	</div>
</div>
<div id="wrapper">
