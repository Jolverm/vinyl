<!DOCTYPE html>
<html lang="es">
    <head>
        <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1"> 
        <meta name="viewport" content="width=device-width, initial-scale=1.0"> 
        <meta charset="<?php bloginfo( 'utf-8' ); ?>">
        <title><?php wp_title(''); ?></title>
       
        <link href="<?php bloginfo('template_directory');?>/css/catalogo.css" rel="stylesheet">
        <link rel="stylesheet" type="text/css" href="<?php bloginfo('template_directory');?>/css/component.css" />
	    <link rel="stylesheet" type="text/css" href="<?php bloginfo( 'template_directory' ); ?>/css/style.css"/>
        <link rel="stylesheet" media="all" href="<?php bloginfo( 'template_directory' ); ?>/css/lightbox.css" />
        <script src="<?php bloginfo( 'template_directory' ); ?>/js/modernizr.custom.70736.js"></script>
        <script src="<?php bloginfo( 'template_directory' ); ?>/js/modernizr.custom.js"></script>
     </head>
   
        <?php $colores = array('e1a403', 'ecdd16', 'f2e823', '551412', '892015', 'bc3824', 'd24b18', 'f6871d', '4a247b', '900a6f', 'd5027e', 'ee78be', '070e47', '002a9b', '1a78bc', '509cca', '0b7a70', '92d5cc', '043920', '005322', '016f20', '7da848', '342013', 'a35011', 'c2b392', 'e1d092', 'cd8b18' ); ?>
        <?php $c = rand(0, 26) ?>
    
    <div class="header">            
            
            	<?php get_template_part('logo'); ?>  
                <?php get_template_part('menu','principal'); ?>   
                <?php get_template_part('paleta'); ?>   
    </div><!--fin de header   -->
    
    <body style="background-color: #<?php echo $colores[$c]; ?>;">
        
            <div class="container">
            <ul class="grid effect-2" id="grid">
            <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
            <?php if ( has_post_thumbnail() ) ?>
            <?php $imagen = wp_get_attachment_image_src( get_post_thumbnail_id($post->ID), 'large' ); ?>
            <?php $miniatura = wp_get_attachment_image_src( get_post_thumbnail_id($post->ID), 'thumbnail' ); ?>
            <?php $src1 = $imagen['0']; ?>
            <?php $src2 = $miniatura['0']; ?>
                
            <li><a href="<?php echo $src1 ?>" data-lightbox="categoria" title="<?php the_title(); ?>"><img src="<?php echo $src1 ?>" alt="<?php the_title();?>"/></a>
            </li>
			<?php endwhile; else: ?>
            <p><?php _e('Lo sentimos la categoria esta vacia.'); ?></p>
            <?php endif; ?>
            </ul>
            </div>
            

		<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.8.2/jquery.min.js"></script>
		<script src="<?php bloginfo( 'template_directory' ); ?>/js/masonry.pkgd.min.js"></script>
		<script src="<?php bloginfo( 'template_directory' ); ?>/js/imagesloaded.js"></script>
		<script src="<?php bloginfo( 'template_directory' ); ?>/js/classie.js"></script>
		<script src="<?php bloginfo( 'template_directory' ); ?>/js/AnimOnScroll.js"></script>
        <script src="<?php bloginfo( 'template_directory' ); ?>/js/lightbox-2.6.min.js"></script>

		
		<script>
			new AnimOnScroll( document.getElementById( 'grid' ), {
				minDuration : 0.4,
				maxDuration : 0.7,
				viewportFactor : 0.2
			} );
		</script>
		<script>
        $("#hidr").click(function () {
        $("span").slideToggle("slow");
        });
    	</script>
	</body>
</html>