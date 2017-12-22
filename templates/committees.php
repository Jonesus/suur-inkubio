<?php /* Template Name: Committees */
get_header("deep"); ?>

    <link rel="stylesheet" href="<?php bloginfo('template_directory');?>/assets/css/page.css">
    <?php $page = get_post(); ?>

    <div class="col-sm-12 col-md-9 offset-md-3 col-xl-10 offset-xl-2 ml-auto background">
      <div class="row justify-content-center">
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
              $committee = $committee['title_fi'];
              $chairs = get_committee_chairs($committee, $year);
              $members = get_committee_members($committee, $year);
            ?>

            <div class="row justify-content-center">
              <div class="committee-title text-center w-100">
                <?php echo $committee; ?>
              </div>
              <?php foreach ($chairs as $chairperson) {
                add_template('committee-profile.php', ['member' => $chairperson]);
              }?>
            </div>


            <div class="row justify-content-center">
              <?php foreach ($members as $member) {
                add_template('committee-profile.php', ['member' => $member]);
              }?>
            </div>

          <?php endforeach; ?>

        </div>
      </div>
    </div> <!-- Content column -->

  </div> <!-- Sidebar row -->
</div> <!-- Sidebar container -->

<?php get_footer(); ?>

