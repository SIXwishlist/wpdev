<?php
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
	$x = 0;
?>

	<div class="accordion" id="accordion1">
		<div class="accordion-group">
			<?php  while ($portfol->have_posts()) : $portfol->the_post(); ?>
				  
				<div <?php post_class() ?> id="post-<?php the_ID(); ?>">
					<h3 class="accordion-heading"><a class="accordion-toggle" data-toggle="collapse" data-parent="#accordion1" href="#collapse-<?php echo $x;?>" rel="bookmark" title="<?php the_title_attribute(); ?> - click to expand / contract"><?php the_title();?></a></h3>
					<!--<small><?php the_time('F jS, Y') ?> <!-- by <?php the_author() ?></small>-->

					<div class="entry accordion-body collapse" id="collapse-<?php echo $x;?>">
						<?php
						//$postImage = get_the_post_thumbnail( $post->ID, 'thumbnail' );
						$link = get_post_meta($post->ID, 'link', true);?>

						<p><a class="fancybox fancybox.iframe" title="<?php the_title();?> - see large version" href="/iframe/<?php the_ID();?>"><?php the_post_thumbnail( 'thumbnail' ); ?></a></p>

											
						<!-- POST CONTENT -->
						<?php the_content('Read the rest of this entry &raquo;'); ?>

										
						<p class="postmetadata"><?php the_tags('Tags: ', ', ', '<br />'); ?> Posted in <?php the_category(', ') ?> |
						<?php if (current_user_can('edit_posts')):?> <?php edit_post_link('Edit', '', ' | '); 
						endif; ?>  <?php comments_popup_link('No Comments &#187;', '1 Comment &#187;', '% Comments &#187;'); ?></p>
									
					</div><!-- /.entry -->			
				</div><!-- /# post-id -->


			<?php 
			$x++;
			endwhile; ?>
		</div><!-- /.accordion-group -->
	</div><!-- /#accordion1 -->

<?php else : 
			//endforeach; ?>
	
			<h2 class="center">Not Found</h2>
			<p class="center">Sorry, but you are looking for something that isn't here.</p>
			<?php get_search_form(); ?>

<?php endif; ?>