<div class="flip-container <?php echo $args['flip']; ?>">
  <!--frontside of the card-->  
  <div class="front text-center">
    <h4><?php echo $args['title']; ?></h4>
    <div class="image">
      <img alt src="<?php echo get_bloginfo('template_directory').'/assets/images/paa-ainelogot/'.$args['image']; ?>">  
    </div>
  </div>
  
  <!--backside of the card-->
  <div class="back text-center">
    <h4 class="card-title"><?php echo $args['title']; ?></h4>
    <p class="para">
      <?php echo $args['content']; ?>
    </p>
  </div>
  
</div>
