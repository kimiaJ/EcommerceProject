<?php
include get_template_directory().'/feed.class.php';

add_action( 'after_switch_theme', 'check_theme_dependencies', 10, 2 );

function check_theme_dependencies( $oldtheme_name, $oldtheme ) {

  if (!class_exists('hwpfeed')) :

    switch_theme( $oldtheme->stylesheet );
	
      return false;

  endif;

}