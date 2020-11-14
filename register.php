
<?php
session_start();
$nameerror="";
$name="";

$emailerror="";
$email="";

$phoneerror="";
$phone="";

$passworderror="";

if(isset($_POST['submit']))
{   
   
    if(empty($_POST['username']))
    {
        $nameerror="Please enter username";
    }
    else
    {
        $name=$_POST['username'];
        
    }
    
    if(empty($_POST['email']))
    {
        $emailerror="Please enter email";
    }
    else
    {
        $email=$_POST['email'];
        $_SESSION['email']=$email;
    }
    
    if(empty($_POST['phone']))
    {
     $phoneerror="Please enter phone number";
    }
    else
    {
        $phone=$_POST['phone'];
        $_SESSION['phone']=$phone;
    }
   
    if($_POST['password']==$_POST['retypepassword'])
    {
        $password="";
    }
    else
    {
        $passworderror="Invalid password and retype password";
    }
    if(empty($nameerror) && empty($emailerror) && empty($phoneerror) && empty($passworderror))
       {
           header("location:registerform.php");
       }
}


?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="css/bootstrap.css" rel="stylesheet">
    <link href="css/font-awesome.css" rel="stylesheet" />
    <link href="css/style.css" rel="stylesheet">
    <link href="css/style-responsive.css" rel="stylesheet">

 <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">
<!-- JS, Popper.js, and jQuery -->
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js" integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV" crossorigin="anonymous"></script>
  </head>

  <body>
	  <div id="login-page">
	  	<div class="container">
          <form class="form-login"  method="POST">
		        <h2 class="form-login-heading">Register</h2>
                  
		        <div class="login-wrap">
		            <input type="text" name="username" class="form-control" placeholder="User ID" value=<?php echo $name;?>>
                    <span style="color:red;"><?php echo $nameerror;?></span>
                    <br>
                    <input type="text" name="email" class="form-control" placeholder="Email" value=<?php echo $email;?>>
		            <span style="color:red;"><?php echo $emailerror;?> </span>
                    <br>
                    <input type="text" name="phone" class="form-control" placeholder="Phone No" value=<?php echo $phone;?>>
                    <span style="color:red"><?php echo $phoneerror;?></span>
                    <br>
		            <input type="password" name="password" class="form-control" placeholder="Password"><br >
                    <input type="password" name="retypepassword" class="form-control" placeholder="Retype Password">
                    <span style="color:red;"><?php echo $passworderror;?></span>
                    <br>
                    <input  name="submit" class="btn btn-theme btn-block btn-danger" type="submit">
                </div>
		</form>	 
          
        </div>
      </div>
      
      <script src="js/jquery.js"></script>
    <script src="js/bootstrap.min.js"></script>  
 </body>
</html>
<?php
unset($_SESSION['error1']);
unset($_SESSION['error2']);
unset($_SESSION['error']);
?>
