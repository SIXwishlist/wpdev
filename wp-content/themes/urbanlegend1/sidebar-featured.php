<?php
$args=array(
			'category_name'=>"Featured",
			 'orderby' => "ID",
			'order'=>"DESC" // offset is the parameter we need to change
		 );
		query_posts($args); ?>
		<?php if (have_posts()) : ?>
					<h2>Our Featured Projects</h2>
					<!--
					<div class="navigation">
										<div><a href="#" onclick="return false;" class="swapFeatured" title="next featured">&raquo;</a></div>
					</div>	
					-->
					<?php 
					if (!isset($sItems)) $sItems = 0;
					while (have_posts()) : the_post(); ?>

								
								<div  <?php  
								 // add a class to the posts depending on whether it is the first post or not
								 //($sItems==0) ? post_class('visible') : post_class('hidden');
								 post_class("feat-".$sItems);?> 
								 id="post-<?php the_ID(); ?>">
									<div class="navigation"><a href="#" onclick="return false;" class="swapFeatured" title="next featured">&raquo;</a></div>
									<h3><a href="<?php the_permalink() ?>" rel="bookmark" title="Permanent Link to <?php the_title_attribute(); ?>"><?php the_title(); ?></a></h3>
									<!--<small><?php the_time('F jS, Y') ?>  by <?php the_author() ?> </small>-->

									<div class="entry">
										<?php the_content('Read the rest of this entry &raquo;'); ?>
									</div>
								  
									
									<p class="postmetadata"><!--<?php the_tags('Tags: ', ', ', '<br />'); ?>-->In <?php the_category(', ') ?>  
									<?php
										if (current_user_can('edit_posts')):
											edit_post_link('Edit', ' | ', '');   
										endif; // end if current user can 
										comments_popup_link('', '1 Comment &#187;', '% Comments &#187;','',''); ?></p>
								
								</div>
							   	 
					<?php $sItems++;
					endwhile; ?>

				   
		<?php else : ?>
				<?php get_search_form(); ?>
		<?php endif;?>