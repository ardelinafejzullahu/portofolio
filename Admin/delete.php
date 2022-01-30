<?php

include("config.php");


$uid=$_GET['id'];

$result=mysqli_query($conn,"DELETE FROM message WHERE id='$uid'");


header("Location:message.php");
?>
