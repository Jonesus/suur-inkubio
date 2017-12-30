<?php get_header("deep"); ?>
</div>
</div>

<link rel="stylesheet" href="<?php bloginfo('template_directory');?>/assets/css/yrityksille.css">
<link rel="stylesheet" href="<?php bloginfo('template_directory');?>/assets/css/front.css">
<?php
  $page = get_post();
  $meta = get_post_meta($page->ID);
?>

<!--Jumbotron-->
<div class="jumbotron">
  <div class="container">
    <div class ="row">
      <div class="col-md-12 title-text text-center">  
        <h2>
          Bioinformaatioteknologia on
        </h2>
        <h1>
          Tulevaisuuden ala
        </h1>          
      </div>
    </div> 
  </div>
</div><!--jumbotron end-->

<!--Fist twisted section-->
<div class="page-section">
  
  <div class="twist upper">
    <div class="row twist-content justify-content-center">
      <div class="row justify-content-center">
        <div class="title text-center">
          <?php echo $meta['section-1-title'][0] ?><span class="question">?</span>
        </div>
      </div>
    </div>
    <div class="row twist-content justify-content-center">
      <div class="col-sm-11 col-md-11 col-lg-8 col-xl-6 text-center">
        <p>
          <?php echo $meta['section-1-text'][0]; ?>
        </p>
      </div>
    </div>     
  </div><!--End of twist upper-->



  <!--Card-deck section-->
  <div class="container section2"> 

    <!--first card-->
    <div class="row justify-content-center">
      <div class="col-xs-12 col-sm-12 col-md-8 col-lg-7 mx-auto">
         <div class="card text-center">
          <div class="card-body">

            <div class="title text-center">
              <?php _e('LST-Maisteriohjelma', 'suurinkubio'); ?>
            </div>

          </div>
        </div>
      </div>  
    </div>

    <!--first card-deck-->  
    <div class="row justify-content-center rivi align-items-center">
      
      <!--first card-->
      <?php add_template(
        'lsd-card.php',
        [
          'flip' => 'flip1',
          'image' => 'biosensing_and_bioelectronics.svg',
          'title' => 'Biosensing and bioelectronics',
          'content' => $meta['biosensing-and-bioelectronics'][0],
        ]
      ); ?>
     
      <!--second card-->
       <?php add_template(
        'lsd-card.php',
        [
          'flip' => 'flip2',
          'image' => 'human_neuroscience_and_technology.svg',
          'title' => 'Human neuroscience and -technology',
          'content' => $meta['human-neuroscience-and-technology'][0],
        ]
      ); ?>
     
      <!--third card-->
      <?php add_template(
        'lsd-card.php',
        [
          'flip' => 'flip3',
          'image' => 'biosystems_and_biomaterials_engineering.svg',
          'title' => 'Biosystems and biomaterials engineering',
          'content' => $meta['biosystems-and-biomaterials-engineering'][0],
        ]
      ); ?>
      
      <!--fourth card-->  
      <?php add_template(
        'lsd-card.php',
        [
          'flip' => 'flip4',
          'image' => 'biomedical_engineering.svg',
          'title' => 'Biomedical engineering',
          'content' => $meta['biomedical-engineering'][0],
        ]
      ); ?>
     
      <!--fifth card-->
      <?php add_template(
        'lsd-card.php',
        [
          'flip' => 'flip5',
          'image' => 'complex_systems.svg',
          'title' => 'Complex systems',
          'content' => $meta['complex-systems'][0],
        ]
      ); ?>
     
      <!--sixth card-->
      <?php add_template(
        'lsd-card.php',
        [
          'flip' => 'flip6',
          'image' => 'bioinformatics.svg',
          'title' => 'Bioinformatics',
          'content' => $meta['bioinformatics'][0],
        ]
      ); ?>
      
    </div><!--end of second card-deck-->
  </div><!--Card-deck section end-->



  <!--Yhteistyö section-->
  <div class="row justify-content-center row-fix">
    <!--white "A4-paper"-box -->
    <div class="col-sm-12 col-md-12 col-lg-10 col-xl-10 content-page">
      
      <!--Title-->
      <div class="row justify-content-center">
        <div class="title text-center">
          <?php echo $meta['section-2-title'][0] ?><span class="question">?</span>
        </div>
      </div>
      <!--First row inside white box-->
      <div class="row justify-content-center">
        <!--left text-->
        <div class="col-sm-12 col-md-6 col-xl-5 text-justify">
          <p class="paragraph-text">
            <?php echo $meta['section-2-subtext-1'][0]; ?>
          </p>
        </div>
        <!--right text-->
        <div class="col-sm-12 col-md-6 col-xl-5 text-justify">
          <p class="paragraph-text">
            <?php echo $meta['section-2-subtext-2'][0]; ?>
          </p>
        </div>
      </div><!--End of first row in white box-->
      
      <!--Second title-->
      <div class="row justify-content-center">
        <div class="title text-center">
          <?php echo $meta['section-2-subtitle-1'][0]; ?>
        </div>
      </div>
      <!--bottom text-->
      <div class="row justify-content-center">
        <div class="col-sm-12 col-md-6 col-xl-5 text-justify">
          <p class="paragraph-text">
            <?php echo $meta['section-2-subtitle-1-text'][0]; ?>
          </p>
        </div>
      </div><!--end of bottom text row -->

      <!--Collapse tabs-->
      <div class="row justify-content-center">

        <!--left column of collapse tabs-->
        <div class="col-sm-12 col-md-6 col-xl-5">
          <h5 style="margin-top:30px;" class="mb-0 text-center"><?php _e('Näkyvyyttä', 'suurinkubio'); ?></h5>
          <div id="accordion1" role="tablist">

            <!--first collapse tab-->
            <div class="card border-success">
              <div class="card-header" role="tab" id="headingOne">
                <h5 class="mb-0">
                  <a class="collapsed" data-toggle="collapse" href="#collapseOne" aria-expanded="false" aria-controls="collapseOne">
                    <i class="fa fa-fw fa-chevron-down"></i>
                    <?php echo $meta['accordion-1-title-1'][0]; ?>
                  </a>
                </h5>
              </div>
              <!--collapsing content-->
              <div id="collapseOne" class="collapse" role="tabpanel" aria-labelledby="headingOne" data-parent="#accordion1">
                <div class="card-body">
                  <?php echo $meta['accordion-1-text-1'][0]; ?>
                </div>
              </div>
            </div> <!--End of first tab-->

            <!--second collapse tab-->  
            <div class="card border-success">
              <div class="card-header" role="tab" id="headingTwo">
                <h5 class="mb-0">
                  <a class="collapsed" data-toggle="collapse" href="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                    <i class="fa fa-fw fa-chevron-down"></i>
                    <?php echo $meta['accordion-1-title-2'][0]; ?>
                  </a>
                </h5>
              </div>
              <div id="collapseTwo" class="collapse" role="tabpanel" aria-labelledby="headingTwo" data-parent="#accordion1">
                <div class="card-body">
                  <?php echo $meta['accordion-1-text-2'][0]; ?>
                </div>
              </div>
            </div>

            <!--third collapse item -->  
            <div class="card border-success">
              <div class="card-header" role="tab" id="headingThree">
                <h5 class="mb-0">
                  <a class="collapsed" data-toggle="collapse" href="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                    <i class="fa fa-fw fa-chevron-down"></i>
                    <?php echo $meta['accordion-1-title-3'][0]; ?>
                  </a>
                </h5>
              </div>
              <div id="collapseThree" class="collapse" role="tabpanel" aria-labelledby="headingThree" data-parent="#accordion1">
                <div class="card-body">
                  <?php echo $meta['accordion-1-text-3'][0]; ?>
                </div>
              </div>
            </div>

          </div><!--Accordion end -->
        </div><!-- End of left column of collapde tabs-->

        <!--second column of collapse tabs -->
        <div class="col-sm-12 col-md-6 col-xl-5">
          <h5 style="margin-top:30px;" class="mb-0 text-center"><?php _e('Tapahtumia', 'suurinkubio'); ?></h5>
          <div id="accordion2" role="tablist">

            <div class="card border-success">
              <div class="card-header" role="tab" id="headingFour">
                <h5 class="mb-0">
                  <a class="collapsed" data-toggle="collapse" href="#collapseFour" aria-expanded="false" aria-controls="collapseFour">
                    <i class="fa fa-fw fa-chevron-down"></i>
                    <?php echo $meta['accordion-2-title-1'][0]; ?>
                  </a>
                </h5>
              </div>
              <div id="collapseFour" class="collapse" role="tabpanel" aria-labelledby="headingFour" data-parent="#accordion2">
                <div class="card-body">
                  <?php echo $meta['accordion-2-text-1'][0]; ?>
                </div>
              </div>
            </div>

            <div class="card border-success">
              <div class="card-header" role="tab" id="headingFive">
                <h5 class="mb-0">
                  <a class="collapsed" data-toggle="collapse" href="#collapseFive" aria-expanded="false" aria-controls="collapseFive">
                    <i class="fa fa-fw fa-chevron-down"></i>
                    <?php echo $meta['accordion-2-title-2'][0]; ?>
                  </a>
                </h5>
              </div>
              <div id="collapseFive" class="collapse" role="tabpanel" aria-labelledby="headingFive" data-parent="#accordion2">
                <div class="card-body">
                  <?php echo $meta['accordion-2-text-2'][0]; ?>
                </div>
              </div>
            </div>

            <div class="card border-success">
              <div class="card-header" role="tab" id="headingSix">
                <h5 class="mb-0">
                  <a class="collapsed" data-toggle="collapse" href="#collapseSix" aria-expanded="false" aria-controls="collapseSix">
                    <i class="fa fa-fw fa-chevron-down" aria-hidden="true"></i>
                    <?php echo $meta['accordion-2-title-3'][0]; ?>
                  </a>
                </h5>
              </div>
              <div id="collapseSix" class="collapse" role="tabpanel" aria-labelledby="headingSix" data-parent="#accordion2">
                <div class="card-body">
                  <?php echo $meta['accordion-2-text-3'][0]; ?>
                </div>
              </div>
            </div>

            <div class="card border-success">
              <div class="card-header" role="tab" id="headingSeven">
                <h5 class="mb-0">
                  <a class="collapsed" data-toggle="collapse" href="#collapseSeven" aria-expanded="false" aria-controls="collapseSix">
                    <i class="fa fa-fw fa-chevron-down" aria-hidden="true"></i>
                    <?php echo $meta['accordion-2-title-4'][0]; ?>
                  </a>
                </h5>
              </div>
              <div id="collapseSeven" class="collapse" role="tabpanel" aria-labelledby="headingSeven" data-parent="#accordion2">
                <div class="card-body">
                  <?php echo $meta['accordion-2-text-4'][0]; ?>
                </div>
              </div>
            </div>



          </div> <!--End of accordion-->
        </div><!--End for right column of tabs-->

      </div><!--End of collapse-tab-row -->
    </div><!--End of yhteistyö-section-row -->
  </div><!--End of yhteistyö section-->
  


  <div class="contact">
    <div class="twist upper">
      <div class="row twist-content justify-content-center">
        <div class="row justify-content-center">
          <div class="title text-center">
            <?php echo $meta['section-3-title'][0] ?><span class="question">!</span>
          </div>
        </div>
      </div>
      <?php
        $yrityssuhdemestari = get_position_filler("Yrityssuhdemestari");
        $tiedotusmestari = get_position_filler("Tiedotusmestari");
        $excursiovastaava = get_position_filler("Excursiovastaava");
      ?>
      <div class="row twist-content justify-content-center align-items-center">
        <div class="col-xl-2 col-lg-5 col-md-6 col-7 order-xl-1 order-2 text-center text-justify fig">
          <img class="rounded-circle img-fluid"
            alt=""
            src="<?php echo content_url()."/uploads/kuvat/".$excursiovastaava['picture_path'];?>"
            onerror="this.src='<?php echo get_template_directory_uri()?>/assets/images/hallitus/maikki.jpg'"
          ><br/><br/>
          <p class="card-title"><strong><?php echo $excursiovastaava['title_fi']; ?></strong></p>
          <p class="card-title"><?php echo $excursiovastaava['display_name']; ?></p>
          <p class="card-title">
            <a href="mailto:<?php echo $excursiovastaava["email"]; ?>">
              <?php echo $excursiovastaava["email"]; ?>
            </a>
          </p>
        </div>
        <div class="col-xl-3 col-8 order-1 order-xl-2 text-center text-justify fig">
           <img class="rounded-circle img-fluid"
            alt=""
            src="<?php echo content_url()."/uploads/kuvat/".$yrityssuhdemestari['picture_path'];?>"
            onerror="this.src='<?php echo get_template_directory_uri()?>/assets/images/hallitus/maikki.jpg'"
          ><br/><br/>
          <p class="card-title"><strong><?php echo $yrityssuhdemestari['title_fi']; ?></strong></p>
          <p class="card-title"><?php echo $yrityssuhdemestari['display_name']; ?></p>
          <p class="card-title">
            <a href="mailto:<?php echo $yrityssuhdemestari["email"]; ?>">
              <?php echo $yrityssuhdemestari["email"]; ?>
            </a>
          </p>
        </div>
        <div class="col-xl-2 col-lg-5 col-md-6 col-7 order-3 text-center text-justify fig">
          <img class="rounded-circle img-fluid"
            alt=""
            src="<?php echo content_url()."/uploads/kuvat/".$tiedotusmestari['picture_path'];?>"
            onerror="this.src='<?php echo get_template_directory_uri()?>/assets/images/hallitus/maikki.jpg'"
          ><br/><br/>
          <p class="card-title"><strong><?php echo $tiedotusmestari['title_fi']; ?></strong></p>
          <p class="card-title"><?php echo $tiedotusmestari['display_name']; ?></p>
          <p class="card-title">
            <a href="mailto:<?php echo $tiedotusmestari["email"]; ?>">
              <?php echo $tiedotusmestari["email"]; ?>
            </a>
          </p>
        </div>
      </div>     
    </div><!--End of twist upper-->
  </div>
  
</div>
<!-- End section -->


<?php get_footer(); ?>
