
<!DOCTYPE html>
<html lang="en">
<head>
<title>Hotel Y Restaurante M & B</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="keywords" content="Royal Recipes Responsive web template, Bootstrap Web Templates, Flat Web Templates, Android Compatible web template, 
Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, SonyEricsson, Motorola web design" />
<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
<!-- bootstrap-css -->
<link href="css/bootstrap.css" rel="stylesheet" type="text/css" media="all" />
<!--// bootstrap-css -->
<!-- css -->
<link rel="stylesheet" href="css/style.css" type="text/css" media="all" />
<!--// css -->
<link rel="stylesheet" href="css/owl.carousel.css" type="text/css" media="all">
<link href="css/owl.theme.css" rel="stylesheet">
<!-- font-awesome icons -->
<link href="css/font-awesome.css" rel="stylesheet"> 
<!-- //font-awesome icons -->
<!-- font -->
<link href='//fonts.googleapis.com/css?family=Pacifico' rel='stylesheet' type='text/css'>
<link href='//fonts.googleapis.com/css?family=Open+Sans+Condensed:300,300italic,700' rel='stylesheet' type='text/css'>
<!-- //font -->
<script src="js/jquery-1.11.1.min.js"></script>
<script src="js/bootstrap.js"></script>
<!-- light-box -->
<link rel="stylesheet" href="css/lightbox.css">
<!-- //light-box -->
<script src="js/SmoothScroll.min.js"></script>
<!--search jQuery-->
<script src="js/main.js"></script>
<!--//search jQuery-->
<script type="text/javascript">
	jQuery(document).ready(function($) {
		$(".scroll").click(function(event){		
			event.preventDefault();
			$('html,body').animate({scrollTop:$(this.hash).offset().top},1000);
		});
	});
</script>

