<?php
/** sidebar.php
 *
 * @author		Konstantin Obenland
 * @package		The Bootstrap
 * @since		1.0.0	- 05.02.2012
 */

tha_sidebars_before(); ?>
<section id="secondary" class="widget-area span4" role="complementary">
	<?php tha_sidebar_top();?>
	
	<!--
	<aside id="contact-form-aside" class="widget well">
	<h2 class="widget-title">Contact Us ( <a href="#contact-info" class="small" title="jump to post,email,phone details">Postal etc</a> )</h2>

	<?php
	echo(do_shortcode('[contact-form-7 id="1148" title="Contact form 1"]'));?>
	</aside>
	-->

	<?php
	
		
		if ( ! dynamic_sidebar(  'portfolio-template-side' ) ) {
			
		} // end if ( ! dynamic_sidebar( 'main' ) )
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
<?php
	
	tha_sidebar_bottom(); ?>
</section><!-- #secondary .widget-area -->
<?php tha_sidebars_after();


/* End of file sidebar.php */
/* Location: ./wp-content/themes/the-bootstrap/sidebar.php */

?>

	</div><!-- /.row -->
</div><!-- /.span12 -->