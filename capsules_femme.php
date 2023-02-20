<?php
/*
Template Name: capsule femme
*/
?>

<?php get_header(); ?>
<div id="image"></div>
<main id="capsule-main">
    <nav id="custom">
        <ul>
            <li><a id="active">Femme</a></li>
            <li><a href="http://localhost:10015/capsule-homme/">Homme</a></li>
        </ul>
    </nav>

    <div id="content">
        <div id="products">
            <?php echo do_shortcode('[product_category category=“femme”]'); ?>
        </div>
    </div>
</main>

<?php get_footer(); ?>