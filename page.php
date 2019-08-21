<?php get_template_part( 'parts/header', 'page' ); ?>

<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
	<?php $titulo = the_title('', '', false); ?>
	<?php if ($titulo == 'Blog') : ?>
		<?php
		get_template_part( 'parts/content', 'blog' );
		break;
		?>
	<?php else : ?>
		<div class="container corpo">
			<h1><?php echo $titulo; ?></h1>
			<hr>
			<?php the_content(); ?>
		</div>
	<?php endif; ?>
<?php endwhile; endif; ?>

<?php get_footer(); ?>