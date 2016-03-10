<header class="banner">
  <div class="container-fluid">
  

    <a class="brand pull-left" href="<?= esc_url(home_url('/')); ?>">
    <?php $logo_image = 'http://localhost/ELE04533/wp-content/uploads/2016/03/logo.png'; ?>
  <img width="195" height="auto" src="<?php echo $logo_image; //aq_resize($logo_image,195,345,true,true,true); ?>
  " alt="<?php bloginfo('name'); ?>">
  </a>

    <nav class="nav-primary pull-right">
      <?php
      if (has_nav_menu('primary_navigation')) :
        wp_nav_menu(['theme_location' => 'primary_navigation', 'menu_class' => 'nav']);
      endif;
      ?>
    </nav>
  </div>
</header>
