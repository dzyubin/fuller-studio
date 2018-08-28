<!DOCTYPE html>
<html <?php language_attributes(); ?> class="no-js">
<head>
    <meta charset="<?php bloginfo( 'charset' ); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="profile" href="http://gmpg.org/xfn/11">
    <?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<div id="page" class="site">
    <div class="site-inner">
        <header id="masthead" class="site-header" role="banner">
            <div class="site-header-main">
                <div class="site-branding">
                    <h1 class="site-title"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a></h1>
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit minus nam </p>
                    <button>Read More</button>
                </div><!-- .site-branding -->
            </div><!-- .site-header-main -->
            <nav>
                <ul>
                    <li>Home</li>
                    <li>Portfolio</li>
                    <li>Pages</li>
                    <li>Blog</li>
                    <li>Shop</li>
                </ul>
            </nav>
        </header><!-- .site-header -->

        <div id="content" class="site-content">
