<?php
/*
Template Name: boutique
*/
?>

<?php get_header(); ?>

<main id="boutique-main">
    <div id="products">
        <?php echo do_shortcode('[products]'); ?>
    </div>
</main>

<?php get_footer(); ?>