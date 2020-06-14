<?php
get_header();
?>
	<div id="colorlib-services">
		<div class="container">
			<div class="row text-center">
				<h2 class="bold"><?php the_title(); ?></h2>
			</div>
			<div class="row">
				<div class="col-md-12">
					<div class="services-flex">
						<div class="one-third">
							<div class="row">
								<div class="col-md-12 col-md-offset-0 animate-box intro-heading">
									<span><?php echo get_field( 'services_helper_title' ); ?></span>
									<h2><?php echo get_field( 'services_title' ); ?></h2>
								</div>
							</div>
							<div class="row">
								<div class="col-md-12">
									<div class="rotate">
										<h2 class="heading"><?php the_title(); ?></h2>
									</div>
								</div>
								<?php
								if ( have_rows( 'services' ) ):
									$sn = 1;
									while ( have_rows( 'services' ) ):
										the_row();
										?>
										<div class="col-md-6">
											<div class="services animate-box">
												<h3><?php echo $sn . ' - ' . get_sub_field( 'service_provided' ); ?></h3>
												<ul>
													<?php
													if ( have_rows( 'service_options_repeater' ) ):
														while ( have_rows( 'service_options_repeater' ) ):
															the_row();
															?>
															<li> <?php echo get_sub_field( 'service_options' ); ?> </li>
														<?
														endwhile;
													endif;
													?>
												</ul>
											</div>
										</div>
										<?php
										$sn ++;
										if ( $sn > 4 ) {
											break;
										}
									endwhile;
								endif;
								?>
							</div>
						</div>
						<div class="one-forth services-img"
						     style="background-image: url(<?php echo $attachment[0]; ?>);">
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
<?php
get_footer();
