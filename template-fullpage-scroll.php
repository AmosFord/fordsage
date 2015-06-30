<?php
/**
 * Template Name: Fullpage Scroll Template
 */
?>


<?php while (have_posts()) : the_post(); ?>
  <?php // get_template_part('templates/page', 'header'); ?>
  <?php // get_template_part('templates/content', 'page'); ?>


  <?php if (have_rows('sections')) : ?>
     <?php while (have_rows('sections')) : the_row(); ?>
        <?php if (have_rows('content')): ?>
          <?php while(have_rows('content')) : the_row(); ?>

<!--Slideshow logic-->
            <!--Check for slide show-->
            <?php if (get_row_layout() == 'slideshow'): ?>
              <?php while(have_rows('slides')): the_row(); ?>
              <div class="">
              <div class="col-md-12 jumbotron content-section"
                <?php if (get_sub_field('image')) : ?>
                <?php $image = get_sub_field('image');  ?>
                    style="background-image: url(<?php echo $image['url']; ?>);"
                <?php endif; ?>
              >

              <div class="col-md-12">
               <div class="jumbotron-text col-md-6">

                      <?php if (get_sub_field('title')) : ?>
                        <h1><?php the_sub_field('title'); ?></h1>
                      <?php endif; ?>

                      <?php if (get_sub_field('text')) : ?>
                        <p><stong><?php the_sub_field('text'); ?></stong></p>
                      <?php endif; ?>
                </div>
                </div>

                <div class="col-md-2  col-sm-4 ">

                <?php if (get_sub_field('link_type') == 'internal') : ?>
                    <?php if (get_sub_field('internal_link')) : ?>
                      <a class="btn btn-primary btn-block" href="<?php the_sub_field('internal_link'); ?>"><?php the_sub_field('button_text'); ?></a>
                    <?php endif; ?>

                <?php elseif (get_sub_field('link_type') == 'external') : ?>
                    <?php if (get_sub_field('external_link')) : ?>
                      <a class="btn btn-primary btn-block" href="<?php the_sub_field('external_link'); ?>" target="_blank"><?php the_sub_field('button_text'); ?></a>
                    <?php endif; ?>
                <?php endif; ?>

                </div>

              </div>
              </div>

            <?php endwhile; ?>
          <?php endif; ?>
          <!-- end slideshow -->
<!--end slideshow logic-->

<!--Title Text Button-->
            <!--Check for slide show-->
            <?php if (get_row_layout() == 'title_text_button'): ?>

              <div class="title-text-button col-md-12 content-section">


              <div class="title-text-button-header">
                 <div class="clearfix row">
                  <?php if (get_sub_field('title')) : ?>
                    <span class="col-md-2 col-md-offset-5"><h4><?php the_sub_field('title'); ?></h4></span>
                  <?php endif; ?>
                </div>

                <div class="">
                  <?php if (get_sub_field('text')) : ?>
                    <p><?php the_sub_field('text'); ?></p>
                  <?php endif; ?>
                </div>
              </div>

                <!--Check link type-->
                <div class="clearfix row col-md-2 col-md-offset-5 col-sm-6 col-sm-offset-3">

                <?php if (get_sub_field('link_type') == 'internal') : ?>
                    <?php if (get_sub_field('internal_link')) : ?>
                      <a class="btn btn-primary btn-block" href="<?php the_sub_field('internal_link'); ?>"><?php the_sub_field('button_text'); ?></a>
                    <?php endif; ?>

                <?php elseif (get_sub_field('link_type') == 'external') : ?>
                    <?php if (get_sub_field('external_link')) : ?>
                      <a class="btn btn-primary btn-block" href="<?php the_sub_field('external_link'); ?>" target="_blank"><?php the_sub_field('button_text'); ?></a>
                    <?php endif; ?>
                <?php endif; ?>

                </div>
                <!--end link type check-->

              </div>

          <?php endif; ?>
          <!-- end slideshow -->
<!--end slideshow logic-->

<!--Two Column logic-->
            <!--Check for slide show-->
            <?php if (get_row_layout() == 'two_column'): ?>

              <ul class="two_column_header">

                <?php if (get_sub_field('title')) : ?>
                  <li><?php the_sub_field('title'); ?></li>
                <?php endif; ?>

                <?php if (get_sub_field('text')) : ?>
                  <li><?php the_sub_field('text'); ?></li>
                <?php endif; ?>

              </ul>

              <?php while(have_rows('columns')): the_row(); ?>
                <ul class="two_column_columns">

                  <?php if (get_sub_field('icon')) : ?>
                    <li><?php the_sub_field('icon'); ?></li>
                  <?php endif; ?>

                  <?php if (get_sub_field('title')) : ?>
                    <li><?php the_sub_field('title'); ?></li>
                  <?php endif; ?>

                  <?php if (get_sub_field('text')) : ?>
                    <li><?php the_sub_field('text'); ?></li>
                  <?php endif; ?>

                </ul>
              <?php endwhile; ?>
          <?php endif; ?>
          <!-- end slideshow -->
<!--end two column logic-->

