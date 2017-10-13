<?php get_header("deep"); ?>

    <link rel="stylesheet" href="<?php bloginfo('template_directory');?>/assets/css/page.css">
    <?php $page = get_post(); ?>

    <div class="col-sm-12 col-md-9 offset-md-3 col-xl-10 ml-auto background">
      <div class="row justify-content-center">
        <div class="col-sm-12 col-md-12 col-lg-9 col-xl-7 content-page">

          <h1 class="text-center"><?php echo get_the_title() ?></h1>
          <?php echo apply_filters('the_content', $page->post_content); ?>

        </div>
      </div>
    </div> <!-- Content column -->

  </div> <!-- Sidebar row -->
</div> <!-- Sidebar container -->

<?php get_footer(); ?>

