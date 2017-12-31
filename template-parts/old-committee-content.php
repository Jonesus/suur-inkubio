<ul class="folding-list" id="committeeaccordion2">
  <?php
    $i = 0;
    $now = 2017;
    foreach (range($now, 2008) as $year) : ?>

    <?php
      $committees = get_committee_titles($year);
    ?>

    <li class="folding-item">
      <a class="collapsed" data-toggle="collapse" data-parent="#committeeaccordion" href="#committeecollapse<?php echo $i ?>">
        <i class="fa fa-fw fa-chevron-down"></i>
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

      <a class="text-right" style="font-size: 2em;" data-toggle="collapse" href="#committeecollapse<?php echo $i ?>">
        <i class="fa fa-fw fa-chevron-up"></i>
      </a>
      </div>
    </li>
    <?php $i++; ?>
  <?php endforeach; ?>
</ul>