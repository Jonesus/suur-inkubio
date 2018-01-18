<?php
  $committee = 'Hallitus';
  $year = date('Y');

  add_template(
    'committee-list.php',
    [
      'committee' => $committee,
      'year' => $year,
    ]
  );
?>

