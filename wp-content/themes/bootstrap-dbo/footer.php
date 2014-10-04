<?php if (is_front_page() ):?>
</div>
<?php  endif; ?>
<?php
/** footer.php
 *
 * @author		Konstantin Obenland
 * @package		The Bootstrap
 * @since		1.0.0	- 05.02.2012
 */

				tha_footer_before(); ?>
				<footer id="colophon" role="contentinfo" class="span12">
					<?php tha_footer_top(); ?>
					<div id="page-footer" class="well clearfix">
						<div class="row">
							<?php wp_nav_menu( array(
								'container'			=>	'nav',
								'container_class'	=>	'span4',
								'theme_location'	=>	'footer-menu',
								'menu_class'		=>	'credits nav pull-left',// 'credits nav nav-pills pull-left',
								'depth'				=>	3,
								'fallback_cb'		=>	'the_bootstrap_credits',
								'walker'			=>	new The_Bootstrap_Nav_Walker,
							) );
							?>

							<div id="contact-info" class="span4">
								
								<?php dynamic_sidebar('footer-middle');?>
								<?php
								echo "<h4>Email</h4>";
								echo(do_shortcode('[enkode]<a href="mailto:info@urbanlegendweb.co.nz" title="Email us">info@urbanlegendweb.co.nz<a>[/enkode]'));?>
						
							</div>

							<div id="footer-middle" class="span4">
								
								<?php dynamic_sidebar('footer-right');?>
						
							</div>

						
						</div><!-- /.row -->
					</div><!-- #page-footer .well .clearfix -->
					<?php tha_footer_bottom(); ?>
				</footer><!-- #colophon -->
				<?php tha_footer_after(); ?>
			</div><!-- #page -->
		</div><!-- .container -->
	<!-- <?php printf( __( '%d queries. %s seconds.', 'the-bootstrap' ), get_num_queries(), timer_stop(0, 3) ); ?> -->
	<?php wp_footer(); ?>
	</body>
</html>
<?php


/* End of file footer.php */
/* Location: ./wp-content/themes/the-bootstrap/footer.php */