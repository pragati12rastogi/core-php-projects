<!--
author: W3layouts
author URL: http://w3layouts.com
License: Creative Commons Attribution 3.0 Unported
License URL: http://creativecommons.org/licenses/by/3.0/
-->
<!DOCTYPE html>
<html lang="zxx">

<head>
	<title>Beauty Style</title>
	<!-- custom-theme -->
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<meta name="keywords" content="Beauty Style, Bootstrap Web Templates, Flat Web Templates, Android Compatible web template, 
Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, SonyEricsson, Motorola web design" />
	<script type="application/x-javascript">
		addEventListener("load", function () {
			setTimeout(hideURLbar, 0);
		}, false);

		function hideURLbar() {
			window.scrollTo(0, 1);
		}
	</script>

	<link rel="stylesheet" type="text/css" href="css/slicebox.css" />
	<!-- for banner-->
	<!-- font-awesome-icons -->
	<link href="css/font-awesome.css" rel="stylesheet">
	<!-- //font-awesome-icons -->
	<!-- //custom-theme files-->
	<link href="css/bootstrap.css" rel="stylesheet" type="text/css" media="all" />
	<link href="css/style2.css" rel="stylesheet" type="text/css" media="all" />
	<!-- //custom-theme files-->
	<!-- fonts -->
	<link href="//fonts.googleapis.com/css?family=Josefin+Sans:100,100i,300,300i,400,400i,600,600i,700,700i&amp;subset=latin-ext,vietnamese"
	    rel="stylesheet">
	<link href="//fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i,800,800i&amp;subset=cyrillic,cyrillic-ext,greek,greek-ext,latin-ext,vietnamese"
	    rel="stylesheet">
	<!-- //fonts -->
	
	<style>
	.user_pro img {
    width: 40px;
    height: 40px;
    border-radius: 100%;
}
.user_pro {
    position: absolute;
    z-index: 9999999;
    right: 56px;
    top: 95px;
}
.inner_pro{
	position:relative;
}
.pro_name {
    position: absolute;
    right: -30px;
    display: none; 
    background: #ffffff9c;
    border-radius: 1px;
    padding: 5px;
    box-shadow: 5px 3px 2px 1px;
    color: #000;
}
.inner_pro:hover .pro_name{
	display:block;
	cursor:pointer;
}
.inner_pro:hover{
	cursor:pointer;
}
	.user_pro2{
		 position: relative;
    top: 6px;
	}
	.navStyle{
	    color: white;
	}
	.navStyle:hover{
		color:#f53275;
	}
	</style>

