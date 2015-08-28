<?php
/* Template Name: Services page
*/
get_header();
?>

<?php if (is_page(services)){ 

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
    <?php    
$args = array( 'post_type' => 'Services', 'posts_per_page' => 12 );
$loop = new WP_Query( $args );
while ( $loop->have_posts() ) : $loop->the_post();
?>
     <div class="services_link">
      <div class="services_image">
        <?php the_post_thumbnail(); ?>
      </div>



      <div class="services_textbox">
        <h2><?php the_title(); ?></h2>
        <?php the_content(); ?>
      </div>
    </div>
  <?php endwhile; ?>

  </div>
</div>
</div>
<?php }?>

<?php
get_footer();
?>