<!--Three Column logic-->
            <!--Check for slide show-->
            <?php if (get_row_layout() == 'three_column'): ?>

              <div class="three-column col-md-12 content-section faded-background">
              <div class="three-column-header">

                <div class="clearfix row">
                  <?php if (get_sub_field('title')) : ?>
                    <span class="col-md-2 col-md-offset-5"><h4><?php the_sub_field('title'); ?></h4></span>
                  <?php endif; ?>
                </div>

                <div class="clearfix row">
                  <?php if (get_sub_field('text')) : ?>
                    <p><?php the_sub_field('text'); ?></p>
                  <?php endif; ?>

                </div>
              </div>

              <div class="clearfix columns">
              <?php while(have_rows('columns')): the_row(); ?>

                  <div class="column col-md-4">

                  <div class="row">
                  <?php if (get_sub_field('icon')) : ?>
                    <?php $image = get_sub_field('icon');  ?>
                      <div class="col-md-6 col-md-offset-3">
                        <img src="<?php echo $image['url']; ?>" class="img-responsive center-block">
                      </div>
                  <?php endif; ?>
                  </div>
                  <br>
                  <div>
                    <?php if (get_sub_field('title')) : ?>
                      <span class="prime-colored"><strong><?php the_sub_field('title'); ?></strong></span>
                    <?php endif; ?>

                    <?php if (get_sub_field('text')) : ?>
                      <span><?php the_sub_field('text'); ?></span>
                    <?php endif; ?>
                  </div>

              </div>
              <?php endwhile; ?>
               </div>

          <!--Check link type-->
          <div class="clearfix row col-md-2 col-md-offset-5">

          <?php if (get_sub_field('link_type') == 'internal') : ?>
              <?php if (get_sub_field('internal_link')) : ?>
                <a class="btn btn-primary btn-block" href="<?php the_sub_field('internal_link'); ?>"><?php the_sub_field('button_text'); ?></a>
              <?php endif; ?>

          <?php elseif (get_sub_field('link_type') == 'external') : ?>
              <?php if (get_sub_field('external_link')) : ?>
                <a class="btn btn-primary btn-block" href="<?php the_sub_field('external_link'); ?>" target="_blank"><?php the_sub_field('button_text'); ?></a>
              <?php endif; ?>
          <?php endif; ?>

          </div>
              <!--end link type check-->
          </div>
    <?php endif; ?>


<!--end three column logic-->

<!--Three Column Services logic-->
            <!--Check for slide show-->
            <?php if (get_row_layout() == 'three_column_services'): ?>


              <?php if (get_sub_field('add_background') == 'yes') : ?>
                <div class="three-column-services three-column-services-with-background col-md-6 content-section">
              <?php else: ?>
                <div class="three-column-services three-column-services-with-background col-md-6 content-section">
              <?php endif; ?>

              <div class="three-column-services-header">

                <div class="clearfix row">
                  <?php if (get_sub_field('title')) : ?>
                    <span class="col-md-10 col-md-offset-1"><h3><?php the_sub_field('title'); ?></h3></span>
                  <?php endif; ?>
                </div>

                <div class="clearfix row">
                  <?php if (get_sub_field('text')) : ?>
                    <p><?php the_sub_field('text'); ?></p>
                  <?php endif; ?>

                </div>
              </div>

              <div class="clearfix columns">
              <?php while(have_rows('columns')): the_row(); ?>

                  <div class="column col-md-4 col-sm-4">

                  <div class="row">
                  <?php if (get_sub_field('icon')) : ?>
                    <?php $image = get_sub_field('icon');  ?>
                      <div class="col-md-6 col-md-offset-3 col-xs-4 col-xs-offset-4">
                        <a href="#"> <img src="<?php echo $image['url']; ?>" class="img-responsive"></a>
                      </div>
                  <?php endif; ?>
                  </div>
                  <br>

                  <div>
                    <?php if (get_sub_field('title')) : ?>
                       <a href="#"><span class="prime-colored"><strong><?php the_sub_field('title'); ?></strong></span></a>
                    <?php endif; ?>

                    <?php if (get_sub_field('text')) : ?>
                      <span><?php the_sub_field('text'); ?></span>
                    <?php endif; ?>
                  </div>

              </div>
              <?php endwhile; ?>
               </div>

          <!--Check link type-->
          <div class="clearfix row col-md-4 col-md-offset-4 col-sm-4 col-sm-offset-4">

          <?php if (get_sub_field('link_type') == 'internal') : ?>
              <?php if (get_sub_field('internal_link')) : ?>
                <a class="btn btn-primary btn-block" href="<?php the_sub_field('internal_link'); ?>"><?php the_sub_field('button_text'); ?></a>
              <?php endif; ?>

          <?php elseif (get_sub_field('link_type') == 'external') : ?>
              <?php if (get_sub_field('external_link')) : ?>
                <a class="btn btn-primary btn-block" href="<?php the_sub_field('external_link'); ?>" target="_blank"><?php the_sub_field('button_text'); ?></a>
              <?php endif; ?>
          <?php endif; ?>

          </div>
              <!--end link type check-->
          </div>
    <?php endif; ?>


<!--end three column services logic-->

