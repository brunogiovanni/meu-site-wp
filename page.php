<?php get_header(); ?>

<div class="container">
	<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
		<?php //if ( === 'Blog') : ?>
			<?php //get_template_part( 'content', 'blog' ); ?>
		<?php //else : ?>
			<h1><?php the_title(); ?></h1>
			<hr>
			<?php the_content(); ?>
		<?php //endif; ?>
	<?php endwhile; endif; ?>
</div>

<?php get_footer(); ?>