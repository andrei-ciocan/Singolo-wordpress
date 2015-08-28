<?php
//add stylesheet
function styles(){
wp_enqueue_style('style',get_stylesheet_uri());
}

add_action('wp_enqueue_scripts','styles');


//Navigation menus
add_action('init','create_post_type');


//Add custom menus
function create_post_type() {
  register_post_type( 'Services',
    array(
      'labels' => array(
        'name' => __( 'Services' ),
        'singular_name' => __( 'service' )
      ),
      'public' => true,
      'has_archive' => true,
      'supports' => array('title','editor','thumbnail'),
    )
  );

 register_post_type( 'Contact information',
    array(
      'labels' => array(
        'name' => __( 'Contact information' ),
        'singular_name' => __( 'contact' )
      ),
      'public' => true,
      'has_archive' => true,
      'supports' => array('title','editor','thumbnail'),
    )
  );

  register_post_type( 'About Us',
    array(
      'labels' => array(
        'name' => __( 'About Us' ),
        'singular_name' => __( 'person' ),
      ),
      'public' => true,
      'has_archive' => true,
      'supports' => array('title','editor','thumbnail'),

    )
  );

  register_post_type( 'Gallery',
    array(
      'labels' => array(
        'name' => __( 'Gallery' ),
        'singular_name' => __( 'pic' ),
      ),
      'public' => true,
      'has_archive' => true,
      'supports' => array('title','editor','thumbnail'),

    )
  );

  register_post_type( 'Slides',
    array(
      'labels' => array(
        'name' => __( 'Slides' ),
        'singular_name' => __( 'slide' ),
      ),
      'public' => true,
      'has_archive' => true,
      'supports' => array('title','editor','thumbnail'),

    )
  );

}


//Taxonomies
function portfolio_init() {
  // create a new taxonomy
  register_taxonomy(
    'categories',
    'gallery',
    array(
      'label' => __( 'Categories' ),
      'hierarchical' => true,
    )
  );
}
add_action( 'init', 'portfolio_init' );



//Add support
function SingoloSetup(){
	//add menu type
	register_nav_menus(array(
	'primary' => __( 'Primary Menu')
	));

	//add image support
	add_theme_support('post-thumbnails');
}

add_action('after_setup_theme','SingoloSetup');

//Create registration table
function create_table(){
  $table_name=singolo_users;

    $sql = 'CREATE TABLE '.$table_name.'(
        id INTEGER NOT NULL AUTO_INCREMENT,
        name VARCHAR(40),
        email VARCHAR(40),
        description TEXT,
       PRIMARY KEY (id))';

    require_once(ABSPATH.'wp-admin/includes/upgrade.php');
   dbDelta($sql);

}


add_action("after_switch_theme", "create_table");

?>

