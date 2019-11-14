<!DOCTYPE html>
<html>
<head>
	<title>Lafej Nigeria Limited | Home :: infayouts</title>
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta charset="UTF-8" />
	<meta name="description" content="Online store for your stationaries and plastic bags">
	<meta name="keywords" content="Lafej,Lafej Store,Online store,free deliverystationaries,pencils,crayons,white marker board,pen,erasers,plastics,plastic bags">
	<meta name="author" content="infinitizon">

	<script>
		addEventListener("load", function () {
			setTimeout(hideURLbar, 0);
		}, false);

		function hideURLbar() {
			window.scrollTo(0, 1);
		}
	</script>
	<!-- Custom-Files -->
	<link href="<?php echo asset_url(); ?>bootstrap/4.0.0/css/bootstrap.min.css" rel="stylesheet" type="text/css" media="all" />
	<!-- Bootstrap css -->
	<link href="<?php echo asset_url(); ?>font-awesome/5.6.1/css/all.css" rel="stylesheet">
	<link href="<?php echo asset_url(); ?>css/popuo-box.css" rel="stylesheet" type="text/css" media="all" />
	<!-- pop-up-box -->
	<link href="<?php echo asset_url(); ?>css/menu.css" rel="stylesheet" type="text/css" media="all" />
	<!-- web fonts -->
	<link href="http://fonts.googleapis.com/css?family=Lato:100,100i,300,300i,400,400i,700,700i,900,900i&amp;subset=latin-ext" rel="stylesheet">
	<link href="http://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i,800,800i&amp;subset=cyrillic,cyrillic-ext,greek,greek-ext,latin-ext,vietnamese"
	    rel="stylesheet">
	<link rel="shortcut icon" href="<?php echo asset_url(); ?>images/favicon.ico" type="image/x-icon">
	<link rel="icon" href="<?php echo asset_url(); ?>images/favicon.ico" type="image/x-icon">
	<link href="<?php echo asset_url(); ?>css/style.css" rel="stylesheet" type="text/css" media="all" />
	<!-- //web fonts -->

</head>

<body>
<script src='<?php echo asset_url(); ?>js/jquery/1.12.4/jquery.min.js'></script>

