<?php

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

?>