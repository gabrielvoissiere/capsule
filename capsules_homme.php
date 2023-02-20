<?php
/*
Template Name: capsule homme
*/
?>

<?php get_header(); ?>
<div id="image" class="ban"></div>
<main id="capsule-main">
<nav id="custom">
    <ul>
        <li><a href="http://localhost:10015/boutique/">Femme</a></li>
        <li><a id="active">Homme</a></li>
    </ul>
</nav>

<div id="content" class="homme">
        <div id="products">
            <?php echo do_shortcode('[product_category category=“homme”]'); ?>
        </div>
</div>
</main>

<?php get_footer(); ?>

