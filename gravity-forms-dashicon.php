<?php
/*
Plugin Name: Gravity Forms Dashicon
Plugin URI:  http://galengidman.com/plugins/gravity-forms-dashicon/
Description: Replaces the default Gravity Forms menu icon with a dashicon.
Author:      Galen Gidman
Author URI:  http://galengidman.com/
Version:     1.0
*/

/**
 * Adds the necessary CSS to the admin head to replace the GF menu icon with a dashicon.
 */
function gfd_css() {

  ?>

  <style>
    .toplevel_page_gf_edit_forms img { display: none; }
    .toplevel_page_gf_edit_forms > .dashicons-before:before { content: '\f175'; }
  </style>

  <?php

}
add_action( 'admin_head', 'gfd_css' );