<!DOCTYPE html>
<html>
<head>
</head>
<body>
<table>
<thead>
<tr>
<th>No</th>
<th>Name</th>
<th>Email</th>
<th>Actions</th>
</tr>
</thead>
<tbody>


<?php
$names=array("Mg Mg","Aung","Mya");
$email=array("mg@gmail.com","aung@gmail.com","mya@gmail.com");
for($row=0;$row<count($names);$row++)
{
    $num=$row+1;
    echo "<tr><td>$num</td><td>$names[$row]</td><td>$email[$row]</td><td><button name='edit'>Edit</button></td></tr>";
}
?>
</tbody>
</table>
</body>
</html>