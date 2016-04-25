<!DOCTYPE html>
<html lang="en" class="conbg">
    <head>
<link href='https://fonts.googleapis.com/css?family=Roboto:400,500,700,900' rel='stylesheet' type='text/css'>
		<meta charset="UTF-8">
        <title><?php bloginfo('name'); ?></title>

        <link rel="stylesheet" type="text/css" href="<?php bloginfo('stylesheet_url'); ?>" />
   <?php wp_head(); ?>
   </head>
    <body>
       <div class="container"> 
            <header class="row hcolor">
                <div class="eight columns">


<a href="http://webdevclass.tk/biz/">

<?php dynamic_sidebar('logo'); ?>

</a>
                <!--    <h1><a href="<?php bloginfo('url'); ?>"><?php bloginfo('name'); ?></a></h1>
                    <h2><?php bloginfo('description'); ?></h2> -->



                </div>

<div class="three columns">

<img src="http://i65.tinypic.com/2e4lqmp.png" alt="Holland & Knight contact" style="margin-top: 20px; margin-bottom: 10px; margin-left: 25px;  " >


</div>

			<!--	<div class="three columns">
					<?php get_search_form(); ?>
				<div> -->
            </header>
<!-- END OF HEADER - Add Menu here -->
<div class="row">
<div class="border row">
	<div class="nine columns blue">


		 <?php wp_nav_menu(array(
			'menu' => 'Main Menu',
			'sort_column' => 'menu_order',
			'container_class' => 'blank-menu-header'
			));?> 
		</div>

<div class="three columns">
<div class="sbar"> <!-- three columns  -->

<?php get_search_form(); ?>


</div>
</div>
</div>

	</div> 
<!-- END OF HEADER - Add Menu here -->
