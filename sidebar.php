<div class="container-fluid">
  <div class="row">
    <nav class="col-sm-3 col-md-2 hidden-xs-down sidebar">

      <?php
        $main = get_page_by_title("kiltalaisille");
        $children = get_posts( array('post_type' => 'page',
                                     'post_parent' => $main->ID,
                                     'orderby' => 'menu_order',
                                     'order' => 'ASC'
                                    ));
        $i = 0;
        foreach($children as $child) { ?>

          <div class="sidebar-toggle">
            <a data-toggle="collapse" href="#collapse<?php echo $i ?>" class="h5"><i class="fa fa-angle-right rotate" aria-hidden="true"></i>&nbsp; <?php echo ucfirst($child->post_name) ?></a>
            <div id="collapse<?php echo $i ?>" class="navbar-collapse collapse">
              <ul class="nav flex-column">
              <?php
                $subchildren = get_posts( array('post_type' => 'page',
                                                'post_parent' => $child->ID,
                                                'orderby' => 'menu_order',
                                                'order' => 'ASC'
                                               ));
  
                foreach($subchildren as $subchild) { ?>
                <li class="nav-item">
                  <a class="nav-link h5" href="<?php echo "/". $child->post_name ."/". $subchild->post_name ?>" ><?php echo ucfirst($subchild->post_name) ?></a>
                </li>
                <?php } ?>

              </ul>
            </div>
          </div>

        <?php $i++; } ?>
    </nav>