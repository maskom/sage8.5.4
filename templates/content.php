<article class="col-md-4 grid-item rand">
    <a href="<?php the_permalink() ?>">
        <figure class="figure d-block">
            <img src="<?php echo get_post_meta(get_the_ID(), 'product_image', TRUE); ?>" class="figure-img img-fluid rounded" alt="<?php the_title() ?>">
        </figure>
    </a>
    <figcaption class="figure-caption">
        <h5 class="product-name"><?php echo wp_trim_words( get_the_title(), 8, '...' ); ?></h5>
        <div class="d-flex justify-content-between align-items-center ">
            <p class="product-price">Loremp ipsum</p>
        </div>
    </figcaption>
</article>
