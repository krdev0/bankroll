<?php

/**
 * Main template file
 * 
 * @package Bankroll
 */

get_header();
?>
<?php if (have_posts()) : ?>

<?php
    // Start the loop.
    while (have_posts()) :
        the_post();
?>
    <h1><?php the_title(); ?></h1>
<?php endwhile; ?>


<?php endif; ?>
<?php get_footer(); ?>