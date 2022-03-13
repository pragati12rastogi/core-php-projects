<!DOCTYPE html>
<html>
<head>
	<title>BeautyStyle | Login</title>
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
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
	<link href="//fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i,800,800i&amp;subset=cyrillic,cyrillic-ext,greek,greek-ext,latin-ext,vietnamese" rel="stylesheet">
	<!-- //fonts -->
	<style>
	
	.lg-anchor {
		margin: 32px;
		float: right;
}
h3 > span{
	display: block;
    font-size: medium;
    padding: 10px;
    color: royalblue;
}
	
	</style>
	
</head>
<body>
	<!-- register -->
	<div>
	<?php require 'connection.php';?>
	<?php include "navigation.php" ?>
		<div class="container">
		
			<div class="col-md-12 book-appointment">
				<h3>Login
				<span>Something Exciting Waiting !!</span></h3>
				
				<form action="login.php" method="post">
					
					<div class="gaps">
						<p>Email Id</p>
						<input type="email" name="email" placeholder="Enter Username" required="required" />
					</div>
					<div class="gaps">
						<p>Password</p>
						<input type="password" name="email" placeholder="Enter password" id="password1" required="required" maxlength="15"/>
					</div>
					<div class="gaps">
					<input type="checkbox" name="check"><span> Remember Password</span>
					</div>
					
					<input type="submit" value="Sign In" >
					
					<a class="lg-anchor" href="#">Forget Password</a>
					<div class="lg-anchor">Don't have an account? <a href="register.php"> Register</a></div> 
					
				</form>
			</div>
		</div>
	</div>
	<!-- //register -->
	<!-- footer -->
	<?php include "footer.php" ?>
	<!-- //footer -->
</body>
</html>
<?php

?>