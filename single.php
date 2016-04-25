<?php get_header(); ?>
    <section class="row conpadding">
		
     <div class="eight columns white blogpadding genborder">
            <?php 
			if (have_posts()) {        
				while ( have_posts() ) {
					the_post();?> 
                    <h3 class="btitle"><?php the_title(); ?></h3>
                    <div class="published"> Published on <?php echo get_the_date(); ?> </div>
                    <br />
                    <br />
					<?php if ( has_post_thumbnail() ) {
						?> <div class="single-post-thumbnail">
						<?php the_post_thumbnail('large');	?>
					</div>
					 <?php
					
				} 
				the_content();
				} // end while;
            } // endif;  
			?> 
        </div>
	

            <?php get_sidebar(); ?>


    </section>
<?php get_footer(); ?>