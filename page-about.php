<?php
/**
 *
 * @package 	WordPress
 * @subpackage 	Starkers
 * @since 		Starkers 4.0
 *
 * Template Name: About
 */
?>

<?php Starkers_Utilities::get_template_parts( array( 'parts/shared/html-header', 'parts/shared/header' ) ); ?>

<section id='aboutPage'>
	
	<?php while ( have_posts() ) : the_post(); ?>
		
		<h1><?php the_title(); ?></h1>
		<?php the_content(); ?>
	
	<?php endwhile; ?> <!-- close youTube loop -->
	
</section>


<?php Starkers_Utilities::get_template_parts( array( 'parts/shared/footer','parts/shared/html-footer' ) ); ?>