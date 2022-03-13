<!DOCTYPE html>
<html lang="en">
<head>
  <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1.0, user-scalable=no">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>Signup / Registration form using Material Design - Demo by W3lessons</title>
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
.waves-input-wrapper .waves-button-input {
    position: relative;
    top: 0;
    left: 0;
    z-index: 1;
    background-color: transparent;
    border: transparent;
</style>
<script>	
function match()
{


	 var a= document.getElementById("password").value;
	var b= document.getElementById("password-again").value;
	var c= document.getElementById("username").value;
	var d= document.getElementById("email").value;
	
	
	if(a=="" || b=="" || c=="" || d=="")
	{
		alert('Please fill each blank first! ');
		return false;
	}
	if(a.length == 0 || a.length <= 6 || a.length >12)
	{
		alert('password is not secure! should be between 6 to 12');
		return false;
	}
	if (a != b)
	{
		alert("password is not correct");
		return false;
	} 
	
}
</script>
  
</head>

<body class="blue">


  <div id="login-page" class="row">
    <div class="col s12 z-depth-6 card-panel">
      <form class="login-form" method="POST">
        <div class="row">
          <div class="input-field col s12 center">
            <img src="http://w3lessons.info/logo.png" alt="" class="responsive-img valign profile-image-login">
            <p class="center login-form-text">W3lessons - Material Design SignUp Form</p>
          </div>
        </div>
        <div class="row margin">
          <div class="input-field col s12">
            <i class="mdi-social-person-outline prefix"></i>
            <input id="username" type="text" name="name" class="validate">
            <label for="username" class="center-align">Username</label>
          </div>
        </div>
        <div class="row margin">
          <div class="input-field col s12">
            <i class="mdi-communication-email prefix"></i>
            <input id="email" type="email" name="email" class="validate">
            <label for="email" class="center-align">Email</label>
          </div>
        </div>
        <div class="row margin">
          <div class="input-field col s12">
            <i class="mdi-action-lock-outline prefix"></i>
            <input id="password" type="password" name="password" class="validate"><span id="password"></span>
            <label for="password">Password</label>
          </div>
        </div>
        <div class="row margin">
          <div class="input-field col s12">
            <i class="mdi-action-lock-outline prefix"></i>
            <input id="password-again" type="password" name="passagain">
            <label for="password-again">Re-type password</label>
          </div>
        </div>
        <div class="row">
          <div class="input-field col s12">
            <input type="submit" name="register" value="Register Now"class="btn waves-effect waves-light col s12" onclick="return match();">
          </div>
          <div class="input-field col s12">
            <p class="margin center medium-small sign-up">Already have an account? <a href="login_reg.php">Login</a></p>
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



  
</body>


</html>

<?php

	$conn= mysqli_connect('localhost','root','','form');
	if($conn==True)
	{
		echo('connected');
	}
	else{
		echo('not connected');
	}
if (isset($_POST['register'])){
		$name=$_POST['name'];
		$email=$_POST['email'];
		$pass=$_POST['password'];
		$repass=$_POST['passagain'];
	
	 if($pass == $repass)
		{
			$sql= "INSERT INTO registerform(Username, Email, Password) VALUES ('$name','$email','$pass')";
			
		 }
		
	}
	
	if (isset($_POST['register'])){
	
		$email=$_POST['email'];
		
		$match= "SELECT * FROM registerform WHERE Email = '".$email."'";
		$query=mysqli_query($conn, $match);
		$check= mysqli_num_rows($query);
		if ($check)
		 {
			 echo "Email already exist";
		 }
		 else
		 {
			 mysqli_query($conn, $sql);
		 }
	}
?>