<!--Four Column logic-->
            <!--Check for slide show-->
            <?php if (get_row_layout() == 'four_column'): ?>

              <div class="four-column col-md-12 content-section">
              <div class="four-column-header">

                <div class="clearfix row">
                  <?php if (get_sub_field('title')) : ?>
                    <span class="col-md-2 col-md-offset-5"><h4><?php the_sub_field('title'); ?></h4></span>
                  <?php endif; ?>
                </div>

                <div class="clearfix row">
                  <?php if (get_sub_field('text')) : ?>
                    <p><?php the_sub_field('text'); ?></p>
                  <?php endif; ?>

                </div>
              </div>

              <div class="clearfix columns">
              <?php while(have_rows('columns')): the_row(); ?>

                  <div class="column col-md-3 col-sm-6">

                  <div class="row">
                  <?php if (get_sub_field('icon')) : ?>
                    <?php $image = get_sub_field('icon');  ?>
                      <div class="col-md-4 col-md-offset-4 col-xs-6 col-xs-offset-3 col-sm-4 col-sm-offset-4 ">
                        <a href="<?php the_sub_field('internal_link'); ?>"> <img src="<?php echo $image['url']; ?>" class="img-responsive"> </a>
                      </div>
                  <?php endif; ?>
                  </div>

                  <div>
                  <br>
                    <?php if (get_sub_field('title')) : ?>
                       <a href="#"><span><strong><?php the_sub_field('title'); ?></strong></span></a>
                    <?php endif; ?>

                    <?php if (get_sub_field('text')) : ?>
                      <span><?php the_sub_field('text'); ?></span>
                    <?php endif; ?>
                  </div>

              </div>
              <?php endwhile; ?>
               </div>

          <!--Check link type-->
          <div class="clearfix row col-md-2 col-md-offset-5 col-sm-6 col-sm-offset-3 ">

          <?php if (get_sub_field('link_type') == 'internal') : ?>
              <?php if (get_sub_field('internal_link')) : ?>
                <a class="btn btn-primary btn-block" href="<?php the_sub_field('internal_link'); ?>"><?php the_sub_field('button_text'); ?></a>
              <?php endif; ?>

          <?php elseif (get_sub_field('link_type') == 'external') : ?>
              <?php if (get_sub_field('external_link')) : ?>
                <a class="btn btn-primary btn-block" href="<?php the_sub_field('external_link'); ?>" target="_blank"><?php the_sub_field('button_text'); ?></a>
              <?php endif; ?>
          <?php endif; ?>

          </div>
              <!--end link type check-->
          </div>
      <?php endif; ?>
<!--end four column logic-->

<!--Four Column Profiles logic-->
            <!--Check for slide show-->
            <?php if (get_row_layout() == 'four_column_profiles'): ?>

              <div class="four-column-profiles col-md-12 content-section" id="members">
              <div class="four-column-profiles-header">

                <div class="clearfix row">
                  <?php if (get_sub_field('title')) : ?>
                    <span class="col-md-2 col-md-offset-5"><h4><?php the_sub_field('title'); ?></h4></span>
                  <?php endif; ?>
                </div>

                <div class="clearfix row">
                  <?php if (get_sub_field('text')) : ?>
                    <p><?php the_sub_field('text'); ?></p>
                  <?php endif; ?>

                </div>
              </div>

              <?php $profilecounter = 0; ?>

              <div class="clearfix columns col-md-10 col-md-offset-1 wrapper">
              <?php while(have_rows('columns')): the_row(); ?>

                  <div class="column col-md-3 col-sm-6 col-sm-offset-0 col-xs-10 col-xs-offset-1 element">

                  <div class="row no-border-spacing">
                  <?php if (get_sub_field('icon')) : ?>
                    <?php $image = get_sub_field('icon');  ?>
                      <div class="col-md-12 col-sm-10 col-sm-offset-1 col-xs-12">
                        <img src="<?php echo $image['url']; ?>" class="img-responsive profile-image">
                      </div>
                  <?php endif; ?>
                  </div>

                  <div class="profile-name-tag col-md-12 col-sm-10 col-sm-offset-1 no-gutter">
                    <?php if (get_sub_field('title')) : ?>
                      <span><strong><?php echo do_shortcode('[wp_colorbox_media url="#inline_content'.$profilecounter.'" type="inline" hyperlink="'.get_sub_field('title').'"]'); ?> | </strong></span>
                    <?php endif; ?>

                    <?php if (get_sub_field('text')) : ?>
                      <span><?php the_sub_field('text'); ?></span>
                    <?php endif; ?>
                    <br>
                    <?php if (get_sub_field('bio')) : ?>
                      <?php $blurb = get_sub_field('bio'); ?>

			<?php if (get_sub_field('show_bio') == 'yes') : ?>
                		 <span><?php echo string_limit_words($blurb,8); ?></span><br>
              		<?php endif; ?>




                      <?php echo do_shortcode('[wp_colorbox_media url="#inline_content'.$profilecounter.'" type="inline" hyperlink="Read More"]'); ?>

                      <div style ="display:none;">
                        <div id="inline_content<?php echo $profilecounter?>" style="padding:10px; background:#fff;" class="advisory-board-pop-up">
                          <div style="float: left; margin-top: 10px; background-color: #ff0000; width: 30%; height: auto; margin: 10px;">
                            <div class="row no-border-spacing">
                            <?php if (get_sub_field('icon')) : ?>
                              <?php $image = get_sub_field('icon');  ?>
                                <div class="col-md-12">
                                  <img src="<?php echo $image['url']; ?>" class="img-responsive profile-image">
                                </div>
                            <?php endif; ?>

                            </div>
                          </div>
                          <h4>
                          <?php if (get_sub_field('title')) : ?>
                              <span><strong><?php the_sub_field('title'); ?> | </strong></span>
                            <?php endif; ?>

                            <?php if (get_sub_field('text')) : ?>
                              <span><?php the_sub_field('text'); ?></span>
                            <?php endif; ?>
                          </h4><hr>
                           <?php if (get_sub_field('bio')) : ?>
                            <span><?php the_sub_field('bio'); ?><span>
                          <?php endif; ?>
                        </div>
                      </div>
                    <?php endif; ?>
                  </div>

              </div>
              <?php $profilecounter++; ?>
              <?php endwhile; ?>
          </div>

          <!--Check link type-->
          <div class="clearfix row col-md-2 col-md-offset-5">

            <?php $pagename = get_query_var('pagename');
             if ( !$pagename=="who-we-are") { ?>
              <?php if (get_sub_field('link_type') == 'internal') : ?>
                  <?php if (get_sub_field('internal_link')) : ?>
                    <a class="btn btn-primary btn-block" href="<?php the_sub_field('internal_link'); ?>"><?php the_sub_field('button_text'); ?></a>
                  <?php endif; ?>

              <?php elseif (get_sub_field('link_type') == 'external') : ?>
                  <?php if (get_sub_field('external_link')) : ?>
                    <a class="btn btn-primary btn-block" href="<?php the_sub_field('external_link'); ?>" target="_blank"><?php the_sub_field('button_text'); ?></a>
                  <?php endif; ?>
              <?php endif; ?>
            <?php }else{ ?>

                        <a class="btn btn-primary btn-block" href="/contact_us">Contact Us</a>
     <!--       <?php //echo do_shortcode('[wp_colorbox_media url="#inline_content_cf" type="inline" hyperlink="Learn More"]'); ?>
                      <div style ="display:none;">
                        <div id="inline_content_cf" style="padding:10px; background:#fff;" class="advisory-board-pop-up">
                          <?php //echo do_shortcode('[contact-form-7 id="22" title="Contact form 1"]'); ?>
                        </div>
                      </div> -->

            <?php } ?>
          </div>
              <!--end link type check-->
          </div>
      <?php endif; ?>
