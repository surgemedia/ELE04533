<?php
/**
 * Template Name: Service Template
 */
?>

<?php while (have_posts()) : the_post(); ?>
<?php includePart('components/organism/title-jumbotron.php',
				aq_resize(getFeaturedUrl(get_the_id(),'full'),1920,400,true,true,true),
				''
				); ?>

<?php includePart('components/molecule/single-service.php',
				get_field('icon'),
				get_field('color'),
				get_the_title(),
				get_the_content(),
				'',
				'',
				'col-md-12'
				 ) ?>

<?php includePart('components/organism/form.php',
					get_field('form_title'),
					get_field('form_description'),
					get_field('form')
); ?>
<?php endwhile; ?>
