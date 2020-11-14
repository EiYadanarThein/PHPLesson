<?php
session_start();
?>
<!DOCTYPE>
<html>
<head>
<title>Test </title>
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">
<!-- JS, Popper.js, and jQuery -->
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js" integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV" crossorigin="anonymous"></script>
</head>
<body>
<div class="container">
<div class="alert alert-danger">
<?php
/*if(isset($_POST['username']) && isset($_POST['password']))
{
   if($_POST['username']=="admin" && $_POST['password']=="1234test")
        echo "<span>You logged in successful</span>";
    else
        {
            $_SESSION['error']="invalid";
            echo "error is ".$_SESSION['error'];
            header("location:login.php");
        }
}*/
class User
{
  private $username;
  private $password;

  function showInfo()
  {
      echo "Username:". $this->username;
  }
  function set_username($username)
    {
        $this->username=$username;
    }
    function get_username()
    {
        return $this->username;
    }
}
$user=new User();
$user->set_username($_SESSION['uid']);
$user->showInfo();


?>
</div>
</div>

</body>
</html>