<!--end four column profiles logic-->

<!--Five Column Logos logic-->
            <!--Check for slide show-->
            <?php if (get_row_layout() == 'five_column_logos'): ?>

              <div class="five-column-logos col-md-12" id="associations">
              <div class="five-column-logos-header">

                <div class="clearfix row">
                  <?php if (get_sub_field('title')) : ?>
                    <span class="col-md-6 col-md-offset-3"><h5><?php the_sub_field('title'); ?></h5></span>
                  <?php endif; ?>
                </div>

                <div class="clearfix row">
                  <?php if (get_sub_field('text')) : ?>
                    <p><?php the_sub_field('text'); ?></p>
                  <?php endif; ?>

                </div>
              </div>



              <div class="columns row">

              <?php while(have_rows('columns')): the_row(); ?>

                  <div class="column col-md-5ths col-md-offset-0 col-sm-4 col-sm-offset-4  col-xs-10 col-xs-offset-2">

                  <div class="no-border-spacing">
                  <?php if (get_sub_field('icon')) : ?>
                    <?php $image = get_sub_field('icon');  ?>
                      <div class="col-md-12 col-xs-12 mobile-stacked">
                            <?php if (get_sub_field('partner_link')) : ?>
                              <a  href="<?php the_sub_field('partner_link'); ?>" target="_blank"><?php the_sub_field('button_text'); ?><img src="<?php echo $image['url']; ?>" class="img-responsive"></a>
                            <?php endif; ?>
                      </div>
                  <?php endif; ?>
                  </div>

              </div>
              <?php endwhile; ?>
          </div>

          <!--Check link type-->
          <div class="clearfix row col-md-2 col-md-offset-5">

          <?php if (get_sub_field('link_type') == 'internal') : ?>
              <?php if (get_sub_field('internal_link')) : ?>
                <a class="btn btn-primary btn-block" href="<?php the_sub_field('internal_link'); ?>"><?php the_sub_field('button_text'); ?></a>
              <?php endif; ?>

          <?php elseif (get_sub_field('link_type') == 'external') : ?>
              <?php if (get_sub_field('external_link')) : ?>
                <a class="btn btn-primary btn-block" href="<?php the_sub_field('external_link'); ?>" target="_blank"><?php the_sub_field('button_text'); ?></a>
              <?php endif; ?>
          <?php endif; ?>

          </div>
              <!--end link type check-->
          </div>
      <?php endif; ?>
<!--end five column logos logic-->

