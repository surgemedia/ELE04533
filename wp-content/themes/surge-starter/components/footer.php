<footer id="footer" class="content-info">
  <div class="container">
	<span class="col-xs-12 col-sm-6 col-md-6 pull-left"> &copy; <?php echo date('Y'); ?> <?php bloginfo('name'); ?></span>
    <span class="col-xs-12 col-sm-6 col-md-6">
      <a class="pull-right" href="facebook.com"><i class="eletrik-icon-facebook"></i></a>
      <?php /*
      // check if the repeater field has rows of data
      if( have_rows('social_media','option') ):
          
        // loop through the rows of data
          while ( have_rows('social_media','option') ) : the_row();
              
              if (get_sub_field('visible')) : 
               
                if("facebook"==get_sub_field('name')){ $icon="fb";}
                if("twitter"==get_sub_field('name')){ $icon="tw";}?>
                  
                  <a href="<?php echo get_sub_field('url');?>" target="_blank" class="">
                    <i class="icon-<?php echo $icon?>"></i>
                  </a>
      <?php   endif;
          endwhile;
      else :
          // no rows found
      endif;
       */
      ?>
    </span>

  </div>
</footer>
