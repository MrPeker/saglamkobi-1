<?php
/**
 * backend_boxed/config.php
 *
 * Author: pixelcave
 *
 * Codebase - Backend Boxed pages configuration file
 *
 */

// **************************************************************************************************
// BACKEND BOXED INCLUDED VIEWS
// **************************************************************************************************

//                              : Useful for adding different sidebars/headers per page or per section
$cb->inc_side_overlay           = false;
$cb->inc_sidebar                = 'inc/backend_boxed/views/inc_sidebar.php';
$cb->inc_header                 = 'inc/backend_boxed/views/inc_header.php';
$cb->inc_footer                 = 'inc/backend_boxed/views/inc_footer.php';


// **************************************************************************************************
// BACKEND BOXED SIDEBAR
// **************************************************************************************************

// true                         : Visible Sidebar (screen width > 991px)
// false                        : Hidden Sidebar (screen width > 991px)
$cb->l_sidebar_visible_desktop  = false;

// true                         : Dark themed Sidebar
// false                        : Light themed Sidebar
$cb->l_sidebar_inverse          = true;


// **************************************************************************************************
// BACKEND BOXED HEADER
// **************************************************************************************************

// true                         : Fixed Header
// false                        : Static Header
$cb->l_header_fixed             = true;

// ''                           : Classic Header style
// 'modern'                     : Modern Header style
// 'inverse'                    : Dark themed Header (works only with classic Header style)
// 'glass'                      : Light themed Header with transparency by default (absolute position,
//                                perfect for light images underneath - solid light background
//                                on scroll if the Header is also set as fixed)
// 'glass-inverse'              : Dark themed Header with transparency by default (absolute position,
//                                perfect for dark images underneath - solid dark background
//                                on scroll if the Header is also set as fixed)
$cb->l_header_style             = 'inverse';


// **************************************************************************************************
// BACKEND BOXED MAIN MENU
// **************************************************************************************************

// You can use the following array to create your main menu
$cb->main_nav                   = array(
    array(
        'name'  => 'Anasayfa',
        'icon'  => 'si si-compass',
        'url'   => 'index.php'
    ),
);
