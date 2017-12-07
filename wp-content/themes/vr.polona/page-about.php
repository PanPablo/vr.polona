
<?php
/**
 * Created by PhpStorm.
 * User: pawelstruminski
 * Date: 05.12.2017
 * Time: 22:15
 */
get_header();

if ( have_posts() ) : while ( have_posts() ) :    the_post(); ?>
  <!-- post -->
    <div class="row">
        <div class="col-6-6 about">
            <?php the_content(); ?>
        </div>
    </div>

<?php endwhile; ?>
  <!-- post navigation -->
<?php else: ?>
  <!-- no posts found -->
<?php endif; ?>
<?php get_footer();?>
