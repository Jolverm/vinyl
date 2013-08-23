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

   /* Ver Más Viniles */

   function trae_mas(){
         
        $cat = $_POST['cat'];
        $offset = $_POST['offset'] * 25;

        query_posts('cat='.$cat.'&tag__not_in=22&post_per_page='.$offset);

        if ( have_posts() ) : while ( have_posts() ) : the_post();

        $url = wp_get_attachment_url( get_post_thumbnail_id() );

        ?>
        <li> 
            <div data-alt="img03" data-description="<h3><?php the_title(); ?></h3>" data-max-width="1800" data-max-height="1350">
                <div data-src="<?php echo $url; ?>" data-min-width="1300"></div>
                <div data-src="<?php echo $url; ?>" data-min-width="1000"></div>
                <div data-src="<?php echo $url; ?>" data-min-width="700"></div>
                <div data-src="<?php echo $url; ?>" data-min-width="300"></div>
                <div data-src="<?php echo $url; ?>" data-min-width="200"></div>
                <div data-src="<?php echo $url; ?>" data-min-width="140"></div>
                <div data-src="<?php echo $url; ?>"></div>
                <noscript>
                    <img src=<?php bloginfo( 'template_directory' ); ?>img/cama.jpg" alt="img03"/>
                </noscript>
            </div>
                
        </li>
        
        <?php

        endwhile; endif;
        
        die();
        
     }
     
     /*
     * Se inicializan las funciones por defaul
     */

     add_action('wp_ajax_nopriv_trae_mas', 'trae_mas');
     add_action('wp_ajax_trae_mas', 'trae_mas');


?>
