<?php /* Template Name: Etusivu */
get_header("deep"); ?>
</div>
</div>

<!-- Begin section -->
<div class="page-section bg-image upper" style="background-image: url(<?php bloginfo('template_directory');?>/assets/images/frontpage/circuit_background.svg);">
  <div class="row padded-row">
    <div class="col-lg-12 title-text text-center">
      <h1>Suur-Inkubio</h1>
      <h2>BIOINFORMAATIO&shy;TEKNOLOGIAN KILTA</h2>
    </div>
  </div>
</div>
<!-- End section -->

<!-- Begin section -->
<div class="page-section">
  <div class="twist upper">

    <div class="row twist-content justify-content-center">
      <div class="title">
        <?php echo get_post_meta(71, "header1", true); ?>
      </div>
    </div>
    
    <div class="row twist-content justify-content-center">
      <div class="col-sm-12 col-md-6 col-xl-4" style="text-align:center;">
        <p class="paragraph-text">
        Inkubio on Aalto-yliopiston bioinformaatioteknologian opiskelijoiden ainejärjestö eli kilta. Kilta järjestää jäsenilleen vapaa-ajan toimintaa sekä monenlaisia tapahtumia, ylläpitää yrityssuhteita alan firmoihin ja huolehtii opintoihin liittyvistä asioista. Inkubio toivottaa uudet bioIT:n opiskelijat tervetulleiksi heti ensimmäisestä päivästä lähtien ja yhdistää heitä koko opintojen ajan. 
        </p>
        <a href="" class="pill-button">Dank</a>
      </div>
      <div class="col-sm-12 col-md-6 col-xl-4" style="text-align:center;">
        <p class="paragraph-text">
        Bioinformaatioteknologian poikkitieteellinen koulutusohjelma yhdistää biotieteiden perusteet perinteisiin teknillisiin opintoihin, elektroniikkaan sekä tietotekniikkaan. Valmistuttuaan bioinformaatioteknologian opiskelijat ovat terveysteknologian ammattilaisia, jotka osaavat hyödyntää vahvaa insinööriosaamista biologisen datan käsittelyyn ja lääketieteellisen tekniikan sovelluksiin.
          <!--<?php echo get_post_meta(71, "paragraph2", true); ?>-->
        </p>
        <a href="" class="pill-button">Meme</a>
      </div>
    </div>

  </div>
</div>
<!-- End section -->

<?php get_footer(); ?>