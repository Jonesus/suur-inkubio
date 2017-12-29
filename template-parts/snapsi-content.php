<?php
  $all_snapsis = get_all_snapsi();
  foreach ($all_snapsis as $year => $snapsis) :
?>

<div class="committee-title snapsi-container" style="padding-left: 15px;">
  <?php echo $year; ?>
</div>
<div class="row justify-content-center snapsi-container">
  <?php foreach ($snapsis as $issue) : ?>
    <div class="col-xl col-lg-4 col-md-6 col-sm-6 col-6">
      <a href="<?php echo $issue['file_path']; ?>">
        <img class="snapsi" src="<?php echo $issue['picture_path']; ?>">
      </a>
    </div>
  <?php endforeach; ?>
</div>

<?php endforeach; ?>