<section id="<?php echo $template_args['slug']; ?>" class="flex-basis-33 two-article-column">
	<h1><?php echo $template_args['title']; ?></h1>

	<section class="article-block">
		<?php $catObj = get_category_by_slug($template_args['slug']);
		$catId = $catObj->term_id;
		$query = new WP_Query(array('cat' => $catId, 'posts_per_page' => 2));
		hm_get_template_part('mini-loop', ['query' => $query]); ?>
	</section>
</section>