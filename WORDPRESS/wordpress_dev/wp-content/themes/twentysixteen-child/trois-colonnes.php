<?php
/**
 * 
 * Template name: 3 colonnes
 *
 */

get_header(); ?>

<div class="">
	<div class="barre-laterale-gauche"></div>
	<div class="contenu-trois-colonnes">
		<?php 
			if ( have_posts() ) : 
				while( have_posts() ) :
				
					the_post();
					
					echo '<h1 class="entry-title">' . get_the_title() . '</h1>';
		
					echo '<div class="entry-content">';
					the_content();
					echo '</div>';
				endwhile;
			endif;
		?>
	</div>
	<div class="barre-laterale-droite">
		<?php get_sidebar(); ?>
	</div>
	<div class="clearfix"></div>	
</div>


<?php get_footer(); ?>
