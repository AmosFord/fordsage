<?php
/**
 * Template Name: Contact Template
 */
?>

<div class="jumbotron text-center">
	<h2>Say Hello</h2>
	<h1>Contact Me</h1>
	<h2>for	</h2>
	<h3>freelance development and consulting</h3>

</div>


<div class="col-sm-12 text-section text-center alt-background" >
	<div class="col-sm-6 col-sm-offset-3">
			<div class="col-sm-12">
				<img src="<?php bloginfo('stylesheet_directory'); ?>/assets/images/phoneiconbig.png" alt="Phone Icon"  class="img-responsive center-block"><br><br>
			</div>
			<h4>PHONE &amp; EMAIL</h4>
			<p>909.231.8742 </p>
			<p>amos@amosford.com</p>		
		</a>
    </div>
</div>

<div class="col-xs-12 col-sm-12 text-section alt-background">
	<div class="col-xs-10 col-xs-offset-1 col-sm-6 col-sm-offset-3 col-md-4 col-md-offset-4 col-lg-6 col-lg-offset-3">
		<?php echo do_shortcode('[contact-form-7 id="15" title="Contact form 1"]'); ?>  
	</div>
</div>


