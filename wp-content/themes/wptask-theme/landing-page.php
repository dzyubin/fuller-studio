<?php /* Template Name: Landing Page */ ?>

<!--<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Title</title>
    <?php /*wp_head(); */?>
</head>
<body>
<header id="masthead" class="site-header" role="banner">
    <div class="site-header-main row">
        <div class="site-branding">
            <h1 class="site-title"><a href="<?php /*echo esc_url( home_url( '/langing-page' ) ); */?>" rel="home"><?php /*bloginfo( 'name' ); */?></a></h1>
            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit minus nam </p>
            <button>Read More</button>
        </div>
    </div>
</header>-->


<?php get_header(); ?>

<section id="portfolio" class="container clearfix">
    <h3 class="float-sm-left">Portfolio</h3>
    <hr class="float-sm-left">
    <p class="float-sm-right">View All Projects</p>


<!--    <script src="--><?php //echo get_stylesheet_directory() ."/assets/js/jssor.slider-27.4.0.min.js"?><!--" type="text/javascript"></script>-->

    <style>
        /*!*jssor slider loading skin spin css*!
        .jssorl-009-spin img {
            animation-name: jssorl-009-spin;
            animation-duration: 1.6s;
            animation-iteration-count: infinite;
            animation-timing-function: linear;
        }

        @keyframes jssorl-009-spin {
            from { transform: rotate(0deg); }
            to { transform: rotate(360deg); }
        }

        !*jssor slider bullet skin 051 css*!
        .jssorb051 .i {position:absolute;cursor:pointer;}
        .jssorb051 .i .b {fill:#fff;fill-opacity:0.5;}
        .jssorb051 .i:hover .b {fill-opacity:.7;}
        .jssorb051 .iav .b {fill-opacity: 1;}
        .jssorb051 .i.idn {opacity:.3;}

        !*jssor slider arrow skin 051 css*!
        .jssora051 {display:block;position:absolute;cursor:pointer;}
        .jssora051 .a {fill:none;stroke:#fff;stroke-width:360;stroke-miterlimit:10;}
        .jssora051:hover {opacity:.8;}
        .jssora051.jssora051dn {opacity:.5;}
        .jssora051.jssora051ds {opacity:.3;pointer-events:none;}*/
    </style>
    <div id="jssor_1" style="position:relative;margin:0 auto;top:0px;left:0px;width:980px;height:380px;overflow:hidden;visibility:hidden;">
        <!-- Loading Screen -->
        <div data-u="loading" class="jssorl-009-spin" style="position:absolute;top:0px;left:0px;width:100%;height:100%;text-align:center;background-color:rgba(0,0,0,0.7);">
            <img style="margin-top:-19px;position:relative;top:50%;width:38px;height:38px;" src="<?php echo get_stylesheet_directory_uri() . "/assets/images/spin.svg" ?>"/>
        </div>
        <div data-u="slides" style="position:relative;top:0px;left:0px;width:980px;height:380px;overflow:hidden;cursor:move;">
            <div>
                <img data-u="image" src="<?php echo get_stylesheet_directory_uri() . "/assets/images/001.jpg" ?>"/>
            </div>
            <div>
                <img data-u="image" src="<?php echo get_stylesheet_directory_uri() . "/assets/images/002.jpg" ?>"/>
            </div>
            <div>
                <img data-u="image" src="<?php echo get_stylesheet_directory_uri() . "/assets/images/003.jpg" ?>"/>
            </div>
            <div>
                <img data-u="image" src="<?php echo get_stylesheet_directory_uri() . "/assets/images/004.jpg" ?>"/>
            </div>
            <div>
                <img data-u="image" src="<?php echo get_stylesheet_directory_uri() . "/assets/images/005.jpg" ?>"/>
            </div>
        </div>
        <!-- Bullet Navigator -->
        <div data-u="navigator" class="jssorb051" style="position:absolute;bottom:12px;right:12px;" data-autocenter="1" data-scale="0.5" data-scale-bottom="0.75">
            <div data-u="prototype" class="i" style="width:16px;height:16px;">
                <svg viewbox="0 0 16000 16000" style="position:absolute;top:0;left:0;width:100%;height:100%;">
                    <circle class="b" cx="8000" cy="8000" r="5800"></circle>
                </svg>
            </div>
        </div>
        <!-- Arrow Navigator -->
        <div data-u="arrowleft" class="jssora051" style="width:65px;height:65px;top:0px;left:35px;" data-autocenter="2" data-scale="0.75" data-scale-left="0.75">
            <svg viewbox="0 0 16000 16000" style="position:absolute;top:0;left:0;width:100%;height:100%;">
                <polyline class="a" points="11040,1920 4960,8000 11040,14080 "></polyline>
            </svg>
        </div>
        <div data-u="arrowright" class="jssora051" style="width:65px;height:65px;top:0px;right:35px;" data-autocenter="2" data-scale="0.75" data-scale-right="0.75">
            <svg viewbox="0 0 16000 16000" style="position:absolute;top:0;left:0;width:100%;height:100%;">
                <polyline class="a" points="4960,1920 11040,8000 4960,14080 "></polyline>
            </svg>
        </div>
    </div>



</section>

