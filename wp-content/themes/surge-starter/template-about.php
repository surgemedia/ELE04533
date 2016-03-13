<?php
/**
 * Template Name: About Template
 */
?>

<?php while (have_posts()) : the_post(); ?>
<?php includePart('components/organism/title-jumbotron.php',
				getFeaturedUrl(get_the_id()),
				get_the_title()
				); ?>
<section class="container">
	<div class="col-md-10 col-md-offset-1 content-block text-center">
	<?php the_content(); ?>
	</div>
</section>
<?php //team view  https://github.com/surgemedia/MIT04331/blob/master/wp-content/themes/Basetheme/templates/part-team.php?>
<?php includePart('components/organism/form.php'); ?>
<?php endwhile; ?>


