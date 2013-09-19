<?php 

add_action('atc_precontent', 'atc_precontent_slider'); 

function atc_precontent(){} 

function atc_precontent_slider(){ 
  wooslider( array( 'slider_type' => 'home-page', 'smoothheight' => 'true' ) );
} 
?>