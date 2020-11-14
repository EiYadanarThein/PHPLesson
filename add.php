<!DOCTYPE html>
<html>
<head>
</head>
<body>
<form>
<input type="text" name="num1" placeholder="enter num1">
<input type="text" name="num2" placeholder="enter num2">
<button name="add" value="add">Add</button>
<button name="sub" value="sub">Sub</button>
<button name="multi" value="multi">Multi</button>
<button name="div" value="div">Div</button>

</form>
<?php
if(isset($_GET['add']))
{
    $num1=$_GET['num1'];
    $num2=$_GET['num2'];
    echo "addition is ".($num1+$num2);  
}
if(isset($_GET['sub']))
{
    $num1=$_GET['num1'];
    $num2=$_GET['num2'];
    echo "substraction is ".($num1-$num2);  
}
if(isset($_GET['multi']))
{
    $num1=$_GET['num1'];
    $num2=$_GET['num2'];
    echo "multiplication is ".($num1*$num2);  
}
if(isset($_GET['div']))
{
    $num1=$_GET['num1'];
    $num2=$_GET['num2'];
    echo "division is ".($num1/$num2);  
}
?>
</body>
</html>