<script>
$(document).ready(function() { 
	$("#owl-demo").owlCarousel({
 
		autoPlay: 3000, //Set AutoPlay to 3 seconds
		autoPlay:true,
		items : 4,
		itemsDesktop : [640,5],
		itemsDesktopSmall : [414,4]
 
	});
	
}); 
</script>
</head>
<body>
	<div class="w3layouts-banner-top">
		
	</div>
	<!-- banner -->
	<div class="banner">
		<div class="top-banner">
			<div class="container">
				<div class="top-banner-left">
					<ul>
						<li><i class="fa fa-phone" aria-hidden="true"></i> +504 234 567 891</li>
						<li><a href="mailto:example@email.com"><i class="fa fa-envelope" aria-hidden="true"></i> mybHotel.gmail.com</a></li>
					</ul>
				</div>
				<div class="top-banner-right">
					<ul>
						<li><a class="facebook" href="#"><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
						<li><a class="facebook" href="#"><i class="fa fa-twitter" aria-hidden="true"></i></a></li>
						<li><a class="facebook" href="#"><i class="fa fa-dribbble" aria-hidden="true"></i></a></li>
						<li><a class="facebook" href="#"><i class="fa fa-google-plus" aria-hidden="true"></i></a></li>
					</ul>
				</div>
				<div class="clearfix"> </div>
			</div>
		</div>
		<div class="header">
			<div class="container">
				<div class="logo">
					<h1>
						<a href="index.html">B&M</a>
					</h1>
				</div>
				<div class="top-nav">
					<nav class="navbar navbar-default">
							<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">Menu						
							</button>
						<!-- Collect the nav links, forms, and other content for toggling -->
						<div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
							<ul class="nav navbar-nav">
								<li><a class="active" href="restaurante.php">Inicio</a></li>
								<li><a href="about.php">Quienes Somos</a></li>								
								<li><a href="menu.php">Menu</a></li>
							</ul>	
							<div class="clearfix"> </div>
						</div>	
					</nav>		
				</div>
				<div class="clearfix"> </div>
			</div>
		</div>
		<div class="banner-slider">
			<div class="container">
				<div class="slider">
					<div class="callbacks_container">
						<ul class="rslides callbacks callbacks1" id="slider4">
							<li>
								<div class="agileits-banner-info">
									<h3>Hotel y Restaurante</h3>
									<a href="menu.php">Menu</a>
								</div>
							</li>
							<li>
								<div class="agileits-banner-info">
									<h3>Comidas</h3>
									<a href="menu.php">Menu</a>
								</div>
							</li>
							<li>
								<div class="agileits-banner-info">
									<h3>Bebidas</h3>
									<a href="menu.php">Menu</a>
								</div>
							</li>
						</ul>
					</div>
					<script src="js/responsiveslides.min.js"></script>
					<script>
						// You can also use "$(window).load(function() {"
						$(function () {
						  // Slideshow 4
						  $("#slider4").responsiveSlides({
							auto: true,
							pager:true,
							nav:false,
							speed: 500,
							namespace: "callbacks",
							before: function () {
							  $('.events').append("<li>before event fired.</li>");
							},
							after: function () {
							  $('.events').append("<li>after event fired.</li>");
							}
						  });
					
						});
					 </script>
					<!--banner Slider starts Here-->
				</div>
			</div>
		</div>
	</div>
	<!-- banner -->
	<!-- services -->
	<div class="services" id="services">
		<div class="container">
			<div class="services-heading">
				<h2>Te Ofrecemos</h2>
			</div>
			<div class="w3-agileits-services-grids">
				<div class="col-md-4 w3-agileits-services-left">
					<div class="services-info">
						
					</div>
				</div>
				<div class="col-md-8 w3-agileits-services-right">
					<div class="services-right-grids">
						<div class="col-sm-6 services-right-grid">
							<div>
								<img src="images/g6.jpg" alt="" width="100">
							</div>
							<div class="services-icon-info">
								<h5>Platillos</h5>
								<p>Los mas deliciosos platillos que nunca antes hayas disfrutado.</p>
							</div>
						</div>
						<div class="col-sm-6 services-right-grid">
							<div>
								<img src="images/jugo11.jpg" alt="" width="100" height="120">
							</div>
							<div class="services-icon-info">
								<h5>Bebidas</h5>
								<p>Las mejores bebidas del pais y el mundo para ti y tu familia.</p>
							</div>
						</div>
						<div class="clearfix"> </div>
					</div>
					<div class="services-right-grids">
						<div class="col-sm-6 services-right-grid">
							<div>
								<img src="images/sopa1.jpg" alt="" width="100" height="120">
							</div>							<div class="services-icon-info">
								<h5>Sopas</h5>
								<p>Las mejores sopas que nunca antes hayas probado.</p>
							</div>
						</div>
						<div class="col-sm-6 services-right-grid">
							<div>
								<img src="images/postre2.jpg" alt="" width="100" height="120">
							</div>
							<div class="services-icon-info">
								<h5>Postres</h5>
								<p>Los mejores postres para que disfrutes con los que mas quieres.</p>
							</div>
						</div>
						<div class="clearfix"> </div>
					</div>
					<div class="services-right-grids">
						<div class="col-sm-6 services-right-grid">
							<div>
								<img src="images/vino4.jpg" alt="" width="100" height="120">
							</div>
							<div class="services-icon-info">
								<h5>Vinos</h5>
								<p>Los mejores vinos del pais hechos en casa.</p>
							</div>
						</div>
						<div class="col-sm-6 services-right-grid">
							<div>
								<img src="images/s1.jpg" alt="" width="100" height="120">
							</div>
							<div class="services-icon-info">
								<h5>Promociones</h5>
								<p>Las mejores promocienes para que gastes menos y disfrutes mas .</p>
							</div>
						</div>
						<div class="clearfix"> </div>
					</div>
				</div>
				<div class="clearfix"> </div>
			</div>
		</div>
	</div>
	<!-- //services -->
	<!-- offer -->
	<div class="jarallax offer">
		<div class="container">
			<div class="w3l-offer-heading">
				<h3>Promociones</h3>
			</div>
			<div class="w3ls-offer-slider">
				<div class="slider">
					<div class="callbacks_container">
						<ul class="rslides callbacks callbacks1" id="slider3">
							<li>
								<div class="agileinfo-offer-grid">
									<h4>45<span>%</span></h4>
									<h5>Comidas</h5>
									<p>Los mejores descuentos en tus comidas favoritas. </p>
								</div>
							</li>
							<li>
								<div class="agileinfo-offer-grid">
									<h4>50%</h4>
									<h5>Bebidas</h5>
									<p>Las bebidas con los mayores descuentos de la ciudad.</p>
								</div>
							</li>
							<li>
								<div class="agileinfo-offer-grid">
									<h4>64%</h4>
									<h5>Postres</h5>
									<p>Los mas exquisitos postres para que disfrutes y a los mejores precios.</p>
								</div>
							</li>
						</ul>
					</div>
					<script>
						// You can also use "$(window).load(function() {"
						$(function () {
						  // Slideshow 4
						  $("#slider3").responsiveSlides({
							auto: true,
							pager:false,
							nav:false,
							speed: 500,
							namespace: "callbacks",
							before: function () {
							  $('.events').append("<li>before event fired.</li>");
							},
							after: function () {
							  $('.events').append("<li>after event fired.</li>");
							}
						  });
					
						});
					 </script>
					<!--banner Slider starts Here-->
				</div>
			</div>
			<script src="js/jarallax.js"></script>
		</div>
	</div>
	<!-- //offer -->
	<!-- special -->
	<div class="special">
		<div class="container">
			<div class="wthree-special-heading">
				<h3>Especial del dia</h3>
			</div>
			<div class="special-grids">
				<div id="owl-demo" class="owl-carousel owl-theme">
						<div class="item">
							<div class="w3-agileits-special-grid-info">
								<img src="images/s1.jpg" alt="" />
								<div class="agile-special-grid-text"> 
									<h5>Comida </h5>
									<p><del>Lps. 200</del> Lps. 150</p>
								</div>
							</div>	
						</div>
						<div class="item">
							<div class="w3-agileits-special-grid-info">
								<img src="images/s2.jpg" alt="" />
								<div class="agile-special-grid-text"> 
									<h5>Comida </h5>
									<p><del>Lps. 250</del> Lps.100</p>
								</div>
							</div>	
						</div>
						<div class="item">
							<div class="w3-agileits-special-grid-info">
								<img src="images/s3.jpg" alt="" />
								<div class="agile-special-grid-text"> 
									<h5>Comida </h5>
									<p><del>Lps.160</del> Lps.120</p>
								</div>
							</div>	
						</div>
						<div class="item">
							<div class="w3-agileits-special-grid-info">
								<img src="images/s4.jpg" alt="" />
								<div class="agile-special-grid-text"> 
									<h5>Comida </h5>
									<p><del>Lps.320</del> Lps.220</p>
								</div>
							</div>
						</div>
						<div class="item">
							<div class="w3-agileits-special-grid-info">
								<img src="images/s1.jpg" alt="" />
								<div class="agile-special-grid-text"> 
									<h5>Comida </h5>
									<p><del>Lps.200</del> Lps.150</p>
								</div>
							</div>	
						</div>
						<div class="item">
							<div class="w3-agileits-special-grid-info">
								<img src="images/s2.jpg" alt="" />
								<div class="agile-special-grid-text"> 
									<h5>Comida </h5>
									<p><del>Lps.250</del> Lps.100</p>
								</div>
							</div>	
						</div>
						<div class="item">
							<div class="w3-agileits-special-grid-info">
								<img src="images/s3.jpg" alt="" />
								<div class="agile-special-grid-text"> 
									<h5>Comida </h5>
									<p><del>Lps.160</del> Lps.120</p>
								</div>
							</div>	
						</div>
						<div class="item">
							<div class="w3-agileits-special-grid-info">
								<img src="images/s4.jpg" alt="" />
								<div class="agile-special-grid-text"> 
									<h5>Comida </h5>
									<p><del>Lps.320</del> Lps.220</p>
								</div>
							</div>
						</div>
				</div>
			</div>
		</div>
	</div>
	<!-- //special -->
	<!-- footer -->
	<div class="w3-agile-footer">
		<div class="container">
			<div class="footer-grids">
				<div class="col-md-4 footer-grid">
					<div class="footer-grid-heading">
						<h4>Direccion</h4>
					</div>
					<div class="footer-grid-info">
						<p>Honduras
							<span>Tegucigalpa,Kingsport 56777.</span>
						</p>
						<p class="phone">Telefono : +504 123 456 789
							<span>Email : <a href="mailto:example@email.com">mybHotel.gmail.com</a></span>
						</p>
					</div>
				</div>
				<div class="col-md-4 footer-grid">
					<div class="footer-grid-heading">
						<h4>Navegacion</h4>
					</div>
					<div class="footer-grid-info">
						<ul>
							<li><a href="restaurante.php">Inicio</a></li>
							<li><a href="about.php">Quienes Somos</a></li>
							<li><a href="menu.php">Menu</a></li>
						</ul>
					</div>
				</div>
				<div class="col-md-4 footer-grid">
					<div class="footer-grid-heading">
						<h4>Siguenos</h4>
					</div>
					<div class="social">
						<ul>
							<li><a href="#"><i class="fa fa-facebook"></i></a></li>
							<li><a href="#"><i class="fa fa-twitter"></i></a></li>
							<li><a href="#"><i class="fa fa-rss"></i></a></li>
							<li><a href="#"><i class="fa fa-vk"></i></a></li>
						</ul>
					</div>
				</div>
				<div class="clearfix"> </div>
			</div>
			<div class="agileits-w3layouts-copyright">
				<p>© 2018 B&M . All Rights Reserved | Design by <a href="http://w3layouts.com/"> Bryan and Karen</a> </p>
			</div>
		</div>
	</div>
	<!-- //footer -->
	<script src="js/owl.carousel.js"></script>  
	<script type="text/javascript" src="js/move-top.js"></script>
	<script type="text/javascript" src="js/easing.js"></script>
	<!-- here stars scrolling icon -->
	<script type="text/javascript">
		$(document).ready(function() {
			/*
				var defaults = {
				containerID: 'toTop', // fading element id
				containerHoverID: 'toTopHover', // fading element hover id
				scrollSpeed: 1200,
				easingType: 'linear' 
				};
			*/
								
			$().UItoTop({ easingType: 'easeOutQuart' });
								
			});
	</script>
<!-- //here ends scrolling icon -->
<script type="text/javascript">
			/* init Jarallax */
			$('.jarallax').jarallax({
				speed: 0.5,
				imgWidth: 1366,
				imgHeight: 768
			})
		</script>
</body>	
</html>