<?php get_header(); ?>

<section class="rating">
<?php

    $q = new WP_Query([
    'post_type' => 'post',
    'posts_per_page' => 1,
    'category_name' => 'form',

    ]);

    if ( $q->have_posts() ) : while ( $q->have_posts() ) : $q->the_post(); ?>
    <!-- post -->

            <?php the_content(); ?>


    <?php endwhile; ?>
    <!-- post navigation -->
    <?php else: ?>
        <!-- no posts found -->
    <?php endif;

    ?>


</section>

<?php get_footer(); ?>

