<?php

/* Template Name: Posts Form */

/*$not_human       = "Human verification incorrect.";
$missing_content = "Please supply all information.";
$email_invalid   = "Email Address Invalid.";
$message_unsent  = "Message was not sent. Try Again.";
$message_sent    = "Thanks! Your message has been sent.";*/

$title = isset($_POST['title']) && !empty($_POST['title']) ? $_POST['title'] : "";
$post_text = isset($_POST['post_text']) && !empty($_POST['post_text']) ? $_POST['post_text'] : "";
$post_id = $wp_query->query['page'];
echo $post_id;
echo $title;
var_dump($_GET);
var_dump($_POST);
var_dump($_REQUEST);
var_dump($wp_query->query['page']);

if (!($title && $post_text)) echo "missing content" .PHP_EOL;
else {
    echo "ok" .PHP_EOL;
    $post_data = [
        'post_title' => $title,
        'post_content' => $post_text,
        'post_status' => 'publish'
    ];
//    wp_insert_post($post_data);
}

echo "title: " .$title .PHP_EOL;
echo "text: " .$post_text .PHP_EOL;

//$posts_form_permalink = the_permalink();
//echo $posts_form_permalink;
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Title</title>
    <?php wp_head(); ?>
</head>

<body class="container">
<div class="wrap">
    <div id="primary" class="content-area">
        <main id="main" class="site-main" role="main">
            <div id="respond">
                <form action="<?php the_permalink(); ?>" method="post">
                    <p><label for="title">Title: <br>
                        <input type="text" name="title" value="<?php echo esc_attr($title); ?>">
                        </label></p>
                    <p><label for="post_text">Post: <br>
                            <textarea type="text" name="post_text"><?php echo esc_textarea($post_text); ?></textarea>
                        </label></p>
                    <!--<p><label for="message_email">Email: <span>*</span> <br>
                            <input type="text" name="message_email" value="<?php /*echo esc_attr($_POST['message_email']); */?>">
                        </label></p>-->
<!--                    <input type="hidden" name="submitted" value="1">-->
                    <p><input type="submit" value="Add post"></p>
                </form>
            </div>

            <?php
            global $wp_query;

            $temp = $wp_query;
//            var_dump($wp_query);
            echo 'paged' . get_query_var('paged');
            $wp_query= null;
//            $paged = ( get_query_var( 'paged' ) ) ? get_query_var( 'paged' ) : 1;
//            get_query_var( 'paged' );
            $wp_query = new WP_Query( 'posts_per_page=10' );
            ?>

            <table class="table">
                <thead>
                <tr>
                    <th scope="col">#</th>
                    <th scope="col">title</th>
                    <th scope="col">text</th>
                </thead>
                <tbody>

            <?php
            while ( $wp_query->have_posts() ) : $wp_query->the_post();
            ?>
                <tr>
                    <th scope="row">1</th>
                    <td>
                        <h2>
                            <a href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
                        </h2>
                    </td>
                    <td>
                        <?php the_excerpt(); ?>
                    </td>
                    <td><a href="<?php echo bloginfo('url') ."/posts-form/"; the_ID(); ?>">Update</a></td>
                </tr>
            <?php endwhile; ?>

            </tbody></table>

            <?php
            /*while ( have_posts() ) : the_post();
                var_dump($title);
                get_template_part( 'template-parts/page/content', 'page' );

                // If comments are open or we have at least one comment, load up the comment template.
                if ( comments_open() || get_comments_number() ) :
                    comments_template();
                endif;

            endwhile; // End of the loop.*/
            ?>
            <div class="navigation">
                <div class="alignleft"><?php previous_posts_link( '&laquo; Previous' );
                    ?></div>
                <div class="alignright"><?php next_posts_link( 'More &raquo;' ); ?></div>
            </div>
            <?php
            $wp_query = null;
            $wp_query = $temp;
            ?>

        </main><!-- #main -->
    </div><!-- #primary -->
</div><!-- .wrap -->

<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
<link rel="stylesheet" href="<?php get_template_directory_uri() .'/style.css'?>">
</body>
</html>