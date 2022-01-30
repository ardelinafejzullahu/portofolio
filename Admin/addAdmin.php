<?php

include("config.php");
if(isset($_POST['submit']))
{

$username=$_POST['username'];
$password=$_POST['password'];
$query = "INSERT INTO admin (username,password) VALUES ('".$username."','".$password."')";
	$result=mysqli_query($conn,$query);
	

}
?>

<!DOCTYPE html>
<html lang="en" >
<head>
<meta charset="UTF-8">
  <meta name="viewport" content="width=device-width">
  <title>Portfolio</title>
  <link rel="stylesheet" href="css/style.css">
  <link rel="stylesheet" href="css/contact.css">
  <script src="https://use.fontawesome.com/20ab91acc4.js"></script>
    <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
  

    
</head>

<body>
    <aside>
        <nav class="nav-bar">

            <img src="image/IMG_7392.JPG" alt="">
            <a href="dashboard.php"><i class="material-icons md-36">home</i>
                <p>Home</p>
            </a>
            <a href="admin.php"><i class="material-icons md-36">person</i>
                <p>Admin</p>
            </a>
        
            <a href="message.php"><i class="material-icons md-36">message</i>
                <p>Messages</p>
            </a>
            <a href="logout.php"><i class="material-icons md-36">logout</i>
                <p>Logout</p>
            </a>
        </nav>
    </aside>
   
	<div class="contact-wrapper">
        
	<div class="contact-wrapper">
<form action="" method="post" id="contact-form" class="form1" role="form" style="widht: 100px; height:100%;">
    <h2>Add </h2>
    
    <p class="formP" type="Username:"><input name="username" placeholder="What is your name?" class="name" required /></p>
  <p class="formP" type="Password:">  <input name="password" placeholder="Enter password?" class="email" type="password" required /></p>
	<button name="submit" class="btn" type="submit">Add</button>
    <?php if(isset($_POST['submit']))
							  {
								  if($result)
								  {
									  echo "<p class='text-success'>Data added successfully</p>";
									 
							      } 
								  else {
									   echo "<p class='text-danger'>Data could not be inserted!Try again</p>";
								  }
							  }
							  ?>
</form>
	<div>
</div>

</body>
</html>
