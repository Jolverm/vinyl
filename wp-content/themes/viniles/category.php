<!DOCTYPE html>
<html lang="en">
    <head>
        <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1"> 
        <meta name="viewport" content="width=device-width, initial-scale=1.0"> 
        <meta charset="<?php bloginfo( 'utf-8' ); ?>">
        <title><?php wp_title(); ?></title>
       
        <link rel="stylesheet" type="text/css" href="<?php bloginfo( 'template_directory' ); ?>/css/style.css"/>
		<script src="<?php bloginfo( 'template_directory' ); ?>/js/modernizr.custom.70736.js"></script>
		<noscript><link rel="stylesheet" type="text/css" href="<?php bloginfo( 'template_directory' ); ?>/css/noJS.css"/></noscript>
		<!--[if lte IE 7]><style>.main{display:none;} .support-note .note-ie{display:block;}</style><![endif]-->
    </head>
    
        <?php $colores = array('e1a403', 'ecdd16', 'f2e823', '551412', '892015', 'bc3824', 'd24b18', 'f6871d', '4a247b', '900a6f', 'd5027e', 'ee78be', '070e47', '002a9b', '1a78bc', '509cca', '0b7a70', '92d5cc', '043920', '005322', '016f20', '7da848', '342013', 'a35011', 'c2b392', 'e1d092', 'cd8b18' ); ?>
        <?php $c = rand(0, 26) ?>
    
    <body style="background-color: #<?php echo $colores[$c]; ?>;">
        <div class="container">		
			<div class="main">
                            <header class="clearfix">
                                    <h1 style="color: #fff;">
                                        <img src="<?php bloginfo('template_directory'); ?>/img/logo.png" alt="Vinilos y Viniles" title="Vinilos y Viniles" />
                                        <br />
                                            <?php wp_title(); ?><span><?php echo category_description(); ?> </span>
                                    </h1>
					<div class="support-note">
                                            <span class="note-ie">Sorry, only modern browsers.</span>
					</div>
				</header>
				<div class="gamma-container gamma-loading" id="gamma-container">
					<ul class="gamma-gallery">
                                            <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
                                             <?php $url = wp_get_attachment_url( get_post_thumbnail_id() ); ?>
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
                                            <?php endwhile; else: ?>
                                            <p><?php _e('Sorry, no posts matched your criteria.'); ?></p>
                                            <?php endif; ?>
                                            
					</ul>

					<div class="gamma-overlay"></div>

					<div id="loadmore" class="loadmore">Example for loading more items...</div>

				</div>

			</div><!--/main-->
		</div>
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.8.2/jquery.min.js"></script>
		<script src="<?php bloginfo( 'template_directory' ); ?>/js/jquery.masonry.min.js"></script>
		<script src="<?php bloginfo( 'template_directory' ); ?>/js/jquery.history.js"></script>
		<script src="<?php bloginfo( 'template_directory' ); ?>/js/js-url.min.js"></script>
		<script src="<?php bloginfo( 'template_directory' ); ?>/js/jquerypp.custom.js"></script>
		<script src="<?php bloginfo( 'template_directory' ); ?>/js/gamma.js"></script>
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

						++page;
						var newitems = items[page-1]
						if( page <= 1 ) {
							
							Gamma.add( $( newitems ) );

						}
						if( page === 1 ) {

							$( this ).remove();

						}

					} );

				}

			});

		</script>	
	</body>
</html>
