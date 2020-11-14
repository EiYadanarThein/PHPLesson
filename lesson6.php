<!DOCTYPE html>
<html>
<head>
</head>
<body>
<ul>
</ul>
<?php
//for
for($i=0;$i<10;$i++)
{
    echo"<li>for $i</li>";
}
//while
$j=0;
while($j<10)
{
    echo"<li>while $j</li>";
    $j++;
}
//do while
$k=0;
do{
    echo"<li>do while $k</li>";
    $k++;
}while($k<10);
//foreach
$items=array("mobile","tv","tablet");
foreach($items as $item)
{
    echo "$item<br>";
}

?>
</body>
</html>