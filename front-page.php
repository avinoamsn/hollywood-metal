<?php get_header(); ?>

	<!-- top-level divider -->
	<main role="main">

		<!-- content (left) side -->
		<section id="content">

			<!-- latest articles -->
			<section id="latest-articles">
				<h1>Latest Articles</h1>

				<section class="article-block">
					<?php $query = new WP_Query('posts_per_page=3');
					hm_get_template_part('mini-loop', ['query' => $query]);  ?>
				</section>
			</section>
			<!-- /latest articles -->

			<!-- articles by category -->
			<section id="secondary-articles">
				<!-- metal reviews -->
				<?php hm_get_template_part('two-article-block',
				['title' => 'Metal', 'slug' => 'metal-reviews'] ); ?>
				<!-- /metal reviews -->

				<!-- art -->
				<?php hm_get_template_part('two-article-block',
				['title' => 'Art', 'slug' => 'art'] ); ?>
				<!-- /art -->

				<!-- comic reviews -->
				<?php hm_get_template_part('two-article-block',
				['title' => 'Comic Books', 'slug' => 'comic-reviews'] ); ?>
				<!-- /comic reviews -->

				<!-- dungeon synth -->
				<?php hm_get_template_part('two-article-block',
				['title' => 'Dungeon Synth', 'slug' => 'dungeon-synth'] ); ?>
				<!-- /dungeon synth -->

				<!-- history -->
				<?php hm_get_template_part('two-article-block',
				['title' => 'History', 'slug' => 'history'] ); ?>
				<!-- /history -->

				<!-- television reviews -->
				<?php hm_get_template_part('two-article-block',
				['title' => 'TV', 'slug' => 'television-reviews'] ); ?>
				<!-- /television reviews -->

			</section>
			<!-- /articles by category -->

			<!-- archive -->
			<section id="archive">
				<h1>Archive</h1>

				<section class="article-block">
					<?php $query = new WP_Query(array('orderby' => 'rand', 'posts_per_page' => 6));
					hm_get_template_part('mini-loop', ['query' => $query]); ?>
				</section>
			</section>
			<!-- /archive -->
		</section>
		<!-- /content (left) side -->

		<!--?php get_sidebar(); ?-->
	</main>
	<!-- /top-level divider --
<?php get_footer(); ?>
