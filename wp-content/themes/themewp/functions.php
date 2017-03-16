<?php 
/*
	* Establecer el tema y proporciona algunas funciones de ayuda , que se utilizan en el :
	* Tema como etiquetas de plantilla personalizado. Otros se unen a la acción y el filtro
	* Ganchos en WordPress para cambiar la funcionalidad básica .
	* Cuando se utiliza un tema niño puede anular ciertas funciones (aquellos envueltos
	* En un function_exists ( ) de llamada ) por definirlos por primera vez en su hijo el tema de
	* Archivo functions.php . Archivo functions.php del tema de los niños se incluye antes
	* Archivo del tema de los padres , por lo que se utilizarían las funciones temáticos niño.
 *
 */

function theme_scripts(){
	// Añadimos una hoja de estilo. Y en header.php añadimos wp_head()
	wp_enqueue_style('normalize', get_template_directory_uri() . '/css/normalize.css');

	// Añade la hoja de estilo principal: style.css
	wp_enqueue_style('style', get_template_directory_uri());
}
add_action('wp_enqueue_scripts', 'theme_scripts');

// Quitar el margen superior que wp añade
add_filter('show_admin_bar','__return_false');



 ?>



