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

  <body>

  <!-- Navbar -->
  <nav class="navbar navbar-expand-md fixed-top"  <?php echo (is_admin_bar_showing()) ? ' style="top: 32px;"' : ''; ?>>
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
          <a class="nav-link" href="/abeille/">Abeille</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="/yrityksille/">Yrityksille</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="/kiltalaisille/">Kiltalaisille</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="/yhteystiedot/">Yhteystiedot</a>
        </li>
       </ul>
    </div>
  </nav>
  <!-- End navbar -->
