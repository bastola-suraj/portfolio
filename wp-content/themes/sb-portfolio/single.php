<?php
/**
 * The template for displaying all single posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#single-post
 *
 * @package sb-portfolio
 */

get_header();
$attachment = wp_get_attachment_image_src( get_post_thumbnail_id( $post->ID ), 'large', true );
?>
    <div id="colorlib-blog">
        <div class="container">
            <div class="row">
                <div class="col-md-10 col-md-offset-1">
                    <div class="blog-entry animate-box col-pb-sm">
                        <h2 class="pt-10"><?php the_title(); ?></h2>
                        <span><small><?php the_time( 'F j, Y' ); ?></small></span>
                        <span style="padding-left: 20px">
                            Categories: <small><?php the_category( ' | ', '', '' ); ?></small>
                        </span>
                        <span style="padding-left: 20px">
                            Tags: <small><?php the_tags( '', ' | ', '' ); ?></small>
                        </span>
                        <span style="padding-left: 20px">
                            <small><i class="icon-bubble3"></i> <? echo get_comments_number() ?></small>
                        </span>
                        <a href="<?php the_permalink(); ?>" class="blog-img">
                            <img src="<?php echo $attachment[0]; ?>" class="img-responsive" alt=""></a>
                        <div class="desc">
                            <p class="first-letra"><?php the_content(); ?></p><br>

                            <div class="author text-center">
								<?php echo get_avatar( get_the_author_meta( 'ID' ), '', '', '', array( 'class' => 'author-img' ) ); ?>
                                <h3>
                                    <a href="<?php get_author_posts_url( get_the_author_meta( 'ID' ) ); ?>"><?php the_author_meta( 'display_name' ); ?></a>
                                </h3>
                                <p><?php the_author_meta( 'user_description' ); ?></p>
                                <p class="colorlib-social-icons">
                                    <a href="#"><i class="icon-facebook4"></i></a>
                                    <a href="#"><i class="icon-twitter3"></i></a>
                                    <a href="#"><i class="icon-googleplus"></i></a>
                                    <a href="#"><i class="icon-dribbble2"></i></a>
                                </p>
                            </div>
                            <div class="row">

                                <div class="col-md-6 text-left">
									<?php previous_post_link( '%link', '<span><i class="icon-arrow-left3"></i> Previous</span> <h2>%title</h2>' ); ?>
                                </div>
                                <div class="col-md-6 text-right">
									<?php next_post_link( '%link', '<span>Next <i class="icon-arrow-right3"></i></span> <h2>%title</h2>' ); ?>
                                </div>
                            </div>
                        </div>
                    </div>
                    <?php
                    if(comments_open() || get_comments_number()){
                        comments_template();
                    }
                    ?>
                </div>
            </div>
        </div>
    </div>

    <!--        <div id="colorlib-instagram">-->
    <!--            <div class="container-fluid">-->
    <!--                <div class="row">-->
    <!--                    <div class="col-md-12 col-md-offset-0 text-center">-->
    <!--                        <h2><span>Instagram</span></h2>-->
    <!--                    </div>-->
    <!--                </div>-->
    <!--                <div class="row">-->
    <!--                    <div class="col-md-12">-->
    <!--                        <div class="instagram-entry">-->
    <!--                            <a href="#" class="instagram text-center"-->
    <!--                               style="background-image: url(images/gallery-1.jpg);">-->
    <!--                            </a>-->
    <!--                            <a href="#" class="instagram text-center"-->
    <!--                               style="background-image: url(images/gallery-2.jpg);">-->
    <!--                            </a>-->
    <!--                            <a href="#" class="instagram text-center"-->
    <!--                               style="background-image: url(images/gallery-3.jpg);">-->
    <!--                            </a>-->
    <!--                            <a href="#" class="instagram text-center"-->
    <!--                               style="background-image: url(images/gallery-4.jpg);">-->
    <!--                            </a>-->
    <!--                            <a href="#" class="instagram text-center"-->
    <!--                               style="background-image: url(images/gallery-5.jpg);">-->
    <!--                            </a>-->
    <!--                            <a href="#" class="instagram text-center"-->
    <!--                               style="background-image: url(images/gallery-6.jpg);">-->
    <!--                            </a>-->
    <!--                            <a href="#" class="instagram text-center"-->
    <!--                               style="background-image: url(images/gallery-7.jpg);">-->
    <!--                            </a>-->
    <!--                            <a href="#" class="instagram text-center"-->
    <!--                               style="background-image: url(images/gallery-8.jpg);">-->
    <!--                            </a>-->
    <!--                        </div>-->
    <!--                    </div>-->
    <!--                </div>-->
    <!--            </div>-->
    <!--        </div>-->


<?php
//get_sidebar();
get_footer();
