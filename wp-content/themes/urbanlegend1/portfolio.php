 <?php
/*
Template Name: portfolio
*/
get_header(); 

?>

	<div id="content" class="narrowcolumn">
	<?php
	// GET THE ENTRY FOR THE TEXT ON THE PORTFOLIO PAGE
	$page_query ="pagename=Portfolio";
	query_posts($page_query);
	if (have_posts()) : 

		 while (have_posts()) : the_post(); ?>
		  
			<div <?php post_class() ?> id="post-<?php the_ID(); ?>">
				<h2 class="pagetitle"><a href="<?php the_permalink() ?>" rel="bookmark" title="Permanent Link to <?php the_title_attribute(); ?>"><?php //the_ttftitle($before = "", $after = "", $echo = true, $style = "YOU HAVE TO CHANGE THIS", $overrides = "");?><?php the_title();?></a></h2>
				<!--<small><?php the_time('F jS, Y') ?>  by <?php the_author() ?> </small>-->

				<div class="entry">
					<?php the_content('Read the rest of this entry &raquo;'); ?>
				

				<?php if (current_user_can('edit_posts')):?>
						<p class="postmetadata"><?php the_tags('Tags: ', ', ', '<br />'); ?> Posted in <?php the_category(', ') ?> | <?php edit_post_link('Edit', '', ' | '); ?>  <?php comments_popup_link('No Comments &#187;', '1 Comment &#187;', '% Comments &#187;'); ?></p>
				<?php endif;?>
				</div>
			</div>

		<?php endwhile;
	endif; 
	wp_reset_query(); 
// GET THE POSTS WITH THE CATEGORY OF PORTFOLIO	
		/* rewind_posts();*/
		 $argsPort=array(
   'category_name'=>"Portfolio",
   'meta_key'=>"order",
   'orderby' => "meta_value",
   'posts_per_page'=> '-1',
   'order'=>"DESC" // offset is the parameter we need to change
   );
		
		 $portfol = new WP_Query('category_name=Portfolio&posts_per_page=-1&meta_key=ordr&orderby=meta_value&order=ASC');
		 
		 if ($portfol->have_posts()) : 

		  while ($portfol->have_posts()) : $portfol->the_post(); ?>
		  
			<div <?php post_class() ?> id="post-<?php the_ID(); ?>">
				<h3><a href="<?php the_permalink() ?>" rel="bookmark" title="Permanent Link to <?php the_title_attribute(); ?>"><?php the_title();?></a></h3>
				<small><?php the_time('F jS, Y') ?> <!-- by <?php the_author() ?> --></small>

				<div class="entry">
					<?php
					//$postImage = get_the_post_thumbnail( $post->ID, 'thumbnail' );
					$link = get_post_meta($post->ID, 'link', true);?>

					<!-- THE FANCYBOX LINK -->
					<!--<p><a href="#data-<?php the_ID();?>" title="<?php the_title();?>" class="inline"><?php the_post_thumbnail( 'thumbnail' ); ?></a></p>-->

					<p><a class="iframe" title="<?php the_title();?>" href="/iframe/<?php the_ID();?>"><?php the_post_thumbnail( 'thumbnail' ); ?></a></p>

					
					<!-- POST CONTENT -->
					<?php the_content('Read the rest of this entry &raquo;'); ?>

					<!-- THE FANCY BOX CONTENT -->
					<!--<div style="display:none"><div id="data-<?php the_ID();?>">
						<h3>visit <a target="newone" href="<?php echo $link?>" title="visit <?php the_title();?>"><?php the_title();?></a></h3>
						<p><a target="newone" title="visit <?php the_title();?> in new window" href="<?php echo $link;?>">  <?php the_post_thumbnail( 'large' ); ?></a></p></div></div>-->
				
				
						<p class="postmetadata"><?php the_tags('Tags: ', ', ', '<br />'); ?> Posted in <?php the_category(', ') ?> |
						<?php if (current_user_can('edit_posts')):?> <?php edit_post_link('Edit', '', ' | '); 
						endif; ?>  <?php comments_popup_link('No Comments &#187;', '1 Comment &#187;', '% Comments &#187;'); ?></p>
				
				</div>
				
		</div>

		<?php endwhile; ?>

		<div class="navigation">
			<div class="alignleft"><?php next_posts_link('&laquo; Older Entries') ?></div>
			<div class="alignright"><?php previous_posts_link('Newer Entries &raquo;') ?></div>
		</div>

	<?php else : 
			//endforeach; ?>
	
		<h2 class="center">Not Found</h2>
		<p class="center">Sorry, but you are looking for something that isn't here.</p>
		<?php get_search_form(); ?>-->

	<?php endif; ?>

	</div>
<?php
 include(TEMPLATEPATH . '/searchform.php'); ?>		 
<div id="sidebar">
<?php get_template_part('cform2'); ?>
<?php		
				if ( function_exists('dynamic_sidebar') && dynamic_sidebar('port-page-side') ) :
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


