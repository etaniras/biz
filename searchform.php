<form role="search" method="get" action="<?php echo home_url( '/' ); ?>">
    <label>

        <input type="search"  class="search-field" placeholder="<?php echo esc_attr_x( 'Search …', 'placeholder' ) ?>" value="<?php echo get_search_query() ?>" name="s"  ?>
    </label>

</form>