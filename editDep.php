<?php
include_once('includes/dbconn.php');
$name="";
$email="";
$phone="";
if (isset($_POST['submit'])) {
	if ($_POST['name'] && $_POST['email']  && $_POST['phone']) {
		$name=$_POST['name'];
		$email=$_POST['email'];
		$phone=$_POST['phone'];
		
		$result=mysqli_query($conn,$sql);
		
	}
}
?>
<!DOCTYPE>
<html>
<head>
<title>Test </title>
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<link rel="stylesheet" href="mystyle.css">
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">

<!-- JS, Popper.js, and jQuery -->
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js" integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV" crossorigin="anonymous"></script>

</head>
<body>
<div class="container bg-light mt-5">
<form method="POST">
	<div class="row pt-3">
		<div class="col-md-12">
			<div class="form-group">
				<label>Name</label>
				<input type="text" id="input1" name="name" class="form-control">
				<span style="color: red" id="span1"></span>
			</div>
		</div>
	</div>
	<div class="row">
		<div class="col-md-12">
			<div class="form-group">
				<label>Email</label>
				<br>
				<input type="text" id="input2" name="email" class="form-control">
				<span style="color: red" id="span2"></span>
			</div>
		</div>
	</div>
	<div class="row">
	<div class="col-md-12">
		<div class="form-group">
				<label>Phone</label>
				<input type="text" id="input3" name="phone" class="form-control">
				<span style="color: red" id="span3"></span>
		</div>
	</div>
		
	</div>
	
	</form>
</div>

</body>
</html>