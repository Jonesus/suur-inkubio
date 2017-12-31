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
        'committee_en' => $committee['title_en'],
        'year' => $year,
        'show-committee-title' => true,
      ]
    );
  ?>

<?php endforeach; ?>