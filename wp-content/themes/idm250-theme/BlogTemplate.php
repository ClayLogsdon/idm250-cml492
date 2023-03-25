<?php /* Template Name: BlogTemplate */ ?>

<?php set_query_var('pagehead', "Blog"); ?>
<?php get_header(); ?>

<div class="col-12">
<div class="container  pb-3 pt-3">
	<div class="row">
		<div class="col-md-9">
		    
		    <?php
		    $recent_args = array(
    "posts_per_page" => 1,
    "orderby"        => "date",
    "order"          => "DESC"
);      

$recent_posts = new WP_Query( $recent_args );

if ( $recent_posts -> have_posts() ) :
    while ( $recent_posts -> have_posts() ) :

    $recent_posts -> the_post();
?>
   <h3 class="heading-text"> <?php the_title(); ?></h3>
<?php
    $content_post = get_post();
$content = $content_post->post_content;
$content = apply_filters('the_content', $content);
$content = str_replace(']]>', ']]&gt;', $content);
?>
	<p class="justify"> <?php echo $content; ?></p>
<?php
    endwhile;
endif;
		 ?>   
		
		
		

	</p>
	
	
	
	<h3 class="mt-5">Enjoy a Live Reading</h3>
	<p class="text-center mt-5">

<iframe width="700" height="505" class="col-8" src="https://www.youtube.com/embed/LeUm07WtTvE" title="Billy Collins on Reading Poetry Aloud" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe>


	</p>
	</div>
	
		<div class="col-md-3">
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

<?php get_footer(); ?>