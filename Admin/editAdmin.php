<?php
// including the database connection file
include_once("config.php");
if(isset($_POST['update']))
{
	$uid= $_POST['id'];
	
	$username=$_POST['username'];
	$password=$_POST['password'];
	
	
	
	
	//checking empty fields
	if(empty($username) || empty($password))
	{
		if(empty($username))
		{
			echo "<font color='red'> username filed is empty.</font><br>";
		}
		if(empty($password))
		{
			echo "<font color='red'> password filed is empty.</font><br>";
		}
		
	}
	else {
		//updating the table
		$result=mysqli_query($conn,"UPDATE admin SET username='$username', password='$password'   WHERE id='$uid'");
		

		header("Location:admin.php");
		
	}
}
?>
<?php
//getting uid from url
$uid=$_GET['id'];
//selecting data associated with this particular uid
$result=mysqli_query($conn, "SELECT * from admin WHERE id='$uid'");

while($res=mysqli_fetch_array($result))
{
	$username=$res['username'];
	$password=$res['password'];


}
?>


<!DOCTYPE html>
<html lang="en" >
<head>
  <meta charset="UTF-8">
  <meta username="viewport" content="width=device-width">
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
<form action="editAdmin.php" method="post" id="contact-form" class="form1" role="form">
    <h2>Update</h2>
    
    <p class="formP" type="Username:"><input name="username" placeholder="What is your username?" class="username" value='<?php echo $username;?>' required /></p>
    <p class="formP" type="Password:"><input name="password" placeholder="What is your password?" class="password" type="password" value='<?php echo $password;?>'required /></p>
    
	<button name="update"  type="submit">Update</button>
</form>
	<div>
</div>
</body>
</html>