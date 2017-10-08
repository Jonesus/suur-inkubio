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

    <!-- Bootstrap core CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.6/css/bootstrap.min.css">

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

  <body>
  
  <!-- Navbar -->
  <nav class="navbar navbar-toggleable-sm fixed-top"  <?php echo (is_admin_bar_showing()) ? ' style="top: 32px;"' : ''; ?>>
    <button class="navbar-toggler navbar-toggler-right hamburger hamburger--spin" type="button" data-toggle="collapse" data-target="#collapsingNavbar">
      <span class="hamburger-box">
        <span class="hamburger-inner"></span>
      </span>
    </button>
    <a href="/" class="navbar-brand d-flex mr-auto">
      <img alt="" height="20" src="<?php bloginfo('template_directory');?>/assets/images/inkulogo-viher.svg">
    </a>
    <div class="navbar-collapse collapse text-center" id="collapsingNavbar">
      <ul class="navbar-nav mx-auto w-100 justify-content-center">
        <li class="nav-item">
          <a class="nav-link" href="/abeille/">Abeille</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="/yrityksille/">Yrityksille</a>
        </li>
        <li class="nav-item">
          <a data-toggle="collapse" href="#collapsedSidebar" class="nav-link hidden-md-up">Kiltalaisille</a>
          <a class="nav-link hidden-sm-down" href="/kiltalaisille/">Kiltalaisille</a>
          <div class="navbar-collapse collapse" id="collapsedSidebar">
          </div>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="/yhteystiedot/">Yhteystiedot</a>
        </li>
       </ul>
    </div>
  </nav>
  <!-- End navbar -->

  <div class="container-fluid">

  <!-- Sidebar -->
  <div class="row">
    <nav class="col-md-3 col-xl-2 hidden-sm-down sidebar fixed-top" id="sidebar"  <?php echo (is_admin_bar_showing()) ? ' style="top: 32px;"' : ''; ?>>
      <div class="logotext">
        <span class="estyle" style="margin-left: -9px;">Inkubio</span>
      </div>
      <ul class="nav navbar-nav" id="accordion">

      <?php
        $main = get_page_by_title("kiltalaisille");
        $children = get_posts( array('post_type' => 'page',
                                     'post_parent' => $main->ID,
                                     'orderby' => 'menu_order',
                                     'order' => 'ASC'
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
                                              'order' => 'ASC'
                                              ));

              foreach($subchildren as $subchild) { ?>
              <li class="nav-item">
                <a class="nav-link" href="<?php echo "/kiltalaisille/". $child->post_name ."/". $subchild->post_name ."/"?>" ><?php echo ucfirst($subchild->post_name) ?></a>
              </li>
              <?php } ?>

            </ul>
          </div>
        </li>

      <?php $i++; } ?>
      </ul>
    </nav>
