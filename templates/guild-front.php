<?php /* Template Name: Guild front */
get_header("deep"); ?>

    <link rel="stylesheet" href="<?php bloginfo('template_directory');?>/assets/css/page.css">
    <link rel="stylesheet" href="<?php bloginfo('template_directory');?>/assets/css/guild-front.css">
    <?php
      $page = get_post();
      $meta = get_post_meta($page->ID);
    ?>

    <div id="page" class="col-sm-12 col-md-9 offset-md-3 col-xl-10 offset-xl-2 ml-auto background">
      <div class="row guild-container justify-content-center">
        <div class="col-sm-11 col-md-11 col-lg-11 col-xl-10">

          <?php if ($meta['banner_img'][0]) : ?>
            <div class="row justify-content-center">
              <div class="col-12 content-card no-padding">
                <img class="banner-img" src="<?php echo $meta['banner_img'][0]; ?>"></img>
                <div class="text-overlay"><?php echo $meta['banner_text'][0]; ?></div>
              </div>
            </div>
          <?php endif; ?>
          
          <div class="row justify-content-center">
            <div class="col-12 content-card">
              <h1><?php _e('Ajankohtaista', 'suurinkubio'); ?></h1>
              <div class="row justify-content-center">
                <?php
                  $args = array(
                    'numberposts' => 3,
                    'orderby' => 'post_date',
                    'order' => 'DESC',
                    'post_type' => 'post',
                  );

                  $recent_posts = wp_get_recent_posts( $args, ARRAY_A );
                foreach ($recent_posts as $post) :?>
                  <div class="col-lg-6 col-xl-4 post-column">
                    <div><?php echo get_the_date('j.n.Y', $post['ID']); ?></div>
                    <div><strong><?php echo $post['post_title']; ?></strong></div>
                    <div class="post-excerpt">
                      <?php
                        $text = $post['post_content'];
                        $maxPos = 150;
                        if (strlen($text) > $maxPos) {
                          $lastPos = ($maxPos - 3) - strlen($text);
                          $text = substr($text, 0, strrpos($text, ' ', $lastPos)) . '...';
                        }
                        echo $text;
                      ?>
                    </div>
                    <div class="post-link">
                      <a href="<?php echo get_permalink($post['ID']); ?>"><?php _e('Lue lisää', 'suurinkubio'); ?></a>
                    </div>
                  </div>
                <?php endforeach; ?>
              </div>
            </div>
          </div>

          <div class="row justify-content-between">
            <div class="col-xl content-card">
              <h1><?php _e('Tulevat tapahtumat', 'suurinkubio'); ?></h1>
              <?php echo do_shortcode('[calendar id="296"]');?>

              <div class="calendar-link">
                <a href="<?php echo '' ?>"><?php _e('Tapahtumakalenteri', 'suurinkubio'); ?></a>
              </div>
            </div>
            <div class="d-none d-lg-block col-lg-1 col-xl-1"></div>
            <div class="col-xl content-card">
              <h1><?php _e('Linkkejä', 'suurinkubio'); ?></h1>
              <ul class="link-list">
                <li><a href="https://inkubio.fi/kiltiscam"><?php _e('Kiltiscam', 'suurinkubio'); ?></a></li>
                <li><a href="https://inkubio.fi/ilmo"><?php _e('Ilmomasiina', 'suurinkubio'); ?></a></li>
                <li><a href="https://inkubio.kuvat.fi"><?php _e('Kuvagalleria', 'suurinkubio'); ?></a></li>
                <li><a href="https://ruokalistat.net"><?php _e('Otaniemen ruokalistat', 'suurinkubio'); ?></a></li>
                <li><a href="http://tenttiarkisto.fi"><?php _e('Tenttiarkisto', 'suurinkubio'); ?></a></li>
              </ul>
            </div>
          </div>

          <div class="row social-row content-card justify-content-between">
            <div class="social-media col-lg col-xl">
              <h1><?php _e('Instagram', 'suurinkubio'); ?></h1>
              <div class="social-content">
                <?php echo do_shortcode('[instagram-feed]');?>
              </div>
            </div>
            <div class="social-media d-none d-lg-block col-lg-1 col-xl-1"></div>
            <div class="social-media col-lg col-xl no-padding">
              <h1><?php _e('Facebook', 'suurinkubio'); ?></h1>
              <div class="social-content social-facebook">
                <?php echo do_shortcode('[sfp-page-plugin width=500 height=350 small_header=true show_facepile=false timeline=true events=true messages=true url=https://www.facebook.com/inkubio/]');?>
              </div>
            </div>
          </div>



        </div>
      </div>
    </div> <!-- Content column -->

  </div> <!-- Sidebar row -->
</div> <!-- Sidebar container -->

<?php get_footer(); ?>

