<?php
/** page.php
 *
 * The template for displaying all pages.
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site will use a
 * different template.
 *
 * @author		Konstantin Obenland
 * @package		The Bootstrap
 * @since		1.0.0 - 07.02.2012
 */

get_header(); ?>

<div id="primary" class="span12">

	<?php get_sidebar('home'); ?>
	<?php tha_content_before(); ?>
	<div id="content" role="main">
		<?php tha_content_top();
		
		the_post();
		get_template_part( 'content', 'home' );
		//comments_template();

		tha_content_bottom(); ?>
	</div><!-- #content -->
	<?php tha_content_after(); ?>
<!--</div>--><!-- #primary -->
<div class="row three-pods">
	<div class="span4 first">
		<?php dynamic_sidebar('fp1'); ?>
	</div>
	<div class="span4 second">
		<?php dynamic_sidebar('fp2'); ?>
	</div>
	<div class="span4 third">
		<?php dynamic_sidebar('fp3'); ?>
	</div>
</div>
<div class="final-pitch">	
		<?php dynamic_sidebar('fp-bottom'); ?>
</div>

<?php

get_footer();


/* End of file page.php */
/* Location: ./wp-content/themes/the-bootstrap/page.php */