<?php get_header(); ?>

<?php get_sidebar(); ?>

<div class="col-sm-9 offset-sm-3 col-md-10 offset-md-2">



<?php
$page = get_post();
$content = apply_filters('the_content', $page->post_content); 
echo $content;
?>

<?php add_template("image-title.php", ["bg-img" => "frontpage/kiva.jpg",
                                       "h1" => "Kalja on hyvää",
                                       "p" => "Kimble on erihuono peli",]); ?>

<?php add_template("text-image.php", ["rows" => [ ["Firmat on kivoi", "frontpage/poutsi.jpg"],
                                                  ["Antakaa meille fygyy", "frontpage/poutsi.jpg"],
                                                  ["Muuten\nvedetää teit lättyy", "frontpage/genes.jpg"],
                                                ]]); ?>



</div>
</div>

</div>

<?php get_footer(); ?>

