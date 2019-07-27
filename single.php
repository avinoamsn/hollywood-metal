<?php get_header(); ?>

	<main role="main" id="single-main">
		<?php if (have_posts()): while (have_posts()) : the_post(); ?>
			<!-- article -->
			<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
				<div id="single-header">
					<div id="single-details">
						<!-- post title -->
						<h1>
							<a href="<?php the_permalink(); ?>" title="<?php the_title(); ?>"><?php the_title(); ?></a>
						</h1>
						<!-- /post title -->

						<!-- post details -->
						<div class="under-title-details">
							<span class="date"><?php the_time('F j, Y'); ?> <!--?php the_time('g:i a'); ?--></span>
							<span class="author"><?php _e( 'By', 'html5blank' ); ?> <?php the_author_posts_link(); ?></span>
							<span class="comments"><?php if (comments_open( get_the_ID() ) ) comments_popup_link( __( 'Leave your thoughts', 'html5blank' ), __( '1 Comment', 'html5blank' ), __( '% Comments', 'html5blank' )); ?></span>
						</div>
						<!-- /post details -->
					</div>

					<!-- post thumbnail -->
					<?php if ( has_post_thumbnail()) : // Check if Thumbnail exists ?>
						<a id="single-header-thumbnail" href="<?php the_permalink(); ?>" title="<?php the_title(); ?>">
							<?php the_post_thumbnail('medium'); // Fullsize image for the single post ?>
						</a>
					<?php endif; ?>
					<!-- /post thumbnail -->
				</div>

				<!-- post body -->
				<div id="single-body">
					<?php the_content(); // Dynamic Content ?>
					<?php the_tags( __( 'Tags: ', 'html5blank' ), ', ', '<br>'); // Separated by commas with a line break at the end ?>
					<p><?php _e( 'Categorised in: ', 'html5blank' ); the_category(', '); // Separated by commas ?></p>
					<p><?php _e( 'This post was written by ', 'html5blank' ); the_author(); ?></p>
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
