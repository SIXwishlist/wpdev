<?php

/*
Template Name: iframe
*/

// clean URLs

list($host,$iParent,$iChild) = split("/", urldecode($_SERVER['REQUEST_URI']));
?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" 
	"http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head profile="http://gmpg.org/xfn/11">

<title><?php wp_title(' - ', true, 'right');?></title>
<meta http-equiv="Content-Type" content="<?php bloginfo('html_type'); ?>; charset=<?php bloginfo('charset'); ?>" />

<link rel="stylesheet" href="<?php bloginfo('stylesheet_url'); ?>" type="text/css" media="screen" />

<style type="text/css">
	body, iframe, h3 {
			margin:0;padding:0;background:white;
	}
	
</style>
</head>
 <body>
 <?php 
 
query_posts("p=$iChild");

if (have_posts()) : 

		 while (have_posts()) : the_post(); 	
			$link = get_post_meta($post->ID, 'link', true);
		endwhile;

endif;
?>
  <h3>visit <a target="newone" href="<?php echo $link?>" title="visit <?php the_title();?> - opens in new window"><?php the_title();?></a></h3>
						<p><a target="newone" title="visit <?php the_title();?> - opens in new window" href="<?php echo $link;?>">  <?php the_post_thumbnail( 'large' ); ?></a></p>
 </body>
</html>
