<?php /* Template Name: Board */
get_header("deep"); ?>

    <link rel="stylesheet" href="<?php bloginfo('template_directory');?>/assets/css/page.css">
    <?php $page = get_post(); ?>

    <div class="col-sm-12 col-md-9 offset-md-3 col-xl-10 offset-xl-2 ml-auto background">
      <div class="row justify-content-center">
        <div id="page" class="col-sm-12 col-md-12 col-lg-9 col-xl-9 content-page">

          <h1 class="text-center"><?php echo get_the_title() ?></h1>
          <div>
            <?php echo apply_filters('the_content', $page->post_content); ?>
          </div>

          <?php
            $committee = 'Hallitus';
            $year = 2017;
            $chairs = get_committee_chairs($committee, $year);
            $members = get_committee_members($committee, $year);
          ?>

          <div class="row justify-content-center">
            <?php foreach ($chairs as $chairperson) {
              add_template('committee-profile.php', ['member' => $chairperson]);
            }?>
          </div>

          <div class="row justify-content-center">
            <?php foreach ($members as $member) {
              add_template('committee-profile.php', ['member' => $member]);
            }?>
          </div>

        </div>
      </div>
    </div> <!-- Content column -->

  </div> <!-- Sidebar row -->
</div> <!-- Sidebar container -->

<?php get_footer(); ?>
