<form method="get" id="searchform" action="<?php bloginfo('url'); ?>/">
<!--<a href="#" class="searchShow" title="click to search">search</a>-->
<input id="s" class="search_input" type="text" onblur="if (this.value == '') {this.value = 'Type &amp; hit enter to search';}" onfocus="if (this.value == 'Type &amp; hit enter to search') {this.value = '';}" name="s" value="Type &amp; hit enter to search"/>
<input type="hidden" id="searchsubmit" value="Search" />
</form>