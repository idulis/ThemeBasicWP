<?php 
/*
 * La plantilla para la visualización de páginas
 * Esta es la plantilla que muestra todas las páginas por defecto.
 *	
 */
get_header(); ?>


<?php while (have_posts()) : the_post(); ?>

	<?php the_title(); ?>

	<?php the_content(); ?>

<?php endwhile; ?>


<?php get_footer() ?>