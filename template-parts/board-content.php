<?php
  $year = date("Y");
  $committee = 'Hallitus';

  add_template(
    'committee-list.php',
    [
      'committee' => $committee,
      'year' => $year,
      'show-member-emails' => true,
    ]
  );
?>

