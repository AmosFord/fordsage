
<?php while (have_posts()) : the_post(); ?>

 <?php if ( is_singular( 'event' ) ) { ?>
    <article <?php post_class(); ?>>
    <header>
      <h1 class="entry-title"><?php the_title(); ?></h1>
      <?php get_template_part('templates/entry-meta'); ?>
    </header>
    <div class="entry-content">
      <?php the_content(); ?>
    </div>
    <footer>
      <?php wp_link_pages(['before' => '<nav class="page-nav"><p>' . __('Pages:', 'sage'), 'after' => '</p></nav>']); ?>
    </footer>
    <?php comments_template('/templates/comments.php'); ?>
  </article>
 <?php
}
else { ?>
  <article <?php post_class(); ?>>
  <div class="col-md-12 post-preview">
      <div class="post-page-image"> <?php the_post_thumbnail('medium'); ?></div>
      <div>
      <header class="post-preview-header">
        <h4 class="entry-title-single-page"><strong><?php the_title(); ?></strong></h4>
      </header>

      <div class="entry-summary">
        <?php the_content(); ?>
      </div>

      <p class="byline author vcard">
        <span class="alternate-colored"><?= __('By', 'sage'); ?></span>
          <a href="<?= get_author_posts_url(get_the_author_meta('ID')); ?>" rel="author" class="fn"><?= get_the_author(); ?></a>
        </p>
  </div>
  <div class="col-md-12">
    <footer>
      <?php wp_link_pages(['before' => '<nav class="page-nav"><p>' . __('Pages:', 'sage'), 'after' => '</p></nav>']); ?>
    </footer>
    <?php comments_template('/templates/comments.php'); ?>
  </div>
  </article>
<?php }
 endwhile; ?>