<?php
/**
 * The template for displaying 404 pages (not found)
 *
 * @link https://codex.wordpress.org/Creating_an_Error_404_Page
 *
 * @package idm250-theme
 */

$pagehead="404";

set_query_var('pagehead', "404");

get_header();
?>

<div class="col-12">
		<div class="container text-center pb-3 pt-3">
			<a class="text-center" href="index.php"><img src="/idm250//wp-content/themes/idm250-theme/img/logo.png" alt=""></a>
			
			<p class="fnf-p">Sorry, we weren’t able to find this page</p>
			<p><img src="/idm250//wp-content/themes/idm250-theme/img/image22.svg" width="50%"/></p>
			
			<a class="btn btn-404 text-center" href="/idm250/">Return to Home</a>
		</div>
	</div>


