
 <?php get_header(); ?>
<!DOCTYPE html>
<html lang="es">
    <head>
        <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1"> 
        <meta name="viewport" content="width=device-width, initial-scale=1.0"> 
        <meta charset="<?php bloginfo( 'utf-8' ); ?>">
        <title><?php wp_title(); ?></title>
       
        <link href="<?php bloginfo('template_directory');?>/css/catalogo.css" rel="stylesheet">
	<link rel="stylesheet" type="text/css" href="<?php bloginfo( 'template_directory' ); ?>/css/style.css"/>
        <script src="<?php bloginfo( 'template_directory' ); ?>/js/modernizr.custom.70736.js"></script>
        <noscript><link rel="stylesheet" type="text/css" href="<?php bloginfo( 'template_directory' ); ?>/css/noJS.css"/></noscript>
		<!--[if lte IE 7]><style>.main{display:none;} .support-note .note-ie{display:block;}</style><![endif]-->
    </head>
   
        <?php $colores = array('e1a403', 'ecdd16', 'f2e823', '551412', '892015', 'bc3824', 'd24b18', 'f6871d', '4a247b', '900a6f', 'd5027e', 'ee78be', '070e47', '002a9b', '1a78bc', '509cca', '0b7a70', '92d5cc', '043920', '005322', '016f20', '7da848', '342013', 'a35011', 'c2b392', 'e1d092', 'cd8b18' ); ?>
        <?php $c = rand(0, 26) ?>
    
    <div class="header">            
            <div class="logo">
               <a href="<?php bloginfo('wpurl'); ?>"><img src="<?php bloginfo('template_directory'); ?>/img/logo.png" alt="Vinilos y Viniles" title="Vinilos y Viniles"/></a>
            </div>
        
                <?php get_template_part('menu','principal'); ?>   
       
        <div class="paleta">
                    <button id="hidr" class="boton">Colores disponibles</button>
                  <span>
                        <section class="cajaTodoColores">
                                <div title="Blanco" class="blanco"></div>
                                <div title="Dorado" class="dorado"></div>
                                <div title="Light yellow" class="amarilloClaro"></div>
                                <div title="Brimstone yellow" class="amarilloBrims"></div>
                                <div title="Burgundy" class="burgundy"></div>
                                <div title="Dark red" class="rojoFuerte"></div>
                                <div title="Light red" class="rojoClaro"></div>
                                <div title="Orange" class="naranja"></div>
                                <div title="Pastel Orange" class="naranjaPastel"></div>
                                <div title="Purple" class="purpura"></div>
                                <div title="Violet temporal" class="violeta"></div>
                                <div title="Magenta" class="magenta"></div>
                                <div title="Pink" class="rosa"></div>
                                <div title="Dark blue" class="azulFuerte"></div>
                                <div title="Brillant blue" class="azulBrillante"></div>
                                <div title="Sky blue" class="azulCielo"></div>
                                <div title="Ice blue" class="azulIce"></div>
                                <div title="Turquoise" class="turquesa"></div>
                                <div title="Mint" class="mint"></div>
                                <div title="Forest green" class="verdeFluoresente"></div>
                                <div title="Green" class="verde"></div>
                                <div title="Light green" class="verdeClaro"></div>
                                <div title="lime green" class="verdeLimon"></div>
                                <div title="Chocolate" class="chocolate"></div>
                                <div title="Ginger" class="ginger"></div>
                                <div title="Beige" class="beige"></div>
                                <div title="Crema" class="crema"></div>
                                <div title="Imitación oro" class="oroImitacion"></div>
                                <div title="Negro" class="negro"></div>
                                <div title="Dark gray" class="greyFuerte"></div>
                                <div title="Gray" class="grey"></div>
                                <div title="Light grey" class="greyClaro"></div>
                                <div title="Gold (metálico)" class="oroMetalico"></div>
                                <div title="Cooper (metálico)" class="cooperMetalico"></div>
                                <div title="Silver (metálico)" class="plataMetalico"></div>
                                <div title="Esmerilado (cristales)" class="esmerilado"></div>
                          </section> 
                        </span>
                    </div>
             
    
    </div>    <!--fin de header   -->
    
    <body style="background-color: #<?php echo $colores[$c]; ?>;">
        
        
        
        
        <div class="container">		
			<div class="main">
        
                  <header class="clearfix">
                                
				</header>
		
       
                            
                            
                            <div class="gamma-container gamma-loading" id="gamma-container">
					<ul  class="gamma-gallery">
					<?php
			
						$url="http://".$_SERVER['HTTP_HOST'].":".$_SERVER['SERVER_PORT'].$_SERVER['REQUEST_URI'];
						
						 $url = explode('/', $url);

						 $url = $url[4];

						 echo "<!--$url-->";

					?>

						<?php query_posts('category_name='.$url.'&tag=vmas'); ?>
	                	<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
						<?php $url = wp_get_attachment_url( get_post_thumbnail_id() ); ?>
	                    <li> 
	                        <div data-alt="<?php the_title(); ?>" data-description="<h3 onclick='pedir(<?php the_title(); ?>);'>Pedir este vinil | Vinil número <?php the_title(); ?></h3>" data-max-width="1200" data-max-height="800">
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
	                    <?php endwhile; else: ?>
	                    <p><?php _e('Sorry, no posts matched your criteria.'); ?></p>
	                    <?php endif; ?>         
					</ul>

					<div class="gamma-overlay"></div>

					<div id="loadmore" class="loadmore">Ver Más Viniles</div>

				</div>

			</div><!--/main-->
		</div>
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.8.2/jquery.min.js"></script>
		<script src="<?php bloginfo( 'template_directory' ); ?>/js/jquery.masonry.min.js"></script>
		<script src="<?php bloginfo( 'template_directory' ); ?>/js/jquery.history.js"></script>
		<script src="<?php bloginfo( 'template_directory' ); ?>/js/js-url.min.js"></script>
		<script src="<?php bloginfo( 'template_directory' ); ?>/js/jquerypp.custom.js"></script>
		<script src="<?php bloginfo( 'template_directory' ); ?>/js/gamma.js"></script>
		<?php
			
						$url="http://".$_SERVER['HTTP_HOST'].":".$_SERVER['SERVER_PORT'].$_SERVER['REQUEST_URI'];
						
						 $url = explode('/', $url);

						 $url = $url[4];

					?>
		<script>
			var offset = 2, categoria_actual = '<?php echo $url; ?>', wp_url = '<?php bloginfo('wpurl'); ?>';
		</script>
		<script src="<?php bloginfo( 'template_directory' ); ?>/js/ajax.js"></script>
		<script type="text/javascript">
			
			$(function() {

				var GammaSettings = {
						// order is important!
						viewport : [ {
							width : 1200,
							columns : 5
						}, {
							width : 900,
							columns : 4
						}, {
							width : 500,
							columns : 3
						}, { 
							width : 320,
							columns : 2
						}, { 
							width : 0,
							columns : 2
						} ]
				};

				Gamma.init( GammaSettings, fncallback );


				// Example how to add more items (just a dummy):

				var page = 0,
					items = ['<li><div data-alt="img03" data-description="<h3>Sky high</h3>" data-max-width="1800" data-max-height="1350"><div data-src="images/xxxlarge/3.jpg" data-min-width="1300"></div><div data-src="images/xxlarge/3.jpg" data-min-width="1000"></div><div data-src="images/xlarge/3.jpg" data-min-width="700"></div><div data-src="images/large/3.jpg" data-min-width="300"></div><div data-src="images/medium/3.jpg" data-min-width="200"></div><div data-src="images/small/3.jpg" data-min-width="140"></div><div data-src="images/xsmall/3.jpg"></div><noscript><img src="images/xsmall/3.jpg" alt="img03"/></noscript></div></li><li><div data-alt="img03" data-description="<h3>Sky high</h3>" data-max-width="1800" data-max-height="1350"><div data-src="images/xxxlarge/3.jpg" data-min-width="1300"></div><div data-src="images/xxlarge/3.jpg" data-min-width="1000"></div><div data-src="images/xlarge/3.jpg" data-min-width="700"></div><div data-src="images/large/3.jpg" data-min-width="300"></div><div data-src="images/medium/3.jpg" data-min-width="200"></div><div data-src="images/small/3.jpg" data-min-width="140"></div><div data-src="images/xsmall/3.jpg"></div><noscript><img src="images/xsmall/3.jpg" alt="img03"/></noscript></div></li><li><div data-alt="img03" data-description="<h3>Sky high</h3>" data-max-width="1800" data-max-height="1350"><div data-src="images/xxxlarge/3.jpg" data-min-width="1300"></div><div data-src="images/xxlarge/3.jpg" data-min-width="1000"></div><div data-src="images/xlarge/3.jpg" data-min-width="700"></div><div data-src="images/large/3.jpg" data-min-width="300"></div><div data-src="images/medium/3.jpg" data-min-width="200"></div><div data-src="images/small/3.jpg" data-min-width="140"></div><div data-src="images/xsmall/3.jpg"></div><noscript><img src="images/xsmall/3.jpg" alt="img03"/></noscript></div></li><li><div data-alt="img03" data-description="<h3>Sky high</h3>" data-max-width="1800" data-max-height="1350"><div data-src="images/xxxlarge/3.jpg" data-min-width="1300"></div><div data-src="images/xxlarge/3.jpg" data-min-width="1000"></div><div data-src="images/xlarge/3.jpg" data-min-width="700"></div><div data-src="images/large/3.jpg" data-min-width="300"></div><div data-src="images/medium/3.jpg" data-min-width="200"></div><div data-src="images/small/3.jpg" data-min-width="140"></div><div data-src="images/xsmall/3.jpg"></div><noscript><img src="images/xsmall/3.jpg" alt="img03"/></noscript></div></li><li><div data-alt="img03" data-description="<h3>Sky high</h3>" data-max-width="1800" data-max-height="1350"><div data-src="images/xxxlarge/3.jpg" data-min-width="1300"></div><div data-src="images/xxlarge/3.jpg" data-min-width="1000"></div><div data-src="images/xlarge/3.jpg" data-min-width="700"></div><div data-src="images/large/3.jpg" data-min-width="300"></div><div data-src="images/medium/3.jpg" data-min-width="200"></div><div data-src="images/small/3.jpg" data-min-width="140"></div><div data-src="images/xsmall/3.jpg"></div><noscript><img src="images/xsmall/3.jpg" alt="img03"/></noscript></div></li>']

				function fncallback() {

					$( '#loadmore' ).show().on( 'click', function() {

						var json_to_send = {action : 'trae_mas', cat : categoria_actual, offset : offset};
				        var uri = wp_url+'/wp-admin/admin-ajax.php';
				        
				        $.ajax({
				            url : uri,
				            type : 'POST',
				            data : json_to_send,
				            success : function(data){
				                var page = 0, items = [data];
				                ++page;
				                var newitems = items[page-1];
				                if( page <= 1 ) {
				                    
				                    Gamma.add( $( newitems ) );

				                }
				                if( page === 1 ) {

				                    $( this ).remove();

				                }

				            },
				            error: function(){
				                alert('Lo sentimos, no pudimos encontrar más viniles.');
				            }
				        });
						offset++;

					} );

				}

			});

		</script>
                
                <script type="text/javascript">

                        $(function(){
                            scrollTop({
                                    color:"rgba(233,23,122,0.8)", // valores en rga, rgba, hexadecimal (#666), o palabras clave "grey"
                                    top:400, // tope de altura donde quieres que se muestre el botón de subir arriba
                                    time:500,  // intervalo en milisegundos que determina la duración de la opacidad del botón subir arriba
                                    position:"middle", // posición del botón , admite estos posibles valores: "top" "middle" "bottom",
                                    speed: 300 // tiempo en milisegundos en hacer el scroll hacia arriba (top:0)
                                    });
                                  });

                        </script>
                        
                            <script>
        $("#hidr").click(function () {
        $("span").slideToggle("slow");
        });
    </script>
	</body>
</html>
