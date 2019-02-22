<?php /* Template name: Ota yhteyttä */
get_header("deep"); ?>
</div>
</div>

<link rel="stylesheet" href="<?php bloginfo('template_directory');?>/assets/css/page.css">
<link rel="stylesheet" href="<?php bloginfo('template_directory');?>/assets/css/contact.css">
<?php $page = get_post(); ?>
<div class="background">
  <div class="row justify-content-center row-fix">
    <div class="col-sm-12 col-md-9 col-lg-8 col-xl-8 content-page content-container">
      <div class="row justify-content-center">
        <h1 class="text-center"><?php echo get_the_title() ?></h1>
      </div>
      <div class="row justify-content-center bodytext">
        <?php echo apply_filters('the_content', $page->post_content); ?>
      </div>
      <div class="row justify-content-center bodytext">
        <div class="col-xl-4">
          <h2 class="column-text"><?php _e('Postiosoite', 'suurinkubio'); ?></h2>
          <p class="contact-col">
            Inkubio ry<br/>PL 69<br/>02151 ESPOO
          </p>
        </div>
        <div class="col-xl-4">
          <h2 class="column-text"><?php _e('Kiltahuoneen osoite', 'suurinkubio'); ?></h2>
          <p class="contact-col">
            <?php _e('Inkubio ry:n kiltahuone', 'suurinkubio'); ?><br/>Otakaari 1, Y134<br/>02150 ESPOO
          </p>
        </div>
        <div class="col-xl-4">
          <h2 class="column-text"><?php _e('Pankkiyhteys', 'suurinkubio'); ?></h2>
          <p class="contact-col">
            Nordea<br/>FI65 1309 3500 1028 76<br/>BIC: NDEAFIHH
          </p>
        </div>
      </div>
    </div>
  </div>
</div>

<?php get_footer(); ?>
