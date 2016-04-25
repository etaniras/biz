<?php 
/* Template Name: Search Page */

get_header(); ?>

    <div class="row conpadding">
        <div class="eight columns">
            <h1 class="latest"> <?php printf(__('Search Results for: %s '), '<span class="results">' . get_search_query() . '</span>' ); ?></h1> 
  
        <?php if (have_posts()) :
                while (have_posts()) : the_post(); ?>                                   
                      <div class="blogpadding blogposts">  
                <h2 class="btitle"><?php the_title(); ?></h2>
                    <?php the_excerpt();?> 
                    <a href="<?php the_permalink(); ?>"> Read More.... </a>  
              </div>   
                 


<?php endwhile; else : ?>
<h1><?php _e( 'Nothing Found' ); ?></h1>
	<p><?php _e( 'Sorry, but nothing matched your search criteria. Please try again with different search terms.' ); ?></p>
<?php endif; ?>
   
        </div>

            <?php get_sidebar(); ?>
            
         
          
    </div>

<?php get_footer(); ?>