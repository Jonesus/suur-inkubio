<?php

//register nav-menus to wordpress
function suurinkubio_setup() {
    register_nav_menus( array(
        'primary' => __('Primary Menu', 'suurinkubio') 
    ));
    add_theme_support('title-tag');
}
add_action('after_setup_theme', 'suurinkubio_setup');

//register widgets to wordprss
function suurinkubio_widgets() {
    register_sidebar( array(
        'name'          => __( 'Sidebar', 'suurinkubio' ),
        'id'            => 'sidebar-1',
        'description'   => __( 'Add widgets here to appear in the sidebar', 'suurinkubio' ),
        'before_widget' => '<section id="%1$s" class="widget %2$s">',
        'after_widget'  => '</section>',
        'before_title'  => '<h2 class="widget-title">',
        'after_title'   => '</h2>'
    ) );
}
add_action( 'widgets_init' , 'suurinkubio_widgets' );


function add_template($filename, $arguments) {
    # Horrible hack to get path from echoed output
    ob_start();
    $basedir = bloginfo('template_directory');
    $basedir = ob_get_contents();
    ob_end_clean();

    # Assign args to a new variable for passing namespace to include
    $args = $arguments;
    include( locate_template('/template-parts/' . $filename, false, false));
}


function get_persons_table($tablename) {
    global $wpdb;
    $query = 'SELECT * FROM ' . $tablename;
    $result = $wpdb->get_results($query, ARRAY_A);

    $ret = [];
    foreach($result as $row) {
        $person = [];
        $person["imgpath"] = $row["photopath"];
        $person["name"] = $row["firstname"] . " " . $row["lastname"];
        $person["position"] = $row["position"];
        $person["email"] = $row["email"];
        array_push($ret, $person);
    }
    return $ret;
}

function split_to_rows($arr, $columncount) {
    $ret = [];
    $row = [];
    for($i = 0, $size = count($arr); $i < $size; $i++) {
        if (($i+1) % $columncount == 0) {
            array_push($row, $arr[$i]);
            array_push($ret, $row);
            $row = [];
        }
        else {
            array_push($row, $arr[$i]);
        }
    }
    array_push($ret, $row);
    return $ret;
}


function fix_admin_toolbar() {
    echo '<style type="text/css"> @media screen and (max-width: 600px){ #wpadminbar {position: fixed;}} </style>';
}
add_action( 'wp_head', 'fix_admin_toolbar' );

?>
