<?php /* Template Name: WIP page */
get_header("deep"); ?>

    <link rel="stylesheet" href="<?php bloginfo('template_directory');?>/assets/css/page.css">
    <?php $page = get_post(); ?>

    <div class="col-sm-12 col-md-9 offset-md-3 col-xl-10 offset-xl-2 ml-auto background">
      <div class="row content-container justify-content-center">
        <div id="page" class="col-sm-11 col-md-11 col-lg-9 col-xl-9 content-page">

          <img style="width:100%; padding-right:3vw; margin-top: 80px;" class="center" alt="" src="<?php bloginfo('template_directory');?>/assets/images/tyomaa.png">
          <h3 style="margin-top: 30px;" class="text-center"><?php _e('Tämä sivu on vielä työn alla.', 'suurinkubio') ?></h3>

        </div>
      </div>
    </div> <!-- Content column -->

  </div> <!-- Sidebar row -->
</div> <!-- Sidebar container -->

<?php get_footer(); ?>
