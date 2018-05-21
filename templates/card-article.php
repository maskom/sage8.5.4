<article class="col-md-6 col-lg-4 grid-item card-article">
    <div class="box-item">
        <figure class="figure">
            <a href="<?php echo get_post_meta(get_the_ID(), 'url_embed', TRUE); ?>" target="_blank" title="<?php the_title(); ?>">
                <div class="box-item__photo">
                    <img src="<?php echo get_post_meta(get_the_ID(), 'thumbnail_embed', TRUE); ?>" class="img-fluid" alt="<?php the_title(); ?>">
                </div>
            </a>
        </figure>
        <div class="box-item__info p-3">
            <h5><?php the_title(); ?></h5>
            <p class="mt-3 site">
                <a href="<?php echo get_post_meta(get_the_ID(), 'url_embed', TRUE); ?>" target="_blank" title="<?php the_title(); ?>">
                    <strong><?php echo get_post_meta(get_the_ID(), 'site_embed', TRUE); ?></strong>
                </a>
            </p>
        </div>
    </div>
</article>
