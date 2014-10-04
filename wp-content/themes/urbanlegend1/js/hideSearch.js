jQuery(document).ready(function($){
   //$(".search_input").addClass("hidden");
   $("a.searchShow").click(function(){
	$(".search_input").removeClass('hidden');
	$("a.searchShow").addClass('hidden');
   });
 });