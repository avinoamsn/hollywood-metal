<?php get_header(); ?>

	<main role="main">
		<!-- section -->
		<section id="content">
			<h1><?php echo get_the_category_by_ID(get_query_var('cat')); ?></h1>

			<section class="article-block" id="archive">
				<?php $query = new WP_Query(array(
					'cat' => get_query_var('cat'),
					'posts_per_page' => 21,
					'paged' => get_query_var('paged') ? get_query_var('paged') : 1,
				)); ?>
				<?php hm_get_template_part('mini-loop', ['query' => $query]); ?>
			</section>

			<?php get_template_part('pagination'); ?>
		</section>
		<!-- /section -->
	</main>

<?php get_footer(); ?>
