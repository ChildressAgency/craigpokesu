<?php

function ajax_get_posts()
{
    $results = array();
    $posts = new WP_Query(array(
        'post_type' => $_POST['posttype'],
        'post_status' => 'publish',
        'posts_per_page' => $_POST['count'],
        'offset' => $_POST['offset'],
        'order' => $_POST['order'] || 'ASC',
    ));
    while ($posts->have_posts()) {
        $posts->the_post();
        $post = $posts->post;
        $results [] = (array(
            'id' => $post->ID,
            'title' => $post->post_title,
            'excerpt' => $post->post_excerpt,
            'content' => $post->post_content,
            'image' => wp_get_attachment_image_src(get_post_thumbnail_id($post->ID), 'full')[0],
            'post_date' => $post->post_date,
            'year' => date("Y", strtotime($post->post_date)),
            'month' => date("F", strtotime($post->post_date)),
            'date' => date("j", strtotime($post->post_date)),
            'day' => date("l", strtotime($post->post_date)),
            'link' => get_permalink($post->ID),
        ));
    }
    wp_send_json($results);
}

add_action('wp_ajax_get_posts', 'ajax_get_posts');
add_action('wp_ajax_nopriv_get_posts', 'ajax_get_posts');
