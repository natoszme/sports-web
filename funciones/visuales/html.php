<?php

	function imprimir_head($tipo)
	{	
		echo '<head>
		<title>LA NUESTRA</title>
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
		<meta name="keywords" content="Style Blog Responsive web template, Bootstrap Web Templates, Flat Web Templates, Android Compatible web template, 
		Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, SonyEricsson, Motorola web design" />
		<script type="applijewelleryion/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
		<link href="css/bootstrap.css" rel="stylesheet" type="text/css" />
		<!-- Custom Theme files -->
		<link href="fonts/raleway.css" rel="stylesheet" type="text/css">
		<link href="css/style.css" rel="stylesheet" type="text/css" />	
		<link href="css/propios.css" rel="stylesheet" type="text/css" />	
		<script src="js/jquery-1.11.1.min.js"></script>
		<script src="js/bootstrap.min.js"></script>
		<!-- animation-effect -->';
		if ($tipo == "index")
		{
			echo '<link href="css/animate.min.css" rel="stylesheet">';
		}
		echo '<script src="js/wow.min.js"></script>
		<script>
		 new WOW().init();
		</script>
		<!-- //animation-effect -->';
		if ($tipo == "fashion")
		{
			echo '<!--light-box-files-->
			<link rel="stylesheet" href="css/chocolat.css" type="text/css" media="screen">
			<script src="js/jquery.chocolat.js"></script>
			<script type="text/javascript">
				$(function() {
					$(".gallery-grid a").Chocolat();
				});
			</script>
			<!--//light-box-files-->';
		}
		if($tipo == "music")
		{
			echo '<link rel="stylesheet" type="text/css" href="css/component.css" />
			<script src="js/modernizr.custom.js"></script>';
		}
		
		echo '<script src = "js/propio.js"></script>
		</head>';
	}
	
	function imprimir_header()
	{
		echo '<div class="header" id="ban">
			<div class="container">
				<div class="header_right wow fadeInLeft animated animated" data-wow-delay=".5s" style="visibility: visible; animation-delay: 0.5s; animation-name: fadeInLeft;">
				<nav class="navbar navbar-default">
					<!-- Brand and toggle get grouped for better mobile display -->
					<div class="navbar-header">
						<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
							<span class="sr-only">Toggle navigation</span>
							<span class="icon-bar"></span>
							<span class="icon-bar"></span>
							<span class="icon-bar"></span>
						</button>
					</div>

					<!-- Collect the nav links, forms, and other content for toggling -->
					<div class="collapse navbar-collapse nav-wil" id="bs-example-navbar-collapse-1">
						<nav class="link-effect-7" id="link-effect-7">
							<ul class="nav navbar-nav">
								<li><a href="index.php">Home</a></li>
								<li><a href="about.php">About</a></li>
								<li><a href="features.php">Features</a></li>
								<li><a href="travel.php">Travel</a></li>
								<li><a href="fashion.php">Fashion</a></li>
								<li><a href="music.php">Music</a></li>
								<li><a href="codes.php">Codes</a></li>
								<li><a href="contact.php">Contact</a></li>
							</ul>
						</nav>
					</div>
					<!-- /.navbar-collapse -->
				</nav>
				</div>
				<div class="nav navbar-nav navbar-right social-icons wow fadeInRight animated animated" data-wow-delay=".5s" style="visibility: visible; animation-delay: 0.5s; animation-name: fadeInRight;">
						<ul>
							<li><a href="#"> </a></li>
							<li><a href="#" class="pin"> </a></li>
							<li><a href="#" class="in"> </a></li>
							<li><a href="#" class="be"> </a></li>
							
							<li><a href="#" class="vimeo"> </a></li>
						</ul>
					</div>
				<div class="clearfix"> </div>	
			</div>
		</div>';
	}
	
	function imprimir_titulo()
	{
		echo '<div class="header-bottom">
			<div class="container">
				<div class="logo wow fadeInDown"  data-wow-duration=".8s" data-wow-delay=".2s">
					<h1><a href="index.php">LA NUESTRA</a></h1>
				</div>
			</div>
		</div>';
	}
	
	function imprimir_portada()
	{
		echo '<div class="banner">
		<div class="container">	
				<h2>Contrary to popular belief, Lorem Ipsum simply</h2>
				<p>Lorem Ipsum has been the industrys standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make Lorem Ipsum has been the industrys standard dummy text ever since the 1500s</p>
				<a href="singlepage.php">READ MORE</a>
			</div>
		</div>';
	}
	
	function imprimir_barra_lateral()
	{
		echo '<div class="blo-top1">
							
				<div class="tech-btm">
				<div class="search-1 wow fadeInDown"  data-wow-duration=".8s" data-wow-delay=".2s">
						<form action="#" method="post">
							<input type="search" name="Search" value="Search" onfocus="this.value = "";" onblur="if (this.value == "") {this.value = "Search";}" required="">
							<input type="submit" value=" ">
						</form>
					</div>
				<h4>Popular Posts </h4>
					<div class="blog-grids wow fadeInDown"  data-wow-duration=".8s" data-wow-delay=".2s">
						<div class="blog-grid-left">
							<a href="singlepage.php"><img src="images/t2.jpg" class="img-responsive" alt=""></a>
						</div>
						<div class="blog-grid-right">
							
							<h5><a href="singlepage.php">Pellentesque dui Maecenas male</a> </h5>
						</div>
						<div class="clearfix"> </div>
					</div>
					<div class="blog-grids wow fadeInDown"  data-wow-duration=".8s" data-wow-delay=".2s">
						<div class="blog-grid-left">
							<a href="singlepage.php"><img src="images/m2.jpg" class="img-responsive" alt=""></a>
						</div>
						<div class="blog-grid-right">
							
							<h5><a href="singlepage.php">Pellentesque dui Maecenas male</a> </h5>
						</div>
						<div class="clearfix"> </div>
					</div>
					<div class="blog-grids wow fadeInDown"  data-wow-duration=".8s" data-wow-delay=".2s">
						<div class="blog-grid-left">
							<a href="singlepage.php"><img src="images/f2.jpg" class="img-responsive" alt=""></a>
						</div>
						<div class="blog-grid-right">
							
							<h5><a href="singlepage.php">Pellentesque dui Maecenas male</a> </h5>
						</div>
						<div class="clearfix"> </div>
					</div>
					<div class="blog-grids wow fadeInDown"  data-wow-duration=".8s" data-wow-delay=".2s">
						<div class="blog-grid-left">
							<a href="singlepage.php"><img src="images/t3.jpg" class="img-responsive" alt=""></a>
						</div>
						<div class="blog-grid-right">
							
							<h5><a href="singlepage.php">Pellentesque dui Maecenas male</a> </h5>
						</div>
						<div class="clearfix"> </div>
					</div>
					<div class="blog-grids wow fadeInDown"  data-wow-duration=".8s" data-wow-delay=".2s">
						<div class="blog-grid-left">
							<a href="singlepage.php"><img src="images/m3.jpg" class="img-responsive" alt=""></a>
						</div>
						<div class="blog-grid-right">
							
							<h5><a href="singlepage.php">Pellentesque dui Maecenas male</a> </h5>
						</div>
						<div class="clearfix"> </div>
					</div>
					<div class="insta wow fadeInDown"  data-wow-duration=".8s" data-wow-delay=".2s">
				<h4>Instagram</h4>
					<ul>
						
						<li><a href="singlepage.php"><img src="images/t1.jpg" class="img-responsive" alt=""></a></li>
						<li><a href="singlepage.php"><img src="images/m1.jpg" class="img-responsive" alt=""></a></li>
						<li><a href="singlepage.php"><img src="images/f1.jpg" class="img-responsive" alt=""></a></li>
						<li><a href="singlepage.php"><img src="images/m2.jpg" class="img-responsive" alt=""></a></li>
						<li><a href="singlepage.php"><img src="images/f2.jpg" class="img-responsive" alt=""></a></li>
						<li><a href="singlepage.php"><img src="images/t2.jpg" class="img-responsive" alt=""></a></li>
						<li><a href="singlepage.php"><img src="images/f3.jpg" class="img-responsive" alt=""></a></li>
						<li><a href="singlepage.php"><img src="images/t3.jpg" class="img-responsive" alt=""></a></li>
						<li><a href="singlepage.php"><img src="images/m3.jpg" class="img-responsive" alt=""></a></li>
					</ul>
				</div>
				
				<p>Lorem ipsum ex vix illud nonummy, novum tation et his. At vix scripta patrioque scribentur, at pro</p>
				<div class="twt">
				
					<iframe id="twitter-widget-0" scrolling="no" frameborder="0" allowtransparency="true" class="twitter-hashtag-button twitter-hashtag-button-rendered twitter-tweet-button" title="Twitter Tweet Button" src="https://platform.twitter.com/widgets/tweet_button.b7de008f493a5185d8df1aedd62d77c6.en.html#button_hashtag=TwitterStories&amp;dnt=false&amp;id=twitter-widget-0&amp;lang=en&amp;original_referer=https%3A%2F%2Fp.w3layouts.com%2Fdemos%2Fduplex%2Fweb%2F&amp;size=l&amp;time=1467721486626&amp;type=hashtag" style="position: static; visibility: visible; width: 166px; height: 28px;" data-hashtag="TwitterStories"></iframe>
					<script>!function(d,s,id){var js,fjs=d.getElementsByTagName(s)[0],p=/^http:/.test(d.location)?"http":"https";if(!d.getElementById(id)){js=d.createElement(s);js.id=id;js.src=p+"://platform.twitter.com/widgets.js";fjs.parentNode.insertBefore(js,fjs);}}(document, "script", "twitter-wjs");</script>
				</div>
				</div>
				
				
				
			</div>';
	}
	
	function imprimir_footer()
	{
		echo '<div class="footer">
			<div class="container">
				<div class="col-md-4 footer-left wow fadeInDown"  data-wow-duration=".8s" data-wow-delay=".2s">
					<h4>About Me</h4>
					<p>Consectetur adipisicing Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod .</p>
					<img src="images/t4.jpg" class="img-responsive" alt="">
						<div class="bht1">
							<a href="singlepage.php">Read More</a>
						</div>
				</div>
				<div class="col-md-4 footer-middle wow fadeInDown"  data-wow-duration=".8s" data-wow-delay=".2s">
				<h4>Latest Tweet</h4>
				<div class="mid-btm">
					<p>Sed do eiusmod tempor Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod .</p>
					<a href="https://w3layouts.com/">https://w3layouts.com/</a>
				</div>
				
					<p>Consectetur adipisicing Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod .</p>
					<a href="https://w3layouts.com/">https://w3layouts.com/</a>
			
				</div>
				<div class="col-md-4 footer-right wow fadeInDown"  data-wow-duration=".8s" data-wow-delay=".2s">
					<h4>Newsletter</h4>
					<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt</p>
							<div class="name">
								<form action="#" method="post">
									<input type="text" placeholder="Your Name" required="">
									<input type="text" placeholder="Your Email" required="">
									<input type="submit" value="Subscribed Now">
								</form>
							
							</div>	
							
								<div class="clearfix"> </div>
						
				</div>
				<div class="clearfix"></div>
			</div>
		</div>
		<div class="copyright wow fadeInDown"  data-wow-duration=".8s" data-wow-delay=".2s">
			<div class="container">
				<p>© 2016 Style Blog. All rights reserved | Design by <a href="http://w3layouts.com/">W3layouts</a></p>
			</div>
		</div>';
	}
?>