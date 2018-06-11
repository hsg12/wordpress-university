<?php
	if (! is_user_logged_in() ) {
		wp_redirect(esc_url(site_url('/')));
		exit;
	}
?>

<?php get_header(); ?>

<?php while(have_posts()) : ?>
	<?php the_post(); ?>

	<?php pageBanner(); ?>

	<div class="container container--narrow page-section">

		<ul class="min-list link-list" id="my-notes">
			<?php
				$userNotes = new WP_Query(array(
					'post_type' => 'note',
					'post_per_page' => -1,
					'author' => get_current_user_id()
				));
			?>

			<?php while( $userNotes->have_posts() ) : ?>
				<?php $userNotes->the_post() ?>

				<li>
					<input value="<?php echo esc_attr(get_the_title()); ?>" class="note-title-field">
					<span class="edit-note"><i class="fa fa-pencil" aria-hidden="true"></i> Edit</span>
					<span class="delete-note"><i class="fa fa-trash-o" aria-hidden="true"></i> Delete</span>
					<textarea class="note-body-field"><?php echo esc_attr(get_the_content()); ?></textarea>
				</li>

			<?php endwhile; ?>
		</ul>

	</div>

<?php endwhile; ?>

<?php get_footer(); ?>
