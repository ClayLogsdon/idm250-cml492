<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>title</title>
    <link rel="stylesheet" href="./styles/main.css">
    <?php // https://developer.wordpress.org/reference/functions/wp_head/;?>
  <?php wp_head(); ?>


  <?php get_header(); ?>



<h1><?php echo get_the_title(); //get title of call home ?></h1>

<header>
    <div class="header-banner">
        <h1>BLOG</h1>
    </div>
    <div class="hero-h2">
        <h2>Journal Entry #1</h2>
</div>
    <div class="clear"></div>
    <nav>
        <div class="site-title">Bookish</div>
        <ul>
            <li><a href="/archive">Home</a></li>
            <li><a href="/events">Events</a></li>
            <li><a href="/contact">Contact</a></li>
        <ul>
    </nav>
</header>
     
<section class="content">
    <article>
        <p> Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged.</p>
        <img src="./image/insp-quote-1.png">
        <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged.</p>

        <p>Additional reasons facts regarding Lorum Ipsum can be found below:
        <ul>
            <li> one </li>
            <li> two </li>
            <li> three </li>
            <li> four </li>
</ul>
</article>

<iframe width="420" height="300"
src="https://www.youtube.com/watch?v=F_RRk9yttAM&ab_channel=MirelleMokhtar">
</iframe>
</section> 

<script>

/* ========================================== 
scrollTop() >= 300
Should be equal the the height of the header
========================================== */

$(window).scroll(function(){
    if ($(window).scrollTop() >= 300) {
        $('nav').addClass('fixed-header');
        $('nav div').addClass('visible-title');
    }
    else {
        $('nav').removeClass('fixed-header');
        $('nav div').removeClass('visible-title');
    }
});


   </script> 
  
<?php get_template_part('components/content'); ?>
<?php get_footer(); ?>