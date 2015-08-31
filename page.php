<?php
get_header();
?>


<div class="services">
	<div class="content-width">
		<?php 
		if(have_posts()) :
			while(have_posts()) : the_post(); ?> 
				<h1><?php $title= get_the_title();
				$title= ucfirst(strtolower($title));
				print $title;
				?></h1>
				<div class="services_description">
					<?php the_content(); ?>
				</div>
			<?php
			endwhile;
		endif; ?>
		</div>
	</div>



	<?php
	get_footer();
	?>