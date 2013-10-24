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
        <?php $colores = array('e1a403', 'ecdd16', 'f2e823', '551412', '892015', 'bc3824', 'd24b18', 'f6871d', '4a247b', '900a6f', 'd5027e', 'ee78be', '070e47', '002a9b', '1a78bc', '509cca', '0b7a70', '92d5cc', '043920', '005322', '016f20', '7da848', '342013', 'a35011', 'c2b392', 'e1d092', 'cd8b18' ); ?>
        <?php $c = rand(0, 26); ?>
        <style type="text/css">
    		body
    		{
    			background-color: #<?php echo $colores[$c]; ?>;
    		}
    	</style>
        <script src="<?php bloginfo( 'template_directory' ); ?>/js/modernizr.custom.70736.js"></script>
        <script src="<?php bloginfo( 'template_directory' ); ?>/js/modernizr.custom.js"></script>
        </head>
    <div class="header">
    	<?php get_template_part('logo'); ?>  
        <?php get_template_part('menu','principal'); ?>   
        <?php get_template_part('paleta'); ?>   
    </div><!--fin de header   -->
    <body>
        
            <div class="container">
            
		            <ul class="grid effect-2" id="grid">

		            	<?php $category = get_query_var('category_name'); ?>
						<?php //Comienza vmas ?>
		        		<?php query_posts('posts_per_page=25&tag=vmas&category_name='.$category); ?>
			            <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
			            <?php if ( has_post_thumbnail() ): ?>
			            <?php $imagen = wp_get_attachment_image_src( get_post_thumbnail_id($post->ID), 'large' ); ?>
			            <?php $miniatura = wp_get_attachment_image_src( get_post_thumbnail_id($post->ID), 'thumbnail' ); ?>
			            <?php $src1 = $imagen['0']; ?>
			            <?php $src2 = $miniatura['0']; ?>
			            <li>
			            	<a href="<?php echo $src1 ?>" data-lightbox="categoria" title="<?php the_title(); ?>">
		            			<img src="<?php echo $src1 ?>" alt="<?php the_title();?>"/>
			            	</a>
			            	<div class="hola">
			            		<a href="<?php bloginfo('wpurl'); ?>/contacto?vn=<?php the_title(); ?>" target="_blank">
			            			<?php the_title(); ?> | Pedir éste vinil
			            		</a>
			            	</div>
			            </li>
			            <?php endif; ?>
						<?php endwhile; else: ?>
			            <p><?php _e('Lo sentimos la categoria esta vacia.'); ?></p>
			            <?php endif; ?>
			            <?php //Terminan vmas ?>

			            <?php //Comienza no-vmas ?>
		        		<?php query_posts( array ( 'category_name' => $category, 'posts_per_page' => -1, 'tag__not_in' => 22) ); ?>
			            <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
			            	<?php if ( has_post_thumbnail() ): ?>
					            <?php $imagen = wp_get_attachment_image_src( get_post_thumbnail_id($post->ID), 'large' ); ?>
					            <?php $miniatura = wp_get_attachment_image_src( get_post_thumbnail_id($post->ID), 'thumbnail' ); ?>
					            <?php $src1 = $imagen['0']; ?>
					            <?php $src2 = $miniatura['0']; ?>
					                
					            <li>
					            	<a href="<?php echo $src1 ?>" data-lightbox="categoria" title="<?php the_title(); ?>">
					            		<img src="<?php echo $src1 ?>" alt="<?php the_title();?>"/>
					            	</a>
					            	<div class="hola">
					            		<a href="<?php bloginfo('wpurl'); ?>/contacto?vn=<?php the_title(); ?>" target="_blank">
					            			<?php the_title(); ?> | Informes de éste vinil
					            		</a>
					            	</div>
					            </li>
					        <?php endif; ?>
							<?php endwhile; else: ?>
				            <p><?php _e('Lo sentimos la categoria esta vacia.'); ?></p>
			            <?php endif; ?>
			            <?php //Terminan no-vmas ?>
		            </ul>
            </div> <!--Terminan container-->
            

		<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.8.2/jquery.min.js"></script>
		<script src="<?php bloginfo( 'template_directory' ); ?>/js/masonry.pkgd.min.js"></script>
		<script src="<?php bloginfo( 'template_directory' ); ?>/js/imagesloaded.js"></script>
		<script src="<?php bloginfo( 'template_directory' ); ?>/js/classie.js"></script>
		<script src="<?php bloginfo( 'template_directory' ); ?>/js/AnimOnScroll.js"></script>
        <script src="<?php bloginfo( 'template_directory' ); ?>/js/lightbox-2.6.min.js"></script>
        <script src="<?php bloginfo( 'template_directory' ); ?>/js/jquery.scrollTop.js"></script>

        
CDCE00
		
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
    	<script type="text/javascript">

			$(function(){
					   scrollTop({
								 color:"#CDCE00", // valores en rga, rgba, hexadecimal (#666), o palabras clave "grey"
								 top:50, // tope de altura donde quieres que se muestre el botón de subir arriba
								 time:500,  // intervalo en milisegundos que determina la duración de la opacidad del botón subir arriba
								 position:"bottom", // posición del botón , admite estos posibles valores: "top" "middle" "bottom",
								 speed: 300 // tiempo en milisegundos en hacer el scroll hacia arriba (top:0)
								 
								});
		     			 });

		</script>
	</body>
</html>