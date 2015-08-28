<?php
get_header();
?>

<?php 

if(have_posts()) :
  while(have_posts()) : the_post(); ?> 
<div class="services">
  <div class="content-width">
    <h1><?php $title= get_the_title();
              $title= ucfirst(strtolower($title));
              print $title;
               ?></h1>
    <div class="services_description">
   <?php the_content();
    endwhile;
    endif; ?>
    </div>
    <div class="services_links">
     <div class="services_link">
      <div class="services_image">
        <img src="<?php bloginfo('template_directory'); ?>/Images/Ellipse.png">
        <img class="services_icon services_pen"src="<?php bloginfo('template_directory'); ?>/Images/pen.png">
      </div>

      <div class="services_textbox">
        <h2> Custom Design</h2>
        <p>Curabitur vestibulum eget mauris quis laoreet. Phasellus in quam laoreet, viverra lacus ut, ultrices velit.</p>
      </div>
    </div>
    <div class="services_link">
      <div class="services_image">
        <img src="<?php bloginfo('template_directory'); ?>/Images/Ellipse.png">
        <img class="services_icon services_bulb"src="<?php bloginfo('template_directory'); ?>/Images/bulb.png">
      </div>

      <div class="services_textbox">
        <h2> Inovative Ideas</h2>
        <p>Quisque luctus, quam eget molestie commodo, lacus purus cursus purus, nec rutrum tellus dolor id lorem.</p>
      </div>
    </div>
    <div class="services_link">
      <div class="services_image">
        <img src="<?php bloginfo('template_directory'); ?>/Images/Ellipse.png">
        <img class="services_icon services_heart"src="<?php bloginfo('template_directory'); ?>/Images/heart.png">
      </div>

      <div class="services_textbox">
        <h2> Love Is The Answer</h2>
        <p>Nulla sed nunc et tortor luctus faucibus. Morbi at aliquet turpis, et consequat felis. Quisque condimentum.</p>
      </div>
    </div>

    <div class="services_link">
      <div class="services_image">
        <img src="<?php bloginfo('template_directory'); ?>/Images/Ellipse.png">
        <img class="services_icon services_phone"src="<?php bloginfo('template_directory'); ?>/Images/phone.png">
      </div>

      <div class="services_textbox">
        <h2> Responsive Layout</h2>
        <p>Sed porttitor placerat rhoncus. In at nunc tellus. Maecenas blandit nunc ligula. Praesent elit leo.</p>
      </div>
    </div>
    <div class="services_link">
      <div class="services_image">
        <img src="<?php bloginfo('template_directory'); ?>/Images/Ellipse.png">
        <img class="services_icon services_bubble"src="<?php bloginfo('template_directory'); ?>/Images/bubble.png">
      </div>

      <div class="services_textbox">
        <h2> 24 / 7 Support</h2>
        <p>Vivamus vel quam lacinia, tincidunt dui non, vehicula nisi. Nulla a sem erat. Pellentesque egestas venenatis lorem .</p>
      </div>
    </div>
    <div class="services_link">
      <div class="services_image">
        <img src="<?php bloginfo('template_directory'); ?>/Images/Ellipse.png">
        <img class="services_icon services_star"src="<?php bloginfo('template_directory'); ?>/Images/star.png">
      </div>

      <div class="services_textbox">
        <h2> Feel Like A Star</h2>
        <p>Quisque hendrerit purus dapibus, ornare nibh vitae, viverra nibh. Fusce vitae aliquam tellus.</p>
      </div>
    </div>
  </div>
</div>
</div>


<?php
get_footer();
?>