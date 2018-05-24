<?php /* Template Name: Etusivu */
get_header("deep"); ?>
</div>
</div>

<?php
  $page = get_post();
  $meta = get_post_meta($page->ID);
?>

<!-- Begin section -->
<div class="page-section bg-image upper" style="background-image: url(<?php bloginfo('template_directory');?>/assets/images/frontpage/circuit_background.svg);">
  <div class="bg-video">
    <video style="object-fit: fill;" autoplay muted playsinline loop>
      <source src="<?php bloginfo('template_directory'); ?>/assets/videos/circuit.webm" type="video/webm">
      <source src="<?php bloginfo('template_directory'); ?>/assets/videos/circuit.mp4" type="video/mp4">
    </video>
  </div>

  <?php if ($meta['dialog-text'][0]) : ?>
  <div class="dialog upper">
    <a href="<?php echo $meta['dialog-link'][0]; ?>"><?php echo $meta['dialog-text'][0]; ?></a>
  </div>
  <?php endif; ?>

  <div class="row padded-row">
    <div class="col-lg-12 title-text text-center">
      <h1 style="font-size: 8em;">Inkubio</h1>
      <h2><?php echo (get_page_language() == 'fi') ? "BIOINFORMAATIO&shy;TEKNOLOGIAN KILTA" : "Guild of bioinformation technology"; ?></h2>
    </div>
  </div>
</div>
<!-- End section -->

<!-- Begin section -->
<div class="page-section">
  <div class="twist upper">

    <div class="row twist-content justify-content-center align-items-center">
      <div class="col-sm-12 col-md-6 col-xl-5 order-1" style="text-align:center;">
        <p class="paragraph-text">
          <?php echo $meta['column-1'][0]; ?>
        </p>
      </div>
      <div class="col-10 col-sm-10 col-md-6 col-xl-4 order-2 no-padding">
        <img
          class="rounded-circle img-fluid front-img"
          src="<?php bloginfo('template_directory'); ?>/assets/images/frontpage/happy-university-students-having-fun.jpg"
        >
      </div>
      <div class="col-sm-12 col-md-6 col-xl-5 order-md-4 order-3" style="text-align:center;">
        <p class="paragraph-text">
          <?php echo $meta['column-2'][0]; ?>
        </p>
      </div>
       <div class="col-10 col-sm-10 col-md-6 col-xl-4 order-md-3 order-4 no-padding">
        <img
          class="rounded-circle img-fluid front-img"
          src="<?php bloginfo('template_directory'); ?>/assets/images/frontpage/serious-university-students-having-serious.jpg"
        >
      </div>
    </div>

  </div>
</div>
<!-- End section -->

<?php get_footer(); ?>
