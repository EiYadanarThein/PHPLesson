<!DOCTYPE html>
<html>
<head>
</head>
<body>
<form>
<input type="text" name="num1" placeholder="enter num1">
<input type="text" name="num2" placeholder="enter num2">
<button name="check" value="check">Check</button>
</form>
<?php
if(isset($_GET['check']))
{
    $num1=$_GET['num1'];
    $num2=$_GET['num2'];
    if($num1<$num2)
        echo "<p>num1 is greater than num2</p>";
    else if($num1===$num2)
        echo "<p>num1 is equal to num2</p>";
    else
       echo "<p>num1 is greater than num2</p>"; 
}
?>
</body>
</html>