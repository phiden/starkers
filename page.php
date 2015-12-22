<?php
/**
 * The template for displaying HOME.
 *
 * @package 	WordPress
 * @subpackage 	Starkers
 * @since 		Starkers 4.0
 */
?>

<?php Starkers_Utilities::get_template_parts( array( 'parts/shared/html-header', 'parts/shared/header' ) ); ?>

<section id='youTube'>
	
	<?php query_posts( "category_name=youTube&order=DESC&posts_per_page=1" ); ?>
	<?php while ( have_posts() ) : the_post(); ?>
			<?php the_content(); ?>
	<?php endwhile; ?> <!-- close youTube loop -->
	<?php wp_reset_query(); ?>
	
</section>

<section id='instagram'>
	
	<h1>Miles on <a href='http://instagram.com/milesobrien'>Instagram</a></h1>
	
	<div id='ig-wall'>
				
		<?php echo do_shortcode('[instagram-feed]'); ?>
	
	</div>
	
</section>

<section id='ob-blog' class='row'>
	
	<h1>O'Brien Blog</h1>
	
	<?php query_posts( "category_name=blog&order=DESC&posts_per_page=1" ); ?>
	<?php while ( have_posts() ) : the_post(); ?>
			
			<article>
				<h4><a href='<?php the_permalink(); ?>'><?php the_title(); ?></a></h4>
				<div class='u-pull-left three columns'><?php the_post_thumbnail(); ?></div>
				<div class='u-pull-right eight columns'><?php the_excerpt(); ?></div>
			</article>
	<?php endwhile; ?> <!-- close youTube loop -->
	<?php wp_reset_query(); ?>
	
	<a class='u-pull-right' href="/obrien-blog">Read more of the O'Brien Blog &raquo;</a>
	
</section>


<section id='social' class='row'>
	
	<h1>Miles on <a href='http://twitter.com/milesobrien'>Twitter</a> &amp; <a href='http://facebook.com/milesobrienpage'>Facebook</a></h1>
	
	<div class='six columns'>
	
		<a class="twitter-timeline" data-dnt="true" href="https://twitter.com/milesobrien" data-widget-id="444352873770409985">Tweets by @milesobrien</a>
		<script>!function(d,s,id){var js,fjs=d.getElementsByTagName(s)[0],p=/^http:/.test(d.location)?'http':'https';if(!d.getElementById(id)){js=d.createElement(s);js.id=id;js.src=p+"://platform.twitter.com/widgets.js";fjs.parentNode.insertBefore(js,fjs);}}(document,"script","twitter-wjs");</script>

	</div>
	
	<div class="fb-page six columns" data-href="https://www.facebook.com/milesobrienpage" data-width="500" data-small-header="false" data-adapt-container-width="true" data-hide-cover="false" data-show-facepile="false" data-show-posts="true"><div class="fb-xfbml-parse-ignore"><blockquote cite="https://www.facebook.com/milesobrienpage"><a href="https://www.facebook.com/milesobrienpage">The Official Miles O’Brien Page</a></blockquote></div></div>
	
</section>

<section id='about'>
	
	<?php query_posts( "category_name=BIO&order=DESC&posts_per_page=1" ); ?>
	<?php while ( have_posts() ) : the_post(); ?>
			<h1><?php the_title(); ?></h1>
			<?php the_content(); ?>
	<?php endwhile; ?> <!-- close youTube loop -->
	<?php wp_reset_query(); ?>
	
</section>

<section id='social-icons' class='row'>
	
	<h1>Find Miles on these platforms:</h1>
	<ul>
		
		<li><a href="http://www.linkedin.com/in/milesobrien"><img src="http://milesobrien.com/images/linked_in.png" width="35" height="35"/></a></li>
		<li><a href="http://vimeo.com/milesobrien"><img src="http://milesobrien.com/images/vimeo.png" width="35" height="35"/></a></li>
		<li><a href="http://www.youtube.com/user/milesobrien3"><img src="http://milesobrien.com/images/you_tube.png" width="35" height="35"/></a></li>
		<li><a href="http://www.flickr.com/photos/milesobrien/"><img src="http://milesobrien.com/images/flickr.png" width="35" height="35"/></a></li>
		<li><a href="https://www.facebook.com/MilesOBrienPage"><img src="http://milesobrien.com/images/facebook.png" width="35" height="35"/></a></li>
		<li><a href="http://twitter.com/milesobrien"><img src="http://milesobrien.com/images/twitter.png" width="35" height="35"/></a></li>
		
	</ul>
</section>






<?php Starkers_Utilities::get_template_parts( array( 'parts/shared/footer','parts/shared/html-footer' ) ); ?>