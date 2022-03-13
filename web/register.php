<!DOCTYPE html>
<html>
<head>
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
	<link href="css/style.css" rel="stylesheet" type="text/css" media="all" />
	<!-- //custom-theme files-->
	<!-- fonts -->
	<link href="//fonts.googleapis.com/css?family=Josefin+Sans:100,100i,300,300i,400,400i,600,600i,700,700i&amp;subset=latin-ext,vietnamese"
	    rel="stylesheet">
	<link href="//fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i,800,800i&amp;subset=cyrillic,cyrillic-ext,greek,greek-ext,latin-ext,vietnamese" rel="stylesheet">
	<!-- //fonts -->
</head>
<?php require "connection.php"?>
<body>
	<!-- register -->
	<div class="register-sec-w3l" id="register">
	<?php include "navigation.php" ?>
		<div class="container">
			<div class="col-md-6 book-appointment">
				<h3>Register Here </h3>
				<form action="login.php" method="post">
					<div class="col-sm-12" style="padding:0px">
					<div class="col-sm-3">
						<div class="gaps">
							<p>Title</p>
							<select name="title" required="required" >
								<option value="">--Select--</option>
								<option value="Mr">Mr.</option>
								<option value="Miss">Miss.</option>
								<option value="Mrs">Mrs.</option>
								<option value="Dr">Dr.</option>

							</select>
						</div>
					</div>
					<div class="col-sm-5">
						<div class="gaps">
							<p>First Name</p>
							<input type="text" name="First Name" placeholder="Enter First Name" required="required" />
						</div>
					</div>
						<div class="col-sm-4">
						<div class="gaps">
							<p>Last Name</p>
							<input type="text" name="First Name" placeholder="Enter First Name" required="required" />
						</div>
					</div>
					</div>
					
					<div class="gaps">
						<p>Email Id</p>
						<input type="email" name="email" placeholder="" required="" />
					</div>
					<div class="gaps">
						<p>Password</p>
						<input type="password" name="email" placeholder="" id="password1" required="" />
					</div>
					<div class="gaps">
						<p>Confirm Password</p>
						<input type="password" name="email" placeholder="" id="password2" required="" />
					</div>
					<div class="gaps">
						<p>Contact Number</p>
						<input type="text" name="Number" placeholder="" required="" />
					</div>
					
					<input type="submit" value="Submit" >
				</form>
			</div>
			<div class="col-md-6 image-left-w3l">
				<img src="images/regi.png" alt="" />
			</div>
		</div>
	</div>
	<!-- //register -->
	<!-- footer -->
	<?php include "footer.php" ?>
	<!-- //footer -->
</body>
</html>