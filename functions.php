<?php

// Check url for language, then apply it to global $locale
add_filter('locale', 'get_page_language', 10);  
function get_page_language() {
    $parts = explode("/", $_SERVER['REQUEST_URI'] );
    if ( $parts[1] == "en" ) {
        $lang = "en_US";
    } else {
        $lang = "fi";
    }
    return $lang;
}

// Load theme domain translations
add_action( 'after_setup_theme', 'language_setup' );
function language_setup(){
    load_theme_textdomain( 'suurinkubio', get_template_directory() . '/languages' );
}

// Change string between page name and slug
function stringify_slug( $string ) {
    $string = str_replace("-", " ", $string);
    $string = str_replace("a", "ä", $string);
    $string = str_replace("o", "ö", $string);
    $string = ucfirst($string);
    return $string;
}
function slugify_string( $string ) {
    $string = str_replace(" ", "-", $string);
    $string = str_replace("ä", "a", $string);
    $string = str_replace("ö", "o", $string);
    $string = lcfirst($string);
    return $string;
}

// Get corresponding page translations
function get_language_links() {

    $language_links = array( "fi" => "", "en" => "" );

    $parts = explode("/", $_SERVER['REQUEST_URI'] );
    $pagename = $parts[count($parts)-2];
    $pagename = stringify_slug($pagename);
    $page = get_page_by_title($pagename);

    if ( $parts[1] == "en" ) {
        $fi_name = get_post_meta($page->ID, "page_fi", true);
        if ($fi_name == "/") {
            $language_links["fi"] = "/";
            return $language_links;
        }
        $page_fi = get_page_by_title($fi_name);
        $uri = get_page_uri($page_fi);
        $language_links["fi"] = "/" . $uri;
    } else {
        $en_name = get_post_meta($page->ID, "page_en", true);
        if ($en_name == "") {
            $language_links["en"] = "/en";
            return $language_links;
        }
        $page_en = get_page_by_title($en_name);
        $uri = get_page_uri($page_en);
        $language_links["en"] = "/" . $uri;
    }

    return $language_links;
}

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


/*
 * Modify admin view
 */

// Remove unnecessary stuff from admin toolbar
function remove_admin_menus() {
    remove_menu_page( 'themes.php' );
    remove_menu_page( 'tools.php' );
}
add_action( 'admin_menu', 'remove_admin_menus' );

// Fix admin footer text
function update_admin_footer () {
	echo '<span id="footer-thankyou">Jos lehmä osaisi koodata, sekään ei käyttäisi Drupalia</span>';
}
add_filter( 'admin_footer_text', 'update_admin_footer' );

?>
