<?php get_header(); ?>

<!-- Begin section -->
<div class="page-section bg-image upper" style="background-image: url(<?php bloginfo('template_directory');?>/assets/images/frontpage/circuit_background.svg);">
  <div class="row padded-row">
    <div class="col-lg-12 title-text text-center">
      <h1>Suur-Inkubio</h1>
      <h2>BIOINFORMAATIO&shy;TEKNOLOGIAN KILTA</h2>
    </div>
  </div>
</div>
<!-- End section -->

<!-- Begin section -->
<div class="page-section">
  <div class="twist upper">

    <div class="row twist-content justify-content-center">
      <div class="title">
        <?php echo get_post_meta(71, "header1", true); ?>
      </div>
    </div>
    
    <div class="row twist-content justify-content-center">
      <div class="col-sm-12 col-md-6 col-xl-4" style="text-align:center;">
        <p class="paragraph-text">
          <?php echo get_post_meta(71, "paragraph1", true); ?>
        </p>
        <a href="" class="pill-button">Dank</a>
      </div>
      <div class="col-sm-12 col-md-6 col-xl-4" style="text-align:center;">
        <p class="paragraph-text">
          <?php echo get_post_meta(71, "paragraph2", true); ?>
        </p>
        <a href="" class="pill-button">Meme</a>
      </div>
    </div>

  </div>
</div>
<!-- End section -->

<?php get_footer(); ?>