<body>
	<!-- top-header -->
	<div class="agile-main-top">
		<div class="container-fluid">
			<div class="row main-top-inf py-2">
				<div class="col-lg-4 header-most-top">
					<p class="text-white text-lg-left text-center">
					</p>
				</div>
				<div class="col-lg-8 header-right mt-lg-0 mt-2 text-right">
					<!-- header lists -->
					<ul>
						<li class="text-center text-white">
							<i class="fas fa-phone mr-2"></i> +234 802 313 4240
						</li>
						<li class="text-center text-white">
							<a href="#" class="text-white">
								<i class="fas fa-sign-in-alt mr-2"></i> FAQ </a>
						</li>
					</ul>
					<!-- //header lists -->
				</div>
			</div>
		</div>
	</div>

	<!-- header-bottom-->
	<div class="header-bot">
		<div class="container">
			<div class="row header-bot_inner_wthreeinfo_header_mid">
				<!-- logo -->
				<div class="col-md-3 logo_agile">
					<h1 class="text-center">
						<a href="<?php echo base_url(); ?>" class="font-weight-bold font-italic">
							<!-- <img src="images/logo2.png" width="90" height="87" alt=" " class="img-fluid">Electro Store -->
							<img src="<?php echo asset_url(); ?>images/lafej-logo.png" 
								width="90" height="87" alt=" " style="z-index:999" class="img-fluid">&nbsp;Lafej Nigeria
						</a>
					</h1>
				</div>
				<!-- //logo -->
				<!-- header-bot -->
				<div class="col-md-9 header mt-4 mb-md-0 mb-4">
					<div class="row">
						<!-- search -->
						<div class="col-10 agileits_search">
							<form class="form-inline" action="#" method="post">
								<input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search" required>
								<button class="btn my-2 my-sm-0" type="submit">Search</button>
							</form>
						</div>
						<!-- //search -->
						<!-- cart details -->
						<div class="col-2 top_nav_right text-center mt-sm-0 mt-2">
							<div class="wthreecartaits wthreecartaits2 cart cart box_1">
								<form action="#" method="post" class="last">
									<input type="hidden" name="cmd" value="_cart">
									<input type="hidden" name="display" value="1">
									<button class="btn w3view-cart" type="submit" name="submit" value="">
										<i class="fas fa-cart-arrow-down"></i>
									</button>
								</form>
							</div>
						</div>
						<!-- //cart details -->
					</div>
				</div>
			</div>
		</div>
	</div>
	<!-- shop locator (popup) -->
	<!-- //header-bottom -->
	<!-- navigation -->
	<div class="navbar-inner">
		<div class="container">
			<nav class="navbar navbar-expand-lg navbar-light bg-light">
				<!-- <div class="agileits-navi_search">
					<form action="#" method="post">
						<select id="agileinfo-nav_search" name="agileinfo_search" class="border" required="">
							<option value="">All Categories</option>
							<option value="Televisions">Televisions</option>
							<option value="Headphones">Headphones</option>
							<option value="Computers">Computers</option>
							<option value="Appliances">Appliances</option>
							<option value="Mobiles">Mobiles</option>
							<option value="Fruits &amp; Vegetables">Tv &amp; Video</option>
							<option value="iPad & Tablets">iPad & Tablets</option>
							<option value="Cameras & Camcorders">Cameras & Camcorders</option>
							<option value="Home Audio & Theater">Home Audio & Theater</option>
						</select>
					</form>
				</div> -->
				<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
				    aria-expanded="false" aria-label="Toggle navigation">
					<span class="navbar-toggler-icon"></span>
				</button>
				<div class="collapse navbar-collapse" id="navbarSupportedContent">
					<ul class="navbar-nav ml-auto text-center mr-xl-5">
						<li class="nav-item <?php echo $this->router->fetch_class()=='home'?'active':'' ?> mr-lg-2 mb-lg-0 mb-2">
							<a class="nav-link" href="<?php echo base_url('') ?>">Home
								<?php echo $this->router->fetch_class()==''?'<span class="sr-only">(current)</span>':''; ?>
							</a>
						</li>
						<li class="nav-item <?php echo $this->router->fetch_class()=='products'?'active':'' ?> mr-lg-2 mb-lg-0 mb-2">
							<a class="nav-link" href="<?php echo base_url('products') ?>">Products
								<?php echo $this->router->fetch_class()=='products'?'<span class="sr-only">(current)</span>':''; ?>
							</a>
						</li>
						<li class="nav-item <?php echo $this->router->fetch_class()=='aboutus'?'active':'' ?> mr-lg-2 mb-lg-0 mb-2">
							<a class="nav-link" href="<?php echo base_url('aboutus') ?>">About Us
								<?php echo $this->router->fetch_class()=='aboutus'?'<span class="sr-only">(current)</span>':''; ?>
							</a>
						</li>
						<li class="nav-item <?php echo $this->router->fetch_class()=='contactus'?'active':'' ?>">
							<a class="nav-link" href="<?php echo base_url('contactus') ?>">Contact Us
								<?php echo $this->router->fetch_class()=='contactus'?'<span class="sr-only">(current)</span>':''; ?>
							</a>
						</li>
					</ul>
				</div>
			</nav>
		</div>
	</div>
    <!-- //navigation -->
    
<!-- Injected page -->
    					
