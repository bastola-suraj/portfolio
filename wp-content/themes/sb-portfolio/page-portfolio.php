<?php
get_header();
?>
	<div id="colorlib-work">
		<div class="container">
			<div class="row text-center">
				<h2 class="bold"><?php echo the_title(); ?></h2>
			</div>
			<div class="row">
				<div class="col-md-12 col-md-offset-0 text-center animate-box intro-heading">
					<span><?php the_title() ?></span>
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
				$args   = array(
					'post_type'      => 'works',
//					'posts_per_page' => 4,
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
get_footer();