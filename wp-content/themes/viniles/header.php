<!DOCTYPE html>
<html <?php language_attributes(); ?>>

<head>
 <meta charset="<?php bloginfo( 'utf-8' ); ?>">
 <title><?php wp_title(); ?></title>
 <link rel="shortcut icon" href="<?php echo get_stylesheet_directory_uri(); ?>/hoja.png" />
 <link rel="stylesheet" media="all" href="<?php bloginfo( 'stylesheet_url' ); ?>" />
 <link rel="stylesheet" media="all" href="<?php bloginfo( 'template_directory' ); ?>/css/noJS.css" />
 <link rel="stylesheet" media="all" href="<?php bloginfo( 'template_directory' ); ?>/css/style.css" />
<script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/1.8.2/jquery.min.js"></script> 
    <?php if(is_category()){ ?>
<script type="text/javascript" src="<?php bloginfo('template_directory'); ?>/js/modernizr.custom.70736.js"></script> 
 <?php } else { ?>
<script type="text/javascript" src="<?php bloginfo( 'template_directory' ); ?>/js/jquery.sequence-min.js"></script>
<script type="text/javascript" src="<?php bloginfo('template_directory'); ?>/js/sequencejs-options.sliding-horizontal-parallax.js"></script>
 
    <?php } ?>
 


 <?php wp_head(); ?>

</head>
    <body>