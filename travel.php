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
	<?php imprimir_head("travel"); ?>
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
			<div class="blog">
		
			<h2 class="w3">TRAVEL</h2>
			<div class="blog-grids1">
				<div class="col-md-6 blog-grid">
					<div class="blog-grid-left1">
						<a href="singlepage.php"><img src="images/t1.jpg" alt=" " class="img-responsive"></a>
					</div> 
					<div class="blog-grid-right1">
						<a href="singlepage.php">sint occaecat cupidatat</a>
						<h4>28 July 2016</h4>
						<p>Duis aute irure dolor in reprehenderit in voluptate velit esse 
							cillum dolore eu fugiat nulla pariatur.</p>
					</div>
					<div class="clearfix"> </div>
					<div class="more m1">
						<a class="btn effect6" href="singlepage.php">Learn More</a>
					</div>
				</div>
				<div class="col-md-6 blog-grid">
					<div class="blog-grid-left1">
						<a href="singlepage.php"><img src="images/t2.jpg" alt=" " class="img-responsive"></a>
					</div> 
					<div class="blog-grid-right1">
						<a href="singlepage.php">sint occaecat cupidatat</a>
						<h4>28 July 2016</h4>
						<p>Duis aute irure dolor in reprehenderit in voluptate velit esse 
							cillum dolore eu fugiat nulla pariatur.</p>
					</div>
					<div class="clearfix"> </div>
					<div class="more m1">
						<a class="btn effect6" href="singlepage.php">Learn More</a>
					</div>
				</div>
				<div class="clearfix"> </div>
			</div>

			<div class="blog-grids1">
				<div class="col-md-6 blog-grid">
					<div class="blog-grid-left1">
						<a href="singlepage.php"><img src="images/t3.jpg" alt=" " class="img-responsive"></a>
					</div> 
					<div class="blog-grid-right1">
						<a href="singlepage.php">sint occaecat cupidatat</a>
						<h4>27 July 2016</h4>
						<p>Duis aute irure dolor in reprehenderit in voluptate velit esse 
							cillum dolore eu fugiat nulla pariatur.</p>
					</div>
					<div class="clearfix"> </div>
					<div class="more m1">
						<a class="btn effect6" href="singlepage.php">Learn More</a>
					</div>
				</div>
				<div class="col-md-6 blog-grid">
					<div class="blog-grid-left1">
						<a href="singlepage.php"><img src="images/t1.jpg" alt=" " class="img-responsive"></a>
					</div> 
					<div class="blog-grid-right1">
						<a href="singlepage.php">sint occaecat cupidatat</a>
						<h4>28 July 2016</h4>
						<p>Duis aute irure dolor in reprehenderit in voluptate velit esse 
							cillum dolore eu fugiat nulla pariatur.</p>
					</div>
					<div class="clearfix"> </div>
					<div class="more m1">
						<a class="btn effect6" href="singlepage.php">Learn More</a>
					</div>
				</div>
				<div class="clearfix"> </div>
			</div>
			<div class="blog-grids1">
				<div class="col-md-6 blog-grid">
					<div class="blog-grid-left1">
						<a href="singlepage.php"><img src="images/t2.jpg" alt=" " class="img-responsive"></a>
					</div> 
					<div class="blog-grid-right1">
						<a href="singlepage.php">sint occaecat cupidatat</a>
						<h4>27 July 2016</h4>
						<p>Duis aute irure dolor in reprehenderit in voluptate velit esse 
							cillum dolore eu fugiat nulla pariatur.</p>
					</div>
					<div class="clearfix"> </div>
					<div class="more m1">
						<a class="btn effect6" href="singlepage.php">Learn More</a>
					</div>
				</div>
				<div class="col-md-6 blog-grid">
					<div class="blog-grid-left1">
						<a href="singlepage.php"><img src="images/t3.jpg" alt=" " class="img-responsive"></a>
					</div> 
					<div class="blog-grid-right1">
						<a href="singlepage.html">sint occaecat cupidatat</a>
						<h4>28 July 2016</h4>
						<p>Duis aute irure dolor in reprehenderit in voluptate velit esse 
							cillum dolore eu fugiat nulla pariatur.</p>
					</div>
					<div class="clearfix"> </div>
					<div class="more m1">
						<a class="btn effect6" href="singlepage.php">Learn More</a>
					</div>
				</div>
				<div class="clearfix"> </div>
			</div>
			<nav class="paging">
				<ul class="pagination pagination-lg">
					<li><a href="#" aria-label="Previous"><span aria-hidden="true"><<</span></a></li>
					<li><a href="#">1</a></li>
					<li><a href="#">2</a></li>
					<li><a href="#">3</a></li>
					<li><a href="#">4</a></li>
					<li><a href="#">5</a></li>
					<li><a href="#" aria-label="Next"><span aria-hidden="true">>></span></a></li>
				</ul>
			</nav>
		
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
		$("li:contains('Travel')" ).addClass( "active act");
	});

</script>
</body>
</html>