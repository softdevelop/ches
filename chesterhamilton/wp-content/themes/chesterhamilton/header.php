<?php
/**
 * The Header template for our theme
 *
 * Displays all of the <head> section and everything up till <div id="main">
 *
 * @package WordPress
 * @subpackage Twenty_Thirteen
 * @since Twenty Thirteen 1.0
 */
?><!DOCTYPE html>
<!--[if IE 7]>
<!--[if lt IE 7 ]><html class="ie ie6" lang="en"> <![endif]-->
<!--[if IE 7 ]><html class="ie ie7" lang="en"> <![endif]-->
<!--[if IE 8 ]><html class="ie ie8" lang="en"> <![endif]-->
<!--[if (gte IE 9)|!(IE)]><html lang="en" class="no-js"> <![endif]-->
<html class="ie ie7" <?php language_attributes(); ?>>
<![endif]-->
<!--[if IE 8]>
<html class="ie ie8" <?php language_attributes(); ?>>
<![endif]-->
<!--[if !(IE 7) | !(IE 8)  ]><!-->
<html <?php language_attributes(); ?>>
<!--<![endif]-->
<head>

    <!-- Define Charset -->
    <meta charset="utf-8">

    <!-- Page Title -->
    <title>Constructors - One Page Architecture HTML Theme</title>

    <!-- Responsive Metatag -->
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- Page Description and Author -->
    <meta name="description" content="Constructors - One Page Architecture HTML Theme">
    <meta name="author" content="Mustache Themes">
    <script src="<?php echo get_template_directory_uri();?>/js/jquery.min.js"></script>
       
    <!-- modernizr-->
    <!-- HTML5 shim, for IE6-8 support of HTML5 elements -->
    <!--[if IE 8]><script src="<?php echo get_template_directory_uri();?>/js/html5shiv.js"></script><![endif]-->
    
    <link href="<?php echo get_template_directory_uri();?>/css/bootstrap.min.css" rel="stylesheet" type="text/css" media="screen" />
    <link href="<?php echo get_template_directory_uri();?>/css/style.css" rel="stylesheet" type="text/css" media="screen" />
    <!--[if IE 7 ]><link href="<?php echo get_template_directory_uri();?>/css/font/fontello-ie7.css" rel="stylesheet" type="text/css" media="screen" /><![endif]-->
    <link href="<?php echo get_template_directory_uri();?>/css/font/fontello.css" rel="stylesheet" type="text/css" media="screen" />
    
    <link href="<?php echo get_template_directory_uri();?>/js/owl-carousel/owl.carousel.css" rel="stylesheet" type="text/css" media="screen" />
    
    <link href="<?php echo get_template_directory_uri();?>/css/media-queries.css" rel="stylesheet" type="text/css" media="screen" />

    <!--[if IE 8]><link href="../css/ie8.css" rel="stylesheet" type="text/css" media="screen" /><![endif]-->

    <!-- Fav and touch icons -->
    <link rel="apple-touch-icon-precomposed" sizes="144x144" href="assets/ico/apple-touch-icon-144-precomposed.html">
    <link rel="apple-touch-icon-precomposed" sizes="114x114" href="assets/ico/apple-touch-icon-114-precomposed.html">
    <link rel="apple-touch-icon-precomposed" sizes="72x72" href="assets/ico/apple-touch-icon-72-precomposed.html">
    <link rel="apple-touch-icon-precomposed" href="assets/ico/apple-touch-icon-57-precomposed.html">
    <link rel="shortcut icon" href="assets/ico/favicon.html">

    <script>
        $(document).ready(function(){
            $("#menu-menu>li>a").addClass("anchor");
        });

    </script>
   <!-- modernizr-->
<!-- ======================= JQuery libs =============================== -->
<?php wp_head();?>
</head>

<body <?php body_class(); ?>>
<!-- Header-->
<header>
    <div class="container">
        <nav class="navbar navbar-default nm" role="navigation">
            <!-- Brand and toggle get grouped for better mobile display -->
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-ex1-collapse">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a id="logo" class="navbar-brand" href="index.html"><img src="<?php echo get_template_directory_uri();?>/img/logo.png" alt="My Brand" /></a>
            </div>
            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="collapse navbar-collapse navbar-ex1-collapse nb np">
                <?php wp_nav_menu(array (
                    'class' => 'menu',
                    'container' =>'',
                    'menu_class'=> 'nav navbar-nav',

                )); ?>
            </div><!-- /.navbar-collapse -->
        </nav>
    </div>
</header>
<!-- End Header-->