<?php
$this->load->view($module.'/'.$view_file);
?>

	<!-- middle section -->
	<div class="join-inf1 py-sm-5 py-4">
		<div class="container py-xl-4 py-lg-2">
			<div class="row">
				<div class="col-lg-6">
					<div class="join-agile text-left p-4">
						<div class="row">
							<div class="col-sm-7 offer-name">
								<h6>Smooth, Reliable Leaded</h6>
								<h4 class="mt-2 mb-3">Branded Pencils</h4>
								<p>Sale up to 25% off all in store</p>
							</div>
							<div class="col-sm-5 offerimg-inf">
								<img src="images/off1.png" alt="" class="img-fluid">
							</div>
						</div>
					</div>
				</div>
				<div class="col-lg-6 mt-lg-0 mt-5">
					<div class="join-agile text-left p-4">
						<div class="row ">
							<div class="col-sm-7 offer-name">
								<h6>Bigger Sized Bags</h6>
								<h4 class="mt-2 mb-3">Plastic Bags</h4>
								<p>Free shipping order over &#x20A6;10,000</p>
							</div>
							<div class="col-sm-5 offerimg-inf">
								<img src="images/off2.png" alt="" class="img-fluid">
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
	<!-- middle section -->
	<!-- footer -->
	<footer>
		<div class="footer-top-first">
			<div class="container py-md-5 py-sm-4 py-3">
				<!-- footer first section -->
				<h2 class="footer-top-head-inf font-weight-bold mb-2">Why Shop at Lafej:</h2>
				<p class="footer-main mb-4">
				Lafej is a leading manufacturer of stationery and plastic bags in Nigeria. Our products come in various shapes and colours as requested for by our customers. Our online store is a one stop shop for all your stationery and plastic bags. What’s more? We deliver right to your door steps. Whatever your need is, Lafej has got you covered.
