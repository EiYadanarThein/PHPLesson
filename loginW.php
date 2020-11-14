<?php
include_once('includes/dbcon.php');
$check=false;
$invalid="";
if(isset($_POST['login']))
{
  $username=$_POST['username'];
  $password=$_POST['password'];

  $sql="select * from user";
  $result=mysqli_query($conn,$sql); //query
  $rows=mysqli_num_rows($result); //number of rows
  
  if($rows>0)
  {
      while(($row=mysqli_fetch_assoc($result)))
      {
        if($username==$row['username'] && $password==$row['password'])
          {
            $check=true;
          
            header("location:displayW.php");
            
          }
          
      }
      
  }
  else
  {
      echo "No data";
  }
  if($check==false)
  {
    $invalid="invalid username and password";
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
    
    <link href="css/style.css" rel="stylesheet">
    <link href="css/style-responsive.css" rel="stylesheet">
  </head>

  <body>
	  <div id="login-page">
	  	<div class="container">
		      <form class="form-login" method="post">
		        <h2 class="form-login-heading">Host Myanmar(Mandalay)</h2>
                  
		        <div class="login-wrap">
		            <input type="text" id="name" name="username" class="form-control" placeholder="User ID" autofocus >
                <span id="nameerror" style="color:red"></span>
		            <br>
		            <input id="pwd" type="password" name="password" class="form-control" placeholder="Password" ><br >
                <span id="pwerror" style="color:red"></span>
                <?php
                if(!empty($invalid))
                {
                  echo "<span style='color:red'> Invalid username and password</span>";
                }
                ?>
		            <input  id="login" name="login" class="btn btn-theme btn-block" type="submit">
                    
                </div>
                
		      </form>	  	
	  	
	  	</div>
	  </div>
    <script src="js/jquery.js"></script>
    <script src="bootstrap.min.js"></script>
    <script src="myjsT.js"></script>
    


  </body>
</html>