<?php /* Template Name: HomeTemplate */ ?>
<?php $pagehead="Clay’s Bookshelf"; ?>

<?php set_query_var('pagehead', "Clay's Bookshelf"); ?>
<?php get_header(); ?>

<div class="col-12">
<div class="container  pb-3 pt-3">
	<h3 class="heading-text">Currently Reading</h3>
  <div class="row">
      
      <?php
    $args = array( 'category' => 6, 'post_type' =>  'viewing' ); 
    $postslist = get_posts( $args );    
    foreach ($postslist as $post) :  setup_postdata($post); 
    ?>  

          <?php $feat_image = wp_get_attachment_url( get_post_thumbnail_id($post->ID) ); ?>
        
        
                  
    <a href="<?php the_permalink(); ?>" class="col-lg-3 col-md-6 mb-3">
		<div class="box">
      <img src="<?php echo $feat_image ?>" class="col-12">
     
	  </div>
    </a>

    
    
    <?php endforeach; ?>
      


  </div>
</div>
</div>

<div class="col-12">
<div class="container  pb-3 pt-3">
	<h3 class="heading-text">Completed Readings</h3>
  <div class="row">
    
    
      <?php
    $args = array( 'category' => 7, 'post_type' =>  'viewing' ); 
    $postslist = get_posts( $args );    
    foreach ($postslist as $post) :  setup_postdata($post); 
    ?>  

          <?php $feat_image = wp_get_attachment_url( get_post_thumbnail_id($post->ID) ); ?>
        
        
                  
    <a href="<?php the_permalink(); ?>" class="col-lg-3 col-md-6 mb-3">
		<div class="box">
      <img src="<?php echo $feat_image ?>" class="col-12">
     
	  </div>
    </a>

    
    <?php endforeach; ?>
          
    
	  </div>
    </div>
  </div>
</div>
</div>
<div class="col-12">
<div class="container  pb-3 pt-3">
	<h3 class="heading-text2">From The Pages</h3>
	<p class="text-center"><span class="left-p">&nbsp;&nbsp;&nbsp;</span>&nbsp;&nbsp;&nbsp;And if life is repeated a thousand times, still you, you, and again, you...&nbsp;&nbsp;&nbsp;<span class="right-p">&nbsp;&nbsp;&nbsp;</span>
	
	<p class="text-center">Forough Farrokhzad</p>
	
	</p>
</div>
</div>
<div class="col-12">
<div class="container  pb-3 pt-3">
	<h3 class="heading-text2">Enjoy a Live Reading</h3>
	<p class="text-center">
	
<iframe width="700" height="505" class="col-8" src="https://www.youtube.com/embed/LeUm07WtTvE" title="Billy Collins on Reading Poetry Aloud" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe>

	</p>
</div>
</div>
<div class="col-12">
<div class="container  pb-3 pt-3">
	<h3 class="heading-text2">Book Recommendations</h3>
	<ul class="recommend">
		<li>Sparrow’s Nest</li>
		<li>Etude of Synth</li>
		<li>A Chance at Peace</li>
		<li>Fast Past - Tales from the Wise</li>
	</ul>
</div>
</div>

<?php get_footer(); ?>