<?php /* Template Name: Landing Page */ ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Title</title>
    <?php wp_head(); ?>
</head>
<body>
<header id="masthead" class="site-header" role="banner">
    <div class="site-header-main row">
        <div class="site-branding">
            <h1 class="site-title"><a href="<?php echo esc_url( home_url( '/langing-page' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a></h1>
            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit minus nam </p>
            <button>Read More</button>
        </div><!-- .site-branding -->
    </div><!-- .site-header-main -->
</header>

<!--todo: move nav into 'header'-->
<nav class="navbar navbar-expand-lg navbar-light bg-light">
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
</nav>
<section id="who-we-are" class="container">
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
</section>
<section id="portfolio" class="container clearfix">
    <h3 class="float-sm-left">Portfolio</h3>
    <hr class="float-sm-left">
    <p class="float-sm-right">View All Projects</p>
</section>
<footer>
    <div class="row">
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
    </div>
</footer>


<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
<link rel="stylesheet" href="<?php get_template_directory_uri() .'/style.css'?>">
</body>
</html>
