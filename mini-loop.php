<?php $query = $template_args['query'];
while($query->have_posts()) : $query->the_post(); ?>

	<section class="article">
		<a href="<?php the_permalink(); ?>"><?php the_post_thumbnail('large'); ?></a>
		<a class="article__meta" href="<?php the_permalink(); ?>">
			<p class="article__title"><?php the_title(); ?></p>
			<p class="article__author"><?php the_author(); ?></p>
		</a>
	</section>

<?php	endwhile;
wp_reset_postdata();?>