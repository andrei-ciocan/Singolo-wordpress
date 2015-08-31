<?php
/* Template Name: Portfolio post
*/
get_header();
?>
<div class="midpage">
	<div class="project">
		<?php 
		if(have_posts()) :
			while(have_posts()) : the_post(); ?> 
			<h1><?php the_title(); ?></h1>
			<?php the_post_thumbnail(); ?>
			<div class="project_description"> <?php the_content(); ?></div>
		<?php
			endwhile;
		endif; ?>
	</div>
</div>

<?php
get_footer();
?>