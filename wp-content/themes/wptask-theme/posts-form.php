<?php
/* Template Name: Posts Form */

$action = "Add";
$title = isset($_POST['title']) && !empty($_POST['title']) ? $_POST['title'] : null;
$content = isset($_POST['content']) && !empty($_POST['content']) ? $_POST['content'] : null;

$post_id_to_update_get = (isset($_GET['post_to_update_id']) && !empty($_GET['post_to_update_id'])) ?
    $_GET['post_to_update_id']
    :
    null;

$post_id_to_update_post = (isset($_POST['post_to_update_id']) && !empty($_POST['post_to_update_id'])) ?
    $_POST['post_to_update_id']
    :
    null;

$post_to_update_id = !is_null($post_id_to_update_get) ? $post_id_to_update_get : (!is_null($post_id_to_update_post) ? $post_id_to_update_post : null);

$is_submitted = isset($_POST['submitted']) && !empty($_POST['submitted']) ? $_POST['submitted'] : null;
$msg = "";

if ($title && $content) {
    $post_args = [
        'post_title' => $title,
        'post_content' => $content,
        'post_status' => 'publish'
    ];

    if ($post_to_update_id) {
        $post_args['ID'] = $post_to_update_id;
        $post_to_update_id = null;
    }

    $post_id = wp_insert_post($post_args);

    if ($post_id) {
        $title = "";
        unset($_POST['title']);
        $content = "";
    }

    $redirect_link = "http://{$_SERVER['HTTP_HOST']}{$_SERVER['REQUEST_URI']}";
    header("Location: $redirect_link");
} else if ($post_to_update_id) {
    $post_to_update = get_post($post_to_update_id);
    $title = $post_to_update->post_title;
    $content = $post_to_update->post_content;
    $action = "Update";
} else if ($is_submitted) {
    $msg = "<p class='error'>Missing post title and/or content</p>";
}

get_header(); ?>

    <div class="wrap">
        <div id="primary" class="content-area">
            <main id="main" class="site-main" role="main">
                <h2><?php echo $action ?> post</h2>
                <?php echo $msg ?>
                <form action="<?php the_permalink(); ?>" method="post">
                    <p><label for="title">Title:
                        <input type="text" name="title" value="<?php echo esc_attr($title); ?>"></label></p>
                    <p><label for="content">Content:
                        <textarea type="text" name="content"><?php echo esc_textarea($content); ?></textarea></label></p>
                    <p><input type="submit" value="<?php echo $action ?> post"></p>
                    <input type="hidden" name="post_to_update_id" value="<?php echo $post_to_update_id; ?>">
                    <input type="hidden" name="submitted" value="1">
                </form>

                <!--List of posts-->
                <?php
                    // todo: reset query
                    $posts_query = new WP_Query('posts_per_page=-1');
                ?>
                <table class="form-table">
                    <thead>
                        <tr>
                            <th>Title</th>
                            <th>Date</th>
                            <th>Author</th>
                            <th>Content</th>
                            <th>Action</th>
                        </tr>
                    </thead>

                    <?php while ($posts_query->have_posts()) : $posts_query->the_post(); ?>
                        <tr>
                            <td scope="row"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></td>
                            <td><?php echo get_the_date('l, F j, Y -- G:s'); ?></td>
                            <td><?php the_author(); ?></td>
                            <td class="post-content-cell"><?php the_content(); ?></td>
                            <td>
                                <a href="<?php echo bloginfo('url') ."/index.php/posts-form/?post_to_update_id=" .get_the_ID(); ?>">
                                    Update
                                </a>
<!--                                <button>Delete</button>-->
                            </td>
                        </tr>
                    <?php endwhile; ?>
                </table>
            </main><!-- #main -->
        </div><!-- #primary -->
    </div><!-- .wrap -->

<?php get_footer();