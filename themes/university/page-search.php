<?php get_header(); ?>

<?php while(have_posts()) : ?>
	<?php the_post(); ?>

	<?php pageBanner(); ?>

	<div class="container container--narrow page-section">

		<?php $theParent = wp_get_post_parent_id( get_the_ID() ); ?>
		<?php if ( $theParent ) : ?>
			<div class="metabox metabox--position-up metabox--with-home-link">
				<p>
					<a class="metabox__blog-home-link" href="<?php echo get_permalink( $theParent ); ?>">
						<i class="fa fa-home" aria-hidden="true"></i> Back to <?php echo get_the_title( $theParent ); ?>
					</a>
					<span class="metabox__main"><?php the_title(); ?></span>
				</p>
			</div>
		<?php endif; ?>

		<?php
		$isParent = get_pages( array(
			'child_of' => get_the_ID(),
		) );
		?>
		<?php if ( $theParent || $isParent ) : ?>
			<div class="page-links">
				<h2 class="page-links__title">
					<a href="<?php the_permalink( $theParent ); ?>"><?php echo get_the_title( $theParent ); ?></a>
				</h2>
				<ul class="min-list">

					<?php
					if ( $theParent ) {
						$findChildrenOf = $theParent;
					} else {
						$findChildrenOf = get_the_ID();
					}

					wp_list_pages( array(
						'title_li'    => null, // in order do not show title li
						'child_of'    => $findChildrenOf,
						'sort_column' => 'menu_order',
					) );
					?>
				</ul>
			</div>
		<?php endif; ?>

		<div class="generic-content">
			<?php get_search_form(); ?>
		</div>

	</div>

<?php endwhile; ?>

<?php get_footer(); ?>
