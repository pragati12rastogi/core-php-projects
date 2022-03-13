

<!DOCTYPE html>
<html>
<head>
 <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  
<style>
   body { background: aliceblue;}
   
   div{ 
   border: 1px solid blueviolet;
    padding: 70px;
	background: snow;
    display: inline-block;
    margin-left: 35%;}
	h3{font-size: x-large;
    color: blue;}
</style>
</head>
<body>

<div>
<h3>Registration Form</h3><br/><br/>
	<form id="formname" >
	
		<label>UserName :</label><br>
		<input type="text" placeholder="Username" name="name" size="30" id="name" ><br/><br/>
		<label>Email:</label><br>
		<input type="email" placeholder="ex@gmail.com" name="email" size="30" id="email"><br/><br/>
		<label>Password :</label><br>
		<input type="password" name="password" size="30" id="password"><br/><br/>
		<label>Confirm  :</label><br>
		<input type="text" id="confirm" name="confirm" size="30" ><br/><br/>
		
		<input type="button" value="Submit" id="btn" name="btns" onclick="addRecord()">
	</form>
	
	
	</div>
	<p id="response"></p>
	<div id="fulltable"></div>
	<script>
		 $(document).ready(function(){
			readRecord();
		 });
		  function addRecord(){
				 
				
				 var name = $('#name').val();
				 var email = $('#email').val();
				 var password = $('#password').val();
				 var confirm = $('#confirm').val()
				 debugger
				 $('#response').html("<b>Loading response...</b>");
				 $.ajax({
                    type: "post", 		
                   url: "ajaxquery.php",
                    data: {name:  name,
					email: email,
					password: password,
					confirm: confirm}, 
                    success: function (data,success) {
						alert(data);
					readRecord();
                        debugger
						
                    }
                });
            }
			
			function readRecord(){
				var readrecord = 'readrecord';
					$.ajax({
                    type: "post", 		
                   url: "ajaxquery.php",
                    data: {readrecord:  readrecord},
                    success: function (data,success) {
						$('#fulltable').html(data);
                    }
                });
			}
			function EditFunction(id){
				
			}
	</script>
</body>
</html>