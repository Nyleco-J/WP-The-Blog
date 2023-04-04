<?php

function theBlog_custom_post(){

    $blogPost_label = array(
        'name'          => __('Blog Post','textdomain'),
        'singular_name' => __('Blog Post','textdomain'),
        'add_new'       => __('Add Blog Post','textdomain'),
        'add_new_item'  => __('Add New Blog','textdomain'),
        'edit_item'  => __('Edit Blog Post','textdomain'),
        'All_item'  => __('Blog Post','textdomain')
    );
    $blogPost_args = array(
        'labels'  => $blogPost_label,
        'public'  => true,
        'capability_type'  => 'post',
        'show_ui'          => true,
        'taxonomies'       => array ('post_tag', 'category'),
        'supports'         => array('title', 'editor', 'thumbnail', 'excerpt')
    );

    register_post_type('blogPost', $blogPost_args);

    $latestPost_label = array(
        'name'          => __('Latest Post','textdomain'),
        'singular_name' => __('Latest Post','textdomain'),
        'add_new'       => __('Add Latest Post','textdomain'),
        'add_new_item'  => __('Add Latest Post','textdomain'),
        'edit_item'  => __('Latest Post Post','textdomain'),
        'All_item'  => __('Latest Post','textdomain')
    );
    $latestPost_args = array(
        'labels'  => $latestPost_label,
        'public'  => true,
        'capability_type'  => 'post',
        'show_ui'          => true,
        'taxonomies'       => array ('post_tag', 'category'),
        'supports'         => array('title', 'editor', 'thumbnail', 'excerpt')
    );

    register_post_type('latestPost', $latestPost_args);

    $featurePost_label = array(
        'name'          => __('Feature Post','textdomain'),
        'singular_name' => __('Feature Post','textdomain'),
        'add_new'       => __('Add Feature Post','textdomain'),
        'add_new_item'  => __('Add Feature Post','textdomain'),
        'edit_item'  => __('Feature Post Post','textdomain'),
        'All_item'  => __('Feature Postt','textdomain')
    );
    $featurePost_args = array(
        'labels'  => $featurePost_label,
        'public'  => true,
        'capability_type'  => 'post',
        'show_ui'          => true,
        'taxonomies'       => array ('post_tag', 'category'),
        'supports'         => array('title', 'editor', 'thumbnail', 'excerpt')
    );

    register_post_type('featurePost', $featurePost_args);
}
add_action('init', 'theBlog_custom_post');
