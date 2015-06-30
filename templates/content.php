<article <?php post_class(); ?>>
<div class="col-md-12 post-preview">
  <div class="col-md-3 col-sm-12 no-gutter post-preview-image">
    <div class="col-md-12"><?php the_post_thumbnail('thumbnail' ); ?></div>
  </div>
  <div class="col-md-9 col-sm-12">
    <header class="post-preview-header">
      <h4 class="entry-title"><strong><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></strong></h4>
    </header>
      <p class="byline author vcard">
      <span class="alternate-colored"><?= __('By', 'sage'); ?></span>
        <a href="<?= get_author_posts_url(get_the_author_meta('ID')); ?>" rel="author" class="fn"><?= get_the_author(); ?></a>
        <span class="alternate-colored">|</span> <time class="updated" datetime="<?= get_the_time('c'); ?>"><?= get_the_date(); ?></time>
        <span class="alternate-colored">| Category:</span>
        <?php
          $categories = get_the_category();
          $separator = ' ';
          $output = '';
          if($categories){
            foreach($categories as $category) {
              $output .= '<a href="'.get_category_link( $category->term_id ).'" title="' . esc_attr( sprintf( __( "View all posts in %s" ), $category->name ) ) . '">'.$category->cat_name.'</a>'.$separator;
            }
          echo trim($output, $separator);
          }
        ?>
        <span class="alternate-colored">| </span><?php comments_number(); ?>
      </p>

    <div class="entry-summary">
      <?php the_excerpt(); ?>
    </div>
    <div  class="col-md-3 col-sm-6 no-gutter" style="text-align: center;"><a class="btn btn-primary btn-block " href="<?php the_permalink(); ?>">Read More</a></div>
  </div>
</div>
</article>
<!--
  <header>
    <h2 class="entry-title"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
    <?php //get_template_part('templates/entry-meta'); ?>
  </header>
  <div class="entry-summary">
    <?php the_excerpt(); ?>
  </div>
  -->