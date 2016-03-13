<?php
/**
 * Template Name: Home Template
 */
?>

<?php while (have_posts()) : the_post(); ?>
<?php includePart('components/organism/jumbotron.php'); ?>
<?php includePart('components/organism/services.php'); ?>
<?php includePart('components/organism/form.php'); ?>
<?php endwhile; ?>


