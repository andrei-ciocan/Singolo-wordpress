<?php
/* Template Name: About page
*/
get_header();
?>

<?php if (is_page(about)){ 
if(have_posts()) :
  while(have_posts()) : the_post();  
  ?>
<div class="about">
  <div class="midpage">
    <div class="page_title">
       <h1><?php $title= get_the_title();
              $title= ucfirst(strtolower($title));
              print $title;
               ?></h1>
       <?php the_content();
    endwhile;
    endif; ?>
    </div>


<?php    
$args = array( 'post_type' => 'About Us', 'posts_per_page' => 10 );
$loop = new WP_Query( $args );
while ( $loop->have_posts() ) : $loop->the_post();
?>
    <div class="about_person">
    <?php the_post_thumbnail(); ?>
      <h3><?php the_title(); ?></h3>
      <?php the_content(); ?>
      <div class="social-media">
        <div><img src="<?php bloginfo('template_directory'); ?>/Images/facebook.png" alt=""></div>
        <div><img src="<?php bloginfo('template_directory'); ?>/Images/google+.png" alt=""></div>
        <div><img src="<?php bloginfo('template_directory'); ?>/Images/twitter.png" alt=""></div>
        <div><img src="<?php bloginfo('template_directory'); ?>/Images/linkedin.png" alt=""></div>
      </div>
    </div>
    <?php 
endwhile;
?>
</div>
</div>

<?php }?>

<?php
get_footer();
?>