We deliver excellent value to our customers through prompt delivery of quality products. </p>
				<!-- //footer first section -->
				<!-- footer second section -->
				<div class="row inf-grids-footer border-top border-bottom py-sm-4 py-3">
					<div class="col-md-4 offer-footer">
						<div class="row">
							<div class="col-4 icon-fot">
								<i class="fas fa-dolly"></i>
							</div>
							<div class="col-8 text-form-footer">
								<h3>Free Shipping</h3>
								<p>on orders over &#8358;10,000</p>
							</div>
						</div>
					</div>
					<div class="col-md-4 offer-footer my-md-0 my-4">
						<div class="row">
							<div class="col-4 icon-fot">
								<i class="fas fa-shipping-fast"></i>
							</div>
							<div class="col-8 text-form-footer">
								<h3>Fast Delivery</h3>
								<p>Nation Wide</p>
							</div>
						</div>
					</div>
					<div class="col-md-4 offer-footer">
						<div class="row">
							<div class="col-4 icon-fot">
								<i class="far fa-thumbs-up"></i>
							</div>
							<div class="col-8 text-form-footer">
								<h3>Big Choice</h3>
								<p>of Products</p>
							</div>
						</div>
					</div>
				</div>
				<!-- //footer second section -->
			</div>
		</div>
		<!-- footer third section -->
		<div class="inf-middlefooter-sec">
			<div class="container py-md-5 py-sm-4 py-3">
				<div class="row footer-info w3-agileits-info">
					<!-- footer categories -->
					<div class="col-md-3 col-sm-6 footer-grids">
						<h3 class="text-white font-weight-bold mb-3">Categories</h3>
						<!-- <ul>
							<li class="mb-3">
								<a href="product.html">Mobiles </a>
							</li>
							<li class="mb-3">
								<a href="product.html">Computers</a>
							</li>
							<li class="mb-3">
								<a href="product.html">TV, Audio</a>
							</li>
							<li class="mb-3">
								<a href="product2.html">Smartphones</a>
							</li>
							<li class="mb-3">
								<a href="product.html">Washing Machines</a>
							</li>
							<li>
								<a href="product2.html">Refrigerators</a>
							</li>
						</ul> -->
					</div>
					<!-- //footer categories -->
					<!-- quick links -->
					<div class="col-md-3 col-sm-6 footer-grids mt-sm-0 mt-4">
						<h3 class="text-white font-weight-bold mb-3">Quick Links</h3>
						<ul>
							<li class="mb-3">
								<a href="<?php echo base_url(); ?>aboutus">About Us</a>
							</li>
							<li class="mb-3">
								<a href="<?php echo base_url(); ?>contactus">Contact Us</a>
							</li>
							<li class="mb-3">
								<!-- <a href="<?php echo base_url(); ?>termsofuse">Terms of use</a> -->
								<a href="#">Terms of use</a>
							</li>
							<li>
								<!-- <a href="<?php echo base_url(); ?>privacy">Privacy Policy</a> -->
								<a href="#">Privacy Policy</a>
							</li>
						</ul>
					</div>
					<div class="col-md-3 col-sm-6 footer-grids mt-md-0 mt-4">
						<h3 class="text-white font-weight-bold mb-3">Get in Touch</h3>
						<ul>
							<li class="mb-3">
								<i class="fas fa-map-marker"></i> 13, Jamiu Afuwape Street, Egbe-Ikotun, Lagos, Nigeria.</li>
							<li class="mb-3">
                                <i class="fas fa-mobile"></i> 
                                <a href="tel:+2348023134240">+234 802 313 4240</a> 
                            </li>
							<li class="mb-3">
								<i class="fas fa-envelope-open"></i>
								<a href="mailto:info@lafej.com.ng"> info@lafej.com.ng</a>
							</li>
						</ul>
					</div>
					<div class="col-md-3 col-sm-6 footer-grids inf-agileits mt-md-0 mt-4">
						<!-- newsletter -->
						<h3 class="text-white font-weight-bold mb-3">Newsletter</h3>
						<p class="mb-3">Free Delivery on your first order!</p>
						<form action="#" method="post">
							<div class="form-group">
								<input type="email" class="form-control" placeholder="Email" name="email" required="">
								<input type="submit" value="Go">
							</div>
						</form>
						<!-- //newsletter -->
						<!-- social icons -->
						<div class="footer-grids  inf-socialmk mt-3">
							<h3 class="text-white font-weight-bold mb-3">Follow Us on</h3>
							<div class="social">
								<ul>
									<li>
										<a class="icon fb" href="https://www.facebook.com/Lafej-Nigeria-Limited-515832872158227">
											<i class="fab fa-facebook-f"></i>
										</a>
									</li>
									<li>
										<a class="icon tw" href="#">
											<i class="fab fa-twitter"></i>
										</a>
									</li>
								</ul>
							</div>
						</div>
						<!-- //social icons -->
					</div>
				</div>
				<!-- //quick links -->
			</div>
		</div>
		<!-- //footer third section -->

		<!-- footer fourth section -->
		<div class="agile-sometext py-md-5 py-sm-4 py-3">
			<div class="container">
				<div class="sub-some child-momu mt-4">
					<h5 class="font-weight-bold mb-3">Payment Method</h5>
					<ul>
						<li>
							<img src="<?php echo asset_url(); ?>images/pay8.png" alt="">
						</li>
					</ul>
				</div>
				<!-- //payment -->
			</div>
		</div>
		<!-- //footer fourth section (text) -->
	</footer>
	<!-- //footer -->
	<!-- copyright -->
	<div class="copy-right py-3">
		<div class="container">
			<p class="text-center text-white">© 2018 Lafej Nigeria Limited. All rights reserved | Design by
				<a href="http://infinitizon.com/"> infinitizon.</a>
			</p>
		</div>
	</div>
	<!-- //copyright -->

	<!-- js-files -->
	<!-- jquery -->
	<script src="<?php echo asset_url(); ?>js/jquery/2.2.3/jquery.min.js"></script>
	<!-- //jquery -->

	<!-- nav smooth scroll -->
	<script>
		$(document).ready(function () {
			$(".dropdown").hover(
				function () {
					$('.dropdown-menu', this).stop(true, true).slideDown("fast");
					$(this).toggleClass('open');
				},
				function () {
					$('.dropdown-menu', this).stop(true, true).slideUp("fast");
					$(this).toggleClass('open');
				}
			);
		});
	</script>
	<!-- //nav smooth scroll -->

	<!-- popup modal (for location)-->
	<script src="<?php echo asset_url(); ?>js/jquery.magnific-popup.js"></script>
	<script>
		$(document).ready(function () {
			$('.popup-with-zoom-anim').magnificPopup({
				type: 'inline',
				fixedContentPos: false,
				fixedBgPos: true,
				overflowY: 'auto',
				closeBtnInside: true,
				preloader: false,
				midClick: true,
				removalDelay: 300,
				mainClass: 'my-mfp-zoom-in'
			});

		});
	</script>
	<!-- //popup modal (for location)-->

	<!-- cart-js -->
	<script src="<?php echo asset_url(); ?>js/minicart.js"></script>
	<script>
		paypals.minicarts.render(); //use only unique class names other than paypals.minicarts.Also Replace same class name in css and minicart.min.js

		paypals.minicarts.cart.on('checkout', function (evt) {
			var items = this.items(),
				len = items.length,
				total = 0,
				i;

			// Count the number of each item in the cart
			for (i = 0; i < len; i++) {
				total += items[i].get('quantity');
			}

			if (total < 3) {
				alert('The minimum order quantity is 3. Please add more to your shopping cart before checking out');
				evt.preventDefault();
			}
		});
	</script>
	<!-- //cart-js -->

	<!-- password-script -->
	<script>
		window.onload = function () {
			document.getElementById("password1").onchange = validatePassword;
			document.getElementById("password2").onchange = validatePassword;
		}

		function validatePassword() {
			var pass2 = document.getElementById("password2").value;
			var pass1 = document.getElementById("password1").value;
			if (pass1 != pass2)
				document.getElementById("password2").setCustomValidity("Passwords Don't Match");
			else
				document.getElementById("password2").setCustomValidity('');
			//empty string means no validation error
		}
	</script>
	<!-- //password-script -->
	
	<!-- scroll seller -->
	<script src="<?php echo asset_url(); ?>js/scroll.js"></script>
	<!-- //scroll seller -->

	<!-- smoothscroll -->
	<script src="<?php echo asset_url(); ?>js/SmoothScroll.min.js"></script>
	<!-- //smoothscroll -->

	<!-- start-smooth-scrolling -->
	<script src="<?php echo asset_url(); ?>js/move-top.js"></script>
	<script src="<?php echo asset_url(); ?>js/easing.js"></script>
	<script>
		jQuery(document).ready(function ($) {
			$(".scroll").click(function (event) {
				event.preventDefault();

				$('html,body').animate({
					scrollTop: $(this.hash).offset().top
				}, 1000);
			});
		});
	</script>
	<!-- //end-smooth-scrolling -->

	<!-- smooth-scrolling-of-move-up -->
	<script>
		$(document).ready(function () {
			/*
			var defaults = {
				containerID: 'toTop', // fading element id
				containerHoverID: 'toTopHover', // fading element hover id
				scrollSpeed: 1200,
				easingType: 'linear' 
			};
			*/
			$().UItoTop({
				easingType: 'easeOutQuart'
			});

		});
	</script>
	<!-- //smooth-scrolling-of-move-up -->

	<!-- for bootstrap working -->
	<script src="<?php echo asset_url(); ?>bootstrap/4.0.0/js/bootstrap.min.js"></script>
	
	<!-- imagezoom -->
	<script src="https://p.w3layouts.com/demos_new/template_demo/28-08-2018/electro_store-demo_Free/1204782700/web/js/imagezoom.js"></script>
	<!-- //imagezoom -->
</body>
</html>