<?php get_header(); ?>

<div class="container corpo">
	<div class="row">
		<div class="col-sm-12">
			<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
				<h1><?php the_title(); ?></h1>
				<hr>
				<?php the_content(); ?>
			<?php endwhile; endif; ?>
		</div>
	</div>
</div>

<?php
if ( comments_open() || get_comments_number() ) :
	comments_template();
endif;
?>

<?php get_footer(); ?>