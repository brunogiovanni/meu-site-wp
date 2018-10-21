<?php
/**
 * The template for displaying search results pages
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#search-result
 *
 * @package WordPress
 * @subpackage Twenty_Seventeen
 * @since 1.0
 * @version 1.0
 */

get_header(); ?>

<div class="container">
	<h1>
		<?php printf('Resultados para: %s', '<span>' . get_search_query() . '</span>' ); ?>
	</h1>
	<hr>
	<?php if ( have_posts() ) : ?>
		<ul class="list-unstyled">
			<?php while ( have_posts() ) : the_post(); ?>
				<li>
					<a href="<?php the_permalink(); ?>">
						<h4><?php the_title(); ?></h4>
						<?php the_excerpt(); ?>
					</a>
				</li>
				<hr>
			<?php endwhile; ?>
		</ul>
		<?php
		the_posts_pagination( array(
			'prev_text' => '<',
			'next_text' => '>',
			'before_page_number' => '-',
		) );

	else : ?>
		<p>Nada encontrado</p>
	<?php endif; ?>
</div>

<?php get_footer();
