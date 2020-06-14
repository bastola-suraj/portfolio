<?php
add_shortcode( 'footer_blog', 'footer_blog' );
function footer_blog() {
	?>
    <div class="col-md-4 col-pb-sm">
        <h2>Latest Blogs</h2>
		<?php
		$args  = array(
			'post_type'      => 'post',
			'posts_per_page' => 3
		);
		$query = new WP_Query( $args );
		if ( $query->have_posts() ):
			while ( $query->have_posts() ):
				$query->the_post();
		$attachment = wp_get_attachment_image_src(get_post_thumbnail_id(),'large',true);
				?>

                <div class="f-entry">
                    <a href="<?php the_permalink(); ?>" class="featured-img"
                       style="background-image: url(<?php echo $attachment[0]; ?>);"></a>
                    <div class="desc">
                        <span><?php the_time('j F, Y'); ?></span>
                        <h3><a href="<?php the_permalink();?>"><?php the_title(); ?></a></h3>
                    </div>
                </div>
			<?php
			endwhile;
			wp_reset_postdata();
		endif;
		?>
    </div>

	<?php
}
add_shortcode('social_links','social_links');
function social_links(){
    ?>
    <p class="colorlib-social-icons">
        <a href="https://facebook.com/bastolasuraj/"><i class="icon-facebook4"></i></a>
        <a href="https://twitter.com/bastolasuraj/"><i class="icon-twitter3"></i></a>
        <a href="https://linkedin.com/in/bastolasuraj/"><i class="icon-googleplus"></i></a>
<!--        <a href="#"><i class="icon-dribbble2"></i></a>-->
    </p>
<?php
}