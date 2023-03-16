<?php $pagehead = get_query_var('pagehead'); ?>

<!DOCTYPE html>


<html lang="en"  <?php language_attributes(); ?>>
<head>
  <title>Bookish</title>
    <link rel="icon" type="image/x-icon" href="/idm250/wp-content/themes/idm250-theme/img/favicon.png">
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="icon" type="image/x-icon" href="assets/favicon.ico" />
   <link href="/idm250/wp-content/themes/idm250-theme/css/style.css?version=3" rel="stylesheet">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>
   <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.2/font/bootstrap-icons.css" integrity="sha384-b6lVK+yci+bfDmaY1u0zE8YYJt0TZxLEAFyYSLHId4xoVvsrQu3INevFKo+Xir8e" crossorigin="anonymous">
   <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.3/jquery.min.js" integrity="sha512-STof4xm1wgkfm7heWqFJVn58Hm3EtS31XFaagaa8VMReCXAkQnJZ+jEy8PCC/iT18dFy95WcExNHFTqLyp72eQ==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
   <link href="/idm250/wp-content/themes/idm250-theme/slick/slick/slick.css" rel="stylesheet">
   <link href="/idm250/wp-content/themes/idm250-theme/slick/slick/slick-theme.css" rel="stylesheet">
    <script src="/idm250/wp-content/themes/idm250-theme/slick/slick/slick.js"></script>
    	<?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>
    <?php wp_body_open(); ?>
<div class="main-header ">
<div class="hero col-12 position-relative">
 <a class="navbar-brand position-absolute text-center py-2" href="https://clayfarah.com/idm250/"><img src="/idm250/wp-content/themes/idm250-theme/img/logo.png" alt=""></a>
<div class="container text-white hero-banner-text">
  <h2 class="text-center"><?php echo $pagehead;?></h2>

</div>
</div>


<nav class="navbar navbar-expand-lg navbar-light ">
  <div class="container text-right">
   
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="f-right navbar-nav m-auto">
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="https://clayfarah.com/idm250/">Home</a>
        </li>
         <li class="nav-item">
          <a class="nav-link " aria-current="page" href="https://clayfarah.com/idm250/readings/">Readings</a>
        </li>
         <li class="nav-item">
          <a class="nav-link " aria-current="page" href="https://clayfarah.com/idm250/blog/">Blog</a>
        </li>
       
         <li class="nav-item">
          <a class="nav-link " aria-current="page" href="https://clayfarah.com/idm250/contact/">Contact</a>
        </li>
        </ul>
       
    </div>
  </div>
</nav>
</div>