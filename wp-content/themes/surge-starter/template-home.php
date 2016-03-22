<?php
/**
 * Template Name: Home Template
 */
?>

<?php while (have_posts()) : the_post(); ?>
<?php includePart('components/organism/jumbotron.php',
		get_field('jumbotron_title'),
		getFeaturedUrl(get_the_id()),
		get_field('big_pink_button_text'),
		get_field('big_pink_button_link'),
		get_field('big_clear_button_text'),
		get_field('big_clear_button_link')


	);
?>
<div id="contactus">
<?php includePart('components/organism/services.php',
							   get_field('services')
				); ?>
</div>
<div class="col-md-12">
<?php the_content() ?>
</div>
<?php includePart('components/organism/form.php',
					get_field('form_title'),
					get_field('form_description'),
					get_field('form')
); ?>
<?php endwhile; ?>