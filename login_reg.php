<?php
session_start();
if(isset($_SESSION['name'])){
	header('location:ace-master/index.php');
}

?>


<!DOCTYPE html>
<html lang="en">
<head>
 
  <title>Login form using Material Design - Demo by W3lessons</title>
  <!-- CORE CSS-->
  
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.97.1/css/materialize.min.css">

<style type="text/css">
html,
body {
    height: 100%;
}
html {
    display: table;
    margin: auto;
}
body {
    display: table-cell;
    vertical-align: middle;
}
.margin {
  margin: 0 !important;
}
</style>
  
</head>

<body class="red">


  <div id="login-page" class="row">
    <div class="col s12 z-depth-6 card-panel">
      <form class="login-form" method="post">
        <div class="row">
          <div class="input-field col s12 center">
            <img src="http://w3lessons.info/logo.png" alt="" class="responsive-img valign profile-image-login">
            <p class="center login-form-text">W3lessons - Material Design Login Form</p>
          </div>
        </div>
        <div class="row margin">
          <div class="input-field col s12">
            <i class="mdi-social-person-outline prefix"></i>
            <input class="validate" id="email" name="email" type="email">
            <label for="email" data-error="wrong" data-success="right" class="center-align">Email</label>
          </div>
        </div>
        <div class="row margin">
          <div class="input-field col s12">
            <i class="mdi-action-lock-outline prefix"></i>
            <input id="password" type="password"name="password">
            <label for="password">Password</label>
          </div>
        </div>
        <div class="row">          
          <div class="input-field col s12 m12 l12  login-text">
              <input type="checkbox" id="remember-me" />
              <label for="remember-me">Remember me</label>
          </div>
        </div>
        <div class="row">
          <div class="input-field col s12">
            <input type="submit" name="login" value="login" class="">
          </div>
        </div>
        <div class="row">
          <div class="input-field col s6 m6 l6">
            <p class="margin medium-small"><a href="register.php">Register Now!</a></p>
          </div>
          <div class="input-field col s6 m6 l6">
              <p class="margin right-align medium-small"><a href="forgot-password.php">Forgot password?</a></p>
          </div>          
        </div>

      </form>
    </div>
  </div>


  

  <!-- ================================================
    Scripts
    ================================================ -->

  <!-- jQuery Library -->
 <script type="text/javascript" src="//ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>
  <!--materialize js-->
  <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.97.1/js/materialize.min.js"></script>

 
   <footer class="page-footer">
          <div class="footer-copyright">
            <div class="container">
            © 2015 W3lessons.info
            <a class="grey-text text-lighten-4 right" href="http://w3lessons.info">Karthikeyan K</a>
            </div>
          </div>
  </footer>
  <?php
   $conn= mysqli_connect('localhost','root','','form');
	if($conn==True)
	{
		echo('connected');
	}
	else{
		echo('not connected');
	}
if (isset($_POST['login'])){
	
	$email=$_POST['email'];
	$pass=$_POST['password'];
	
	
	
	$sql= "SELECT * from registerform where Email = '".$email."' and Password = '".$pass."' ";
	
	$res = mysqli_query($conn, $sql);
	
	$get_count = mysqli_num_rows($res);
	
	if($get_count){
		/* session_start();
		$_SESSION['name'] = $email; 
		header('location:ace-master/index.php'); */
	}
   }
   
  ?>
</body>
</html>