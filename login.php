
<?php
session_start();
if(isset($_POST['username']) && isset($_POST['password']))
{
   if($_POST['username']=="admin" && $_POST['password']=="1234test")
           {
             $_SESSION['uid']=$_POST['username'];
             $_SESSION['pwd']=$_POST['password'];
             header("location:welcome.php");
           } 
    else
        {
            $_SESSION['error']="invalid";
        }
}



?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    

    <title>Admin | Login</title>
    <link href="css/bootstrap.css" rel="stylesheet">
    <link href="css/font-awesome.css" rel="stylesheet" />
    <link href="css/style.css" rel="stylesheet">
    <link href="css/style-responsive.css" rel="stylesheet">
  </head>

  <body>
	  <div id="login-page">
	  	<div class="container">
      
      <?php
      //action="welcome.php" 
      ?>
		      <form class="form-login"  method="POST">
		        <h2 class="form-login-heading">Host Myanmar(Mandalay)</h2>
                  
		        <div class="login-wrap">
		            <input type="text" name="username" class="form-control" placeholder="User ID" autofocus>
		            <br>
		            <input type="password" name="password" class="form-control" placeholder="Password"><br >
                <?php
                if(isset($_SESSION['error']))
                  {
                      if($_SESSION['error']=="invalid")
                           {
                                echo "<span style='color:red'>Username and Password is invalid</span>";
                            }
                  }
                ?> 	
		            <input  name="login" class="btn btn-theme btn-block" type="submit">
                <a class="btn btn-theme btn-block btn-primary" href="register.php">Register</a>
            </div>
		      </form>	 
          
	  	</div>
	  </div>
    
    <script src="js/jquery.js"></script>
    <script src="js/bootstrap.min.js"></script>
 </body>
</html>
<?php
unset($_SESSION['error']);
?>