</head>
<?php require "connection.php"?>
<body>
	<!-- banner -->
	<div class="banner-w3l" id="home">
		<div class="header-main-agile">
			<div class="header-right-w3l">
				<div class="container">
							<form class="search_float" action="" ><input class="header-search" type="text" id="" placeholder="Search By Name"><button type="submit"><span class="fa fa-search"></span></button><div class="clearfix"></div></form>
						
				</div>
			</div>
			<!-- navigation -->
		<?php include "navigation.php" ?>
			<!-- /navigation -->
			<div class="user_pro">
				<?php if(false){ ?> 
					<div class="inner_pro">
						<img src="/uploads/profile/<?php echo $_SESSION['profile_img']; ?>">
						<div class="pro_name">
							<p><?php echo $_SESSION['login_user']; ?></p>
							<p><a href="">User Profile</a></p>
							<p><a href="logout.php">Log out</a></p>
						</div>
					</div>
					
				<?php }else{ ?>
				<div class="user_pro2">
					<p><a class="navStyle" href="login.php">Log In</a></p>
				</div>
					
				<?php } ?>
			</div>	
	
		</div>

		<?php include "slider.php" ?>
		
	</div>
	
	<!-- //banner -->
	
	
	<!--grids -->
	<div class="popular-wthree" id="about">
		<div class="container">
			<h3 class="tittle-w3l">About Us
				<span class="heading-style">
					<i></i>
					<i></i>
					<i></i>
				</span>
			</h3>
			<div class="col-xs-4 popular-wthree-grid">
				<img src="images/a3.jpg" class="img-responsive" alt="" />
				<div class="popular-wthree-text">
					<h5>Nail Services</h5>
				</div>
			</div>
			<div class="col-xs-4 popular-wthree-grid">
				<img src="images/a2.jpg" class="img-responsive" alt="" />
				<div class="popular-wthree-text">
					<h5>Hair Styling</h5>
				</div>
			</div>
			<div class="col-xs-4 popular-wthree-grid">
				<img src="images/a1.jpg" class="img-responsive" alt="" />
				<div class="popular-wthree-text">
					<h5>Makeup</h5>
				</div>
			</div>
			<div class="clearfix"></div>
		</div>
	</div>
	<!-- //grids -->
	
	<!-- services -->
	<div class="services-agile-w3l" id="services">
		<div class="services-agile-w3l-right-grids">
			<div class="col-xs-4 services-agile-w3l-right-grid grid-1">
				<div class="services-agile-w3l-icon">
					<span class="fa fa-female" aria-hidden="true"></span>
				</div>
				<div class="services-agile-w3l-icon-info">
					<h5>Skin</h5>
					<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed orci enim, posuere sed.</p>
				</div>
			</div>
			<div class="col-xs-4 services-agile-w3l-right-grid grid-2">
				<div class="services-agile-w3l-icon">
					<span class="fa fa-bed" aria-hidden="true"></span>
				</div>
				<div class="services-agile-w3l-icon-info">
					<h5>Body</h5>
					<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed orci enim, posuere sed.</p>
				</div>
			</div>
			<div class="col-xs-4 services-agile-w3l-right-grid grid-3">
				<div class="services-agile-w3l-icon">
					<span class="fa fa-scissors" aria-hidden="true"></span>
				</div>
				<div class="services-agile-w3l-icon-info">
					<h5>Hair Cut</h5>
					<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed orci enim, posuere sed.</p>
				</div>
			</div>
			<div class="clearfix"> </div>
		</div>
		<div class="services-agile-w3l-right-grids">
			<div class="col-xs-4 services-agile-w3l-right-grid grid-4">
				<div class="services-agile-w3l-icon">
					<span class="fa fa-cubes" aria-hidden="true"></span>
				</div>
				<div class="services-agile-w3l-icon-info">
					<h5>Nails</h5>
					<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed orci enim, posuere sed.</p>
				</div>
			</div>
			<div class="col-xs-4 services-agile-w3l-right-grid grid-5">
				<div class="services-agile-w3l-icon">
					<span class="fa fa-code-fork" aria-hidden="true"></span>
				</div>
				<div class="services-agile-w3l-icon-info">
					<h5>Makeup</h5>
					<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed orci enim, posuere sed.</p>
				</div>
			</div>
			<div class="col-xs-4 services-agile-w3l-right-grid grid-6">
				<div class="services-agile-w3l-icon">
					<span class="fa fa-external-link" aria-hidden="true"></span>
				</div>
				<div class="services-agile-w3l-icon-info">
					<h5>Wax</h5>
					<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed orci enim, posuere sed.</p>
				</div>
			</div>
			<div class="clearfix"> </div>
		</div>
	</div>
	<!-- //services -->

	<!-- pricing -->
	<div class="pricing-agile">
		<div class="container">
			<h3 class="tittle-w3l">Our Pricing
				<span class="heading-style">
					<i></i>
					<i></i>
					<i></i>
				</span>
			</h3>
			<div class="pricing-agile-grids">
				<div class="col-xs-4 grid-info">
					<h3>FAMILY PACK</h3>
					<h4>$29.99
						<sup>*</sup>
					</h4>
					<div class="pricing-agile-text">
						<p>Manicure & Pedicure</p>
						<p>Hair Styling</p>
						<p>Nail Cutting</p>
						<p>Wellness</p>
					</div>
					<a href="#register" class="scroll">Choose Plan</a>
				</div>
				<div class="col-xs-4 grid-info grid-two">
					<h3>PREMIUM</h3>
					<h4>$48.99
						<sup>*</sup>
					</h4>
					<div class="pricing-agile-text">
						<p>Hair Styling</p>
						<p>Body massage</p>
						<p>Wellness</p>
						<p>Manicure</p>
					</div>
					<a href="#register" class="scroll">Choose Plan</a>
				</div>
				<div class="col-xs-4 grid-info grid-three">
					<h3>LUXURY</h3>
					<h4>$76.99
						<sup>*</sup>
					</h4>
					<div class="pricing-agile-text">
						<p>Hair Cut</p>
						<p>Pedicure</p>
						<p>Body massage</p>
						<p>Styling</p>
					</div>
					<a href="#register" class="scroll">Choose Plan</a>
				</div>
				<div class="clearfix"> </div>
			</div>
		</div>
	</div>
	<!-- //pricing table -->
	<div class="news-section" id="news">
		<div class="container">
			<h3 class="tittle-w3l">Latest News
				<span class="heading-style">
					<i></i>
					<i></i>
					<i></i>
				</span>
			</h3>
			<div class="news-grids-w3l">
				<div class="col-xs-6 news-grid">
					<a href="#" data-toggle="modal" data-target="#myModal">
						<img src="images/f4.jpg" class="img-responsive" alt="" />
					</a>
					<div class="news-text">
						<div class="news-events-agile">
							<h5>
								<a href="#" data-toggle="modal" data-target="#myModal">07 Nov</a>
							</h5>
							<div class="post-img">
								<a href="#" data-toggle="modal" data-target="#myModal">
									<ul>
										<li>
											<span class="fa fa-comments" aria-hidden="true"></span>
										</li>
										<li>
											<span class="fa fa-heart" aria-hidden="true"></span>
										</li>
										<li>
											<span class="fa fa-share" aria-hidden="true"></span>
										</li>
									</ul>
								</a>
							</div>
							<div class="clearfix"></div>
						</div>
						<div class="detail-bottom">
							<a href="#" data-toggle="modal" data-target="#myModal">
								<h6>Eiusmod tempor incididunt ut labore sed do eiusmod</h6>
							</a>
							<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore sed do eiusmod
								tempor incididunt ut labore</p>
						</div>
					</div>
				</div>
				<div class="col-xs-6 news-grid">
					<a href="#" data-toggle="modal" data-target="#myModal">
						<img src="images/f6.jpg" class="img-responsive" alt="" />
					</a>
					<div class="news-text">
						<div class="news-events-agile event-colo1">
							<h5>
								<a href="#" data-toggle="modal" data-target="#myModal">16 Nov</a>
							</h5>
							<div class="post-img">
								<a href="#" data-toggle="modal" data-target="#myModal">
									<ul>
										<li>
											<span class="fa fa-comments" aria-hidden="true"></span>
										</li>
										<li>
											<span class="fa fa-heart" aria-hidden="true"></span>
										</li>
										<li>
											<span class="fa fa-share" aria-hidden="true"></span>
										</li>
									</ul>
								</a>
							</div>
							<div class="clearfix"></div>
						</div>
						<div class="detail-bottom">
							<a href="#" data-toggle="modal" data-target="#myModal">
								<h6>Eiusmod tempor incididunt ut labore sed do eiusmod</h6>
							</a>
							<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore sed do eiusmod
								tempor incididunt ut labore</p>
						</div>
					</div>
				</div>
				<div class="clearfix"></div>
			</div>
			<div class="news-grids-w3l-2">
				<div class="col-xs-6 news-grid">
					<a href="#" data-toggle="modal" data-target="#myModal">
						<img src="images/f2.jpg" class="img-responsive" alt="" />
					</a>
					<div class="news-text">
						<div class="news-events-agile event-colo4">
							<h5>
								<a href="#" data-toggle="modal" data-target="#myModal">22 Nov</a>
							</h5>
							<div class="post-img">
								<a href="#" data-toggle="modal" data-target="#myModal">
									<ul>
										<li>
											<span class="fa fa-comments" aria-hidden="true"></span>
										</li>
										<li>
											<span class="fa fa-heart" aria-hidden="true"></span>
										</li>
										<li>
											<span class="fa fa-share" aria-hidden="true"></span>
										</li>
									</ul>
								</a>
							</div>
							<div class="clearfix"></div>
						</div>
						<div class="detail-bottom">
							<a href="#" data-toggle="modal" data-target="#myModal">
								<h6>Eiusmod tempor incididunt ut labore sed do eiusmod</h6>
							</a>
							<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore sed do eiusmod
								tempor incididunt ut labore</p>
						</div>
					</div>
				</div>
				<div class="col-xs-6 news-grid">
					<a href="#" data-toggle="modal" data-target="#myModal">
						<img src="images/f5.jpg" class="img-responsive" alt="" />
					</a>
					<div class="news-text">
						<div class="news-events-agile event-colo3">
							<h5>
								<a href="#" data-toggle="modal" data-target="#myModal">27 Nov</a>
							</h5>
							<div class="post-img">
								<a href="#" data-toggle="modal" data-target="#myModal">
									<ul>
										<li>
											<span class="fa fa-comments" aria-hidden="true"></span>
										</li>
										<li>
											<span class="fa fa-heart" aria-hidden="true"></span>
										</li>
										<li>
											<span class="fa fa-share" aria-hidden="true"></span>
										</li>
									</ul>
								</a>
							</div>
							<div class="clearfix"></div>
						</div>
						<div class="detail-bottom">
							<a href="#" data-toggle="modal" data-target="#myModal">
								<h6>Eiusmod tempor incididunt ut labore sed do eiusmod</h6>
							</a>
							<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore sed do eiusmod
								tempor incididunt ut labore</p>
						</div>
					</div>
				</div>
				<div class="clearfix"></div>
			</div>
		</div>
	</div>
	<!-- Modal1 -->
	<div class="modal video-modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModal">
		<div class="modal-dialog" role="document">
			<div class="modal-content">
				<div class="modal-header">
					<button type="button" class="close" data-dismiss="modal" aria-label="Close">
						<span aria-hidden="true">&times;</span>
					</button>
				</div>
				<section>
					<div class="modal-body">
						<h5>Beauty Style</h5>
						<img src="images/1.jpg" alt=" " class="img-responsive" />
						<p>Ut enim ad minima veniam, quis nostrum exercitationem ullam corporis suscipit laboriosam, nisi ut aliquid ex ea commodi
							consequatur? Quis autem vel eum iure reprehenderit qui in ea.
						</p>
					</div>
				</section>
			</div>
		</div>
	</div>
	<!-- //Modal1 -->
	<!-- //news -->
	<!-- team -->
	<div class="team-w3l" id="team">
		<div class="container">
			<h3 class="tittle-w3l">Our Team
				<span class="heading-style">
					<i></i>
					<i></i>
					<i></i>
				</span>
			</h3>
			<div class="team-w3l-grids">
				<div class="col-xs-3 info-team-grid-w3l">
					<img src="images/t1.jpg" alt="">
					<div class="captn">
						<h4>Mary</h4>
						<div class="media-social-agile">
							<ul>
								<li>
									<a href="#">
										<span class="fa fa-facebook"></span>
									</a>
								</li>
								<li>
									<a href="#">
										<span class="fa fa-twitter"></span>
									</a>
								</li>
								<li>
									<a href="#">
										<span class="fa fa-rss"></span>
									</a>
								</li>
							</ul>
						</div>
					</div>
				</div>
				<div class="col-xs-3 info-team-grid-w3l">
					<img src="images/t2.jpg" alt="">
					<div class="captn">
						<h4>Peter</h4>
						<div class="media-social-agile">
							<ul>
								<li>
									<a href="#">
										<span class="fa fa-facebook"></span>
									</a>
								</li>
								<li>
									<a href="#">
										<span class="fa fa-twitter"></span>
									</a>
								</li>
								<li>
									<a href="#">
										<span class="fa fa-rss"></span>
									</a>
								</li>
							</ul>
						</div>
					</div>
				</div>
				<div class="col-xs-3 info-team-grid-w3l">
					<img src="images/t4.jpg" alt="">
					<div class="captn">
						<h4>Johan</h4>
						<div class="media-social-agile">
							<ul>
								<li>
									<a href="#">
										<span class="fa fa-facebook"></span>
									</a>
								</li>
								<li>
									<a href="#">
										<span class="fa fa-twitter"></span>
									</a>
								</li>
								<li>
									<a href="#">
										<span class="fa fa-rss"></span>
									</a>
								</li>
							</ul>
						</div>
					</div>
				</div>
				<div class="col-xs-3 info-team-grid-w3l">
					<img src="images/t3.jpg" alt="">
					<div class="captn">
						<h4>Steven</h4>
						<div class="media-social-agile">
							<ul>
								<li>
									<a href="#">
										<span class="fa fa-facebook"></span>
									</a>
								</li>
								<li>
									<a href="#">
										<span class="fa fa-twitter"></span>
									</a>
								</li>
								<li>
									<a href="#">
										<span class="fa fa-rss"></span>
									</a>
								</li>
							</ul>
						</div>
					</div>
				</div>
				<div class="clearfix"> </div>
			</div>
		</div>
	</div>
	<!-- //trainers -->

	<!-- contact -->
	<div class="contact" id="contact">
		<div class="container">
			<div class="contact-grid-agiles-w3l">
				<div class="col-md-7 contact-grid-agile">
					<h3 class="tittle-w3l">Contact Us
						<span class="heading-style">
							<i></i>
							<i></i>
							<i></i>
						</span>
					</h3>
					<form action="#" method="post">
						<input type="text" placeholder="Name" name="name" required="">
						<input type="email" placeholder="Email" name="email" required="">
						<textarea placeholder="Message.." name="message" required=""></textarea>
						<input type="submit" value="Send Now">
					</form>
				</div>
				<div class="col-md-5 contact-grid-agile">
					<div class="contact-right1">
						<img src="images/con-img.jpg" alt="" />
					</div>
					<div class="contact-right2">
						<div class="call ">
							<div class="col-xs-4 contact-grdr-w3l">
								<h3>Call us :</h3>
							</div>
							<div class="col-xs-8 contact-grdr-w3l">
								<ul>
									<li>+3402 890 679</li>
								</ul>
							</div>
							<div class="clearfix"> </div>
						</div>
						<div class="call">
							<div class="col-xs-4 contact-grdr-w3l">
								<h3>Locate us :</h3>
							</div>
							<div class="col-xs-8 contact-grdr-w3l">
								<ul>
									<li>345 Diamond Street</li>
								</ul>
							</div>
							<div class="clearfix"> </div>
						</div>
						<div class="call">
							<div class="col-xs-4 contact-grdr-w3l">
								<h3>Mail us :</h3>
							</div>
							<div class="col-xs-8 contact-grdr-w3l">
								<ul>
									<li>
										<a href="mailto:info@example.com">info@example.com</a>
									</li>
								</ul>
							</div>
							<div class="clearfix"> </div>
						</div>
					</div>
				</div>
				<div class="clearfix"> </div>
			</div>
		</div>
	</div>
	<!-- //contact -->

	
	
	<!-- subscribe -->
	<div class="subscribe-info-w3l">
		<div class="container">
			<h4>Subscribe Our Newsletter</h4>
			<form action="#" method="post">
				<input type="email" name="email" placeholder="Enter your Email..." required="">
				<input type="submit" value="Submit">
				<div class="clearfix"> </div>
			</form>
		</div>
	</div>
	<!-- //subscribe -->
	<!-- footer -->
