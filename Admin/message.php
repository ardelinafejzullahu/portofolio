
<?php include('check.php'); ?>

<!DOCTYPE html>
<html lang="en" >
<head>
<meta charset="UTF-8">
  <meta name="viewport" content="width=device-width">
  <title>Portfolio</title>
  <link rel="stylesheet" href="css/style.css">
  <link rel="stylesheet" href="css/table.css">
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
<br><br>

    <table class="table" style="border: 1px solid black;  border-color:white; border-collapse: collapse;">
  <thead>
    <tr>
      <th>Name</th>
      <th>Email</th>
      <th>Message</th>
      <th> Delete </th>
    
    </tr>
  </thead>
  <?php
$query ="SELECT *
FROM message "; 

$result = mysqli_query($conn,$query);


while($row = mysqli_fetch_assoc($result))
{ 
  extract($row);
  
  echo "
  <tr>
   
  <td>$name</td>
  <td>$email </td>
  <td>$yourmessage</td>
	<td><button>	<a href=\"delete.php?id=$id\" class='btn btn-sm btn-pink text-white' onClick=\"return confirm('Are you sure you want to delete it?)\" >Delete</a> </button></td>
  
  </tr>
";  
}

  ?>
   
</table>


    </main>
</body>

</html>