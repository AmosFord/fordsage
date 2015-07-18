<?php use Roots\Sage\Nav; ?>

<header class="banner navbar navbar-default navbar-static-top" role="banner">
  <div class="container">
    <div class="navbar-header" style="height: 100%;">
      <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target=".navbar-collapse">
        <span class="sr-only"><?= __('Toggle navigation', 'sage'); ?></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
      <a class="navbar-brand" style="height:100%;" href="<?= esc_url(home_url('/')); ?>"><img src="<?php bloginfo('stylesheet_directory'); ?>/assets/images/logos/AmosLogo_Final-02.svg" alt="Amos Ford Logo"></a>
    </div>
    <script type="text/javascript" src="<?php echo get_bloginfo('template_directory');?>/bower_components/javascript-equal-height-responsive-rows/grids.min.js"></script>
    <nav class="collapse navbar-collapse" role="navigation">
      <?php
      if (has_nav_menu('primary_navigation')) :
        wp_nav_menu(['theme_location' => 'primary_navigation', 'walker' => new Nav\SageNavWalker(), 'menu_class' => 'nav navbar-nav']);
      endif;
      ?>
    </nav>
  </div>
</header>
