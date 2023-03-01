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
  
</head>


<div class="header-banner">

<div class="header-image-1">
<?php
// check if the post or page has a Featured Image assigned to it.
if (has_post_thumbnail()) {
    the_post_thumbnail();
}
?>


        <h1>Bookish</h1>
    </div>
    <div class="clear"></div>
    <nav>
        <div class="site-title">Bookish</div>
        <ul>
            <li><a href="/home">Home</a></li>
            <li><a href="/readings">Readings</a></li>
            <li><a href="/blog">Blog</a></li>
            <li><a href="/contact">Contact</a></li>
        <ul>
    </nav>