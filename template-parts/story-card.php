<div class="container">
  <style>
    .story-img {
      box-shadow: 0px 10px 10px rgba(0,0,0,0.5);
    }
    .banner-card {
      padding: 2rem;
    }
    .story-text {
      font-size: 20px;
      padding-bottom: 0px;
      padding-top: 0px;
    }
  </style>
  <div class="card banner-card">
    <div class="row align-items-center justify-content-center">
      <div class="col-10 col-sm-8 col-md-6 col-lg-4 col-xl-3 pb-5 pb-m-0 pb-l-0 pb-xl-0">
        <img class="rounded-circle img-fluid story-img"
          alt=""
          src="<?php echo get_template_directory_uri()?>/assets/images/stories/<?php echo $args['img']; ?>"
        >
      </div>
      <div class="col-sm-12 col-md-10 col-lg-8 col-xl-9">
        <p class="story-text">
          <?php echo $args['content']; ?>
        </p>
        <b class="story-text"><?php echo $args['signature']; ?></b>
      </div>
    </div>
  </div>
</div>