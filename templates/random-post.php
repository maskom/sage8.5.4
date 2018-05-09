<?php
$paged = ( get_query_var( 'paged' ) ) ? get_query_var( 'paged' ) : 1;
$args = array(
    'post_type' => 'post',
    'orderby'   => 'rand',
    'paged' => $paged
);

$the_query = new WP_Query( $args );
?>

<div id="random">
    <hr>
    <h3 class="mb-3">Lainnya:</h3>
    <div class="row grid">
        <?php while ($the_query->have_posts()) : $the_query->the_post(); ?>
            <?php get_template_part('templates/content', 'rand'); ?>
        <?php endwhile; ?>
    </div>
</div>


