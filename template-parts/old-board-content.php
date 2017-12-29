<ul class="folding-list" id="committeeaccordion">

<?php
  $i = 0;
  $now = 2017;
  $committee = 'Hallitus';
  foreach (range($now, 2004) as $year) : ?>

  <?php
    $chairs = get_committee_chairs($committee, $year);
    $members = get_committee_members($committee, $year);
  ?>

  <li class="folding-item">
    <a data-toggle="collapse" data-parent="#committeeaccordion" href="#committeecollapse<?php echo $i ?>">
      <?php echo __('Hallitus', 'suurinkubio').' '.$year ?>
    </a>
    <div class="collapse" id="committeecollapse<?php echo $i ?>">
      <?php
        add_template(
          'committee-list.php',
          [
            'committee' => $committee,
            'year' => $year,
          ]
        );
      ?>
    </div>
  </li>
  <?php $i++; ?>
<?php endforeach; ?>
</ul>
