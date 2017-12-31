<div class="col-sm-6 col-md-6 col-lg-6 col-xl-4 text-center">
  <div class="person">
    <div class="person-img">
      <img class="rounded-circle img-fluid"
        alt=""
        src="<?php echo content_url()."/uploads/kuvat/".$args['member']['picture_path'];?>"
        onerror="this.src='<?php echo get_template_directory_uri()?>/assets/images/hallitus/maikki.jpg'"
      >
    </div>
    <div class="position-title text-center"><?php echo (get_page_language() == 'fi') ? $args['member']["title_fi"] : $args['member']['title_en']; ?></div>
    <div class="position-text text-center"><?php echo $args['member']["display_name"]?></div>
    <a href="mailto:<?php echo $args['member']["email"]?>" class="position-text text-center">
      <?php echo $args['member']["email"]?>
    </a>
  </div>
</div>