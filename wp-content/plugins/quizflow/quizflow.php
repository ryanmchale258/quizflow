<?php 
/**
* Plugin Name: QuizFlow
* Plugin URI: http://pmdesigns.ca/
* Description: A WordPress plugin designed specifically for Batty's Bath that enables you to create quizzes like a flow chart, guiding the customer to the product that best suits their needs.
* Version: 1.0
* Author: Pat Monette & Ryan McHale
* Author URI: http://pmdesigns.ca/
*/

// Register the QuizFlow Post Type
 
function register_cpt_qf_quiz() {
 
    $labels = array(
        'name' => _x( 'QF Quizzes', 'qf_quiz' ),
        'singular_name' => _x( 'QF Quiz', 'qf_quiz' ),
        'add_new' => _x( 'Add New', 'qf_quiz' ),
        'add_new_item' => _x( 'Add New Quiz', 'qf_quiz' ),
        'edit_item' => _x( 'Edit Quiz', 'qf_quiz' ),
        'new_item' => _x( 'New Quiz', 'qf_quiz' ),
        'view_item' => _x( 'View Quiz', 'qf_quiz' ),
        'search_items' => _x( 'Search Quizzes', 'qf_quiz' ),
        'not_found' => _x( 'No quizzes found', 'qf_quiz' ),
        'not_found_in_trash' => _x( 'No quizzes found in Trash', 'qf_quiz' ),
        'parent_item_colon' => _x( 'Parent Quiz:', 'qf_quiz' ),
        'menu_name' => _x( 'Quizzes', 'qf_quiz' ),
    );
 
    $args = array(
        'labels' => $labels,
        'hierarchical' => true,
        'description' => 'Flow chart quizzes that lead customers to a certain product',
        'supports' => array( 'title', 'editor', 'author', 'thumbnail', 'trackbacks', 'custom-fields', 'comments', 'revisions', 'page-attributes' ),
        'public' => true,
        'show_ui' => true,
        'show_in_menu' => true,
        'menu_position' => 5,
        'menu_icon' => 'dashicons-desktop',
        'show_in_nav_menus' => true,
        'publicly_queryable' => true,
        'exclude_from_search' => false,
        'has_archive' => true,
        'query_var' => true,
        'can_export' => true,
        'rewrite' => true,
        'capability_type' => 'post'
    );
 
    register_post_type( 'qf_quiz', $args );
}
 
add_action( 'init', 'register_cpt_qf_quiz' );

?>