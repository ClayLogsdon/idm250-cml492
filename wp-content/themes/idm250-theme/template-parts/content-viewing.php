
<div class="col-12 mt-3 text-center py-5">
	<div class="container">
		
		<div class="position-relative">


			</div>
			<div class="testimonial text-center">
					<h3 class="heading-text mb-5">		<?php the_title(); ?></h3>
				<center>	<?php idm250_theme_post_thumbnail(); ?> </center>
				<div class="progress mt-5 col-6 m-auto">
				    <?php 
				    $totalnumber=get_field('total_page_number');
				    
				    $currentnumber=get_field('current_page_number');
				    $percentage=($currentnumber/$totalnumber)*100;
				    ?>
				    
				  <div class="progress-bar " role="progressbar" style="width: <?php echo $percentage ?>%" aria-valuenow="75" aria-valuemin="0" aria-valuemax="100"><?php echo round($percentage, 0) ?>%</div>
				</div>
				<div class=" mt-3 col-6 m-auto" border="2">
				   <span class="px-2 py-2" ><?php echo get_field('current_page_number');?></span>
				   <span class="bg-dark text-white align-center px-2 py-2"><?php echo get_field('total_page_number');?></span><br/>
				   <br/>
				   
				</div>
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
	<p class="text-center mb-5">
	
		<?php the_content();
?>	
	
	</p>

	</div>
</div>

<div class="col-12">
		<div class="container  pb-3 pt-3">
			<h3 class="heading-text2">Up Next</h3>
			<div class="row">
			    
			    			       <?php
    $args = array( 'category__and' => array(8), 'numberposts' => 4, 'post_type' =>  'viewing' ); 
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
		 
<div class="col-12">
<div class="container  pb-3 pt-3">
	<h3 class="heading-text2">Enjoy a Live Reading</h3>
	<p class="text-center">
	
<iframe width="700" height="505" class="col-8" src="https://www.youtube.com/embed/LeUm07WtTvE" title="Billy Collins on Reading Poetry Aloud" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe>

	</p>
</div>
</div>
		</div>
	</div>


<script>
$(document).ready(function(){
  $('.testi-slide').slick(
  { 
  prevArrow: $('.pr'),
      nextArrow: $('.nxt'),
	autoplay:false, 
	  
  infinite: true,
  responsive: [
    {
      breakpoint: 768,
      settings: {
        arrows: false,
        centerMode: true,
        
        slidesToShow: 1
      }
    },
    {
      breakpoint: 480,
      settings: {
        arrows: false,
        centerMode: true,
       
        slidesToShow: 1
      }
    }
  ]
  });
  
});
</script>