<?php
/** sidebar.php
 *
 * @author		Konstantin Obenland
 * @package		The Bootstrap
 * @since		1.0.0	- 05.02.2012
 */

tha_sidebars_before(); ?>
<!-- original <section id="secondary" class="widget-area span4" role="complementary"> -->
<!-- <section id="secondary" class="widget-area span3" role="complementary"> -->

<?php tha_sidebar_top();?>
<!-- top speil  -->

	<div class="top-spiel" >
	<?php dynamic_sidebar('fp-top');?>
	</div>

<?php // START QUERY
$feat = new WP_Query('category_name=featured&posts_per_page=-1&meta_key=ordr&orderby=meta_value&order=ASC');
if ($feat->have_posts()) : 
	$x = 0;
?>

	<div id="myCarousel" class="carousel slide raised">
		 <ol class="carousel-indicators">
			<?php // CAROUSEL INDICATORS
			while ($feat->have_posts()) : $feat->the_post(); ?>	
			<li data-slide-to="<?php echo $x;?>" data-target="#myCarousel" <?php if($x==0) echo 'class="active"'; ?>></li>
			<?php $x++;endwhile; ?>
		</ol>
		<div class="carousel-inner">
	<?php
	//wp_reset_query(); 
	
	$x = 0;
	/* THE TEXT OF THE ITEM */
	while ($feat->have_posts()) : $feat->the_post(); ?>				
				<?php
		if ($x == 0):
				?>
		<!-- item -->
		<div <?php post_class('item active') ?> id="post-<?php the_ID(); ?>">
				<?php
		else:
				?>
		<div <?php post_class('item') ?> id="post-<?php the_ID(); ?>">
				<?php
		endif;
		?>
		<div class="row">
		<?php 
		/* THE FEATURED IMAGE */
		if (has_post_thumbnail( $post->ID ) ): ?>
			<!--<div class="span1">&nbsp;</div>-->
			<div class="span4 feature-text">
				<h3><a href="<?php the_permalink() ?>" rel="bookmark" title="Permanent Link to <?php the_title_attribute(); ?>"><?php the_title();?></a></h3>
				<?php the_content('Read the rest of this entry &raquo;'); ?>
			</div>
			<div class="span7">
				<?php the_post_thumbnail( 'single-post-thumbnail' ); ?>
			</div>
			<div class="span1">&nbsp;</div>
		<?php else: ?>
			<div class="span12">
				<h3><a href="<?php the_permalink() ?>" rel="bookmark" title="Permanent Link to <?php the_title_attribute(); ?>"><?php the_title();?></a></h3>
				<?php the_content('Read the rest of this entry &raquo;'); ?>
			</div>
		<?php endif; ?>
		</div><!-- /.row -->
		</div><!-- /.item -->
<?php		
	$x++;
	endwhile;
endif;
?>

		</div><!-- /.carousel-inner -->
		 <!-- Carousel nav -->
		<a class="carousel-control left" href="#myCarousel" data-slide="prev">&lsaquo;</a>
		<a class="carousel-control right" href="#myCarousel" data-slide="next">&rsaquo;</a>
		
</div><!-- / #myCarousel -->

	
	<?php
	
	tha_sidebar_bottom(); ?>

<?php tha_sidebars_after();


/* End of file sidebar.php */
/* Location: ./wp-content/themes/the-bootstrap/sidebar.php */

