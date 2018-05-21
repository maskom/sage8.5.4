<article class="col-md-6 col-lg-4 grid-item card-twitter">
    <div class="box-item">
        <div class="box-item__info p-3">
            <a href="<?php echo get_post_meta(get_the_ID(), 'url_embed', TRUE); ?>" target="_blank" title="<?php the_title(); ?>" class="site">
                <strong><?php echo get_post_meta(get_the_ID(), 'site_embed', TRUE); ?></strong>
            </a>
            <h5 class="pt-3">
                <a href="<?php echo get_post_meta(get_the_ID(), 'url_embed', TRUE); ?>" target="_blank" title="<?php the_title(); ?>" >
                    <?php the_title(); ?>
                </a>
            </h5>
        </div>
        <div class="box-item_text pt-0 pr-3 pb-3 pl-3">
            <a href="<?php echo get_post_meta(get_the_ID(), 'url_embed', TRUE); ?>" target="_blank" title="<?php the_title(); ?>">
                <p><?php echo get_post_meta(get_the_ID(), 'description_embed', TRUE); ?></p>
            </a>
        </div>
    </div>
</article>