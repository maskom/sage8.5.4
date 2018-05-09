<?php while (have_posts()) : the_post(); ?>
  <article <?php post_class(); ?>>
    <header>
      <h1 class="entry-title"><?php the_title(); ?></h1>
    </header>
    <div class="entry-content">
        <div class="text-center mt-5 mb-3">
            <img src="<?php echo get_post_meta(get_the_ID(), 'product_image', TRUE); ?>" class="img-fluid" alt="<?php the_title() ?>">
        </div>
      <?php the_content(); ?>
    </div>
  </article>
<?php endwhile; ?>
<?php get_template_part('templates/random-post'); ?>