<!--Five Column Color Logos logic-->
            <!--Check for slide show-->
            <?php if (get_row_layout() == 'five_column_color_logos'): ?>

              <div class="five-column-color-logos col-md-12" id="associations">
              <div class="five-column-color-logos-header">

                <div class="clearfix row">
                  <?php if (get_sub_field('title')) : ?>
                    <span class="col-md-6 col-md-offset-3"><h4><?php the_sub_field('title'); ?></h4></span>
                  <?php endif; ?>
                </div>

                <div class="clearfix row">
                  <?php if (get_sub_field('text')) : ?>
                    <p><?php the_sub_field('text'); ?></p>
                  <?php endif; ?>

                </div>
              </div>



              <div class="columns row">

              <?php while(have_rows('columns')): the_row(); ?>

                  <div class="column col-md-5ths col-md-offset-0  col-sm-4 col-sm-offset-4 col-xs-10 col-xs-offset-2 ">

                  <div class="no-border-spacing">
                  <?php if (get_sub_field('icon')) : ?>
                    <?php $image = get_sub_field('icon');  ?>
                      <div class="col-md-12 col-xs-12 mobile-stacked">
                            <?php if (get_sub_field('partner_link')) : ?>
                              <a  href="<?php the_sub_field('partner_link'); ?>" target="_blank"><?php the_sub_field('button_text'); ?><img src="<?php echo $image['url']; ?>" class="img-responsive"></a>
                            <?php endif; ?>
                      </div>
                  <?php endif; ?>
                  </div>

              </div>
              <?php endwhile; ?>
          </div>

          <!--Check link type-->
          <div class="clearfix row col-md-2 col-md-offset-5">

          <?php if (get_sub_field('link_type') == 'internal') : ?>
              <?php if (get_sub_field('internal_link')) : ?>
                <a class="btn btn-primary btn-block" href="<?php the_sub_field('internal_link'); ?>"><?php the_sub_field('button_text'); ?></a>
              <?php endif; ?>

          <?php elseif (get_sub_field('link_type') == 'external') : ?>
              <?php if (get_sub_field('external_link')) : ?>
                <a class="btn btn-primary btn-block" href="<?php the_sub_field('external_link'); ?>" target="_blank"><?php the_sub_field('button_text'); ?></a>
              <?php endif; ?>
          <?php endif; ?>

          </div>
              <!--end link type check-->
          </div>
      <?php endif; ?>
<!--end five column color logos logic-->

<!--Contact Form-->
            <!--Check for slide show-->
            <?php if (get_row_layout() == 'contact_form'): ?>

              <div class="contact-form col-md-12 content-section">
                <div class="clearfix row">
                  <?php if (get_sub_field('title')) : ?>
                    <span class="col-md-2 col-md-offset-5"><h4><?php the_sub_field('title'); ?></h4></span>
                  <?php endif; ?>
                </div>

                <div class="clearfix row">
                  <?php if (get_sub_field('text')) : ?>
                    <p><?php the_sub_field('text'); ?></p>
                  <?php endif; ?>

                </div>

              </div>

          <?php endif; ?>
          <!-- end slideshow -->
<!--end slideshow logic-->

<!--Contact Methods logic-->
            <!--Check for slide show-->
            <?php if (get_row_layout() == 'contact_methods'): ?>

              <div class="contact-methods col-md-12 content-section" id="location">

              <div class="clearfix columns row">
              <div class="column col-md-4 col-sm-4 contact-listings-group">
              <?php while(have_rows('listings')): the_row(); ?>


                  <div class="contact-listings">
                    <?php if (get_sub_field('title')) : ?>
                      <span class="prime-colored"><?php the_sub_field('title'); ?>:&nbsp;</span>
                    <?php endif; ?>

                    <?php if (get_sub_field('text')) : ?>
                      <span><strong><?php the_sub_field('text'); ?></strong></span>
                    <?php endif; ?>
                  </div>

              <?php endwhile; ?>
               </div>

            <?php if (get_sub_field('map')) : ?>
                <div class="col-md-8 col-sm-8 no-gutter">
                  <span><?php the_sub_field('map'); ?></span>
                </div>
            <?php endif; ?>
            </div>
          <!--Check link type-->
          <div class="clearfix row col-md-2 col-md-offset-5">

          <?php if (get_sub_field('link_type') == 'internal') : ?>
              <?php if (get_sub_field('internal_link')) : ?>
                <a class="btn btn-primary btn-block" href="<?php the_sub_field('internal_link'); ?>"><?php the_sub_field('button_text'); ?></a>
              <?php endif; ?>

          <?php elseif (get_sub_field('link_type') == 'external') : ?>
              <?php if (get_sub_field('external_link')) : ?>
                <a class="btn btn-primary btn-block" href="<?php the_sub_field('external_link'); ?>" target="_blank"><?php the_sub_field('button_text'); ?></a>
              <?php endif; ?>
          <?php endif; ?>

          </div>
              <!--end link type check-->
          </div>
    <?php endif; ?>


<!--end contact methods logic-->

