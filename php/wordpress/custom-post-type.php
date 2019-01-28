<?php 

function custom_post_type() {
 
  // Set UI labels for Custom Post Type
  $labels = array(
      'name'                => __( 'Movies', 'textdomain' ),
      'singular_name'       => __( 'Movie', 'textdomain' ),
      'menu_name'           => __( 'Movies', 'textdomain' ),
      'parent_item_colon'   => __( 'Parent Movie', 'textdomain' ),
      'all_items'           => __( 'All Movies', 'textdomain' ),
      'view_item'           => __( 'View Movie', 'textdomain' ),
      'add_new_item'        => __( 'Add New Movie', 'textdomain' ),
      'add_new'             => __( 'Add New', 'textdomain' ),
      'edit_item'           => __( 'Edit Movie', 'textdomain' ),
      'update_item'         => __( 'Update Movie', 'textdomain' ),
      'search_items'        => __( 'Search Movie', 'textdomain' ),
      'not_found'           => __( 'Not Found', 'textdomain' ),
      'not_found_in_trash'  => __( 'Not found in Trash', 'textdomain' ),
  );
       
  // Set other options for Custom Post Type
       
      $args = array(
          'label'               => __( 'movies', 'textdomain' ),
          'description'         => __( 'Movie news and reviews', 'textdomain' ),
          'labels'              => $labels,
          'menu_icon'           => 'dashicons-video-alt3',
          // Features this CPT supports in Post Editor
          'supports'            => array( 'title', 'editor', 'excerpt', 'author', 'thumbnail', 'comments', 'revisions', 'custom-fields', ),
          // You can associate this CPT with a taxonomy or custom taxonomy. 
          'taxonomies'          => array( 'moods' ),
          /* A hierarchical CPT is like Pages and can have
          * Parent and child items. A non-hierarchical CPT
          * is like Posts.
          */ 
          'hierarchical'        => false,
          'public'              => true,
          'show_ui'             => true,
          'show_in_menu'        => true,
          'show_in_nav_menus'   => true,
          'show_in_admin_bar'   => true,
          'menu_position'       => 5,
          'can_export'          => true,
          'has_archive'         => true,
          'exclude_from_search' => false,
          'publicly_queryable'  => true,
          'show_in_rest'       => true, // Gutenberg needs this...
          'capability_type'     => 'page',
          'supports'           => array( 'title', 'editor', 'author', 'thumbnail', 'excerpt', 'comments' ),

      );
       
      // Registering your Custom Post Type
      register_post_type( 'movies', $args );
   
  }
   
  /* Hook into the 'init' action so that the function
  * Containing our post type registration is not 
  * unnecessarily executed. 
  */
   
  add_action( 'init', 'custom_post_type', 0 );
