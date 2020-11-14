<?php
include_once('../includes/dbcon.php');
$sql="select * from studentinfo";
$result=mysqli_query($conn,$sql);
$rows=mysqli_num_rows($result);
if($rows>0)
{
    while(($row=mysqli_fetch_assoc($result)))
    {
        echo $row['name'].":".$row['email'].",".$row['phone'].",".$row['address']."<br>";
    }
    echo "<br>Data Exist";
    echo "<br>Num of rows=".$rows;
}
else
{
    echo "No data Found!!";
}
$sql="insert into studentinfo(name,email,phone,address) values ('John','john@gmail.com','123534627','Bangkok')";
mysqli_query($conn,$sql);
?>