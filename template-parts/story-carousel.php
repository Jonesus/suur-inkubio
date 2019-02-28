<div style="padding-top: 5vh;">
  <style>
    .carousel-control-next, .carousel-control-prev {
      filter: invert(100%);
    }
  </style>
  
  <div id="carouselExampleControls" class="carousel slide" data-ride="carousel">
    <div class="carousel-inner">
      <div class="carousel-item active">
        <?php add_template('story-card.php', $args['data'][0]); ?>
      </div>
      <?php foreach (array_slice($args['data'], 1) as $card): ?>
        <div class="carousel-item">
          <?php add_template('story-card.php', $card); ?>
        </div>
      <?php endforeach; ?>
    </div>
    <a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-slide="prev">
      <span class="carousel-control-prev-icon" aria-hidden="true"></span>
      <span class="sr-only">Previous</span>
    </a>
    <a class="carousel-control-next" href="#carouselExampleControls" role="button" data-slide="next">
      <span class="carousel-control-next-icon" aria-hidden="true"></span>
      <span class="sr-only">Next</span>
    </a>
  </div>

</div>