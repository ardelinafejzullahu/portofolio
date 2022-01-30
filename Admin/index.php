<?php
session_start();

include('config.php'); 

if(isset($_POST['submit']))
{
	$user = mysqli_real_escape_string($conn,$_POST['username']);
	$password = mysqli_real_escape_string($conn,$_POST['password']);
	$query = "SELECT id FROM admin  WHERE username='".$user."' && password='".$password."'";
	$result = mysqli_query($conn,$query);
	$id=mysqli_fetch_assoc($result)['id'];
	
	if(!empty($id)){
        
		$_SESSION['username']=$user;
		header("Location:dashboard.php");
	}
}
?>
?>
<!DOCTYPE html>
<html lang="en" >
<head>
<meta charset="UTF-8">
  <meta name="viewport" content="width=device-width">
  <title>Portfolio</title>
  <link rel="stylesheet" href="css/style.css">
  <link rel="stylesheet" href="css/contact.css">

    <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
  
    
</head>
<body>
    <aside>
        <nav class="nav-bar">

            <img src="image/IMG_7392.JPG" alt="">
            <a href="index.php"><i class="material-icons md-36">home</i>
                <p>Home</p>
            </a>
            <a href="index.php"><i class="material-icons md-36">person</i>
                <p>Admin</p>
            </a>

            <a href="index.php"><i class="material-icons md-36">message</i>
                <p>Message</p>
            </a>
           
            <a href="index.php"><i class="material-icons md-36">logout</i>
                <p>Logout</p>
            </a>
        </nav>
    </aside>
  
    
    <div class="contact-wrapper">
	<form  class="form1"  method="POST" action="">
    <h2>Login</h2>
    
    <p class="formP" type="Username:"><input name="username"  placeholder="Write your username here.."></input></p>
    <p class="formP" type="Password:"><input name="password"  type="password" placeholder="Write your name here.."></input></p>
    <button name="submit" >Login</button>
</form>
	<div>
    


    </main>
</body>

</html>

