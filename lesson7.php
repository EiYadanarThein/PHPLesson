<?php
// global scope
$GLOBALS['x']=100; //Both can call
$GLOBALS['y']=150;
// if u declare 'global' keyword in global can't call local

cal();
echo "NUM 1 is ".$GLOBALS['num1'];
$addition=calculate($GLOBALS['x'],$GLOBALS['y']);
echo "Addition is ".$addition;
function cal()
{  
    $GLOBALS['num1']=200; 
    global $num2;// local scope but can call global 
    $num2=300;
    $result=$GLOBALS['num1']+$num2;
    echo "Result is ".$result;
}
function calculate($x,$y)
{
    $result=$x+$y;
    echo "Result1 is ".$result;
    return $result;
}
?>