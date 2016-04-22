<!-- BEGINNING OF FOOTER - END SECTION CONTENT -->
            <footer class="row footer">
              <b>
<?php wp_nav_menu(array(
			'menu' => 'Footer Menu',
			'sort_column' => 'menu_order',
			'container_class' => 'blank-menu-footer'
			));?>
		
</b>


<!--  <div class="four columns white">
                    <?php dynamic_sidebar('footer-left'); ?>
test
                </div>
				<div class="four columns">
                    <?php dynamic_sidebar('footer-middle'); ?>
test middle
                </div>
				<div class="four columns">
                    <?php dynamic_sidebar('footer-right'); ?>

test right
                </div> -->




            </footer>
        </div> <!-- ends container -->
    <?php wp_footer(); ?>
    </body>
</html>