<!--Image Title Text logic-->
            <!--Check for slide show-->
            <?php if (get_row_layout() == 'image_title_text'): ?>

              <div class="image-title-text col-md-12 content-section">


              <div class="clearfix columns row">
              <?php while(have_rows('columns')): the_row(); ?>


                 <?php if (get_sub_field('image-alignment') == 'left') : ?>
                <div class="column image-title-text-column col-md-12 col-sm-12 col-xs-12 light-grey-bg no-gutter">
                  <div class="col-md-5 col-sm-5 no-gutter">
                  <?php if (get_sub_field('image')) : ?>
                    <?php $image = get_sub_field('image');  ?>
                        <img src="<?php echo $image['url']; ?>" class="img-responsive">
                  <?php endif; ?>
                  </div>

                  <div class="col-md-7 col-sm-7">
                    <?php if (get_sub_field('title')) : ?>
                      <h5><?php the_sub_field('title'); ?></h5>
                    <?php endif; ?>

                    <?php if (get_sub_field('text')) : ?>
                      <?php the_sub_field('text'); ?>
                    <?php endif; ?>
                  </div>

                <?php elseif (get_sub_field('image-alignment') == 'right') : ?>
                <div class="column image-title-text-column col-md-12 col-sm-12 col-xs-12 no-gutter">

                    <div class="col-md-5 col-md-push-7 col-sm-5 col-sm-push-7 col-xs-12 no-gutter">
                  <?php if (get_sub_field('image')) : ?>
                    <?php $image = get_sub_field('image');  ?>
                        <img src="<?php echo $image['url']; ?>" class="img-responsive">
                  <?php endif; ?>
                  </div>

                  <div class="col-md-7 col-md-pull-5 col-sm-7 col-sm-pull-5 col-xs-12 ">
                    <?php if (get_sub_field('title')) : ?>
                      <h5><?php the_sub_field('title'); ?></h5>
                    <?php endif; ?>

                    <?php if (get_sub_field('text')) : ?>
                      <?php the_sub_field('text'); ?>
                    <?php endif; ?>
                  </div>


                <?php endif; ?>

              </div>
              <?php endwhile; ?>
              </div>

          <!--Check link type-->
          <div class="clearfix row col-md-2 col-md-offset-5 col-sm-6 col-sm-offset-3">

          <?php if (get_sub_field('link_type') == 'internal') : ?>
              <?php if (get_sub_field('internal_link')) : ?>
                <a class="btn btn-primary btn-block" href="<?php the_sub_field('internal_link'); ?>"><?php the_sub_field('button_text'); ?></a>
              <?php endif; ?>

          <?php elseif (get_sub_field('link_type') == 'external') : ?>
              <?php if (get_sub_field('external_link')) : ?>
                <a class="btn btn-primary btn-block" href="<?php the_sub_field('external_link'); ?>" target="_blank"><?php the_sub_field('button_text'); ?></a>
              <?php endif; ?>
          <?php endif; ?>

          </div>
              <!--end link type check-->
          </div>
    <?php endif; ?>
<!--end image title text logic-->

