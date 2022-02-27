<?php
include "connection.php";
$title=$_POST['first'];
$description=$_POST['second'];
$sql="insert into todo values('','$title','$description')";
$result=mysqli_query($con,$sql);
include('index1.php');



?>

