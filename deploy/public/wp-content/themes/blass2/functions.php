<?php
if ( function_exists('register_sidebar') )
    register_sidebar(array(
       'before_widget' => '',
       'after_widget' => '<br />',
 	 'before_title' => '<h2>',
       'after_title' => '</h2>',
    ));

?>