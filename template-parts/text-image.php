<!-- Begin section -->
<div class="page-section">

  <?php $i = 0; foreach($args["rows"] as $row) { $i++;
    if ($i % 2 == 1) : ?>

    <!-- Text left, image right -->
    <div class="row justify-content-center">
      <div class="col-md-6 col-lg-4 align-self-center text-center">
        <p class="paragraph-text text-justify"><?php echo $row[0] ?></p>
      </div>
      <div class="col-md-6 col-lg-4 align-self-center text-center">
        <img class="rounded-circle img-fluid" alt="" src="<?php echo $basedir . "/assets/images/" . $row[1]?>" >
      </div>
    </div>

    <?php else : ?>

    <!-- Text right, image left -->
    <div class="row justify-content-center flex-column-reverse flex-md-row">
      <div class="col-md-6 col-lg-4 align-self-center text-center">
        <img class="rounded-circle img-fluid" alt="" src="<?php echo $basedir . "/assets/images/" . $row[1]?>">
      </div>
      <div class="col-md-6 col-lg-4 align-self-center text-center">
        <p class="paragraph-text text-justify"><?php echo $row[0] ?></p>
      </div>
    </div>

	<?php endif;
  } ?>

</div>
<!-- End section -->