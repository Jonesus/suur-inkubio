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


/*---------------------------------*/
/* Functions for querying database */
/*---------------------------------*/

function get_committee_id($committee) {
    // Param finnish committee name, returns committee ID
    global $wpdb;
    $query = $wpdb->prepare(
        "SELECT ID
        FROM Committees
        WHERE title_fi='%s';",
        $committee
    );
    $committee_id = $wpdb->get_var($query);
    return $committee_id;
}

function get_committee_member_ids($committee_id, $year) {
    // Returns list of committee members wp_user IDs
    global $wpdb;
    $query = $wpdb->prepare(
        "SELECT m.ID
        FROM wp_users AS m, Fillers AS f
        WHERE f.member_ID=m.ID
        AND f.committee_ID=%d
        AND f.year=%d;",
        $committee_id, $year
    );
    $member_ids = $wpdb->get_col($query);
    return $member_ids;

}

function get_committee_chairperson_ids($committee_id, $year) {
    // Returns committee chairpersons wp_user ID
    global $wpdb;
    $query = $wpdb->prepare(
        "SELECT m.ID
        FROM wp_users AS m, Fillers AS f, Chairs AS c
        WHERE m.ID=f.member_ID
        AND f.ID=c.filler_ID
        AND c.committee_ID=%d
        AND f.year=%d;",
        $committee_id, $year
    );
    $chairperson_ids = $wpdb->get_col($query);
    return $chairperson_ids;
}

function get_committee_member_positions($committee_id, $member_id, $year) {
    // Returns a member associative array
    global $wpdb;
    $query = $wpdb->prepare(
        "SELECT p.title_fi,
            p.title_en,
            p.email,
            m.display_name,
            m.user_email,
            f.picture_path
        FROM Fillers AS f
            INNER JOIN wp_users AS m
                ON f.member_ID=m.ID
            INNER JOIN Positions AS p
                ON f.position_ID=p.ID
            INNER JOIN Committees AS c
                ON f.committee_ID=c.ID
        WHERE f.member_ID=%d
        AND f.committee_ID=%d
        AND f.year=%d;",
        $member_id, $committee_id, $year
    );
    $memberlist = $wpdb->get_results($query, ARRAY_A);

    // Fallback for missing english position title
    if (!$memberlist[0]['title_en']) {
        $memberlist[0]['title_en'] = $memberlist[0]['title_fi'];
    }
    $member = array_shift($memberlist);

    // Concat titles for both languages
    foreach ($memberlist as $m) {
        $member['title_fi'] .= ', '.$m['title_fi'];
        if ($m['title_en']) {
            $member['title_en'] .= ', '.$m['title_en'];
        } else {
            $member['title_en'] .= ', '.$m['title_fi'];
        }
    }
    $meta = get_user_meta($member_id);
    $member['phone_number'] = $meta['phone_number'];
    if (!$member['picture_path']) {
        $parts = explode(' ', strtolower($member['display_name']));
        $member['picture_path'] = $year.'/'.$parts[0].'_'.$parts[1].'_'.$year.'.jpg';
    }

    return $member;
}

function get_committee_members($committee, $year) {
    // Returns list of member associative arrays
    $committee_members = Array();
    $committee_id = get_committee_id($committee);
    $member_ids = get_committee_member_ids($committee_id, $year);
    $chair_ids = get_committee_chairperson_ids($committee_id, $year);

    // Delete chairperson IDs from member_ids
    foreach ($chair_ids as $cid) {
        if (($key = array_search($cid, $member_ids)) !== false) {
            unset($member_ids[$key]);
        }
    }
    foreach ($member_ids as $id) {
        $member = get_committee_member_positions($committee_id, $id, $year);
        if (!in_array($member, $committee_members)) {
            array_push($committee_members, $member);
        }
    }

    return $committee_members;
}

function get_committee_chairs($committee, $year) {
    // Returns list of chairpersons as member associative arrays
    $chairs = Array();
    $committee_id = get_committee_id($committee);
    $chair_ids = get_committee_chairperson_ids($committee_id, $year);

    foreach ($chair_ids as $id) {
        $chairperson = get_committee_member_positions($committee_id, $id, $year);
        if (!in_array($chairperson, $chairs)) {
            array_push($chairs, $chairperson);
        }
    }

    return $chairs;
}

function get_committee_titles($year) {
    // Get all committee titles in finnish and english (except for the board)
    global $wpdb;
    $query = $wpdb->prepare(
        "SELECT DISTINCT
            title_fi,
            title_en,
            description_fi,
            description_en
        FROM Committees as c
            INNER JOIN Fillers as f
                ON c.ID=f.committee_ID
        WHERE f.year=%d
        AND c.title_fi!='Hallitus';",
        $year
    );
    $committees = $wpdb->get_results($query, ARRAY_A);
    return $committees;
}


/*--------------------------*/
/* General helper functions */
/*--------------------------*/

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
    remove_menu_page( 'edit.php' );
    remove_menu_page( 'edit-comments.php' );
    remove_submenu_page( 'plugins.php', 'plugin-editor.php');
}
add_action( 'admin_menu', 'remove_admin_menus' );

// Fix admin footer text
function update_admin_footer () {
	echo '<span id="footer-thankyou">Jos lehmä osaisi koodata, sekään ei käyttäisi Drupalia</span>';
}
add_filter( 'admin_footer_text', 'update_admin_footer' );

?>
