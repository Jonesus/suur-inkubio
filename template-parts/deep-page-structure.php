<?php
  $page = get_post();
  $meta = get_post_meta($page->ID);
?>


<?php get_header("deep"); ?>

    <link rel="stylesheet" href="<?php bloginfo('template_directory');?>/assets/css/page.css">
    <?php $page = get_post(); ?>

    <div class="col-sm-12 col-md-9 offset-md-3 col-xl-10 offset-xl-2 ml-auto background">
      <div class="row content-container justify-content-center">
        <div id="page" class="col-11 col-sm-11 col-md-11 col-lg-9 col-xl-9 content-page">
          
          <?php if ($meta['hide_title'][0] != 'true') : ?>
            <h1><?php echo get_the_title() ?></h1>
          <?php endif; ?>
          <?php echo apply_filters('the_content', $page->post_content); ?>

          <?php if (isset($args['template'])) {
            add_template($args['template'], $args['template_args']);
          } ?>

        </div>
      </div>
    </div> <!-- Content column -->

  </div> <!-- Sidebar row -->
</div> <!-- Sidebar container -->

<?php get_footer(); ?>
