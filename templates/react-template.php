<?php /* Template Name: React page */
get_header("deep"); ?>

    <link rel="stylesheet" href="<?php bloginfo('template_directory');?>/assets/css/page.css">
    <?php
        $page = get_post();
        $meta = get_post_meta($page->ID);
    ?>

    <div class="col-sm-12 col-md-9 offset-md-3 col-xl-10 offset-xl-2 ml-auto background">
      <div class="row content-container justify-content-center">
        <div id="page" class="col-sm-11 col-md-11 col-lg-9 col-xl-9">

            <div id="kahmy"></div>
            <script type="text/javascript" src="<?php bloginfo('template_directory');?>/assets/bundles/kahmy.js"></script>

        </div>
      </div>
    </div> <!-- Content column -->

  </div> <!-- Sidebar row -->
</div> <!-- Sidebar container -->


<?php get_footer(); ?>
