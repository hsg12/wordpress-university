<?php get_header(); ?>

<?php while(have_posts()) : ?>
    <?php the_post(); ?>

    <?php pageBanner(); ?>

    <div class="container container--narrow page-section">
        <div class="generic-content"><?php the_content(); ?></div>
    </div>

<?php endwhile; ?>

<?php get_footer(); ?>