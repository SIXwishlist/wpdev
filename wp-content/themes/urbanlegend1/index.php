<?php

get_header(); ?>

	<div id="content" class="narrowcolumn">
								<h2 class="pagetitle"><a href="<?php the_permalink() ?>" rel="bookmark" title="Permanent Link to <?php the_title_attribute(); ?>">This 'n That</a></h2>
	<?php query_posts('category_name=General'); ?>
	<?php if (have_posts()) : 
	
		while (have_posts()) : the_post(); ?>
		   
			<div <?php post_class() ?> id="post-<?php the_ID(); ?>">
				<h3><a href="<?php the_permalink() ?>" rel="bookmark" title="Permanent Link to <?php the_title_attribute(); ?>"><?php the_title(); ?></a></h3>
				<small><?php the_time('F jS, Y') ?> </small>

				<div class="entry">
					<?php the_content('Read the rest of this entry &raquo;'); ?>
				</div>
				  <?php if (current_user_can('edit_posts')):?>
						<p class="postmetadata"><?php the_tags('Tags: ', ', ', '<br />'); ?> Posted in <?php the_category(', ') ?> | <?php edit_post_link('Edit', '', ' | '); ?>  <?php comments_popup_link('No Comments &#187;', '1 Comment &#187;', '% Comments &#187;'); ?></p>
					<?php endif; ?>
			</div>

		<?php endwhile; ?>

		
	<?php else : ?>

		<h2 class="center">Not Found</h2>
		<p class="center">Sorry, but you are looking for something that isn't here.</p>
		<?php get_search_form(); ?>

	<?php endif; ?>
	
	</div>
	<?php
	include(TEMPLATEPATH . '/searchform.php'); ?>	

<div id="sidebar">
<?php 
get_template_part('cform2'); 
if ( function_exists('dynamic_sidebar') && dynamic_sidebar('blog-page-side') ) :
endif;

?>
<!-- AddThis Button BEGIN -->
<div class="addthis_toolbox addthis_default_style ">
<a class="addthis_button_preferred_1"></a>
<a class="addthis_button_preferred_2"></a>
<a class="addthis_button_preferred_3"></a>
<a class="addthis_button_preferred_4"></a>
<a class="addthis_button_compact"></a>
<a class="addthis_counter addthis_bubble_style"></a>
</div>
<script type="text/javascript" src="http://s7.addthis.com/js/250/addthis_widget.js#pubid=ra-4e6c5b311bf04a25"></script>
<!-- AddThis Button END -->
</div>
<?php get_footer(); ?>
 