<?php get_header(); ?>
	<!-- top-level divider -->
	<main role="main">
		<section class="banner-widgets">
			<?php if ( !function_exists('dynamic_sidebar') || !dynamic_sidebar("Banner Widgets") ) : ?>
			<?php endif;?>
		</section>

		<!-- content (left) side -->
		<section id="content">

			<!-- latest articles -->
			<section id="latest-articles">
				<h1>Latest Articles</h1>

				<section class="article-block">
					<?php $query = new WP_Query('posts_per_page=9');
					hm_get_template_part('mini-loop', ['query' => $query]);  ?>
				</section>
			</section>
			<!-- /latest articles -->

			<!-- archive -->
			<section id="archive">
				<h1>Archive</h1>

				<section class="article-block">
					<?php $query = new WP_Query(array('orderby' => 'rand', 'posts_per_page' => 21));
					hm_get_template_part('mini-loop', ['query' => $query]); ?>
				</section>
			</section>
			<!-- /archive -->
		</section>
		<!-- /content (left) side -->
	</main>
	<!-- /top-level divider --
<?php get_footer(); ?>
