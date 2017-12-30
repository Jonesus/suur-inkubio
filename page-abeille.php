<?php /* Template Name: Abeille */
get_header("deep"); ?>
</div>
</div>

<link rel="stylesheet" href="<?php bloginfo('template_directory');?>/assets/css/abeille.css">
<link rel="stylesheet" href="<?php bloginfo('template_directory');?>/assets/css/front.css">
<?php
  $page = get_post();
  $meta = get_post_meta($page->ID);
?>

<!-- Begin section -->
<!--Jumbotron-->
<div class="jumbotron">
  <div class="container">
    <div class ="row">
      <div class=" col-sm-10 col-md-12 title-text text-center">

        <h1 class = "jumbotron-header">
          <?php echo $meta['jumbotron-header'][0]; ?>
        </h1>   
        <p class="jumbotron-text text-justify">
          <?php echo $meta['jumbotron-text'][0]; ?>
        </p>

      </div>
    </div> 
  </div>
</div><!--jumbotron end-->



<div class="page-section">
  <div class="row justify-content-center row-fix">
    <!--white "A4-paper"-box -->
    <div class="col-sm-12 col-md-12 col-lg-10 col-xl-10 content-page">

      <!--Title-->
      <div class="row justify-content-center">
        <div class="title text-center">
          <?php echo $meta['section-1-title'][0]; ?>
        </div>
      </div>
      
      <!--First row inside white box-->
      <div class="row justify-content-center">
        <div class="col-sm-12 col-md-10 col-xl-10 text-justify">
          <p class="paragraph-text">
            <?php echo $meta['section-1-text'][0]; ?>
          </p>
        </div><!--End of first row in white box-->
      </div>
      
      <!--Second row inside white box-->        
      <div class="row justify-content-center">
        <!--left text-->
        <div class="col-sm-12 col-md-5 col-xl-5 text-justify">
          <h3 class="text-center header3"><?php echo $meta['section-1-subtitle-1'][0]; ?></h3>
          <p class="paragraph-text">
            <?php echo $meta['section-1-subtitle-1-text'][0]; ?>
          </p>
        </div>
        
        <!--right text-->
        <div class="col-sm-12 col-md-5 col-xl-5 text-justify">
          <h3 class="text-center header3"><?php echo $meta['section-1-subtitle-2'][0]; ?></h3>
          <p class="paragraph-text">
            <?php echo $meta['section-1-subtitle-2-text'][0]; ?>
          </p>
        </div>
      </div><!--End of second row in white box-->
      
      <!--Collapse tabs-->
      <div class="row justify-content-center">

        <!--left column of collapse tabs-->
        <div class="col-sm-12 col-md-6 col-xl-5">
          <div id="accordion1" role="tablist">

            <!--first collapse tab-->
            <div class="card border-success">
              <div class="card-header" role="tab" id="headingOne">
                <h5 class="mb-0">
                  <a data-toggle="collapse" href="#collapseOne" aria-expanded="false" aria-controls="collapseOne">
                   <i class="fa fa-fw fa-chevron-right"></i>
                   <?php _e('Kandin esimerkkikursseja', 'suurinkubio'); ?>
                  </a>
                </h5>
              </div>

              <!--collapsing content-->
              <div id="collapseOne" class="collapse" role="tabpanel" aria-labelledby="headingOne" data-parent="#accordion1">
                <div class="card-body">
                  <?php echo $meta['bachelors-examples'][0]; ?>
                </div>
              </div>
            </div> <!--End of first tab-->
          </div><!--Accordion end -->
        </div><!-- End of left column of collapde tabs-->
        
        <!--second column of collapse tabs -->
        <div class="col-sm-12 col-md-6 col-xl-5">
          <div id="accordion2" role="tablist">

            <!--first collapse tab-->
            <div class="card border-success">
              <div class="card-header" role="tab" id="headingFour">
                <h5 class="mb-0">
                  <a data-toggle="collapse" href="#collapseFour" aria-expanded="false" aria-controls="collapseFour">
                    <i class="fa fa-fw fa-chevron-right"></i>
                    <?php _e('Maisterin esimerkkikursseja', 'suurinkubio'); ?>
                  </a>
                </h5>
              </div>

              <div id="collapseFour" class="collapse" role="tabpanel" aria-labelledby="headingFour" data-parent="#accordion2">
                <div class="card-body">
                  <?php echo $meta['masters-examples'][0]; ?>
                </div>
              </div>
            </div>
          </div> <!--End of accordion-->
        </div><!--End for right column of tabs-->

      </div><!--End of collapse-tab-row -->
    </div><!-- End of first "A4-page" -->
  </div><!-- End of the row -->
  


  <div class="row justify-content-center row-fix">
    <!--white "A4-paper"-box -->
    <div class="col-sm-12 col-md-12 col-lg-10 col-xl-10 content-page"><!-- Creates a white margin to the right-->
      <!--Title-->
      <div class="row justify-content-center">
        <div class="title text-center">
          <?php echo $meta['section-2-title'][0]; ?>
        </div>
      </div>
      
      <!--First row inside white box-->
      <div class="row justify-content-center">
        <div class="col-sm-12 col-md-12 col-xl-9 text-justify">
          <p class="paragraph-text">
            <?php echo $meta['section-2-text'][0]; ?>
          </p>
        </div><!--End of first row in white box-->
      </div> 
      
      <!--Second row inside white box-->        
      <div class="row justify-content-center">
        <!--left text-->
        <div class="col-lg-12 col-xl-3 text-justify">
          <p class="paragraph-text">
            <?php echo $meta['section-2-subtext-1'][0]; ?>
          </p>
        </div>
        <!--middle text-->
        <div class="col-lg-12 col-xl-3 text-justify">
          <p class="paragraph-text">
            <?php echo $meta['section-2-subtext-2'][0]; ?>
          </p>
        </div>
        <!--right text-->
        <div class="col-lg-12 col-xl-3 text-justify">
          <p class="paragraph-text">
            <?php echo $meta['section-2-subtext-3'][0]; ?>
          </p>
        </div>
      </div><!--End of second row in white box-->
      
      <!-- third row inside white box -->
      <div class="row justify-content-center">
        <div class="circle">
          <div class="circletext text-center">
            <p><?php _e('Lisäinfoa hakemisesta', 'suurinkubio'); ?></p>
            <div class="text-center">
              <a target="_blank" href="http://www.dia.fi/" class="link">dia.fi</a><br />
              <a target="_blank" href="https://opintopolku.fi/wp/fi/" class="link">opintopolku.fi</a><br />
              <a target="_blank" href="http://www.aalto.fi/fi/studies/" class="link">studies.aalto.fi</a><br />
            </div>
          </div>
        </div>
      </div>

    </div><!-- End of second "A4-page" -->    
  </div> <!-- End of the row -->
  


  <div class="twist upper">
    <div class="row twist-content justify-content-center">
      <div class="justify-content-center">
        <div class="col-sm-12 col-md-12 col-xl-12 title text-center">
          <?php echo $meta['section-3-title'][0]; ?>
        </div>
      </div>
        
      <div class="col-sm-12 col-md-12 col-xl-9 text-justify">
        <p class="paragraph-text">
          <?php echo $meta['section-3-text'][0]; ?>
        </p>
      </div>
      <div class="col-sm-12 col-md-12 col-xl-12 text-justify text-center">
        <a class="pill-button" href="<?php echo $meta['freshmen-link'][0]; ?>"><?php _e('Fukseille', 'suurinkubio'); ?></a>
      </div>
        
    </div>
  </div>     
  
</div>
<!-- End section -->

<?php get_footer(); ?>
