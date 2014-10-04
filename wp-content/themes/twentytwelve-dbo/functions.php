<?php
add_shortcode( 'gallery', 'modified_gallery_shortcode' );

function modified_gallery_shortcode($attr) {



	if(is_page_template('page-gallery.php')){ // EDIT this slug

		$attr['size']="full";

		$attr['link']="file";

		$attr['itemtag']="li";

		$attr['icontag']="span";

		$attr['captiontag']="p";



		$output = gallery_shortcode($attr);

		

		$output =strip_tags($output,'<style><img><ul><li>');

		$output =str_replace(array(" class='gallery-item'"),array(""),$output);

		

		$output='<ul class="slider">'.$output.'</ul>';

	}else{

		$output = gallery_shortcode($attr);

	}

	return $output;	

}

?>
