<?php
get_header();
?>

<div class="slider-container">
	<div class="slider">
		<ul class="slides">
      <?php 
      $repeat=0;
      $first_image="";   
      $args = array( 'post_type' => 'Slides');
      $loop = new WP_Query( $args );

      while ( $loop->have_posts() ) : $loop->the_post(); ?>

      <div class="img-container"><li class ="slide">
        <div class="slider_image"> <?php
          if($repeat==0){ 
            $first_image=get_the_post_thumbnail();
            $repeat=1;	
          }
          the_post_thumbnail(); ?> 
        </div>
      </li>
    </div>
  <?php endwhile; ?>

  <div class="img-container"><li class ="slide"><div class="slider_image"><?php echo $first_image; ?> </div></li></div>
</ul>
</div>
<img class="slider_arrow-left" src="<?php bloginfo('template_directory'); ?>/Images/chev.png">
<img class="slider_arrow-right" src="<?php bloginfo('template_directory'); ?>/Images/chev.png">	
</div>

<?php
get_footer();
?>