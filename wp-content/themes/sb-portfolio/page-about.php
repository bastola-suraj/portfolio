<?php
get_header();
?>
	<div id="colorlib-about">
		<div class="container">
			<div class="row text-center">
				<h2 class="bold"><?php the_title() ?></h2>
			</div>
			<div class="row">
				<div class="col-md-5 animate-box">
					<div class="owl-carousel3">
						<?php
						if ( have_rows( 'front_images_and_title' ) ):
							while ( have_rows( 'front_images_and_title' ) ):
								the_row();
								?>
								<div class="item">
									<!--		                        --><?php //$attachment = wp_get_attachment_image_src(get_post_thumbnail_id($post->ID),'large',true)
									?>
									<img class="img-responsive about-img"
									     src="<?php echo get_sub_field( 'front_image' ); ?>"
									     alt="html5 bootstrap template by colorlib.com">
								</div>
							<?php
							endwhile;
						endif;
						?>
					</div>
				</div>
				<div class="col-md-6 col-md-push-1 animate-box">
					<div class="about-desc">
						<div class="owl-carousel3">
							<?php
							if ( have_rows( 'front_images_and_title' ) ):
								while ( have_rows( 'front_images_and_title' ) ):
									the_row();
									?>
									<div class="item">
										<h2>
											<span><?php echo get_sub_field( 'first_text_field' ); ?></span><span><?php echo get_sub_field( 'second_text_field' ); ?></span>
										</h2>
									</div>
								<?php
								endwhile;
							endif;
							?>
						</div>
						<div class="desc">
							<div class="rotate">
								<h2 class="heading"><?php the_title() ?></h2>
							</div>
							<p><?php the_content(); ?></p>
							<p class="colorlib-social-icons">
								<a href="#"><i class="icon-facebook4"></i></a>
								<a href="#"><i class="icon-twitter3"></i></a>
								<a href="#"><i class="icon-googleplus"></i></a>
								<a href="#"><i class="icon-dribbble2"></i></a>
							</p>
							<p><a href="<?php echo site_url( 'contact' ) ?>" class="btn btn-primary btn-outline">Contact
									Me!</a></p>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
<?php
get_footer();
