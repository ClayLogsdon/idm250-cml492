<?php /* Template Name: ViewingReadingsTemplate */ ?>

<?php set_query_var('pagehead', "Viewing Readings"); ?>
<?php get_header(); ?>

<div class="col-12 mt-3 text-center py-5">
	<div class="container">
		
		<div class="position-relative">
		<button class="prev pr border-round position-absolute btn btn-primary"><i class="bi bi-arrow-left"></i></button>
		<div class="testi-slide">
			<div class="testimonial text-center">
				
				<center><img src="/idm250/wp-content/themes/idm250-theme/img/image15.png"/></center>
				<div class="progress mt-5 col-6 m-auto">
				  <div class="progress-bar w-75 " role="progressbar" width="500" aria-valuenow="75" aria-valuemin="0" aria-valuemax="100">65%</div>
				</div>
				<div class=" mt-3 col-6 m-auto" border="2">
				   <span class="px-2 py-2" >312</span>
				   <span class="bg-dark text-white align-center px-2 py-2">480</span><br/>
				   <br/>
				   <label class="text-muted"><strong>Pages</strong></label>
				</div>
			</div>
			<div class="testimonial text-center">
				
				<center><img src="/idm250/wp-content/themes/idm250-theme/img/image15.png"/></center>
				<div class="progress mt-5 col-6 m-auto">
				  <div class="progress-bar w-75 " role="progressbar" width="500" aria-valuenow="75" aria-valuemin="0" aria-valuemax="100">65%</div>
				</div>
				<div class=" mt-3 col-6 m-auto" border="2">
				   <span class="px-2 py-2" >312</span>
				   <span class="bg-dark text-white align-center px-2 py-2">480</span><br/>
				   <br/>
				   <label class="text-muted"><strong>Pages</strong></label>
				</div>
			</div>
		</div>
		<button class="next nxt border-round position-absolute btn btn-primary"><i class="bi bi-arrow-right"></i></button>
		</div>
	</div>
	
</div>
<div class="chapter col-12 mt-3 text-center py-5">
	<div class="container">
	<h3 class="heading-text mb-5">Chapter 23 - The Rising Sun</h3>
	<p class="text-center mb-5">
	
	Ankh jo kuch dekhti hai lab pe aa sakta nahin,<br/>
Mahv-e-hairat hoon ki duniya kya se kya ho jayegi<br/><br/>
,ںیہن اتکس آ ہپ بل ںیہ یتھکید ھچک وج ھکنآ<br/>
یگ ےئاج وہ ایک ےس ایک ایند ہک ںوہ تریح وحم<br/><br/>
आंख जो कुच दीखती हैं लैब पे आ सकता <br/>
नहीं
मेहाव हरत के दुनीया क्या से क्या हो जाए
	
	
	</p>
	<label>Allama Iqbal</label>
	</div>
</div>

<div class="col-12">
		<div class="container  pb-3 pt-3">
			<h3 class="inner-head text-center">Up Next</h3>
			<div class="row">
			<div class="col-lg-3 col-md-6 mb-3">
				<div class="box">
			  <a href="view-readings.php"><img src="/idm250/wp-content/themes/idm250-theme/img/image13.png" class="col-12"></a>
			 
			  </div>
			</div>
			<div class="col-lg-3 col-md-6 mb-3">
				<div class="box">
			  <img src="/idm250/wp-content/themes/idm250-theme/img/image14.png" class="col-12">
			  
			  </div>
			</div>
			<div class="col-lg-3 col-md-6 mb-3">
			<div class="box">
			  <img src="/idm250/wp-content/themes/idm250-theme/img/image11.png" class="col-12">  
			  
			  </div>
			</div>
			<div class="col-lg-3 col-md-6 mb-3">
			<div class="box">
			  <img src="/idm250/wp-content/themes/idm250-theme/img/Poetry.png" class="col-12">       
			
			  </div>
			</div>
		  </div>
		  <div class="row">
			<h3 class="mt-5 text-center">Prefer to Listen? Enjoy These Live Readings!</h3>
			<p class="text-center mt-5">
				<img src="/idm250/wp-content/themes/idm250-theme/img/image5.png" class="col-8"/>
			</p>
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

<?php get_footer(); ?>