<!DOCTYPE html>
<html>

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
    <link href="<?php bloginfo('template_directory');?>/css/bootstrap.min.css" rel="stylesheet">
    <link href="<?php bloginfo('template_directory');?>/css/catalogo.css" rel="stylesheet">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.7.2/jquery.min.js" type="text/javascript"></script>
    <script src="<?php bloginfo('template_directory');?>/js/jquery.flex.js"></script>
    <script src="<?php bloginfo('template_directory');?>/js/jquery-ui-1.8.18.custom.min.js"></script>
    <script src="<?php bloginfo('template_directory');?>/js/jquery.smooth-scroll.min.js"></script>
</head>

    <?php $colores = array('e1a403', 'ecdd16', 'f2e823', '551412', '892015', 'bc3824', 'd24b18', 'f6871d', '4a247b', '900a6f', 'd5027e', 'ee78be', '070e47', '002a9b', '1a78bc', '509cca', '0b7a70', '92d5cc', '043920', '005322', '016f20', '7da848', '342013', 'a35011', 'c2b392', 'e1d092', 'cd8b18' ); ?>
    <?php $c = rand(0, 26) ?>

<body style="background-color: #<?php echo $colores[$c]; ?>;">
    
        <div class="header">            
                 <?php get_template_part('logo'); ?>  
                <?php get_template_part('menu','principal'); ?>   
        </div>
        
      <div class="flex">
                <a style="left:0px;   height:125px; top:0px;   width:250px; background-image:url(<?php bloginfo('template_directory');?>/img/menu-cats/adolescentes.jpg); background-size:cover;" width="250" height="200" title="Adolescentes"  href="<?php bloginfo('wpurl');?>?cat=3">  <div class="textos">adolescentes</div></a>
                <a style="left:260px; height:125px; top:0px;   width:155px; background-image:url(<?php bloginfo('template_directory');?>/img/menu-cats/animales.jpg);     background-size:cover;" width="280" height="125" title="Animales"      href="<?php bloginfo('wpurl');?>?cat=4">  <div class="textos">animales</div></a>
                <a style="left:425px; height:80px;  top:0px;   width:335px; background-image:url(<?php bloginfo('template_directory');?>/img/menu-cats/arboles.jpg);      background-size:cover;" width="355" height="100" title="Arboles"       href="<?php bloginfo('wpurl');?>?cat=5">  <div class="textos">arboles, flores y plantas</div></a>
		        <a style="left:770px; height:125px; top:0px;   width:125px; background-image:url(<?php bloginfo('template_directory');?>/img/menu-cats/banos.jpg);        background-size:cover;" width="125" height="250" title="baños"         href="<?php bloginfo('wpurl');?>?cat=6">  <div class="textos">baños</div></a>
		        <a style="left:0px;   height:140px; top:135px; width:110px; background-image:url(<?php bloginfo('template_directory');?>/img/menu-cats/cabeceras.jpg);    background-size:cover;" width="225" height="150" title="cabeceras"     href="<?php bloginfo('wpurl');?>?cat=7">  <div class="textos">cabeceras</div></a>
		        <a style="left:120px; height:140px; top:135px; width:160px; background-image:url(<?php bloginfo('template_directory');?>/img/menu-cats/ciudades.jpg);     background-size:cover;" width="250" height="140" title="ciudades"      href="<?php bloginfo('wpurl');?>?cat=8">  <div class="textos">ciudades</div></a>
		        <a style="left:290px; height:75px;  top:135px; width:125px; background-image:url(<?php bloginfo('template_directory');?>/img/menu-cats/cocinas.jpg);      background-size:cover;" width="200" height="200" title="cocinas"       href="<?php bloginfo('wpurl');?>?cat=9">  <div class="textos">cocinas</div></a>
		        <a style="left:425px; height:125px; top:90px;  width:200px; background-image:url(<?php bloginfo('template_directory');?>/img/menu-cats/esmerilados.jpg);  background-size:cover;" width="200" height="250" title="esmerilados"   href="<?php bloginfo('wpurl');?>?cat=10"> <div class="textos">esmerilados</div></a>
                <a style="left:635px; height:125px; top:90px;  width:125px; background-image:url(<?php bloginfo('template_directory');?>/img/menu-cats/hadas.jpg);        background-size:cover;" width="125" height="170" title="hadas"         href="<?php bloginfo('wpurl');?>?cat=11"> <div class="textos">hadas</div></a>
                <a style="left:770px; height:150px; top:135px; width:125px; background-image:url(<?php bloginfo('template_directory');?>/img/menu-cats/hallowen.jpg);     background-size:cover;" width="150" height="225" title="halloween"     href="<?php bloginfo('wpurl');?>?cat=12"> <div class="textos">halloween</div></a>
                <a style="left:0px;   height:75px;  top:285px; width:275px; background-image:url(<?php bloginfo('template_directory');?>/img/menu-cats/jaulas.jpg);       background-size:cover;" width="350" height="75"  title="Jaulas"        href="<?php bloginfo('wpurl');?>?cat=13"> <div class="textos">jaulas</div></a>
                <a style="left:290px; height:100px; top:225px; width:270px; background-image:url(<?php bloginfo('template_directory');?>/img/menu-cats/laptops.jpg);      background-size:cover;" width="270" height="185" title="Laptops"       href="<?php bloginfo('wpurl');?>?cat=14"> <div class="textos">laptops</div></a>
                <a style="left:570px; height:125px; top:225px; width:190px; background-image:url(<?php bloginfo('template_directory');?>/img/menu-cats/marcos.jpg);       background-size:cover;" width="200" height="200" title="Marcos"        href="<?php bloginfo('wpurl');?>?cat=15"> <div class="textos">marcos</div></a>
                <a style="left:770px; height:160px; top:293px; width:125px; background-image:url(<?php bloginfo('template_directory');?>/img/menu-cats/navidad.jpg);      background-size:cover;" width="200" height="200" title="Navidad"       href="<?php bloginfo('wpurl');?>?cat=16"> <div class="textos">navidad</div></a>
                <a style="left:0px;   height:160px; top:370px; width:110px; background-image:url(<?php bloginfo('template_directory');?>/img/menu-cats/ninos.jpg);        background-size:cover;" width="220" height="200" title="Niños"         href="<?php bloginfo('wpurl');?>?cat=2">  <div class="textos">niños</div></a>
                <a style="left:120px; height:160px; top:370px; width:160px; background-image:url(<?php bloginfo('template_directory');?>/img/menu-cats/textos.jpg);       background-size:cover;" width="200" height="150"  title="Textos"        href="<?php bloginfo('wpurl');?>?cat=19"> <div class="textos">Textos</div></a>
                <a style="left:285px; height:75px;  top:335px; width:275px; background-image:url(<?php bloginfo('template_directory');?>/img/menu-cats/pizarron.jpg);     background-size:cover;" width="275" height="110" title="Pizarron"      href="<?php bloginfo('wpurl');?>?cat=17"> <div class="textos">pizarrón</div></a>
                <a style="left:575px; height:100px; top:360px; width:185px; background-image:url(<?php bloginfo('template_directory');?>/img/menu-cats/sanValentin.jpg);  background-size:cover;" width="185" height="105" title="San Valentin"  href="<?php bloginfo('wpurl');?>?cat=18"> <div class="textos">san valentín</div></a>
                <a style="left:287px; height:110px; top:425px; width:275px; background-image:url(<?php bloginfo('template_directory');?>/img/menu-cats/varias.jpg);       background-size:cover;" width="275" height="200" title="Varios"        href="<?php bloginfo('wpurl');?>?cat=20"> <div class="textos">Varios</div></a>
                <a style="left:575px; height:60px;  top:470px; width:320px; background-image:url(<?php bloginfo('template_directory');?>/img/menu-cats/vintage.jpg);      background-size:cover;" width="320" height="80"  title="vintage"       href="<?php bloginfo('wpurl');?>?cat=21"> <div class="textos">Vintage</div></a>
       </div>
	
</body>

<footer>
        <script type="text/javascript">
              $(function() {
              $(".flex").flex();
              });
        </script>
        
        <script>
              jQuery(document).ready(function($) {
              $('a').smoothScroll
                    ({
                    speed: 1000,
                    easing: 'easeInOutCubic'
                    });
              $('.showOlderChanges').on('click', function(e)
                    {
                    $('.changelog .old').slideDown('slow');
                    $(this).fadeOut();
                    e.preventDefault();
                    })
                });
        </script>
</footer>
</html>