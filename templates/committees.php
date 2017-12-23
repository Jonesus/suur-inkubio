<?php /* Template Name: Committees */
get_header("deep"); ?>

    <link rel="stylesheet" href="<?php bloginfo('template_directory');?>/assets/css/page.css">
    <?php $page = get_post(); ?>

    <div class="col-sm-12 col-md-9 offset-md-3 col-xl-10 offset-xl-2 ml-auto background">
      <div class="row content-container justify-content-center">
        <div id="page" class="col-sm-11 col-md-11 col-lg-9 col-xl-9 content-page">

          <h1 class="text-center"><?php echo get_the_title() ?></h1>
          <div>
            <?php echo apply_filters('the_content', $page->post_content); ?>
          </div>

          <?php
            $year = date("Y");
            $year = 2017;
            $committees = get_committee_titles($year);
          ?>

          <?php foreach ($committees as $committee) :?>

            <?php
              add_template(
                'committee-list.php',
                [
                  'committee' => $committee['title_fi'],
                  'year' => $year,
                  'show-committee-title' => true,
                ]
              );
            ?>

          <?php endforeach; ?>

        </div>
      </div>
    </div> <!-- Content column -->

  </div> <!-- Sidebar row -->
</div> <!-- Sidebar container -->

<?php get_footer(); ?>

