<?php $query = $template_args['query'];
while($query->have_posts()) : $query->the_post(); ?>

	<section class="article">
		<a href="<?php the_permalink(); ?>"><?php the_post_thumbnail('large'); ?></a>
		<div class="article__meta">
			<a class="article__title" href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
			<a class="article__author" href="<?php the_permalink(); ?>"><?php the_author(); ?></a>
		</div>
	</section>

<?php	endwhile;
wp_reset_postdata();?>