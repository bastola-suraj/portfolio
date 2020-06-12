<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="description" content="" />
    <meta name="keywords" content="" />
    <meta name="author" content="Suraj Bastola" />
    <meta property="og:title" content=""/>
    <meta property="og:image" content=""/>
    <meta property="og:url" content=""/>
    <meta property="og:site_name" content=""/>
    <meta property="og:description" content=""/>
    <meta name="twitter:title" content="" />
    <meta name="twitter:image" content="" />
    <meta name="twitter:url" content="" />
    <meta name="twitter:card" content="" />
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
                        <input type="text" class="form-control" id="search" name="s" placeholder="Enter any key to search...">
                        <button type="submit" class="btn btn-primary"><i class="icon-search3"></i></button>
                    </form>
                </div>
            </div>
            <div class="row">
                <div class="col-md-12">
                    <ul>
                        <li class="active"><a href="index.html">Home</a></li>
                        <li><a href="services.html">Services</a></li>
                        <li><a href="work.html">Work</a></li>
                        <li><a href="blog.html">Blog</a></li>
                        <li><a href="about.html">About</a></li>
                        <li><a href="contact.html">Contact</a></li>
                    </ul>
                </div>
            </div>
            <div class="row">
                <div class="col-md-12">
                    <h2 class="head-title">Works</h2>
                    <a href="<?php echo get_template_directory_uri()?>/assets/images/work-1.jpg" class="gallery image-popup-link text-center" style="background-image: url(<?php echo get_template_directory_uri()?>/images/work-1.jpg);">
                        <span><i class="icon-search3"></i></span>
                    </a>
                    <a href="images/work-2.jpg" class="gallery image-popup-link text-center" style="background-image: url(images/work-2.jpg);">
                        <span><i class="icon-search3"></i></span>
                    </a>
                    <a href="images/work-3.jpg" class="gallery image-popup-link text-center" style="background-image: url(images/work-3.jpg);">
                        <span><i class="icon-search3"></i></span>
                    </a>
                    <a href="images/work-4.jpg" class="gallery image-popup-link text-center" style="background-image: url(images/work-4.jpg);">
                        <span><i class="icon-search3"></i></span>
                    </a>
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