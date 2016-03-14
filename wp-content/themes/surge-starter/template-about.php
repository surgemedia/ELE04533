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
 <div class="myCustomWrapper">
    
    <div class="owl-carousel">
 <?php // WP_Query arguments
    $args = array (
      'post_type'         => 'people',
      
      
    );

    // The Query
    $the_query = new WP_Query( $args );
    // The Loop
    
    if ( $the_query->have_posts() ) {

      while ( $the_query->have_posts() ) {
        $the_query->the_post();?>

        <div class="wrap">

          <img  style='background-image:url(<?php  $feat_image = wp_get_attachment_url( get_post_thumbnail_id($post->ID) );
                            echo $feat_image;?>)') alt="" >
        	<div class="small-block text-center">
        		<h2><?php the_title(); ?></h2>
						<small><?php the_field('role') ?></small>
        		<div class="">
						<a class="info-more" href>READ MORE</a>
						<div class="custom-nav row">
              <div class="col-xs-6">
                <div class="customPrevBtn">PREVIOUS</div>
              </div>
              <div class="col-xs-6">
                <div class="customNextBtn">NEXT</div>
              </div>
            </div>
            </div>
						<div class="content"> <?php the_content(); ?></div>

						<a class="info-close" href=""><i class="icon-close"></i></a>
        	</div>
        </div>

        
    <?php  
      
      
    }
   ?>

   <?php
    } else {
      // no posts found
    }
    /* Restore original Post Data */
    wp_reset_postdata();
    ?>

   </div>
<?php includePart('components/organism/form.php'); ?>
<?php endwhile; ?>


