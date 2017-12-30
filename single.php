<?php get_header("deep"); ?>

    <link rel="stylesheet" href="<?php bloginfo('template_directory');?>/assets/css/page.css">
    <link rel="stylesheet" href="<?php bloginfo('template_directory');?>/assets/css/post.css">
    <?php $post = get_post(); ?>

    <?php $posts = query_posts($query_string); if (have_posts()) : while (have_posts()) : the_post(); ?>
    <div class="col-sm-12 col-md-9 offset-md-3 col-xl-10 offset-xl-2 ml-auto background">
      <div class="row content-container justify-content-center">

        <div id="page" class="col-sm-11 col-md-11 col-lg-9 col-xl-9 content-page">
          <h1><?php echo get_the_title() ?></h1>
          <div class="post-info">
            <?php echo get_the_date('d.m.Y') . ' ' . get_the_author(); ?>
          </div>
          <?php echo apply_filters('the_content', $post->post_content); ?>
        </div>

        <div class="col-sm-11 col-md-10 col-lg-8 col-xl-6">
          <div class="row justify-content-between">

              <div class="post-nav-container col-5">
                <?php if (get_adjacent_post(false, '', true)): ?>
                  <div class="post-nav post-link align-middle">
                    <?php previous_post_link(); ?>
                  </div>
                <?php endif; ?>
              </div>
              <div class="post-nav-container col-5">
                <?php if (get_adjacent_post(false, '', false)): ?>
                  <div class="post-nav post-link align-middle">
                    <?php next_post_link(); ?>
                  </div>
                <?php endif; ?>
              </div>

          </div>
        </div>

      </div>
    </div> <!-- Content column -->
    <?php endwhile; endif; ?>

  </div> <!-- Sidebar row -->
</div> <!-- Sidebar container -->

<?php get_footer(); ?>

