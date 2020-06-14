<?php
get_header();
?>
	<div id="colorlib-blog">
		<div class="container">
			<div class="row text-center">
				<h2 class="bold">Blog</h2>
			</div>
			<div class="row">
				<div class="col-md-12 col-md-offset-0 text-center animate-box intro-heading">
					<span><?php the_title() ?></span>
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
					$args   = array(
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
										<a href="<?php the_permalink(); ?>" class="blog-img">
											<img class="img-responsive" src="<?php echo $attachment[0]; ?>"
											     alt="html5 bootstrap by colorlib.com">
											<div class="overlay"></div>
											<div class="link">
												<span class="read">Read more</span>
												<!--											<h2 class="read">Read more</h2>-->
											</div>
										</a>
										<div class="desc">
											<!--                                    <span class="meta">-->
											<?php //the_date('d M, Y');
											?><!--</span>-->
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
get_footer();