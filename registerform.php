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
<table class="table table-striped">
<thead>
<tr>
<td>No</td>
<td>Name</td>
<td>Email</td>
<td>Phone</td>
<td>Actions</td>
</tr>
</thead>
<tbody>
<?php




//echo "<tr><td>$num</td><td>$firstnames[$row]</td><td>$lastnames</td><td>$emails[$row]</td><td><button name='view'><i class="fa fa-eye"></i></button></td><td><button name='edit'><i class="fa fa-pencil-square-o"></i></button></td><td><button name='delete'><i class="fa fa-trash-o"></i></button></td></tr>";
echo "<tr>";
echo "<td>1</td>";
echo "<td>".$_SESSION['name']."</td>";
echo "<td>".$_SESSION['email']."</td>";
echo "<td>".$_SESSION['phone']."</td>";
echo "<td><button name='view'><i class='fa fa-eye'></i></button>";
echo "<button name='edit'><i class='fa fa-pencil-square-o'></i></button>";
echo "<button name='delete'><i class='fa fa-trash-o'></i></button></td>";
echo "</tr>";


?>
</tbody>

</table>
</div>

</body>
</html>