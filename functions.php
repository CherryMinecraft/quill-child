<?php
add_action( 'wp_enqueue_scripts', 'enqueue_parent_styles' );

function enqueue_parent_styles() {
   wp_enqueue_style( 'parent-style', 'https://core-cdn.cherryminecraft.com/css/core/default/style.min.css' );
}
