<?php
/**
 * Template part for displaying post archives and search results
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package WordPress
 * @subpackage Twenty_Nineteen
 * @since 1.0.0
 */

?>

<div class="unCours">

		<?php
		echo '<a href="';
		echo (get_permalink());
		echo '"><h2 class="cours-title">';
		echo(substr ( get_the_title() , 8 ));
		echo '</h2>';

		echo '<h2 class="entry-title">';
		echo(substr ( get_the_title() , 0 , 7 ));
		echo '</h2></a>';


		//the_title( sprintf( '<h2 class="entry-title"><a href="%s" rel="bookmark">', esc_url( get_permalink() ) ), '</a></h2>' );
		?>
</div>