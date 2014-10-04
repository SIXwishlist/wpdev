<?php
/** index.php
 *
 * The main template file.
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * E.g., it puts together the home page when no home.php file exists.
 * Learn more: http://codex.wordpress.org/Template_Hierarchy
 *
 * @author		Konstantin Obenland
 * @package		The Bootstrap
 * @since		1.0.0 - 05.02.2012
 */

get_header(); $x = 0; ?>

			<section id="primary" class="span8">
				
				<?php tha_content_before(); ?>
				<div id="content" role="main">
				<?php
				if ( !is_home() ):?>
					<header class="page-header">
					<h1 class="page-title">
						<?php
						if (is_category() ):
							printf( __( 'Category: %s', 'bootstrap-dbo' ), '<span>' . single_cat_title( '', false ) . '</span>' );	
						elseif ( is_day() ) :
							printf( __( 'Daily Archives: %s', 'bootstrap-dbo' ), '<span>' . get_the_date() . '</span>' );
						elseif ( is_month() ) :
							printf( __( 'Monthly Archives: %s', 'bootstrap-dbo' ), '<span>' . get_the_date( 'F Y' ) . '</span>' );
						elseif ( is_year() ) :
							printf( __( 'Yearly Archives: %s', 'bootstrap-dbo' ), '<span>' . get_the_date( 'Y' ) . '</span>' );
						elseif (is_author() ):
							$auth = get_the_author_meta('nickname', get_query_var('author'));							 
							printf( __( 'From author: %s', 'bootstrap-dbo' ), '<span>'. $auth . '</span>' ); 
							 //printf( __( 'Author Archives: %s', 'the-bootstrap' ), '<span class="vcard"><a class="url fn n" href="' . esc_url( get_author_posts_url( get_the_author_meta( "ID" ) ) ) . '" title="' . esc_attr( get_the_author() ) . '" rel="me">' . $auth . '</a></span>' );
						elseif (is_tag() ):
							$tag=get_query_var('tag');
							printf( __( 'Content tagged: %s', 'bootstrap-dbo' ), '<span>'. $tag . '</span>' ); 
						else :
							_e( 'Archives', 'bootstrap-dbo' );
						endif; ?>
					</h1>
					</header><!-- .page-header -->
				<?php
				endif;?>
					
					<div class="accordion" id="accordion1">
					<div class="accordion-group">
					
					<?php tha_content_top();
					
					if ( have_posts() ) {
						while ( have_posts() ) {
							$x++;
							the_post();							
							//get_template_part( 'content', 'blog' );
							require('content-blog.php');
							
						
						}
						the_bootstrap_content_nav( 'nav-below' );
					}
					else {
						get_template_part( '/partials/content', 'not-found' );
					}
				
					tha_content_bottom(); ?>
				</div><!-- /.accordion-group -->
				</div><!-- /.accordion -->
				</div><!-- #content -->
				<?php tha_content_after(); ?>
				
			</section><!-- #primary -->

<?php
get_sidebar('blog');?>
<?php
get_footer();


/* End of file index.php */
/* Location: ./wp-content/themes/the-bootstrap/index.php */