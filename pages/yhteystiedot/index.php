<!-- Necessary 'import' for all subpages -->
<?php require('../../../../../wp-blog-header.php'); ?>


<?php get_header(); ?>

<?php 
    $rows = get_persons_table("hallitus");
    $modrows = split_to_rows($rows, 4);
    add_template("image-row.php", ["rows" => $modrows]);
?>


<?php get_footer(); ?>