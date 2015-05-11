<?php

function mndesign_register_post_types() {

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

}

add_action( 'init', 'mndesign_register_post_types' );

function mndesign_register_taxonomies() {

  $labels = array(
  'name'          => _x( 'Project Categories', 'Taxonomy plural name', 'minhnguyendesign' ),
  'singular_name'     => _x( 'Project Category', 'Taxonomy singular name', 'minhnguyendesign' ),
  'search_items'      => __( 'Search Project Categories', 'minhnguyendesign' ),
  'popular_items'     => __( 'Popular Project Categories', 'minhnguyendesign' ),
  'all_items'       => __( 'All Project Categories', 'minhnguyendesign' ),
  'parent_item'     => __( 'Parent Project Category', 'minhnguyendesign' ),
  'parent_item_colon'   => __( 'Parent Project Category', 'minhnguyendesign' ),
  'edit_item'       => __( 'Edit Project Category', 'minhnguyendesign' ),
  'update_item'     => __( 'Update Project Category', 'minhnguyendesign' ),
  'add_new_item'      => __( 'Add New Project Category', 'minhnguyendesign' ),
  'new_item_name'     => __( 'New Project Category Name', 'minhnguyendesign' ),
  'add_or_remove_items' => __( 'Add or remove Project Categories', 'minhnguyendesign' ),
  'choose_from_most_used' => __( 'Choose from most used minhnguyendesign', 'minhnguyendesign' ),
    'menu_name'       => __( 'Project Categories', 'minhnguyendesign' ),
  );

  $args = array(
    'labels'            => $labels,
    'public'            => true,
    'show_in_nav_menus' => true,
    'show_admin_column' => false,
    'hierarchical'      => true,
    'show_tagcloud'     => false,
    'show_ui'           => true,
    'query_var'         => true,
    'rewrite'           => true,
    'query_var'         => true,
    'capabilities'      => array(),
  );

  register_taxonomy( 'project_category', array( 'projects' ), $args );

}

add_action( 'init', 'mndesign_register_taxonomies' );

?>