<?php //team view  https://github.com/surgemedia/MIT04331/blob/master/wp-content/themes/Basetheme/templates/part-team.php?>
<div class="team-section">
 <div class=" container-fluid myCustomWrapper">
    <div class="owl-carousel">
 <?php // WP_Query arguments
    $args = array ( 'post_type'         => 'people', );
    $the_query = new WP_Query( $args );
    if ( $the_query->have_posts() ) {  while ( $the_query->have_posts() ) {  $the_query->the_post();?>
        <div class="wrap">
            <?php  includePart('components/molecule/owl-slide.php',
                                get_the_title(),
                                aq_resize(getFeaturedUrl(get_the_id(),'full'),600,600,true,true,true),
                                get_the_content());
                              ?>
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
</div>