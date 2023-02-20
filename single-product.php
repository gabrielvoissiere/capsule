<?php
/*
Template Name: single-product
*/
?>

<?php get_header(); ?>

<main id="single-product-main">
    <?php
    $id = explode("/", home_url($wp->request))[4];
    echo do_shortcode("[product_page id=$id]");
    ?>

    <div id="others">
        <h2>Voir les autres capsules</h2>
        <div id="products">
            <?php echo do_shortcode('[product_category category=“femme”]'); ?>
        </div>
    </div>
</main>

<?php get_footer(); ?>