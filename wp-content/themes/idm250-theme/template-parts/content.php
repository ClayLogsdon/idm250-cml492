<?php
/**
 * Template part for displaying posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package idm250-theme
 */

?>



<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>

<div class="col-12">
<div class="container  pb-3 pt-3">
	<div class="row">
		<div class="col-md-9">
		<?php
		if ( is_singular() ) :
	?>	 <h3 class="heading-text"> <?php the_title(); ?></h3> <?php
		else :
		?>	<h3 class="heading-text"> <?php the_title(); ?></h3> <?php
		endif;

		if ( 'post' === get_post_type() ) :
			?>
		
		<?php endif; ?>


	<?php idm250_theme_post_thumbnail(); ?>

	<div class="entry-content">
	    <p class="justify"> 
	    <?php
		the_content(
			sprintf(
				wp_kses(
					/* translators: %s: Name of current post. Only visible to screen readers */
					__( 'Continue reading<span class="screen-reader-text"> "%s"</span>', 'idm250-theme' ),
					array(
						'span' => array(
							'class' => array(),
						),
					)
				),
				wp_kses_post( get_the_title() )
			)
		); 
		?>
		
		</p>
	    
		</p>
	
	
	
	<h3 class="mt-5">Enjoy a Live Reading</h3>
	<p class="text-center mt-5">

	</p>
	</div>
		</div>	<div class="col-md-3">
			<h3 class="text-uppercase mt-5 px-4 recent">recent posts</h3>
			<ul class="mb-5">
			    <?php
			    $args = array(
'post_type'=> 'post',
'orderby'    => 'ID',
'post_status' => 'publish',
'order'    => 'DESC',
'posts_per_page' => -1 // this will retrive all the post that is published 
);
$result = new WP_Query( $args );
if ( $result-> have_posts() ) : ?>
<?php while ( $result->have_posts() ) : $result->the_post(); ?>
<li><a href="<?php echo get_permalink(); ?>"><?php the_title(); ?>   			</a></li>    
<?php endwhile; ?>
<?php endif; wp_reset_postdata(); ?>

			</ul>
			
			<h3 class="text-uppercase mt-5 px-4 recent">CATEGORIES</h3>
			<ul class="mb-5">
				<li>Sci-fi (18)</li>
				<li>Fantasy (13)</li>
				<li>Mystery (10)</li>
				<li>Thriller (7)</li>
				<li>Action (4)</li>
				<li>Romance (2)</li>
				
			</ul>
		</div>
	</div>
</div>
</div>

