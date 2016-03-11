<header class="banner">
  

    <a class="brand pull-left" href="<?= esc_url(home_url('/')); ?>">
    <?php $logo_image = '/ELE04533/wp-content/uploads/2016/03/logo.png'; ?>
  <img width="195" height="auto" src="<?php echo $logo_image; //aq_resize($logo_image,195,345,true,true,true); ?>
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
