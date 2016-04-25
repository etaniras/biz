<?php /*
Template Name: Blog
*/ ?>


<?php get_header(); ?>
<?php query_posts('category_name=Blog&post_type=post&post_status=publish&posts_per_page=6&paged='. get_query_var('paged')); ?>

    <div class="row conpadding">
        <div class="eight columns">
        <div class="latest"> Latest Blog Posts from Holland & Knight: </div>
        <br />
            <?php if (have_posts()) : 
                while (have_posts()) : the_post(); ?> 
                <div class="blogposts blogpadding">    <h2> <a href="<?php the_permalink(); ?>" class="btitle"> <?php the_title(); ?></h2> </a> 
                
              <div class="published"> Published on <?php echo get_the_date(); ?> </div>
                <br />
                   <?php the_excerpt();?> 
                    <a href="<?php the_permalink(); ?>"> Read More.... </a> 
                    </div>
                    
              <?php  endwhile;
            endif; ?>


  <!-- Navigation -->
            <div class="navigation">
                <span class="newer"><?php previous_posts_link(__('« Newer','example')) ?></span> <span class="older"><?php next_posts_link(__('Older »','example')) ?></span>
            </div>
<!-- End Navigation-->

        </div>

         <?php get_sidebar(); ?>
     
    </div>
<?php get_footer(); ?>