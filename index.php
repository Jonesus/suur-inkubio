<?php /* Template Name: Etusivu */
get_header("deep"); ?>
</div>
</div>

<?php
  $page = get_post();
  $meta = get_post_meta($page->ID);
?>

<?php
  /* Data for carousel */
  $data = [
    [
      'content' => "Olin eräänä kesänä Mongoliassa korjaamassa vioittuneita sairaalalaitteita vapaaehtoistyöntekijänä. Isäntäperheeni otti minut lämpimästi vastaan ja vei minut jopa tutustumaan heidän maaseudulla asuviin sukulaisiinsa! Opin paljon käytännön taitoja sairaalaelektroniikasta sekä paikallisesta kulttuurista.",
      'signature' => "Annika – Lääketieteellisen tekniikan pääaineopiskelija & Reissubloggaaja",
      'img' => 'annika.jpg',
    ],
    [
      'content' => "Työssäni luon malleja lääketeollisuuden tuotantotiloista virtuaalitodellisuuteen erilaisten kehitysprojektien tarpeisiin. Suunniteltujen tilojen toteuttaminen VR-teknologian avulla mahdollistaa iteratiivisen suunnitteluprosessin, johon voidaan osallistuttaa henkilöitä ympäri organisaatiota.",
      'signature' => "Sara – Complex Systems -pääaineopiskelija",
      'img' => 'sara.jpg',
    ],
    [
      'content' => "Transkraniaalisella magneettistimulaatiolla voidaan estää potilaan halvaantuminen aivoleikkauksessa. Toisena opiskeluvuotenani pääsin töihin HUS:ille tutkimaan aihetta, josta kirjoitin myös kandidaatintyöni.",
      'signature' => "Pauliina – Lääketieteellisen tekniikan pääaineopiskelija & Kilta-aktiivi",
      'img' => 'pauliina.jpg',
    ],
    [
      'content' => "Kesätöissäni pääsin luomaan tekoälyyn pohjautuvan mallin, joka tunnistaa keuhkokuumeen röntgenkuvasta. Kehittämäni neuroverkko onnistui löytämään taudin yli 80 % tarkkuudella.",
      'signature' => "Ali – Complex Systems -pääaineopiskelija & SYK-Alumni 2015",
      'img' => 'ali.jpg',
    ],
    [
      'content' => "Opintojeni jälkeen päädyin uraauurtavaa terveysteknologiaa kehittävään yritykseen, jossa olen mukana luomassa uutta menetelmää lasten astman diagnosointiin ja monitorointiin. Työssäni kehitän hengityksen analyysialgoritmeja sekä tutkin kliinistä dataa.",
      'signature' => "Anton – Fuksikippari 2013",
      'img' => 'anton.jpg',
    ],
  ]
?>

<!-- Begin section -->
<div class="page-section bg-image upper" style="background-image: url(<?php bloginfo('template_directory');?>/assets/images/frontpage/circuit_background.svg);">
  <div class="bg-video">
    <video style="object-fit: fill;" autoplay muted playsinline loop>
      <source src="<?php bloginfo('template_directory'); ?>/assets/videos/circuit.webm" type="video/webm">
      <source src="<?php bloginfo('template_directory'); ?>/assets/videos/circuit.mp4" type="video/mp4">
    </video>
  </div>

  <?php if ($meta['dialog-text'][0]) : ?>
  <div class="dialog upper">
    <a href="<?php echo $meta['dialog-link'][0]; ?>"><?php echo $meta['dialog-text'][0]; ?></a>
  </div>
  <?php endif; ?>

  <div class="row padded-row">
    <div class="col-lg-12 title-text text-center">
      <h1 style="font-size: 8em;">Inkubio</h1>
      <h2><?php echo (get_page_language() == 'fi') ? "BIOINFORMAATIO&shy;TEKNOLOGIAN KILTA" : "Guild of bioinformation technology"; ?></h2>
    </div>
  </div>
</div>
<!-- End section -->

<!-- Begin section -->
<div class="page-section">
  <div class="twist upper">

    <div class="row twist-content justify-content-center align-items-center">
      <div class="col-sm-12 col-md-6 col-xl-5 order-1">
        <p class="paragraph-text">
          <?php echo $meta['column-1'][0]; ?>
        </p>
      </div>
      <div class="col-10 col-sm-10 col-md-6 col-xl-4 order-2 no-padding">
        <img
          class="rounded-circle img-fluid front-img"
          src="<?php bloginfo('template_directory'); ?>/assets/images/frontpage/happy-university-students-having-fun.jpg"
        >
      </div>
      <div class="col-sm-12 col-md-6 col-xl-5 order-md-4 order-3">
        <p class="paragraph-text">
          <?php echo $meta['column-2'][0]; ?>
        </p>
      </div>
       <div class="col-10 col-sm-10 col-md-6 col-xl-4 order-md-3 order-4 no-padding">
        <img
          class="rounded-circle img-fluid front-img"
          src="<?php bloginfo('template_directory'); ?>/assets/images/frontpage/serious-university-students-having-serious.jpg"
        >
      </div>
    </div>
  

  </div>
    
  <?php add_template('story-carousel.php', ['data' => $data]); ?>
</div>
<!-- End section -->
<?php get_footer(); ?>
