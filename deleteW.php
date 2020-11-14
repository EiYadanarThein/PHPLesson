<?php
include_once("includes/dbcon.php");
$id=$_GET['id'];

$sql="delete from student where id='$id'";
$result=mysqli_query($conn,$sql);
if($result)
{
    echo "successfully deleted.";
}
else
{
    echo mysqli_error($conn);
}

?>