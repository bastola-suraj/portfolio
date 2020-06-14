<?php
get_header();
?>
<div id="colorlib-contact">
	<div class="container">
		<div class="row text-center">
			<h2 class="bold">Contact</h2>
		</div>
		<div class="row">
			<div class="col-md-12 col-md-offset-0 text-center animate-box intro-heading">
				<span>Contact</span>
				<h2>Contact Me</h2>
			</div>
		</div>
		<div class="row">
			<div class="col-md-12">
				<div class="rotate">
					<h2 class="heading">Contact</h2>
				</div>
			</div>
		</div>
		<div class="row">
			<div class="col-md-12 col-md-offset-0">
				<div class="row">
					<div class="col-md-4 animate-box">
						<h3>My Address</h3>
						<ul class="contact-info">
							<li><span><i class="icon-map5"></i></span><?php echo get_field('contact_address') ?></li>
							<li><span><i class="icon-phone4"></i></span><a href="tel:<?php echo get_field('contact_phone') ?>"><?php echo get_field('contact_phone') ?></a> </li>
							<li><span><i class="icon-envelope2"></i></span><a href="mailto:<?php echo get_field('contact_e_mail') ?>"><?php echo get_field('contact_e_mail') ?></a></li>
<!--							<li><span><i class="icon-globe3"></i></span><a href="#">www.yoursite.com</a></li>-->
						</ul>
					</div>
					<div class="col-md-7 col-md-push-1 animate-box">
						<div class="row">
							<?php the_content(); ?>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>
<?php
get_footer();