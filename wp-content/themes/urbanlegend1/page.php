<?php

get_header(); 
?>

	<div id="content" class="narrowcolumn">

	<?php if (have_posts()) : ?>

		<?php while (have_posts()) : the_post(); ?>

			<div <?php post_class() ?> id="post-<?php the_ID(); ?>">
				<h2 class="pagetitle"><a href="<?php the_permalink() ?>" rel="bookmark" title="Permanent Link to <?php the_title_attribute(); ?>"><?php 
				if (!is_page('Home')):
					the_title();
				else:
					?>Web Design and Development<?php endif;?></a></h2>
				<!--<small><?php the_time('F jS, Y') ?>  by <?php the_author() ?> </small>-->

				<div class="entry">
					<?php the_content('Read the rest of this entry &raquo;'); ?>
				</div>
			   <?php if (current_user_can('edit_posts')):?>
					<p class="postmetadata"><?php the_tags('Tags: ', ', ', '<br />'); ?> Posted in <?php the_category(', ') ?> | <?php edit_post_link('Edit', '', ' | '); ?>  <?php comments_popup_link('No Comments &#187;', '1 Comment &#187;', '% Comments &#187;'); ?></p>
				<?php endif; ?>
			</div>

		<?php endwhile; ?>
		  <?php if (is_page('portfolio')):
			 query_posts('category_name=Portfolio');?>
		 <?php while (have_posts()) : the_post(); ?>
		  
			<div <?php post_class() ?> id="post-<?php the_ID(); ?>">
				<h3><a href="<?php the_permalink() ?>" rel="bookmark" title="Permanent Link to <?php the_title_attribute(); ?>"><?php the_title();?></a></h3>
				<small><?php the_time('F jS, Y') ?> <!-- by <?php the_author() ?> --></small>

				<div class="entry">
					<?php the_content('Read the rest of this entry &raquo;'); ?>
				</div>
				<?php if (current_user_can('edit_posts')):?>
						<p class="postmetadata"><?php the_tags('Tags: ', ', ', '<br />'); ?> Posted in <?php the_category(', ') ?> | <?php edit_post_link('Edit', '', ' | '); ?>  <?php comments_popup_link('No Comments &#187;', '1 Comment &#187;', '% Comments &#187;'); ?></p>
				<?php endif;?>
				
		</div>

		<?php endwhile; 
		endif; ?>
	

	<?php else : ?>

		<h2 class="center">Not Found</h2>
		<p class="center">Sorry, but you are looking for something that isn't here.</p>
		<?php get_search_form(); ?>

	<?php endif; ?>

	</div>
<?php
if (!is_page('About') && !is_page('Contact')) include(TEMPLATEPATH . '/searchform.php'); ?>		 
<?php get_sidebar(); ?>

<?php get_footer(); ?>