<!--Carousel-->
            <!--Check for slide show-->
            <?php if (get_row_layout() == 'news_and_events_carousel'): ?>

              <div class="news_and_events_carousel col-md-12 content-section light-grey-bg">
              <div class="news_and_events_carousel-header">

                <div class="clearfix row">
                  <?php if (get_sub_field('title')) : ?>
                    <span class="col-md-6 col-md-offset-3"><h4><?php the_sub_field('title'); ?></h4></span>
                  <?php endif; ?>
                </div>

              </div>
              <!-- Carousel -->
              <div id="promo-carousel" class="carousel slide col-md-12  light-grey-bg display-desktop" data-ride="carousel">

               <div class="col-md-10 col-md-offset-1 col-sm-10 col-sm-offset-1">

                <!-- Wrapper for slides -->
               <div class="carousel-inner" role="listbox">


                  <?php
                  global $post;
                  $args = array( -1, 'post_type' => 'event', 'orderby' => 'date', 'order' => 'DESC','meta_query' => array(
                    array(
                      'key' => '_start_ts',
                      'value' => current_time('timestamp'),
                      'compare' => '>=',
                      'type'=>'numeric'
                    )
                  ));
                  $query = new WP_Query( $args );
                  $args2 = array( 3, 'post_type' => 'post', 'orderby' => 'date', 'order' => 'DESC',);
                  $query2 = new WP_Query( $args2 );
                 // Get the posts
                  $myposts = $query->get_posts();
                  $myposts2 = $query2->get_posts();
                  $myposts = array_merge($myposts, $myposts2);
                // If there are posts
                if($myposts):
                  // Item size (set here the number of posts for each group)
                  $i = 3;
                  // Groups the posts in groups of $i
                  $chunks = array_chunk($myposts, $i);
                  $html = "";
                  /*
                   * Item
                   * For each group (chunk) it generates an item
                   */
                  foreach($chunks as $chunk):
                    // Sets as 'active' the first items
                    ($chunk === reset($chunks)) ? $active = "active" : $active = "";
                    $html .= '<div class="item '.$active.' col-md-12">';
                    /*
                     * Posts inside the current Item
                     * For each item it generates the posts HTML
                     */
                    $events=$chunk;
                  foreach($events as $post): setup_postdata($post);
                    $html .= '<div class="col-xs-12 col-sm-12 col-md-4 col-lg-4 home-page-carousel-item mobile-stacked">';
                    if (has_post_thumbnail( $post->ID ) ):
                    $image = wp_get_attachment_image_src( get_post_thumbnail_id( $post->ID ), 'single-post-thumbnail' );
                    $html .= '<div class="col-md-12 home-page-carousel-item-inner-top" style="background-image: url('.$image[0].'); background-position: 0% 50%;"></div>';
                    endif;
                    $html .= '<div class="col-md-12 home-page-carousel-item-inner-bottom" style="min-height: 110px;">';
                    $html .= '<strong>'.get_the_title().'</strong><br>';
                    $blurb = get_the_excerpt();
                    $html .=  string_limit_words($blurb,8);
                    $html .= '</div>';
                    $html .= '<a href="'.get_permalink().'"><span class="carousel-item-link"></span></a>';
                    $html .= '</div>';
                   endforeach;
                   wp_reset_postdata();
                    $html .= '</div>';
                  endforeach;
                  // Prints the HTML
                  echo $html;
                endif;
                ?>

                </div> <!-- carousel inner -->
                </div>

                <!-- Controls -->
                <a class="left carousel-control" href="#promo-carousel" role="button" data-slide="prev">
                  <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
                  <span class="sr-only">Previous</span>
                </a>
                <a class="right carousel-control" href="#promo-carousel" role="button" data-slide="next">
                  <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
                  <span class="sr-only">Next</span>
                </a>

              </div> <!-- /carousel -->
                            <!-- Carousel -->
              <div id="promo-carousel-m" class="carousel slide col-md-12 col-sm-12 light-grey-bg display-mobile" data-ride="carousel">

               <div class="col-md-10 col-md-offset-1 col-sm-10 col-sm-offset-1">

                <!-- Wrapper for slides -->
               <div class="carousel-inner" role="listbox">


                  <?php
                  global $post;
                  $args = array( -1, 'post_type' => 'event', 'orderby' => 'date', 'order' => 'DESC','meta_query' => array(
                    array(
                      'key' => '_start_ts',
                      'value' => current_time('timestamp'),
                      'compare' => '>=',
                      'type'=>'numeric'
                    )
                  ));
                  $query = new WP_Query( $args );
                  $args2 = array( 3, 'post_type' => 'post', 'orderby' => 'date', 'order' => 'DESC',);
                  $query2 = new WP_Query( $args2 );
                 // Get the posts
                  $myposts = $query->get_posts();
                  $myposts2 = $query2->get_posts();
                  $myposts = array_merge($myposts, $myposts2);
                // If there are posts
                if($myposts):
                  // Item size (set here the number of posts for each group)
                  $i = 1;
                  // Groups the posts in groups of $i
                  $chunks = array_chunk($myposts, $i);
                  $html = "";
                  /*
                   * Item
                   * For each group (chunk) it generates an item
                   */
                  foreach($chunks as $chunk):
                    // Sets as 'active' the first items
                    ($chunk === reset($chunks)) ? $active = "active" : $active = "";
                    $html .= '<div class="item '.$active.' col-md-12">';
                    /*
                     * Posts inside the current Item
                     * For each item it generates the posts HTML
                     */
                    $events=$chunk;
                  foreach($events as $post): setup_postdata($post);
                    $html .= '<div class="col-xs-12 col-sm-12 col-md-4 col-lg-4 home-page-carousel-item mobile-stacked">';
                    if (has_post_thumbnail( $post->ID ) ):
                    $image = wp_get_attachment_image_src( get_post_thumbnail_id( $post->ID ), 'single-post-thumbnail' );
                    $html .= '<div class="col-md-12 home-page-carousel-item-inner-top" style="background-image: url('.$image[0].'); background-position: 0% 50%;"></div>';
                    endif;
                    $html .= '<div class="col-md-12 home-page-carousel-item-inner-bottom" style="min-height: 110px;">';
                    $html .= '<strong>'.get_the_title().'</strong><br>';
                    $blurb = get_the_excerpt();
                    $html .=  string_limit_words($blurb,8);
                    $html .= '</div>';
                    $html .= '<a href="'.get_permalink().'"><span class="carousel-item-link"></span></a>';
                    $html .= '</div>';
                   endforeach;
                   wp_reset_postdata();
                    $html .= '</div>';
                  endforeach;
                  // Prints the HTML
                  echo $html;
                endif;
                ?>

                </div> <!-- carousel inner -->
                </div>

                <!-- Controls -->
                <a class="left carousel-control" href="#promo-carousel-m" role="button" data-slide="prev">
                  <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
                  <span class="sr-only">Previous</span>
                </a>
                <a class="right carousel-control" href="#promo-carousel-m" role="button" data-slide="next">
                  <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
                  <span class="sr-only">Next</span>
                </a>

              </div> <!-- /carousel -->
              </div>
    <?php endif; ?>
<!--end carousel-->

