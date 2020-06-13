<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="description" content=""/>
    <meta name="keywords" content=""/>
    <meta name="author" content="Suraj Bastola"/>
    <meta property="og:title" content=""/>
    <meta property="og:image" content=""/>
    <meta property="og:url" content=""/>
    <meta property="og:site_name" content=""/>
    <meta property="og:description" content=""/>
    <meta name="twitter:title" content=""/>
    <meta name="twitter:image" content=""/>
    <meta name="twitter:url" content=""/>
    <meta name="twitter:card" content=""/>
	<?php
	wp_head();
	?>
</head>
<body <?php body_class(); ?> >
<nav id="colorlib-main-nav" role="navigation">
    <a href="#" class="js-colorlib-nav-toggle colorlib-nav-toggle active"><i></i></a>
    <div class="js-fullheight colorlib-table">
        <div class="colorlib-table-cell js-fullheight">
            <div class="row">
                <div class="col-md-12">
                    <form class="form-group">
                        <input type="text" class="form-control" id="search" name="s"
                               placeholder="Enter any key to search...">
                        <button type="submit" class="btn btn-primary"><i class="icon-search3"></i></button>
                    </form>
                </div>
            </div>
            <div class="row">
                <div class="col-md-12">
					<?php wp_nav_menu( 'primary-menu' ); ?>
                </div>
            </div>
            <div class="row">
                <div class="col-md-12">
                    <h2 class="head-title">Works</h2>
					<?php
					$args  = array(
						'post_type'      => 'works',
						'posts_per_page' => 4
					);
					$query = new WP_Query( $args );
					if ( $query->have_posts() ):
						while ( $query->have_posts() ):
							$query->the_post();
					$attachment = wp_get_attachment_image_src(get_post_thumbnail_id($post->ID),'large',true);

							?>
                            <a href="<?php echo $attachment[0]; ?>" class="gallery image-popup-link text-center"
                               style="background-image: url(<?php echo $attachment[0]; ?>);">
                                <span><i class="icon-search3"></i></span>
                            </a>
						<?php
						endwhile;
						wp_reset_postdata();
					endif;
					?>
                </div>
            </div>
        </div>
    </div>
</nav>

<div id="colorlib-page">
    <header>
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="colorlib-navbar-brand">
                        <a class="colorlib-logo" href="index.html"><span>S</span><span>B</span></a>
                    </div>
                    <a href="#" class="js-colorlib-nav-toggle colorlib-nav-toggle"><i></i></a>
                </div>
            </div>
        </div>
    </header>