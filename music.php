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
	<?php imprimir_head("music"); ?>
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
			<div class="music">
				<div class="latest">
						<h2 class="w3">MUSIC</h2>
						<div class="tip-grids">
							<div class="col-md-6 tip-grid">
								<figure class="effect-julia">
									<img src="images/m5.jpg" alt="">
												
								</figure>
							</div>
							<div class="col-md-6 tip-grid-right">
								<div class="tip-gd-left">
										<h4>Voluptas sit aspernatur</h4>
										<p> Temporibus autem quibusdam et aut officiis 
									debitis aut rerum necessitatibus saepe eveniet ut 
									et voluptates repudiandae sint et molestiae non recusandae. .</p>
									<p> Temporibus autem quibusdam et aut officiis 
									debitis aut rerum necessitatibus saepe eveniet ut 
									et voluptates repudiandae .</p>
								</div>
							</div>
							<div class="clearfix"></div>
						</div>
				</div>
				<div class="effect-grid">
						<h3 class="w3">PROGRAMS</h3>
						<ul class="grid cs-style-3">
						<li>
							<figure>
								<img src="images/m1.jpg" alt="img02">
								<figcaption>
									<h4>PROGRAMS</h4>
								</figcaption>
							</figure>
						</li>
						<li>
							<figure>
								<img src="images/m2.jpg" alt="img03">
								<figcaption>
									<h4>PROGRAMS</h4>
								</figcaption>
							</figure>
						</li>
						<li>
							<figure>
								<img src="images/m3.jpg" alt="img06">
								<figcaption>
									<h4>PROGRAMS</h4>
								</figcaption>
							</figure>
						</li>
						<li>
							<figure>
								<img src="images/m3.jpg" alt="img04">
								<figcaption>
									<h4>PROGRAMS</h4>
								</figcaption>
							</figure>
						</li>
						<li>
							<figure>
								<img src="images/m2.jpg" alt="img05">
								<figcaption>
									<h4>PROGRAMS</h4>
								</figcaption>
							</figure>
						</li>
						<li>
							<figure>
								<img src="images/m1.jpg" alt="img01">
								<figcaption>
									<h4>PROGRAMS</h4>
								</figcaption>
							</figure>
						</li>
						<div class="clearfix"></div>
					</ul>
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
		$("li:contains('Music')" ).addClass( "active act");
	});

</script>
</body>
</html>