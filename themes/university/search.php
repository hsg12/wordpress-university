<?php get_header(); ?>

<?php
pageBanner( array(
	'title'    => 'Search Results',
	'subtitle' => 'You searched for &ldquo;' . esc_html(get_search_query(false)) . '&rdquo;',
) );
?>

<div class="container container--narrow page-section">
	<?php get_search_form(); ?>

	<?php if (have_posts()) : ?>
		<?php while ( have_posts() ) : ?>
			<?php the_post(); ?>
			<?php get_template_part('template-parts/content', get_post_type()); ?>
		<?php endwhile; ?>

	<?php else : ?>
		<h2 class="headline headline--small-plus">No results match that search.</h2>
	<?php endif; ?>
</div>

<?php get_footer(); ?>
