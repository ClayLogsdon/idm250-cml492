<?php /* Template Name: ReadingsCompletedTemplate */ ?>


<?php set_query_var('pagehead', "Readings"); ?>
<?php get_header(); ?>

<ul class="nav nav-tabs nav-justified my-tab">
  <li class="nav-item"><a class="nav-link active" href="https://clayfarah.com/idm250/readings/">Current</a></li>
  <li class="nav-item"><a class="nav-link " href="https://clayfarah.com/idm250/completed-readings/">Completed</a></li>
  <li class="nav-item"><a class="nav-link " href="https://clayfarah.com/idm250/up-next/">Up Next</a></li>
</ul>
<div class="tab-content">
  <div id="home" class="tab-pane container active">
     <div class="col-12">
		<div class="container  pb-3 pt-3">
			<h3 class="inner-head">Books</h3>
			<div class="row">
			    
			       <?php
    $args = array( 'category__and' => array(9, 7), 'numberposts' => 4, 'post_type' =>  'viewing' ); 
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
			    		<h3 class="inner-head">Poetry</h3>
			<div class="row">
			    
			       <?php
    $args = array( 'category__and' => array(2, 7), 'numberposts' => 4, 'post_type' =>  'viewing' ); 
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
		<h3 class="inner-head">Novellas, Short Stories & Flash Fiction</h3>
			<div class="row">
			    
			       <?php
    $args = array( 'category__and' => array(3, 7), 'numberposts' => 4, 'post_type' =>  'viewing' ); 
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
    
    	
			    	<h3 class="inner-head">Comics, Graphic Novels, Manga & Webtoons</h3>
			<div class="row">
			    
			       <?php
    $args = array( 'category__and' => array(4, 7), 'numberposts' => 4, 'post_type' =>  'viewing' ); 
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
        
     		<h3 class="inner-head">Screenplays, Play Scripts & Librettos</h3>
			<div class="row">
			    
			       <?php
    $args = array( 'category__and' => array(5, 7), 'numberposts' => 4, 'post_type' =>  'viewing' ); 
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
  
  
</div>

<?php get_footer(); ?>