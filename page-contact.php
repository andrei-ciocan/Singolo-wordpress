<?php
/* Template Name: Contact page
*/
get_header();
?>
<div class="get-a-quote">
  <div class="content-width">
    <?php 
    if(have_posts()) :
      while(have_posts()) : the_post();  
    ?>
        <h1><?php $title= get_the_title();
        $title= ucfirst(strtolower($title));
        print $title; ?>
        </h1>
        <?php the_content(); ?>
        <form class="signupForm" action="<?php bloginfo('template_directory'); ?>/update_database.php" method="post">
          <input type="text" name="name" placeholder="Name (Required)"><br>
          <input type="email" name="email" placeholder="Email (Required)"><br>
          <input type="text" name="subject" placeholder="Subject"><br>
          <textarea name="description" placeholder="Describe your project in detail..."></textarea><br>
          <input type="submit" value="Submit" name="submit">
        </form>
          <script src="<?php bloginfo('template_directory'); ?>/Scripts/form.validation.js"></script>
    <?php
      endwhile;
    endif;
    
    $args = array( 'post_type' => 'Contact Information', 'posts_per_page' => 1 );
    $loop = new WP_Query( $args );
    while ( $loop->have_posts() ) : $loop->the_post();
    ?>
      <div class="get-a-quote_contact-information">
        <h2><?php the_title(); ?></h2>
        <?php the_content(); ?>
      </div>
  <?php 
    endwhile; ?>
  </div>
</div>

<?php
get_footer();
?>