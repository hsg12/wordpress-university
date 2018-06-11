<?php get_header(); ?>

<?php
    pageBanner( array(
        'title'    => 'Past Events',
        'subtitle' => 'A recap of our past events.',
    ) );
?>

<div class="container container--narrow page-section">

	<?php
	$pastEvents = new WP_Query( array(
		'paged'          => get_query_var( 'paged', 1 ), // For pagination // find all pages ( if no pages, set to 1 )
		'post_type'      => 'event', // custom post type
		'meta_key'       => 'event_date',
		'orderby'        => 'meta_value_num',
		'order'          => 'ASC',
		// do not show any past events
		'meta_query'     => array(
			array(
				'key' => 'event_date',
				'compare' => '<',
				'value'   => date('Ymd'),
				'type'    => 'numeric'
			),
		),
	) );
	?>

	<?php while ( $pastEvents->have_posts() ) : $pastEvents->the_post() ?>

        <!--Will include 'template-parts/content-event'-->
		<?php get_template_part( 'template-parts/content', 'event' ); ?>

	<?php endwhile; ?>

	<?php echo paginate_links( array(
		'total' => $pastEvents->max_num_pages
	) ); ?>

</div>

<?php get_footer(); ?>
