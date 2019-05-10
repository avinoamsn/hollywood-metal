<!-- sidebar -->
<aside id="sidebar" role="complementary">

	<?php if(!function_exists('dynamic_sidebar') || !dynamic_sidebar('sidebar-widget')) ?>

	<div id="search">
		<?php get_template_part('searchform'); ?>
	</div>

</aside>
<!-- /sidebar -->
