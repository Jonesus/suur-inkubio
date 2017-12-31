<?php
  $year = $args['year'];
  $committee = $args['committee'];
  $chairs = get_committee_chairs($committee, $year);
  $members = get_committee_members($committee, $year);
?>

<div class="row justify-content-center">
  <?php if ($args['show-committee-title']) : ?>
    <div class="committee-title text-center w-100">
      <?php echo (get_page_language() == 'fi') ? $committee : $args['committee_en']; ?>
    </div>
  <?php endif; ?>
  <?php foreach ($chairs as $chairperson) {
    add_template('committee-profile.php', ['member' => $chairperson]);
  }?>
</div>


<div class="row justify-content-center">
  <?php foreach ($members as $member) {
    add_template('committee-profile.php', ['member' => $member]);
  }?>
</div>

