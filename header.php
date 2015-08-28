<!DOCTYPE html>

<html <?php language_attributes(); ?>>
<head>
  
  <meta charset="<?php bloginfo('charset'); ?>">
  <meta name="viewport" content="width=device-width, user-scalable=no">
  <title><?php bloginfo('name');?></title>
  <?php wp_head(); ?>
  <link href='http://fonts.googleapis.com/css?family=Lato:300,400,700,900' rel='stylesheet' type='text/css'>
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
  <script src="http://ajax.aspnetcdn.com/ajax/jquery.validate/1.14.0/jquery.validate.js"></script>
  <script src="http://ajax.aspnetcdn.com/ajax/jquery.validate/1.14.0/additional-methods.js"></script>
  <script src="https://code.jquery.com/ui/1.11.4/jquery-ui.js"></script>
  <script src="<?php bloginfo('template_directory'); ?>/Scripts/slider.js"></script>
  <script src="<?php bloginfo('template_directory'); ?>/Scripts/form.validation.js"></script>
  <script src="<?php bloginfo('template_directory'); ?>/Scripts/gallery.js"></script>
</head>
<body <?php body_class(); ?>>

<header>
   <div class="header-menu">
     <div class="content-width">
       <div class="header-menu_logo"><?php bloginfo('name')?><span>*</span></div>

        <ul class="header-menu_container">
          <?php wp_nav_menu()?>
          <?php 
          $args=array(
              'theme_location' =>'primary');
              ?>
        </ul>
      
    </div>
  </div>
</header>