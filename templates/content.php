<article <?php post_class('col-md-4 grid-item'); ?>>
    <a href="<?php the_permalink() ?>">
        <figure class="figure d-block">
            <img src="<?php echo get_post_meta(get_the_ID(), 'product_image', TRUE); ?>" class="figure-img img-fluid rounded" alt="<?php the_title() ?>">
        </figure>
    </a>
    <figcaption class="figure-caption">
        <h5><?php
            echo wp_trim_words( get_the_title(), 6, '...' );
            ?></h5>
        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Mauris vitae pretium lacus. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia Curae; Aenean sit amet eros auctor, laoreet quam ac, mattis libero. </p>
        <div class="d-flex justify-content-between align-items-center fig-bottom">
            <div>Loremp ipsum</div>
            <div> <a href="<?php the_permalink() ?>" class="btn btn-primary">Go somewhere</a></div>
        </div>
    </figcaption>
</article>
