<?php get_header(); ?>

  	<div id="sequence">
		<img class="sequence-prev" src="<?php bloginfo( 'template_directory' ); ?>/img/bt-prev.png" alt="Previous" />
		<img class="sequence-next" src="<?php bloginfo( 'template_directory' ); ?>/img/bt-next.png" alt="Next" />
                                
                <div class="logo"></div>
                
                <ul class="sequence-canvas">
                            <li class="animate-in">
                                    <div class="txt1">
                                        <img src="<?php bloginfo( 'template_directory' ); ?>/img/slide1.svg"/>
                                    </div>
					<img class="fondo1" src="<?php bloginfo( 'template_directory' ); ?>/img/fondo1.png"/>
					<img class="mesa" src="<?php bloginfo( 'template_directory' ); ?>/img/mesa.png"/>
					<img class="sillon" src="<?php bloginfo( 'template_directory' ); ?>/img/sillon.png"/>
                            </li>
                            <li>     <div class="txt2">
					 <img src="<?php bloginfo( 'template_directory' ); ?>/img/slide2.svg"/>
				     </div>
                                        <img class="fondo2" src="<?php bloginfo( 'template_directory' ); ?>/img/fondo2.png" />
					<img class="cama" src="<?php bloginfo( 'template_directory' ); ?>/img/cama.png" />
			     </li>
			     <li>
				     <div class="txt3">
					 <img src="<?php bloginfo( 'template_directory' ); ?>/img/slide3.svg"/>
				     </div>
					<img class="fondo3" src="<?php bloginfo( 'template_directory' ); ?>/img/fondo3.png"/>
					<img class="cuna" src="<?php bloginfo( 'template_directory' ); ?>/img/cuna.png"/>
					<img class="repisa" src="<?php bloginfo( 'template_directory' ); ?>/img/repisa.png"/>
			     </li>
			     <li>
				     <div class="txt4">
                                        <img src="<?php bloginfo( 'template_directory' ); ?>/img/slide4.svg"/>
				     </div>
					<img class="fondo4" src="<?php bloginfo( 'template_directory' ); ?>/img/fondo4.png" />
					<img class="silla" src="<?php bloginfo( 'template_directory' ); ?>/img/silla.png"/>
					<img class="escritorio" src="<?php bloginfo( 'template_directory' ); ?>/img/escritorio.png"/>
			     </li>
			</ul>      
		</div>
        <?php get_template_part('menu', 'principal'); ?>
        <?php get_footer();?>