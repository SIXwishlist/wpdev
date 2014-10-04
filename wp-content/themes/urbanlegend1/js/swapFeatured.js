jQuery(document).ready(function($){
   x=0;
   $("#sidebar a.swapFeatured").click(function(){
		$(this).parents('div.post').hide('slow');
		if ($(this).parents('div.post').nextAll('div.post').length!=0){ //test if the parent div has a sibling
			$(this).parents('div.post').next().show('slow');
		}
		else {
			$('#sidebar').children('div.post').first().show('slow');
		}
   });
 });