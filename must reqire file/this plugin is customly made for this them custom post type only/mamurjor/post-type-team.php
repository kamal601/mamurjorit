<?php 
add_action( 'init', 'team_post' );
/**
 * Register a team post type.
 *
 *
 */
function team_post() {
	$labels = array(
		'name'               => _x( 'team', 'post type general name', 'mamurjorit' ),
		'singular_name'      => _x( 'team', 'post type singular name', 'mamurjorit' ),
		'menu_name'          => _x( 'Mamurjor IT team', 'admin menu', 'mamurjorit' ),
		'name_admin_bar'     => _x( 'team', 'add new on admin bar', 'mamurjorit' ),
		'add_new'            => _x( 'Add New', 'team', 'mamurjorit' ),
		'add_new_item'       => __( 'Add New team', 'mamurjorit' ),
		'new_item'           => __( 'New team', 'mamurjorit' ),
		'edit_item'          => __( 'Edit team', 'mamurjorit' ),
		'view_item'          => __( 'View team', 'mamurjorit' ),
		'all_items'          => __( 'All team', 'mamurjorit' ),
		'search_items'       => __( 'Search team', 'mamurjorit' ),
		'parent_item_colon'  => __( 'Parent team:', 'mamurjorit' ),
		'not_found'          => __( 'No team found.', 'mamurjorit' ),
		'not_found_in_trash' => __( 'No team found in Trash.', 'mamurjorit' )
	);

	$args = array(
		'labels'             => $labels,
        'description'        => __( 'Description.', 'mamurjorit' ),
		'public'             => true,
		'publicly_queryable' => true,
		'show_ui'            => true,
		'show_in_menu'       => true,
		'query_var'          => true,
		'rewrite'            => array( 'slug' => 'team' ),
		'capability_type'    => 'post',
		'has_archive'        => true,
		'hierarchical'       => true,
		'menu_position'      => null,
		'supports'           => array( 'title', 'editor','thumbnail','custom-fields'),
	);

	register_post_type( 'team', $args );
}

add_action( 'init', 'team_category', 0 );

function team_category(){
	// Add new taxonomy, NOT hierarchical (like tags)
	$labels = array(
		'name'                       => _x( 'Category', 'taxonomy general name', 'mamurjorit' ),
		'singular_name'              => _x( 'Writer', 'taxonomy singular name', 'mamurjorit' ),
		'search_items'               => __( 'Search Category', 'mamurjorit' ),
		'popular_items'              => __( 'Popular Category', 'mamurjorit' ),
		'all_items'                  => __( 'All Category', 'mamurjorit' ),
		'parent_item'                => null,
		'parent_item_colon'          => null,
		'edit_item'                  => __( 'Edit category', 'mamurjorit' ),
		'update_item'                => __( 'Update Category', 'mamurjorit' ),
		'add_new_item'               => __( 'Add New Category', 'mamurjorit' ),
		'new_item_name'              => __( 'New Category Name', 'mamurjorit' ),
		'separate_items_with_commas' => __( 'Separate Category with commas', 'mamurjorit' ),
		'add_or_remove_items'        => __( 'Add or remove Category', 'mamurjorit' ),
		'choose_from_most_used'      => __( 'Choose from the most used Category', 'mamurjorit' ),
		'not_found'                  => __( 'No Category found.', 'mamurjorit' ),
		'menu_name'                  => __( 'Category', 'mamurjorit' ),
	);

	$args = array(
		'hierarchical'          => true,
		'labels'                => $labels,
		'show_ui'               => true,
		'show_admin_column'     => true,
		'update_count_callback' => '_update_post_term_count',
		'query_var'             => true,
		'rewrite'               => array( 'slug' => 'category' ),
	);

	register_taxonomy( 'team_category', 'team', $args );
};
 ?>