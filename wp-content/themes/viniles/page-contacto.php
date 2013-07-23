<?php get_header(); ?>

<!DOCTYPE html>
<html>

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
    <link href="<?php bloginfo('template_directory');?>/css/single.css" rel="stylesheet">
    <script type="text/javascript" src="<?php bloginfo('template_directory'); ?>/js/correo.js"></script> 
</head>

    <?php $colores = array('e1a403', 'ecdd16', 'f2e823', '551412', '892015', 'bc3824', 'd24b18', 'f6871d', '4a247b', '900a6f', 'd5027e', 'ee78be', '070e47', '002a9b', '1a78bc', '509cca', '0b7a70', '92d5cc', '043920', '005322', '016f20', '7da848', '342013', 'a35011', 'c2b392', 'e1d092', 'cd8b18' ); ?>
    <?php $c = rand(0, 26) ?>

<body style="background-color: #<?php echo $colores[$c]; ?>;">
    
        <div class="header">            
            <div class="logo">
                <img src="<?php bloginfo('template_directory'); ?>/img/logo.png" alt="Vinilos y Viniles" title="Vinilos y Viniles" />
            </div>
                <?php get_template_part('menu','principal'); ?>   
       </div>
        
       <div class="titulo">
            <h1> Contactanos </h1>
       </div>
    
    
       <div class="preguntas">
          <div class="PreguntasForm">
              <form name="formulario" id="viniles" method="post" action="<?php bloginfo('template_directory'); ?>/enviarMail.php">
                  <label>Nombre</label>
                  <input type="text"  name="Nombre" Placeholder="Nombre">
                  <label>Correo</label>
                  <input type="mail"  name="Nombre" Placeholder="correo">
                  <label>Mensaje</label>
                  <textarea name="Nombre" Placeholder="Mensaje"></textarea>
                  <input type="submit">
              </form>
              
              <div id="resultados">
                </div>
           </div>
           
           <div class="Contacto">
                <br>
               <br>
               	Nuestros teléfonos:
               <br>
               <br>
               044 55 5456 9174
               <br>
               <br>
               41 68 9071
	       <br>
               <br>
               	Nuestra dirección:
                <br>
               <br>
               Calle Marte Mz 4 Lt 4 depto 1, 
               <br>
               Col. Media luna, Coyoacan, 
               <br>
               Mexico, D.F., C.P. 04737
               <br/>
               <br/>
               	Nuestros correos:<br/>
                <a href="mailto:mitzi_areli@vinilosyviniles.mx?Subject=Solcito%20informes" target="_top">mitzi_areli@vinilosyviniles.mx</a><br/>
                <a href="mailto:ventas@vinilosyviniles.mx?Subject=Solcito%20informes" target="_top">ventas@vinilosyviniles.mx</a><br/>
                <a href="mailto:vinilosyviniles@gmail.com ?Subject=Solcito%20informes" target="_top">vinilosyviniles@gmail.com </a><br/>
           </div>
           
       </div>
	
</body>

<footer>
       
</footer>

<?php get_footer();?>