<?php include "footer.php"?>
	<!-- //footer -->


	<!-- js -->
	<script type="text/javascript" src="js/jquery-2.1.4.min.js"></script>
	<!-- for bootstrap working -->
	<script src="js/bootstrap.js"></script>
	<!-- //for bootstrap working -->
	<!-- //js -->

	<!-- banner slider js -->
	<script type="text/javascript" src="js/modernizr.custom.46884.js"></script>
	<script type="text/javascript" src="js/jquery.slicebox.js"></script>
	<script type="text/javascript">
		$(function () {

			var Page = (function () {

				var $navArrows = $('#nav-arrows').hide(),
					$shadow = $('#shadow').hide(),
					slicebox = $('#sb-slider').slicebox({
						onReady: function () {

							$navArrows.show();
							$shadow.show();

						},
						orientation: 'r',
						cuboidsRandom: true
					}),

					init = function () {

						initEvents();

					},
					initEvents = function () {

						// add navigation events
						$navArrows.children(':first').on('click', function () {

							slicebox.next();
							return false;

						});

						$navArrows.children(':last').on('click', function () {

							slicebox.previous();
							return false;

						});

					};

				return {
					init: init
				};

			})();

			Page.init();

		});
	</script>
	<!-- //banner slider js -->

	<!-- //here starts scrolling icon -->
	<script src="js/SmoothScroll.min.js"></script>
	<script type="text/javascript" src="js/move-top.js"></script>
	<script type="text/javascript" src="js/easing.js"></script>
	<!-- here stars scrolling script -->
	<script type="text/javascript">
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
	<!-- //here ends scrolling script -->
	<!-- //here ends scrolling icon -->

	<!-- scrolling script -->
	<script type="text/javascript">
		jQuery(document).ready(function ($) {
			$(".scroll").click(function (event) {
				event.preventDefault();
				$('html,body').animate({
					scrollTop: $(this.hash).offset().top
				}, 1000);
			});
		});
	</script>
	<!-- //scrolling script -->
	<!-- flexisel -->
	<script type="text/javascript" src="js/jquery.flexisel.js"></script>
	<script type="text/javascript">
		$(window).load(function () {
			$("#flexiselDemo1").flexisel({
				visibleItems: 4,
				animationSpeed: 1000,
				autoPlay: true,
				autoPlaySpeed: 3000,
				pauseOnHover: true,
				enableResponsiveBreakpoints: true,
				responsiveBreakpoints: {
					portrait: {
						changePoint: 480,
						visibleItems: 1
					},
					landscape: {
						changePoint: 640,
						visibleItems: 2
					},
					tablet: {
						changePoint: 768,
						visibleItems: 3
					}
				}
			});

		});
	</script>
	<!-- //flexisel -->
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

</body>

</html>