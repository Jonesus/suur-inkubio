<?php get_header(); ?>

<?php add_template("image-title.php", ["bg-img" => "frontpage/etu.jpg",
                                       "h1" => "Suur-Inkubio",
                                       "p" => "Gotta get dat 75 fuksia",]); ?>

<?php add_template("text-image.php", ["rows" => [ ["teksti1", "frontpage/genes.jpg"],
                                                  ["teksti2", "frontpage/poutsi.jpg"],
                                                  ["teksti1", "frontpage/genes.jpg"],
                                                  ["teksti2", "frontpage/poutsi.jpg"],
                                                  ["teksti2", "frontpage/poutsi.jpg"],
                                                ]]); ?>

<?php add_template("image-title.php", ["bg-img" => "frontpage/kiva.jpg",
                                       "h1" => "Kalja on hyvää",
                                       "p" => "Kimble on huono peli",]); ?>



<?php get_footer(); ?>