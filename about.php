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
	<?php imprimir_head("about"); ?>
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
		<div class="w3agile-1">
			<div class="welcome">
				<div class="welcome-top heading">
					<h2 class="w3">WELCOME</h2>
					<div class="welcome-bottom">
						<img src="images/t4.jpg" class="img-responsive" alt="">
						<p>Vivamus interdum diam diam, non faucibus tortor consequat vitae. Proin sit amet augue sed massa pellentesque viverra. Suspendisse iaculis purus eget est pretium aliquam ut sed diam. Nullam non magna lobortis, faucibus erat eu, consequat justo. Suspendisse commodo nibh odio, vel elementum nulla luctus sit amet.</p>
						<p>Nulla in tempor lectus. Etiam ac mauris lacinia nulla ultricies porta sit amet eleifend ligula. Quisque tincidunt vitae turpis at efficitur. Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Donec sagittis, magna a sagittis dapibus, ipsum metus interdum lectus, quis feugiat leo ipsum nec diam.</p>
					</div>
				</div>
			</div>
			<div class="team">	
				<h3 class="team-heading">Meet our team</h3>
				<div class="team-grids">
					<div class="col-md-6 team-grid">
						<div class="team-grid1">
							<img src="images/2.jpg" alt=" " class="img-responsive">
							<div class="p-mask">
								<p>Neque porro quisquam est, qui dolorem ipsum.</p>
								
							</div>
						</div>
						<h5>Laura Mark<span>Sales Manager</span></h5>
						<ul class="social">
							<li><a class="social-facebook" href="#">
								<i></i>
								<div class="tooltip"><span>Facebook</span></div>
								</a></li>
							<li><a class="social-twitter" href="#">
								<i></i>
								<div class="tooltip"><span>Twitter</span></div>
								</a></li>
							<li><a class="social-google" href="#">
								<i></i>
								<div class="tooltip"><span>Google+</span></div>
								</a></li>
						</ul>
					</div>
					<div class="col-md-6 team-grid">
						<div class="team-grid1">
							<img src="images/3.jpg" alt=" " class="img-responsive">
							<div class="p-mask">
								<p>Neque porro quisquam est, qui dolorem ipsum.</p>
								
							</div>
						</div>
						<h5>Joseph Ali<span>Manager</span></h5>
						<ul class="social">
							<li><a class="social-facebook" href="#">
								<i></i>
								<div class="tooltip"><span>Facebook</span></div>
								</a></li>
							<li><a class="social-twitter" href="#">
								<i></i>
								<div class="tooltip"><span>Twitter</span></div>
								</a></li>
							<li><a class="social-google" href="#">
								<i></i>
								<div class="tooltip"><span>Google+</span></div>
								</a></li>
						</ul>
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
		$("li:contains('About')" ).addClass( "active act");
	});

</script>
</body>
</html>