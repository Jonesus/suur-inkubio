<?php
$page = get_post();
$meta = get_post_meta($page->ID);
if ($meta['redirect'][0]) {
  $location = $meta['redirect'][0];
  wp_redirect( $location, 301 );
  exit;
}
?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=500, initial-scale=0.7">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Suur-Inkubio</title>
    <link rel="icon" href="<?php bloginfo('template_directory');?>/assets/images/favicon.png">

    <!-- Bootstrap core CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta/css/bootstrap.min.css">

    <!-- Custom styles for this template -->
    <link rel="stylesheet" href="<?php bloginfo('template_directory');?>/style.css">
    <link rel="stylesheet" href="<?php bloginfo('template_directory');?>/assets/css/navbar.css">
    <link rel="stylesheet" href="<?php bloginfo('template_directory');?>/assets/css/sidebar.css">
    <link rel="stylesheet" href="<?php bloginfo('template_directory');?>/assets/css/text.css">


    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta/js/bootstrap.min.js"></script>
    <script src="https://use.fontawesome.com/9899037e8f.js"></script>
    <script type="text/javascript" src="<?php bloginfo('template_directory');?>/functions.js"></script>


    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
    <?php wp_head();?>
  </head>

  <body class="preload">
  
  <!-- Navbar -->
  <nav class="navbar navbar-expand-md fixed-top <?php echo (is_admin_bar_showing()) ? 'admin-margin' : '' ?>">
  <?php  
    $lang = get_page_language();
    if ( $lang == 'fi' ) {
      $lang_url = "/";
    } else {
      $lang_url = "/en/";
    }
  ?>
 
    <a href="/" class="navbar-brand">
      <img alt="" src="<?php bloginfo('template_directory');?>/assets/images/inkulogo-viher.svg">
    </a>
    <button class="navbar-toggler hamburger hamburger--spin" type="button" data-toggle="collapse" data-target="#collapsingNavbar">
      <span class="hamburger-box">
        <span class="hamburger-inner"></span>
      </span>
    </button>
    <div class="navbar-collapse collapse text-center" id="collapsingNavbar">
      <ul class="navbar-nav mx-auto w-100 justify-content-center">
        <li class="nav-item">
          <a class="nav-link" href=<?php echo $lang_url . slugify_string(__('Abeille', 'suurinkubio')); ?>><?php _e('Abeille', 'suurinkubio') ?></a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href=<?php echo $lang_url . slugify_string(__('Yrityksille', 'suurinkubio')); ?>><?php _e('Yrityksille', 'suurinkubio') ?></a>
        </li>
        <li class="nav-item">
          <a data-toggle="collapse" href="#collapsedSidebar" class="nav-link d-md-none d-lg-none d-xl-none"><?php _e('Kiltalaisille', 'suurinkubio') ?></a>
          <a class="nav-link d-none d-md-block" href=<?php echo $lang_url . slugify_string(__('Kiltalaisille', 'suurinkubio')); ?>><?php _e('Kiltalaisille', 'suurinkubio') ?></a>
          <div class="navbar-collapse collapse" id="collapsedSidebar">
          </div>
        </li>
        <li class="nav-item">
          <a class="nav-link" href=<?php echo $lang_url . slugify_string(__('Ota yhteyttä', 'suurinkubio')); ?>><?php _e('Ota yhteyttä', 'suurinkubio') ?></a>
        </li>
       </ul>

       <?php $langs = get_language_links(); ?>
       <a class="nav-lang" href="<?php echo $langs["fi"]; ?>">FI</a>
       <span class="nav-lang">/</span>
       <a class="nav-lang" href="<?php echo $langs["en"]; ?>">EN</a>
    </div>
  </nav>
  <!-- End navbar -->

  <div class="container-fluid">

  <!-- Sidebar -->
  <div class="row">
    <nav class="col-md-3 col-xl-2 d-none d-md-block sidebar fixed-top superhidden" id="sidebar"  <?php echo (is_admin_bar_showing()) ? ' style="top: 32px;"' : ''; ?>>
      <div class="logotext">
        <span class="estyle" style="margin-left: -9px;">Inkubio</span>
      </div>
      <ul class="nav navbar-nav" id="accordion">

      <?php
        $prefix = __('Kiltalaisille', 'suurinkubio');
        $main = get_page_by_title( $prefix );
        $children = get_posts( array('post_type' => 'page',
                                     'post_parent' => $main->ID,
                                     'orderby' => 'menu_order',
                                     'order' => 'ASC',
                                     'posts_per_page'=> -1, 
                                     'numberposts'=> -1
                                    ));
        $i = 0;

        foreach($children as $child) { ?>
        <li class="nav-item panel">
          <a data-toggle="collapse" data-parent="#accordion" class="nav-link" href="#collapse<?php echo $i ?>"><?php echo ucfirst($child->post_name) ?></a>
          <div id="collapse<?php echo $i ?>" class="collapse">
            <ul class="nav flex-column">
            <?php
              $subchildren = get_posts( array('post_type' => 'page',
                                              'post_parent' => $child->ID,
                                              'orderby' => 'menu_order',
                                              'order' => 'ASC',
                                              'posts_per_page'=> -1, 
                                              'numberposts'=> -1
                                              ));

              foreach($subchildren as $subchild) { ?>
              <li class="nav-item">
                <a class="nav-link" href="<?php echo $lang_url . strtolower(__('Kiltalaisille', 'suurinkubio')) ."/". $child->post_name ."/". $subchild->post_name ."/"?>" ><?php echo ucfirst($subchild->post_title) ?></a>
              </li>
              <?php } ?>

            </ul>
          </div>
        </li>

      <?php $i++; } ?>
      <hr>
      <?php if ( is_user_logged_in() ) : ?>
        <li class="nav-item">
          <a class="nav-link" href="<?php echo home_url( "account" ) ?>">
            <?php $u = get_userdata( get_current_user_id()) ;
                  echo $u->get("username") ? $u->get("username") : $u->get("nickname"); ?>
          </a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="<?php echo wp_logout_url() ?>"><?php _e('Kirjaudu ulos', 'suurinkubio') ?></a>
        </li>
      <?php else : ?>
        <li class="nav-item">
          <a class="nav-link" href="<?php echo home_url( "login" ) ?>"><?php _e('Kirjaudu', 'suurinkubio') ?></a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="<?php echo home_url( "register" ) ?>"><?php _e('Rekisteröidy', 'suurinkubio') ?></a>
        </li>
      <?php endif; ?>
      </ul>
    </nav>
