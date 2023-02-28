<br><br><br><br><br><br>


<footer>
  <div id="footer">
    <div class="footer2">
<?php wp_nav_menu(['theme_location' => 'footer-menu']); ?>
<div class ="icons">

</div></div>


<div class="footer-links">
<p>About</p>
<p>FAQ</p>
<p>Sitemap</p>
</div>

<br>
<p class="copyright"> Copyright&copy; <?php echo date('Y'); ?> 
<?php bloginfo('name'); ?> - @2023 Bookish WordPress Theme by Clay Logsdon</p>
<br></div>

<?php // social media icons will go here?>


  </footer>
<?php // https://developer.wordpress.org/reference/functions/wp_footer/?>
<?php wp_footer(); ?>


</body>
</html>