<!--Post Carousel-->
            <!--Check for slide show-->
            <?php if (get_row_layout() == 'post_carousel'): ?>

             <div class="news_and_events_carousel col-md-12 no-gutter content-section light-grey-bg ">
                          <div class="news_and_events_carousel-header">

                            <div class="clearfix row">
                              <?php if (get_sub_field('title')) : ?>
                                <span class="col-md-6 col-md-offset-3"><h4><?php the_sub_field('title'); ?></h4></span>
                              <?php endif; ?>
                            </div>

                          </div>
                          <!-- Carousel -->
                          <div id="promo-carousel2" class="carousel slide col-md-12  light-grey-bg display-desktop" data-ride="carousel">

                        <div class="col-md-10 col-md-offset-1 col-sm-10 col-sm-offset-1">
                            <!-- Wrapper for slides -->
                           <div class="carousel-inner" role="listbox">


                                              <?php
                                           global $post;
                                            // Item size (set here the number of posts for each group)
                                            $i = 3;
                                         // Get the posts
                                          $myposts = get_sub_field('featured_posts');
                                          // If there are posts
                                          if($myposts):
                                            // Groups the posts in groups of $i
                                            $chunks = array_chunk($myposts, $i);
                                            $html = "";
                                            /*
                                             * Item
                                             * For each group (chunk) it generates an item
                                             */
                                            foreach($chunks as $chunk):
                                              // Sets as 'active' the first items
                                              ($chunk === reset($chunks)) ? $active = "active" : $active = "";
                                              $html .= '<div class="item '.$active.' col-md-12">';
                                              /*
                                               * Posts inside the current Item
                                               * For each item it generates the posts HTML
                                               */
                                              $events=$chunk;
                                              foreach($events as $post): setup_postdata($post);
                                                $html .= '<div class="col-xs-12 col-sm-12 col-md-4 col-lg-4 home-page-carousel-item mobile-stacked">';
                                                if (has_post_thumbnail( $post->ID ) ):
                                                $image = wp_get_attachment_image_src( get_post_thumbnail_id( $post->ID ), 'single-post-thumbnail' );
                                                $html .= '<div class="col-md-12 home-page-carousel-item-inner-top" style="background-image: url('.$image[0].'); background-position: 0% 50%;"></div>';
                                                endif;
                                                $html .= '<div class="col-md-12 home-page-carousel-item-inner-bottom" style="min-height: 110px;">';
                                                $html .= '<strong>'.get_the_title().'</strong><br>';
                                                $blurb = get_the_excerpt();
                                                $html .=  string_limit_words($blurb,8);
                                                $html .= '</div>';
                                                $html .= '<a href="'.get_permalink().'"><span class="carousel-item-link"></span></a>';
                                                $html .= '</div>';
                                               endforeach;
                                                wp_reset_postdata();
                                                $html .= '</div>';
                                            endforeach;
                                            // Prints the HTML
                                            echo $html;
                                          endif;
                                          ?>
                                    </div>
                                  </div> <!-- carousel inner -->
                              <!-- Controls -->
                                          <a class="left carousel-control" href="#promo-carousel2" role="button" data-slide="prev">
                                            <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
                                            <span class="sr-only">Previous</span>
                                          </a>
                                          <a class="right carousel-control" href="#promo-carousel2" role="button" data-slide="next">
                                            <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
                                            <span class="sr-only">Next</span>
                                          </a>

                                        </div> <!-- /carousel -->
                                          <!-- Carousel -->
                          <div id="promo-carousel2-m" class="carousel slide col-md-12 col-sm-12 light-grey-bg display-mobile no-gutter" data-ride="carousel">

                        <div class="col-md-10 col-md-offset-1 col-sm-10 col-sm-offset-1">
                            <!-- Wrapper for slides -->
                           <div class="carousel-inner" role="listbox">


                                              <?php
                                           global $post;
                                            // Item size (set here the number of posts for each group)
                                            $i = 1;
                                         // Get the posts
                                          $myposts = get_sub_field('featured_posts');
                                          // If there are posts
                                          if($myposts):
                                            // Groups the posts in groups of $i
                                            $chunks = array_chunk($myposts, $i);
                                            $html = "";
                                            /*
                                             * Item
                                             * For each group (chunk) it generates an item
                                             */
                                            foreach($chunks as $chunk):
                                              // Sets as 'active' the first items
                                              ($chunk === reset($chunks)) ? $active = "active" : $active = "";
                                              $html .= '<div class="item '.$active.' col-md-12">';
                                              /*
                                               * Posts inside the current Item
                                               * For each item it generates the posts HTML
                                               */
                                              $events=$chunk;
                                              foreach($events as $post): setup_postdata($post);
                                                $html .= '<div class="col-xs-12 col-sm-12 col-md-4 col-lg-4 home-page-carousel-item mobile-stacked">';
                                                if (has_post_thumbnail( $post->ID ) ):
                                                $image = wp_get_attachment_image_src( get_post_thumbnail_id( $post->ID ), 'single-post-thumbnail' );
                                                $html .= '<div class="col-md-12 home-page-carousel-item-inner-top" style="background-image: url('.$image[0].'); background-position: 0% 50%;"></div>';
                                                endif;
                                                $html .= '<div class="col-md-12 home-page-carousel-item-inner-bottom" style="min-height: 110px;">';
                                                $html .= '<strong>'.get_the_title().'</strong><br>';
                                                $blurb = get_the_excerpt();
                                                $html .=  string_limit_words($blurb,8);
                                                $html .= '</div>';
                                                $html .= '<a href="'.get_permalink().'"><span class="carousel-item-link"></span></a>';
                                                $html .= '</div>';
                                               endforeach;
                                                wp_reset_postdata();
                                                $html .= '</div>';
                                            endforeach;
                                            // Prints the HTML
                                            echo $html;
                                          endif;
                                          ?>
                                    </div>
                                  </div> <!-- carousel inner -->
                              <!-- Controls -->
                                          <a class="left carousel-control" href="#promo-carousel2-m" role="button" data-slide="prev">
                                            <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
                                            <span class="sr-only">Previous</span>
                                          </a>
                                          <a class="right carousel-control" href="#promo-carousel2-m" role="button" data-slide="next">
                                            <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
                                            <span class="sr-only">Next</span>
                                          </a>

                                        </div> <!-- /carousel -->
                                        </div>


                              <?php endif; ?>
<!--end Post carousel-->

        <?php endwhile; ?> <!--Content -->
        <?php endif; ?> <!-- Check for content -->
    <?php endwhile;?> <!-- Section -->
  <?php endif; ?> <!-- Section -->

<?php endwhile; ?>