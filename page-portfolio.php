<?php
/* Template Name: Portfolio page
*/
get_header();
?>

<?php if (is_page(portfolio)){ 
if(have_posts()) :
  while(have_posts()) : the_post();  
  ?>

<div class="portofolio">
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
    <div class="portofolio_projects">

      <div class="portofolio_chooser">
       <div class="all">All</div>
     
<?php $categories = get_terms( 'categories');
 if ( ! empty( $categories ) && ! is_wp_error( $categories ) ){
     foreach ( $categories as $category ) {

      $category_class= strtolower($category->name);
      $category_class= str_replace(" ", "-", $category_class);

       echo '<div class="'.$category_class.'">'.$category->name.'</div>';  
     }
 }
 ?>
 </div>


<div class="portofolio_gallery">
<?php    
$args = array( 'post_type' => 'Gallery', 'posts_per_page' => 24 );
$loop = new WP_Query( $args );
while ( $loop->have_posts() ) : $loop->the_post();
?>

<?php 
$post_ID= get_the_ID();

$terms = wp_get_post_terms( $post_ID,'categories'); 
  if ( ! empty( $terms ) && ! is_wp_error( $terms ) ){
    $image_classes="";
     foreach ( $terms as $term ) {
        
        $class_name= strtolower($term->name);
        $class_name= str_replace(" ", "-", $class_name);
        $image_classes=$image_classes." project-".$class_name;
     }

     $image_classes=$image_classes." modal";
   }
?>

     <div class="<?php echo $image_classes; ?>" > <?php the_post_thumbnail(); ?></div>
<?php endwhile; ?>
</div>
</div> 
</div>
</div>
</div>
<?php }?>

<?php
get_footer();
?>