<?php get_header("deep"); ?>

    <link rel="stylesheet" href="<?php bloginfo('template_directory');?>/assets/css/page.css">
    <?php $page = get_post(); ?>

    <div class="col-sm-12 col-md-10 offset-md-2">

      <?php
        $page_img = get_post_meta( get_the_ID(), 'header_img_path', true);
        if (empty($page_img)) {
          $page_img = "page-headers/amfi.jpg";
        }
      ?>

     <span class="page-bg-image" style="background-image: url(<?php bloginfo('template_directory') ?>/assets/images/<?php echo $page_img ?>);"></span>
      <div class="row justify-content-center" style="background-color: rgb(240,240,240);">
        <div class="col-sm-9 col-md-10 col-lg-8 col-xl-6 text-justify below-image">

          <h1 class="text-center"><?php echo get_the_title() ?></h1>
          <?php echo apply_filters('the_content', $page->post_content); ?>

        </div>
      </div>
    </div> <!-- Content column -->
  </div> <!-- Sidebar row -->
</div> <!-- Sidebar container -->

<?php get_footer(); ?>

