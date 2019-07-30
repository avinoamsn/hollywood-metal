<?php get_header(); ?>

	<main role="main" id="single-main">
		<?php if (have_posts()): while (have_posts()) : the_post(); ?>
			<!-- article -->
			<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
				<div id="single-header">
					<div id="single-details">
						<!-- post title -->
						<h1>
							<?php the_title(); ?>
						</h1>
						<!-- /post title -->

						<!-- post details -->
						<div class="under-title-details">
							<span class="author"><?php _e( 'By', 'html5blank' ); ?> <?php the_author_posts_link(); ?></span>
						</div>
						<!-- /post details -->
					</div>

					<!-- post thumbnail -->
					<?php if ( has_post_thumbnail()) : // Check if Thumbnail exists ?>
						<a id="single-header-thumbnail" href="<?php the_permalink(); ?>" title="<?php the_title(); ?>">
							<?php the_post_thumbnail('large'); // Fullsize image for the single post ?>
						</a>
					<?php endif; ?>
					<!-- /post thumbnail -->
				</div>

				<!-- post body -->
				<div id="single-body">
					<?php the_content(); // Dynamic Content ?>
					<?php the_tags( __( 'Tags: ', 'html5blank' ), ', ', '<br>'); // Separated by commas with a line break at the end ?>
					<?php _e( 'Categorised in: ', 'html5blank' ); the_category(', '); // Separated by commas ?>
					<br />
					<?php edit_post_link(); // Always handy to have Edit Post Links available ?>
					<?php comments_template(); ?>
				</div>
				<!-- /post body -->
			</article>
			<!-- /article -->
		<?php endwhile; ?>

		<?php else: ?>
			<!-- no article -->
			<article id="single-body">
				<h1><?php _e( 'Sorry, nothing to display.', 'html5blank' ); ?></h1>
			</article>
			<!-- /no article -->
		<?php endif; ?>

		<?php get_sidebar(); ?>
	</main>

<?php get_footer(); ?>
