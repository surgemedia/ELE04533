<header class="banner">
  

    <a class="brand pull-left" href="<?= esc_url(home_url('/')); ?>">
    <?php $logo_image = get_field('logo','options') ?>
  <img width="195" height="auto" src="<?php echo aq_resize($logo_image,195,245,true,true,true); ?>
  " alt="<?php bloginfo('name'); ?>">
  </a>
 <div class="menu">
      <button type="button" class="navbar collapsed">
        <span class="sr-only">Toggle navigation</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
      </div>
  <div class="box">
    <div class="menu-wrap">
      <nav role="navigation">
           
        <div class="navbar-collapse" id="bs-example-navbar-collapse-1">
           <?php
            if (has_nav_menu('primary_navigation')) :
              wp_nav_menu(['theme_location' => 'primary_navigation', 'menu_class' => 'nav']);
            endif;
            ?>

        </div>
       
      </nav>
    </div>    
  </div>
  
</header>
