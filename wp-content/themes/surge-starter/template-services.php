<?php
/**
 * Template Name: Service Template
 */
?>

<?php while (have_posts()) : the_post(); ?>
<?php includePart('components/organism/title-jumbotron.php',
				getFeaturedUrl(get_the_id()),
				''
				); ?>

<?php includePart('components/molecule/single-service.php',
				'eletrik-icon-escalator',
				'pink-bg',
				get_the_title(),
				get_the_content(),
				'',
				'',
				'col-md-12'
				 ) ?>
<?php //team view ?>

<?php includePart('components/organism/form.php'); ?>
<?php endwhile; ?>


