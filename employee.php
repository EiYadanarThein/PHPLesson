<?php
include_once('includes/dbconn.php');
if (isset($_POST['submit'])) {
	$name=$_POST['name'];
	$email=$_POST['email'];
	$phone=$_POST['phone'];
	$address=$_POST['address'];
	$deptid=$_POST['deptid'];
	
	$sql="insert into employee (name,email,phone,address,deptid) values ('$name','$email','$phone','$address','$deptid')";
    $result=mysqli_query($conn,$sql);
    if(!$result)
    {
       echo mysqli_error($conn);
    }
    else
    {
        header("location:employeeShow.php");
    }
}
?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">
<!-- JS, Popper.js, and jQuery -->
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js" integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV" crossorigin="anonymous"></script>
    <title>Employee</title>
    <link href="css/bootstrap.css" rel="stylesheet">
    
    <link href="css/style.css" rel="stylesheet">
    <link href="css/style-responsive.css" rel="stylesheet">
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
	<div class="row pt-3">
		<div class="col-md-12">
			<div class="form-group">
				<label>Address</label>
				<input type="text" id="input4" name="address" class="form-control">
				<span style="color: red" id="span4"></span>
			</div>
		</div>
	</div>
	<div class="row">
	<div class="col-md-12">
		<div class="form-group">
				<label>Dept_id</label>
				<select name="deptid" id="input6" style="width: 100%; height: 40px;">
				<label>Dept_id</label>
				<?php
				include_once('includes/dbconn.php');
				$sql="select * from department";
				$result=mysqli_query($conn,$sql);
				$rows=mysqli_num_rows($result);
						
				for ($i=0; $i <$rows ; $i++) { 
					$row=mysqli_fetch_assoc($result);

					
							
				?>
				<option value=""></option>
				<option value="<?php echo $row['id']; ?>"><?php echo $row['name'];?></option>
				
				<?php
				}
				
				?>
				</select>
				
				<span style="color: red" id="span6"></span>
		</div>
	</div>
	</div>
	
	<div style="text-align: center;" class="pt-4 pb-3">
		<button type="submit" name="submit" id="show" class="btn-success p-2" style="text-align: center; border-radius: 5%; border:1px solid green; width: 100px;">Submit
		</button>
	</div>
	</form>
</div>
<script src="jquery.min.js"></script>
    
    <script src="employee.js"></script>
</body>
</html>