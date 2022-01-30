<?php

include("config.php");


$uid=$_GET['id'];

$result=mysqli_query($conn,"DELETE FROM admin WHERE id='$uid'");


header("Location:admin.php");
?>
