<?php
/**
 * @package WordPress
 * @subpackage Default_Theme
 */

get_header();
?>

	<div id="content" class="narrowcolumn">

		<h2 class="center">Error 404 - Not Found</h2>
			<p>Sorry, but it seems we can't find what you're looking for. That may be our fault, or it may be yours. Whatever the case, here are your options;</p>
			<ul><li>Search the site: <?php include('searchform_full.php') ?></li>
				<li>Have a look at our <a href="/sitemap/">sitemap</a></li>
				<li>Or, <a href="/contact/">contact us</a></li></ul>
	</div>

<?php get_sidebar(); ?>

<?php get_footer(); ?>