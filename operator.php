<!DOCTYPE html>
<html>
<head>
</head>
<body>
<form>
<input type="text" name="num1" placeholder="enter num1">
<input type="text" name="num2" placeholder="enter num2">
<select name="operators">
<option value="+">+</option>
<option value="-">-</option>
<option value="*">*</option>
<option value="/">/</option>

</select>
<button name="submit" value="submit">Submit</button>


</form>
<?php
if(isset($_GET['submit']))
{
    $num1=$_GET['num1'];
    $num2=$_GET['num2'];
    $operators=$_GET['operators'];
    if($operators=="+")  
        echo $num1+$num2;
    elseif($operators=="-")
        echo $num1-$num2;
    elseif($operators=="*")
        echo $num1*$num2;
    else
        echo $num1/$num2;


 
}


?>
</body>
</html>