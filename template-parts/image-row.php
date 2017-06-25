<!-- Begin section -->
<div class="page-section">

<?php $i = 0; foreach($args["rows"] as $row) { $i++; ?>

  <div class="row justify-content-center">
  <?php if (count($row) == 3) : 
    foreach($row as $person) { ?>

    <div class="col-xs-12 col-sm-12 col-md-4 col-lg-3 text-center">
      <img class="rounded-circle img-fluid" alt="" src="<?php echo $basedir . "/assets/images/" . $person["imgpath"]?>" >
      <h3 class="text-center"><?php echo $person["name"]?></h3>
      <h4 class="text-center"><?php echo $person["position"]?></h3>
      <h5 class="text-center"><?php echo $person["email"]?></h3>
      </br>
    </div>

  <?php } else : # 1, 2 or 4 circles
    foreach($row as $person) { ?>

    <div class="col-xs-12 col-sm-12 col-md-6 col-lg-3 text-center">
      <img class="rounded-circle img-fluid" alt="" src="<?php echo $basedir . "/assets/images/" . $person["imgpath"]?>" >
      <h3 class="text-center"><?php echo $person["name"]?></h3>
      <h4 class="text-center"><?php echo $person["position"]?></h3>
      <h5 class="text-center"><?php echo $person["email"]?></h3>
      </br>
    </div>

  <?php } endif; ?>
  </div>

<?php } # endfor ?>
</div>
<!-- End section -->