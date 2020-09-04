<?php

/* Collection of Walker classes */ 

class Walker_Nav_Primary extends Walker_Nav_Menu  {

    function start_lvl( &$output, $depth = 0 , $args = NULL ){ //starting ul
        $indent     = str_repeat( "\t", $depth );  
        $submenu    = ( $depth > 0 ) ? ' sub-menu' : ' ';
        $output    .= "\n$indent<ul class=\"dropdown-menu$submenu depth_$depth\">\n";
    }



/*
    function start_el(){ //starting li a span

    }

    function end_el(){ // closing li a span

    }

    function end_lvl(){ // closing ul

    }
*/

}