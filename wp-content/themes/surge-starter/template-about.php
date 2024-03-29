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

<?php 
if(wp_count_posts( 'people' )->publish > 0){
includePart('components/organism/owl-slider.php'); 
}
?>
<?php includePart('components/organism/form.php',
          get_field('form_title'),
          get_field('form_description'),
          get_field('form')
); ?>
<?php endwhile; ?>


