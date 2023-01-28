<!DOCTYPE html>
<script type="text/javascript" src="assets/js/main.js"></script>
<link rel="stylesheet" href="assets/styles/bootstrap.min.css">
<link rel="stylesheet" href="assets/styles/main.css">
<html>
<head>
	<title>Activity</title>
</head>
<body>
	<form action="post.php" method="post">
		<div id="mainDiv" class="centered">
			<h2>Activity Logger</h2>	
			<div class="form-group">
				<label for="activityDate">Activity Date:</label>
				<input type="date" required id="activityDate" name="activityDate" max="<?php echo date('Y-m-d');?>" value="<?php echo date('Y-m-d');?>" class="form-control">
		  	</div>
		  	
			<div class="form-group">
				<label for="noOfHours">No Of Hours:</label>
				<input type="number" required id="noOfHours" class="form-control" name="noOfHours" value="1" onkeypress="return (event.charCode !=8 && event.charCode ==0 || (event.charCode >= 48 && event.charCode <= 57))" min="1" max="16">
		  	</div>
		  	
		  	<div class="form-group">
			       <label for="activityDescription">Activity Description:</label>
			       <textarea required class="form-control" id="activityDescription" name="activityDescription" maxlength="200" rows="4" cols="50"></textarea>
			       <span id='remainingC'></span> 
		  	</div>
		  	
		  	<br/>
	  		<input type="submit" class="btn btn-default" value="Submit">
	  		<br/><br/>
			<a href="get.php">View submitted activities</a>

		</div>     
	</form> 
</body>
</html>
