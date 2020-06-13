<?php
/*
Template Name: Homepage Template
 */
get_header();
?>
    <!--About Section-->
<?php
$args  = array(
	'page_id' => 44
);
$query = new WP_Query( $args );
if ( $query->have_posts() ):
	while ( $query->have_posts() ):
		$query->the_post();
		$front_images_and_title = get_field( 'front_images_and_title' );
//		echo '<pre>';
//		print_r( $front_images_and_title );
//		echo '</pre>';
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
	endwhile;
	wp_reset_postdata();
endif;

?>
    <!--About Section-->

    <!--Services Section-->
<?php
$args  = array(
	'page_id' => 62
);
$query = new WP_Query( $args );
if ( $query->have_posts() ):
	while ( $query->have_posts() ):
		$query->the_post();
		$attachment = wp_get_attachment_image_src( get_post_thumbnail_id( $post->ID ), 'large', true );
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
	endwhile;
	wp_reset_postdata();
endif;
?>
    <!--Services Section-->

    <!--Portfolio Section-->
<?php
$args  = array(
	'page_id' => 84,
);
$query = new WP_Query( $args );
if ( $query->have_posts() ):
	while ( $query->have_posts() ):
		$query->the_post(); ?>
        <div id="colorlib-work">
            <div class="container">
                <div class="row text-center">
                    <h2 class="bold"><?php echo the_title(); ?></h2>
                </div>
                <div class="row">
                    <div class="col-md-12 col-md-offset-0 text-center animate-box intro-heading">
                        <span><?php the_title()?></span>
                        <h2>Done Projects</h2>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-12">
                        <div class="rotate">
                            <h2 class="heading">Portfolio</h2>
                        </div>
                    </div>
                </div>
                <div class="row">
					<?php
					$args  = array(
						'post_type'      => 'works',
						'posts_per_page' => 4,
					);
					$query2 = new WP_Query( $args );
					if ( $query2->have_posts() ):
						while ( $query2->have_posts() ):
							$query2->the_post();
							$attachment = wp_get_attachment_image_src( get_post_thumbnail_id( $post->ID ), 'large', true );
							?>
                            <div class="col-md-12">
                                <div class="work-entry animate-box">
                                    <a href="<?php echo get_field( 'live_site' ); ?>" class="work-img"
                                       style="background-image: url(<?php echo $attachment[0]; ?>);">
                                        <div class="display-t">
                                            <div class="work-name">
                                                <h2><?php the_title() ?></h2>
                                            </div>
                                        </div>
                                    </a>
                                    <div class="col-md-4 col-md-offset-4">
                                        <div class="desc">
                                            <p><?php the_content(); ?></p>
                                            <p class="read"><a href="<?php echo get_field( 'live_site' ); ?>">View
                                                    details</a></p>
                                        </div>
                                    </div>
                                </div>
                            </div>
						<?php

						endwhile;
//						wp_reset_postdata();
					endif;
					?>
                </div>
            </div>
        </div>
	<?php
	endwhile;
	wp_reset_postdata();
endif;
?>
    <!--Portfolio Section-->

<!--Blog Section-->
<?php
$args  = array(
	'page_id' => 86,
);
$query = new WP_Query( $args );
if ( $query->have_posts() ):
	while ( $query->have_posts() ):
		$query->the_post(); ?>
    <div id="colorlib-blog">
        <div class="container">
            <div class="row text-center">
                <h2 class="bold">Blog</h2>
            </div>
            <div class="row">
                <div class="col-md-12 col-md-offset-0 text-center animate-box intro-heading">
                    <span><?php the_title()?></span>
                    <h2>Blogs</h2>
                </div>
            </div>
            <div class="row">
                <div class="col-md-12">
                    <div class="rotate">
                        <h2 class="heading"><?php the_title(); ?></h2>
                    </div>
                </div>
            </div>
            <div class="row animate-box">
                <div class="owl-carousel1">
		<?php
		$args  = array(
			'post_type'      => 'post',
			'posts_per_page' => 4,
		);
		$query2 = new WP_Query( $args );
		if ( $query2->have_posts() ):
			while ( $query2->have_posts() ):
				$query2->the_post();
				$attachment = wp_get_attachment_image_src( get_post_thumbnail_id( $post->ID ), 'large', true );
				?>
                    <div class="item">
                        <div class="col-md-12">
                            <div class="article">
                                <a href="<?php the_permalink();?>" class="blog-img">
                                    <img class="img-responsive" src="<?php echo $attachment[0]; ?>" alt="html5 bootstrap by colorlib.com">
                                    <div class="overlay"></div>
                                    <div class="link">
											<span class="read">Read more</h2>
<!--											<h2 class="read">Read more</h2>-->
                                    </div>
                                </a>
                                <div class="desc">
                                    <span class="meta"><?php the_date('d M, Y'); ?></span>
                                    <h2><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
                                    <?php the_excerpt(); ?>
                                </div>
                            </div>
                        </div>
                    </div>
			<?php

			endwhile;
//						wp_reset_postdata();
		endif;
		?>
                </div>
            </div>
        </div>
    </div>
	<?php
	endwhile;
	wp_reset_postdata();
endif;
?>
<!--Blog Section-->

<!--Testimonies Section-->
    <div id="colorlib-testimony">
        <div class="container">
            <div class="row text-center">
                <h2 class="bold">Testimonies</h2>
            </div>
            <div class="row">
                <div class="col-md-12 col-md-offset-0 text-center animate-box intro-heading">
                    <span>Testimonies</span>
                    <h2>Clients Says</h2>
                </div>
            </div>
            <div class="row">
                <div class="col-md-12">
                    <div class="rotate">
                        <h2 class="heading">Says</h2>
                    </div>
                </div>
            </div>
            <div class="row animate-box">
                <div class="owl-carousel">
                    <div class="item">
                        <div class="col-md-12 text-center">
                            <div class="testimony">
                                <blockquote>
                                    <p>"A small river named Duden flows by their place and supplies it with the necessary regelialia.</p>
                                    <span>" &mdash; George Brooks</span>
                                </blockquote>
                            </div>
                        </div>
                    </div>
                    <div class="item">
                        <div class="col-md-12 text-center">
                            <div class="testimony">
                                <blockquote>
                                    <p>"Even the all-powerful Pointing has no control about the blind texts it is an almost unorthographic life One day however a small line of blind text by the name of Lorem Ipsum decided to leave for the far World of Grammar.</p>
                                    <span>" &mdash; Daniel Foster</span>
                                </blockquote>
                            </div>
                        </div>
                    </div>
                    <div class="item">
                        <div class="col-md-12 text-center">
                            <div class="testimony">
                                <blockquote>
                                    <p>"When she reached the first hills of the Italic Mountains, she had a last view back on the skyline of her hometown Bookmarksgrove</p>
                                    <span>" &mdash; Liam Jenkins</span>
                                </blockquote>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
<!--Testimonies Section-->

<?php
get_footer();