<!--todo: move nav into 'header'-->
<!--<nav class="navbar navbar-expand-lg navbar-light bg-light">
    <a class="navbar-brand" href="#">
        <img src="/docs/4.0/assets/brand/bootstrap-solid.svg" width="30" height="30" class="d-inline-block align-top" alt="">
        Bootstrap
    </a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav mr-auto">
            <li class="nav-item dropdown active">
                <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    Home
                </a>
                <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                    <a class="dropdown-item" href="#">Action</a>
                    <a class="dropdown-item" href="#">Another action</a>
                    <div class="dropdown-divider"></div>
                    <a class="dropdown-item" href="#">Something else here</a>
                </div>
            </li>
            <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    Portfolio
                </a>
                <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                    <a class="dropdown-item" href="#">Action</a>
                    <a class="dropdown-item" href="#">Another action</a>
                    <div class="dropdown-divider"></div>
                    <a class="dropdown-item" href="#">Something else here</a>
                </div>
            </li>
            <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    Pages
                </a>
                <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                    <a class="dropdown-item" href="#">Action</a>
                    <a class="dropdown-item" href="#">Another action</a>
                    <div class="dropdown-divider"></div>
                    <a class="dropdown-item" href="#">Something else here</a>
                </div>
            </li>
            <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    Blog
                </a>
                <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                    <a class="dropdown-item" href="#">Action</a>
                    <a class="dropdown-item" href="#">Another action</a>
                    <div class="dropdown-divider"></div>
                    <a class="dropdown-item" href="#">Something else here</a>
                </div>
            </li>
            <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    Shop
                </a>
                <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                    <a class="dropdown-item" href="#">Action</a>
                    <a class="dropdown-item" href="#">Another action</a>
                    <div class="dropdown-divider"></div>
                    <a class="dropdown-item" href="#">Something else here</a>
                </div>
            </li>
        </ul>
        <ul id="social-links">
            <li></li>
            <li></li>
            <li></li>
            <li></li>
            <li></li>
        </ul>
        <div class="btn-group" role="group" aria-label="Basic example">
            <button type="button" class="btn btn-light">fb</button>
            <button type="button" class="btn btn-light">tw</button>
            <button type="button" class="btn btn-light">go</button>
            <button type="button" class="btn btn-light">in</button>
            <button type="button" class="btn btn-light">se</button>
        </div>
    </div>
</nav>-->
<!--<section id="who-we-are" class="container">
    <div class="row">
        <div class="col-sm-6 offset-sm-3">
            <h3>Who we are</h3>
            <h2>Cano Design Studio</h2>
            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Accusantium delectus dignissimos eius eos
                eveniet, facilis </p>
        </div>
        <div class="row">
            <div class="col-sm-4">Lorem ipsum dolor sit amet, consectetur adipisicing elit. A aperiam asperiores </div>
            <div class="col-sm-4">Lorem ipsum dolor sit amet, consectetur adipisicing elit. A aperiam asperiores </div>
            <div class="col-sm-4">Lorem ipsum dolor sit amet, consectetur adipisicing elit. A aperiam asperiores </div>
        </div>
    </div>
</section>-->
<!--<section id="portfolio" class="container clearfix">
    <h3 class="float-sm-left">Portfolio</h3>
    <hr class="float-sm-left">
    <p class="float-sm-right">View All Projects</p>
</section>-->
<footer>
    <!--<div class="row">
        <div id="recent-tweets" class="col-sm-3 offset-sm-1">
            <h5>Recent Tweets</h5>
            <div class="tweet">
                @croshow Lorem ipsum dolor sit amet<br>
                <span>2 days ago</span>
            </div>
            <hr>
            <div class="tweet">
                @croshow Lorem ipsum dolor sit amet
                <span>2 days ago</span>
            </div>
        </div>
        <div id="popular-posts" class="col-sm-3">
            <div>
                Lorem ipsum dolor sit amet
                <span>September, 19, 2016 | by Croshow</span>
            </div>
            <hr>
            <div>
                Lorem ipsum dolor sit amet
            </div>
        </div>
        <div id="instagram" class="col-sm-3">

        </div>
    </div>-->
</footer>


<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
<link rel="stylesheet" href="<?php get_template_directory_uri() .'/style.css'?>">
<script type="text/javascript">
    jssor_1_slider_init = function() {

        var jssor_1_options = {
            $AutoPlay: 1,
            $SlideWidth: 620,
            $ArrowNavigatorOptions: {
                $Class: $JssorArrowNavigator$
            },
            $BulletNavigatorOptions: {
                $Class: $JssorBulletNavigator$
            }
        };

        var jssor_1_slider = new $JssorSlider$("jssor_1", jssor_1_options);

        /*#region responsive code begin*/

        var MAX_WIDTH = 840;

        function ScaleSlider() {
            var containerElement = jssor_1_slider.$Elmt.parentNode;
            var containerWidth = containerElement.clientWidth;

            if (containerWidth) {
                console.log(getMaxWidth());
                var expectedWidth = Math.min(getMaxWidth(), containerWidth);
                console.log(expectedWidth);
                jssor_1_slider.$ScaleWidth(expectedWidth);
            }
            else {
                window.setTimeout(ScaleSlider, 30);
            }
        }

        ScaleSlider();

        $Jssor$.$AddEvent(window, "load", ScaleSlider);
        $Jssor$.$AddEvent(window, "resize", ScaleSlider);
        $Jssor$.$AddEvent(window, "orientationchange", ScaleSlider);
        /*#endregion responsive code end*/


        function getMaxWidth() {
            var innerWidth = window.innerWidth;
            if (innerWidth < 1200 && innerWidth > 992) {
                return 650;
            } else if (innerWidth < 992 && innerWidth > 720) {
                return 420;
            } else if (innerWidth < 720) {
                return 330;
            } else {
                return 840;
            }
        }
        /*addjustSlidesWidth();
        window.addEventListener("resize", addjustSlidesWidth);

        function addjustSlidesWidth() {
            var innerWidth = window.innerWidth;
            if (innerWidth < 1200 && innerWidth > 780) {
                jssor_1_slider.$ScaleWidth(640);
            }
        }*/
    };


</script>

<script type="text/javascript">jssor_1_slider_init();</script>
</body>
</html>
