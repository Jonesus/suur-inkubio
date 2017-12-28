<ul class="committee-list" id="committeeaccordion">
  <?php
    $i = 0;
    $now = 2017;
    foreach (range($now, 2008) as $year) : ?>

    <?php
      $committees = get_committee_titles($year);
    ?>

    <li class="committee-item">
      <a class="committee-link" data-toggle="collapse" data-parent="#committeeaccordion" href="#committeecollapse<?php echo $i ?>">
        <?php echo __('Toimihenkilöt', 'suurinkubio').' '.$year ?>
      </a>
      <div class="collapse" id="committeecollapse<?php echo $i ?>">

        <?php foreach ($committees as $committee) {
          add_template(
            'committee-list.php',
            [
              'committee' => $committee['title_fi'],
              'year' => $year,
              'show-committee-title' => true,
            ]
          );
        } ?>

      </div>
    </li>
    <?php $i++; ?>
  <?php endforeach; ?>
</ul>