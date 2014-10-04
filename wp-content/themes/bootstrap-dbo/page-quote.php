<?php
/*
Template Name: quote
*/

get_header(); ?>
			<div id="primary" class="span12">
				<?php tha_content_before(); ?>
				<div id="content" role="main">
					<?php tha_content_top();
					
					the_post();
					get_template_part( '/partials/content', 'page' );
					//comments_template();
					
					tha_content_bottom(); ?>
				</div><!-- #content -->
				<?php tha_content_after(); ?>
			</div><!-- #primary -->
<?php
//get_sidebar('page');
?>
<?php 
//get_footer();


/* End of file page.php */
/* Location: ./wp-content/themes/the-bootstrap/page.php */
?>
</body>
</html>