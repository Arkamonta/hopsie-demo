<?php
/**
 * Default Sidebar Template
 *
 */
?>

<aside class="sidebar cell auto show-for-medium" role="complementary">

    <?php
    if ( is_active_sidebar( 'sidebar1' ) ) :
        dynamic_sidebar( 'sidebar1' );
    endif;
    ?>

</aside>
