
<html>
<body>
<div class="m">
<nav class="navbar navbar-inverse">
		<div class="container-fluid">
			<ul class="nav navbar-nav">
				<li class="dropdown">
					<a class="dropdown-toggle navbar-brand" data-toggle="dropdown" href="#"><?php echo $_SESSION['email'];?> <span class="caret"></span></a>
					<ul class="dropdown-menu">
						<li><a href="adminPro.php">Profile</a></li>
						<li><a href="formlogout.php">Logout</a></li>
					</ul>
				</li>
			</ul>
			<ul class="nav navbar-nav navbar-right">
				<li><a href="adminRegister.php"><span class="glyphicon glyphicon-user"></span>  Register</a></li>
			</ul>
		</div>
	</nav>
</div>
	</body>
	</html>