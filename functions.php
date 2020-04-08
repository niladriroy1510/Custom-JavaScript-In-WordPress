<?php

//How To Load Custom JavaScript In WordPress


/**
Plugin Name: Header Scripts
*/


function my_header_scripts(){
  ?>
  <script>alert( 'Hi Roy' ); </script>
  <?php
}
add_action( 'wp_head', 'my_header_scripts' );




/**
Plugin Name: Footer Scripts
*/


function my_footer_scripts(){
  ?>
  <script>alert( 'Hi Roy' ); </script>
  <?php
}
add_action( 'wp_footer', 'my_footer_scripts' );