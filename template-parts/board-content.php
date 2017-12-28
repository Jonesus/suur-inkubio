<?php
  $committee = 'Hallitus';
  $year = 2017;

  add_template(
    'committee-list.php',
    [
      'committee' => $committee,
      'year' => $year,
    ]
  );
?>

