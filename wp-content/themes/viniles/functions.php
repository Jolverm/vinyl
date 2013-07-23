<?php

/* Admite thumbnails */
   
   /*
    *  Se activa la opción para la imagen destacada (thumbnails).
    */

   if ( function_exists( 'add_theme_support' ) ) {
       add_theme_support( 'post-thumbnails' );
       set_post_thumbnail_size( 728,  728); // default Post Thumbnail dimensions   
   }
   
   if ( function_exists( 'add_image_size' ) ) {
       
       add_image_size( 'primer-cuadro', 1105, 660, false );
       
   }

?>
