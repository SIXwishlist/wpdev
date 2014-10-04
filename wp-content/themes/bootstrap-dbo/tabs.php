<section id="secondary" class="widget-area span2" role="complementary">
	<?php
	 
	 //dynamic_sidebar('action-sidebar');?>
	 <div class="textwidget">
		<ul class="nav nav-tabs">
			<li class="active"><a href="#home" data-toggle="tab">Home</a></li>
			<li><a href="#messages" data-toggle="tab">Tags</a></li>
		</ul>
		<div class="tab-content">
			<div class="tab-pane active" id="home"><h3>Home Tab</h3></div>
			<div class="tab-pane" id="messages"><?php wp_tag_cloud(array('number'=>20)); ?></div>
		</div>
	  </div>
	</section>
