<!DOCTYPE html>
<html>

<head>
  <meta name="viewport" content="width=device-width, initial-scale=1">
	  
	<link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">

	<!-- jQuery library -->
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>

	<!-- Latest compiled JavaScript -->
	<script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>
</head>
<body>

<div class="container">
  <h2>Form</h2>
  <form role="form" method="post">
    <div class="form-group">
      <label for="email">Email:</label>
      <input type="email" class="form-control" id="email" name="email" placeholder="Enter email">
    </div>
    <div class="form-group">
      <label for="pwd">Password:</label>
      <input type="password" class="form-control" id="pwd" name="pwd" placeholder="Enter password">
    </div>
    <div class="form-group">
	 <label for="checkbox">Language:</label>
	 <div class="checkbox-inline">
        <label class="checkbox-inline"><input type="checkbox" name="check[]" value="English">English</label>
		<label class="checkbox-inline"><input type="checkbox" name="check[]" value="Hindi">Hindi</label>
		<label class="checkbox-inline"><input type="checkbox" name="check[]" value="French">French</label>
		</div>
    </div>
	<div class="form-group">
      <label for="gender">Gender:</label>
		<label class="radio-inline"><input type="radio" name="gender" value="Female">Female</label>
		<label class="radio-inline"><input type="radio" name="gender" value="Male">Male</label>
		<label class="radio-inline"><input type="radio" name="gender" value="Other">Other</label>     
	</div>
	<div class="form-group">
	  <label for="location">Select Location:</label>
	  <select class="form-control" id="location">
		<option value="">--select--</option>
		<option value="Lucknow">Lucknow</option>
		<option value="Delhi">Delhi</option>
		<option value="Kanpur">Kanpur</option>
	  </select>
	</div>
	 <div class="form-group">
	  <label for="comment">Description:</label>
	  <textarea class="form-control" rows="5" id="description"></textarea>
	</div>
    <button type="button" id="BtnSubmit" class="btn btn-default">Submit</button>
  </form>
  <table class="table table-striped" id="Show">
    <thead>
      <tr>
        <th>Id</th>
        <th>Email</th>
        <th>Password</th>
		<th>Language</th>
        <th>Gender</th>
        <th>Location</th>
        <th>Description</th>
      </tr>
    </thead>
	</table>
</div>
<script>
$(document).ready(function(){
	SelectAll();
	var check =[];
	$("input[type='checkbox']").click(function(){
	checks = $(this).val();
	
	check.push(checks);
	});
	$("#BtnSubmit").click(function(){
		var email =$('#email').val();
		var pwd =$('#pwd').val();
		var gender =$("input[name='gender']:checked").val();
		var location =$('#location').val();
		var description = $('#description').val();
		var lang = check.toString();
		
		$.ajax({
		type: "post", 		
		url: "InputFormController.php",
		data: {email:  email,
		pwd: pwd,
		check: lang,
		gender: gender,
		location: location,
		description: description},
		success: function (data,success) {
			alert(data);
			SelectAll();
		}
	});
	});
	
});

function SelectAll(){
	debugger;
	var Record ='Record';
	$.ajax({
		type: "post", 		
		url: "InputFormController.php",
		data: {Record: Record},
		success: function (data,success) {
			$('#Show').append(data);
		}
	});
}
</script>

</body> 

</html>
