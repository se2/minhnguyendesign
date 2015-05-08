<?php

$labels = array(
  'name'                => __( 'Projects', 'minhnguyen' ),
  'singular_name'       => __( 'Project', 'minhnguyen' ),
  'add_new'             => __( 'Add New Project', 'minhnguyen', 'minhnguyen' ),
  'add_new_item'        => __( 'Add New Project', 'minhnguyen' ),
  'edit_item'           => __( 'Edit Project', 'minhnguyen' ),
  'new_item'            => __( 'New Project', 'minhnguyen' ),
  'view_item'           => __( 'View Project', 'minhnguyen' ),
  'search_items'        => __( 'Search Projects', 'minhnguyen' ),
  'not_found'           => __( 'No Projects found', 'minhnguyen' ),
  'not_found_in_trash'  => __( 'No Projects found in Trash', 'minhnguyen' ),
  'parent_item_colon'   => __( 'Parent Project:', 'minhnguyen' ),
  'menu_name'           => __( 'Projects', 'minhnguyen' ),
);

$args = array(
  'labels'              => $labels,
  'hierarchical'        => false,
  'description'         => 'Project',
  'taxonomies'          => array(),
  'public'              => true,
  'show_ui'             => true,
  'show_in_menu'        => true,
  'show_in_admin_bar'   => true,
  'menu_position'       => null,
  'menu_icon'           => null,
  'show_in_nav_menus'   => true,
  'publicly_queryable'  => true,
  'exclude_from_search' => false,
  'has_archive'         => true,
  'query_var'           => true,
  'can_export'          => true,
  'rewrite'             => true,
  'capability_type'     => 'post',
  'supports'            => array(
    'title', 'editor', 'author', 'thumbnail',
    'excerpt', 'trackbacks'
    )
);

register_post_type( 'projects', $args );

$labels = array(
  'name'                => __( 'Members', 'minhnguyen' ),
  'singular_name'       => __( 'Member', 'minhnguyen' ),
  'add_new'             => __( 'Add New Member', 'minhnguyen', 'minhnguyen' ),
  'add_new_item'        => __( 'Add New Member', 'minhnguyen' ),
  'edit_item'           => __( 'Edit Member', 'minhnguyen' ),
  'new_item'            => __( 'New Member', 'minhnguyen' ),
  'view_item'           => __( 'View Member', 'minhnguyen' ),
  'search_items'        => __( 'Search Members', 'minhnguyen' ),
  'not_found'           => __( 'No Members found', 'minhnguyen' ),
  'not_found_in_trash'  => __( 'No Members found in Trash', 'minhnguyen' ),
  'parent_item_colon'   => __( 'Parent Member:', 'minhnguyen' ),
  'menu_name'           => __( 'Members', 'minhnguyen' ),
);

$args = array(
  'labels'              => $labels,
  'hierarchical'        => false,
  'description'         => 'Member',
  'taxonomies'          => array(),
  'public'              => true,
  'show_ui'             => true,
  'show_in_menu'        => true,
  'show_in_admin_bar'   => true,
  'menu_position'       => null,
  'menu_icon'           => null,
  'show_in_nav_menus'   => true,
  'publicly_queryable'  => true,
  'exclude_from_search' => false,
  'has_archive'         => true,
  'query_var'           => true,
  'can_export'          => true,
  'rewrite'             => true,
  'capability_type'     => 'post',
  'supports'            => array(
    'title', 'editor', 'author', 'thumbnail',
    'excerpt', 'trackbacks'
    )
);

register_post_type( 'members', $args );

?>