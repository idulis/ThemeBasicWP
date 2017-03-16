<?php 
/*
 * La plantilla para la visualización de la cabecera
 * Muestra todos los del elemento de cabeza y todo hasta el div "site -content " .
 * Contiene el título, el logo, la descripción y el menú de la página web.
 * Antes que nada, incluyamos un favicon, porque sino el theme se ve aburrido en nuestros navegadores.
 *
 */
 ?>
<!DOCTYPE html>
<html lang="<?php language_attributes(); ?>">
<head>
	<meta charset="utf-8" />
	<meta http-equiv="X-UA-Compatible" content="IE=edge" />
	<meta name="viewport" content="width=device-width, initial-scale=1" />
	<link rel="pingback" href="<?php bloginfo('pingback_url()'); ?>">
	<link rel="shortcut icon" type="image/x-icon" href="<?php bloginfo('template_directory'); ?>/imag/favicon.ico">
	<title>Document</title>
	<?php  wp_head(); ?>
	<link rel="stylesheet" href="">
</head>

<!-- añade clases para los estilo css -->
<body <?php body_class(); ?>>

<!-- Código HTML  -->
<div class="page">
<header id="header" class="site-header" role="banner">
	<div class="container">
		<h1 class="site-title">
		<a href="<?php echo esc_url(home_url('/')); ?>" title=""><?php bloginfo('name'); ?></h1></a>
		<img src="<?php echo get_stylesheet_directory_uri(); ?>/img/logo.png" alt="">
		<h2 class="site-description"><?php bloginfo('description'); ?></h2>
	</div>
</header><!-- /header -->



<!--/Esta etiqueta se cierra en el footer.php -->
<div id="contenido" class="container">
	
