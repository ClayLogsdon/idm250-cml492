<?php /* Template Name: BlogTemplate */ ?>

<?php set_query_var('pagehead', "Blog"); ?>
<?php get_header(); ?>

<div class="col-12">
<div class="container  pb-3 pt-3">
	<div class="row">
		<div class="col-md-9">
			<h3 class="heading-text">Journal Entry #1</h3>
			<p class="justify"> Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged.</p>
			<img src="/wp-content/themes/idm250-theme/img/image2.png" width="100%"/>
			<label class="text-muted col-12 text-center">Socrates - @LinkedMedia</label>
			<p class="mt-3">Additional reasons facts regarding Lorum Ipsum can be found below:</p>
<ul class="recommend">
		<li>One</li>
		<li>Two</li>
		<li>Three</li>
		<li>Four</li>
	</ul>
			<p class="text-center mt-5"><span class="left-p">&nbsp;&nbsp;&nbsp;</span>&nbsp;&nbsp;&nbsp;And if life is repeated a thousand times, still you, you, and again, you...&nbsp;&nbsp;&nbsp;<span class="right-p">&nbsp;&nbsp;&nbsp;</span>
	
	</p>
	<h3 class="mt-5">Enjoy a Live Reading</h3>
	<p class="text-center mt-5">
		<img src="/wp-content/themes/idm250-theme/img/image5.png" class="col-8"/>
	</p>
	</div>
		<div class="col-md-3">
			<h3 class="text-uppercase mt-5 px-4 recent">recent posts</h3>
			<ul class="mb-5">
				<li>The Missing Ragdoll</li>
				<li>The Who of Blue</li>
				<li>A Cat at the Quagmire</li>
				<li>Bearing Fangs</li>
				<li>A Rendezvous at Rima’s</li>
			</ul>
			
			<h3 class="text-uppercase mt-5 px-4 recent">CATEGORIES</h3>
			<ul class="mb-5">
				<li>Sci-fi (42)</li>
				
			</ul>
		</div>
	</div>
</div>
</div>

<?php get_footer(); ?>