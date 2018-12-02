<?php
/**
 * backend/config.php
 *
 * Author: pixelcave
 *
 * Codebase - Backend papges configuration file
 *
 */

// **************************************************************************************************
// BACKEND INCLUDED VIEWS
// **************************************************************************************************

//                              : Useful for adding different sidebars/headers per page or per section
//$cb->inc_side_overlay           = 'inc/backend/views/inc_side_overlay.php';
$cb->inc_sidebar                = 'inc/backend/views/inc_sidebar.php';
$cb->inc_header                 = 'inc/backend/views/inc_header.php';
$cb->inc_footer                 = 'inc/backend/views/inc_footer.php';


// **************************************************************************************************
// BACKEND MAIN MENU
// **************************************************************************************************

// You can use the following array to create your main menu
$cb->main_nav                   = array(
    array(
        'name'  => '<span class="sidebar-mini-hide">Anasayfa</span>',
        'icon'  => 'si si-cup',
        'url'   => 'index.php'
    ),
);
