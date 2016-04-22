<?php get_header(); ?>

<div class="conbg">
    <section class="row conpadding">
<div class="eight columns">


<?php 
    echo do_shortcode("[metaslider id=55]"); 
?>






</div>

<div class="four columns white pbox">

<?php dynamic_sidebar('practice-areas'); ?>

</div>

</section>

<section class="row botpadding">

<div class="four columns gborder white">
<div class="ctitle">
News
</div>

<?php query_posts('category_name=News&posts_per_page=5'); ?>
 <?php 
            if ( have_posts() ) {
                while ( have_posts() ) {
                    the_post();?>
					<!-- <div class="dashed"> <a href="<?php the_permalink(); ?>" class="black"><?php the_title(); ?></a> </div> -->
					
					<div class="dashed"> <div class="black">

<?php if (strlen($post->post_title) > 35) {
echo substr(the_title($before = '', $after = '', FALSE), 0, 35) . '...'; } else {
the_title();
} ?>


</div> </div>
		<?php     } // end while
            } // end if
            ?>
<?php wp_reset_query(); ?>


</div>


<div class="four columns gborder white">
<div class="ctitle">
Blog 
</div>

<?php query_posts('category_name=Blog&posts_per_page=6'); ?>

 <?php 
            if ( have_posts() ) {
                while ( have_posts() ) {
                    the_post();?>
					<!-- <div class="dashed"> <a href="<?php the_permalink(); ?>" class="black"><?php the_title(); ?></a> </div> -->
					
					<div class="dashed"> <div class="black">


<?php if (strlen($post->post_title) > 35) {
echo substr(the_title($before = '', $after = '', FALSE), 0, 35) . '...'; } else {
the_title();
} ?>



</div> </div>
		<?php     } // end while
            } // end if
            ?>
<?php wp_reset_query(); ?>

</div>

<div class="four columns gborder white">
<div class="ctitle">
Social
</div>
<div class="social">

<div class="lfloat"> <img src="https://abs.twimg.com/favicons/favicon.ico" alt="some_text" height="15" width="15" > </div> 
<div class="rfloat"> <img src="http://www.familyfuntasticroc.com/sites/all/themes/funtastic/images/red-arrow.png" alt="some_text" height="8" width="8"></div>
<div class="center">  Follow us on Twitter  </div>




</div>


<div class="social">

<div class="lfloat"> <img src="https://static.xx.fbcdn.net/rsrc.php/yV/r/hzMapiNYYpW.ico" alt="some_text" height="15" width="15" > </div> 
<div class="rfloat"> <img src="http://www.familyfuntasticroc.com/sites/all/themes/funtastic/images/red-arrow.png" alt="some_text" height="8" width="8"></div>
<div class="center">  Join us on Facebook  </div>



</div>

<div class="social">

<div class="lfloat"> <img src="http://blog.lr.org/wp-content/themes/lloyds-register-responsive/assets/i/linkedin.png" alt="some_text" height="15" width="15" > </div> 
<div class="rfloat"> <img src="http://www.familyfuntasticroc.com/sites/all/themes/funtastic/images/red-arrow.png" alt="some_text" height="8" width="8"></div>
<div class="center">  Visit us on Linkedin  </div>



</div>

<div class="social">

<div class="lfloat"> <img src="http://orig04.deviantart.net/3192/f/2014/032/f/0/f0dec438ea30ad66c3a3f3edc9709885-d74q5pt.gif" alt="some_text" height="15" width="15" > </div> 
<div class="rfloat"> <img src="http://www.familyfuntasticroc.com/sites/all/themes/funtastic/images/red-arrow.png" alt="some_text" height="8" width="8"></div>
<div class="center">  Subscribe on Youtube  </div>



</div>

</div>

</section>

</div>
		

<?php get_footer(); ?>