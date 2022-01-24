<?php 
function ocdi_import_files() {
    return [
      [
        'import_file_name'             => 'Demo Import 1',
        'categories'                   => [ 'Category 1', 'Category 2' ],
        'local_import_file'            => trailingslashit( get_template_directory() ) . 'inc/demo-content/demo-content.xml',
        'local_import_customizer_file' => trailingslashit( get_template_directory() ) . 'inc/demo-content/customizer.dat',
        'local_import_redux'           => [
          [
            'file_path'   => trailingslashit( get_template_directory() ) . 'inc/demo-content/redux.json',
            'option_name' => 'buson_options',
          ],
        ],
        'import_preview_image_url'     => trailingslashit( get_template_directory() ) . 'inc/demo-content/peview.png',
        'preview_url'                  => 'http://www.your_domain.com/my-demo-1',
      ],
    ];
  }
  add_filter( 'ocdi/import_files', 'ocdi_import_files' );



  function ocdi_after_import_setup() {
    // Assign menus to their locations.
    $main_menu = get_term_by( 'name', 'Main Menu', 'nav_menu' );
 
    set_theme_mod( 'nav_menu_locations', [
            'primary-menu' => $main_menu->term_id, // replace 'main-menu' here with the menu location identifier from register_nav_menu() function in your theme.
        ]
    );
 
    // Assign front page and posts page (blog page).
    $front_page_id = get_page_by_title( 'Home' );
    $blog_page_id  = get_page_by_title( 'Blog' );
 
    update_option( 'show_on_front', 'page' );
    update_option( 'page_on_front', $front_page_id->ID );
    update_option( 'page_for_posts', $blog_page_id->ID );
 
}
add_action( 'ocdi/after_import', 'ocdi_after_import_setup' );

  ?>