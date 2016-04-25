<?php get_header(); ?>
    
	<div class="row conpadding">

	<div class="eight columns blogpadding blogposts">
		<?php if (have_posts()) :
			while (have_posts()) : the_post(); ?>
				<h2> <div class="btitle"> <?php the_title(); ?></h2> </a> 



				<span class="lheight"> <?php the_content();
			endwhile;
		endif; ?> </span>
	</div>

<!-- begin sidebar -->

	<?php get_sidebar(); ?>

<!-- end sidebar -->


</div>

<?php get_footer(); ?>
	
	