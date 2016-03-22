<?php
/**
 * Template Name: Contact us Template
 */
?>

<?php while (have_posts()) : the_post(); ?>
<?php includePart('components/organism/title-jumbotron.php',
				getFeaturedUrl(get_the_id()),
				get_the_title()
				); ?>
<div id="contactus">
<?php 
includePart('components/organism/services.php',
							   get_field('services')
				); ?>
</div>				
<section class="container">
	<div class="col-md-10 col-md-offset-1 content-block text-center">
	<?php the_content(); ?>
	</div>
</section>

<?php includePart('components/organism/form.php',
					get_field('form_title'),
					get_field('form_description'),
					get_field('form')
); ?>
<?php endwhile; ?>


