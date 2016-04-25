/* template name: Blog page */

<?php get_header(); ?>
    
	<div class="row">
<!-- begin sidebar -->
<div class="three columns">

blog page
	<?php get_sidebar(); ?>
</div>
<!-- end sidebar -->
	<div class="nine columns">
		<?php if (have_posts()) :
			while (have_posts()) : the_post(); ?>
				<h2><?php the_title(); ?></h2>
				<?php the_content();
			endwhile;
		endif; ?>
	</div>
</div>

<?php get_footer(); ?>
	