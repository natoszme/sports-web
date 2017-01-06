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
	<?php imprimir_head("fashion"); ?>
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
			<div class="gallery" id="gallery">
		
			<h2 class="w3">FASHION</h2>
			<p>Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour, or randomised words which don't look even slightly believable alteration in some form, by injected humour, or randomised words which don't look even slightly believable, Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour, or randomised words which don't look even slightly believable alteration in some form, by injected humour, or randomised words which don't look even slightly believable </p>			
			<div class="gallery-grids">
				<div class="gallery-grid">
					<a href="images/g1.jpg" class="wow fadeInUp animated animated" data-wow-delay=".5s" style="visibility: visible; animation-delay: 0.5s; animation-name: fadeInUp;">
						<img src="images/g1.jpg" alt=" " class="img-responsive zoom-img">
					</a>
					<a href="images/g5.jpg" class="wow fadeInUp animated animated" data-wow-delay=".5s" style="visibility: visible; animation-delay: 0.5s; animation-name: fadeInUp;">
						<img src="images/g5.jpg" alt=" " class="img-responsive zoom-img">
					</a>
				</div>
				<div class="gallery-grid">
					<a href="images/g6.jpg" class="wow fadeInUp animated animated" data-wow-delay=".5s" style="visibility: visible; animation-delay: 0.5s; animation-name: fadeInUp;">
						<img src="images/g6.jpg" alt=" " class="img-responsive zoom-img">
					</a>
					<a href="images/g2.jpg" class="wow fadeInUp animated animated" data-wow-delay=".5s" style="visibility: visible; animation-delay: 0.5s; animation-name: fadeInUp;">
						<img src="images/g2.jpg" alt=" " class="img-responsive zoom-img">
					</a>
				</div>
				<div class="gallery-grid">
					<a href="images/g3.jpg" class="wow fadeInUp animated animated" data-wow-delay=".5s" style="visibility: visible; animation-delay: 0.5s; animation-name: fadeInUp;">
						<img src="images/g3.jpg" alt=" " class="img-responsive zoom-img">
					</a>
					<a href="images/g7.jpg" class="wow fadeInUp animated animated" data-wow-delay=".5s" style="visibility: visible; animation-delay: 0.5s; animation-name: fadeInUp;">
						<img src="images/g7.jpg" alt=" " class="img-responsive zoom-img">
					</a>
				</div>
				<div class="gallery-grid" data-wow-delay=".5s">
					<a href="images/g8.jpg">
						<img src="images/g8.jpg" alt=" " class="img-responsive zoom-img">
					</a>
					<a href="images/g4.jpg" class="wow fadeInUp animated animated" data-wow-delay=".5s" style="visibility: visible; animation-delay: 0.5s; animation-name: fadeInUp;">
						<img src="images/g4.jpg" alt=" " class="img-responsive zoom-img">
					</a>
				</div>
				<div class="clearfix"> </div>
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
		$("li:contains('Fashion')" ).addClass( "active act");
	});

</script>
</body>
</html>