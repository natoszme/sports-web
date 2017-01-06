<!--
Author: W3layouts
Author URL: http://w3layouts.com
License: Creative Commons Attribution 3.0 Unported
License URL: http://creativecommons.org/licenses/by/3.0/
-->

<?php

	include("funciones/visuales/html.php");

?>

<!DOCTYPE HTML>
<html>
	<?php imprimir_head("features"); ?>
<body>
	<?php imprimir_header(); ?>
	
	<!--start-main-->
	<?php imprimir_titulo(); ?>
<!-- banner -->

<div class="banner-1">

</div>

	<!-- technology-left -->
	<div class="technology">
	<div class="container">
		<div class="col-md-9 technology-left">
		<div class="agile-1">
			<div class="featured-services">
					<h2 class="w3">FEATURES</h2>
					<div class="featured-services-grids">
						<div class="col-md-4 featured-services-grid">
							<div class="featured-services-grd">
								<span class="glyphicon glyphicon-star" aria-hidden="true"></span>
								<h4>vel illum qui dolorem</h4>
								<p>Neque porro quisquam est, qui dolorem ipsum quia dolor 
									sit amet, consectetur, adipisci velit, sed quia.</p>
								
							</div>
						</div>
						<div class="col-md-4 featured-services-grid">
							<div class="featured-services-grd">
								<span class="glyphicon glyphicon-map-marker" aria-hidden="true"></span>
								<h4>vel illum qui dolorem</h4>
								<p>Neque porro quisquam est, qui dolorem ipsum quia dolor 
									sit amet, consectetur, adipisci velit, sed quia.</p>
								
							</div>
						</div>
						<div class="col-md-4 featured-services-grid">
							<div class="featured-services-grd">
								<span class="glyphicon glyphicon-envelope" aria-hidden="true"></span>
								<h4>vel illum qui dolorem</h4>
								<p>Neque porro quisquam est, qui dolorem ipsum quia dolor 
									sit amet, consectetur, adipisci velit, sed quia.</p>
							
							</div>
						</div>
						
						<div class="clearfix"> </div>
					</div>
			</div>
			<div class="features-main">
				<div class="fea-top">
				  <h3 class="w3">AMAZING FEATURES</h3>
				  <p>Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta.</p>
				</div>
				<div class="feature-botttom">
							<div class="col-md-6 fea-grid">
								<div class="fea-img">
									<img src="images/f1.jpg" alt="">
								</div>
								<div class="fea-text">
									<h4>Et iusto odio dignissimos</h4>
									<p>Lorem ipsum dolor sit amet, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
								 </div>
							  <div class="clearfix"> </div>
							</div>
							<div class="col-md-6 fea-grid">
								<div class="fea-img">
									<img src="images/m1.jpg" alt="">
								</div>
								<div class="fea-text">
									<h4>Ducimus odio dignissimos</h4>
									<p>Lorem ipsum dolor sit amet, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
								</div>
							</div>
							<div class="col-md-6 fea-grid">
								<div class="fea-img">
									<img src="images/t2.jpg" alt="">
								</div>
								<div class="fea-text">
									<h4>Et iusto odio dignissimos</h4>
									<p>Lorem ipsum dolor sit amet, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
								</div>
							  <div class="clearfix"> </div>
							</div>
							<div class="col-md-6 fea-grid">
								<div class="fea-img">
									<img src="images/t3.jpg" alt="">
								</div>
								<div class="fea-text">
									<h4>Ducimus odio dignissimos</h4>
									<p>Lorem ipsum dolor sit amet, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. </p>
								</div>
							</div>
						   <div class="clearfix"> </div>
				</div>
			</div>
			</div>
		</div>
		<!-- technology-right -->
		<div class="col-md-3 technology-right">
				
				<?php imprimir_barra_lateral(); ?>
			
		</div>
		<div class="clearfix"></div>
		<!-- technology-right -->
	</div>
</div>
<?php imprimir_footer(); ?>

<script>

	$( document ).ready(function() {
		console.log("hi");
		$("li:contains('Features')" ).addClass( "active act");
	});

</script>
</body>
</html>