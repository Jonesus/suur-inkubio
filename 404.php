<?php /* Template Name: 404 Page */
get_header("deep"); ?>
</div>
</div>

  <link rel="stylesheet" href="<?php bloginfo('template_directory');?>/assets/css/page.css">
  <div class="background">
    <div class="row justify-content-center row-fix">
      <div class="col-sm-12 col-md-9 col-lg-7 col-xl-6 content-page content-container">

        <div class="error404 text-center">404</div>
        <img style="width:70%" class="rotate180 center" alt="" src="<?php bloginfo('template_directory');?>/assets/images/inkulogo-viher.svg">
        <h3 style="margin-top: 50px;" class="text-center"><?php _e('Oho, jotain meni vikaan.', 'suurinkubio') ?></h3>

      </div>
    </div>
  </div>

<?php get_footer(); ?>