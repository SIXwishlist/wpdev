<?php
$fivesdrafts = $wpdb->get_results( 
	"
	SELECT * 
	FROM $wpdb->posts
	WHERE post_type='revision-2' AND post_name LIKE '%revision%'
	"
);
if ( $fivesdrafts )
{
	foreach ( $fivesdrafts as $post )
	{
		setup_postdata( $post );?>
	
		<h2>
			<a href="<?php the_permalink(); ?>" rel="bookmark" title="Permalink: <?php the_title(); ?>">
				<?php the_title(); ?>
			</a>
		</h2>	
	<?php
	}
}		
		
?>


