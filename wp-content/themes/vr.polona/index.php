<?php
/**
 * Created by PhpStorm.
 * User: pawelstruminski
 * Date: 06.12.2017
 * Time: 12:56
 */
?>
<?php
get_header(); ?>

<article class="frontpage">


<?php

$q = new WP_Query([
    'post_type' => 'post',
    'posts_per_page' => 3,
    'category_name' => 'news',

]);

if ( $q->have_posts() ) : while ( $q->have_posts() ) : $q->the_post(); ?>
    <!-- post -->
    <div class="row">
        <div class="col-6-6 news">
            <h3><?php the_title(); ?></h3>
            <p><?php the_date(); ?></p>
            <p><?php the_content(); ?></p>
            <div class="blueline"></div>
        </div>
    </div>

<?php endwhile; ?>
    <!-- post navigation -->
<?php else: ?>
    <!-- no posts found -->
<?php endif;

?>
    <div class="row">
        <div class="col-6-6 pag">
            <div class="pagination"><?php post_pagination(); ?></div>
        </div>
    </div>
</article>
<?php get_footer();?>
