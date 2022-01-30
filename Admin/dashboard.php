
<?php include('check.php'); ?>

<!DOCTYPE html>
<html lang="en" >
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width">
  <title>Portfolio</title>
  <link rel="stylesheet" href="css/style.css">
  
  <script src="https://use.fontawesome.com/20ab91acc4.js"></script>
    <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
  
    <title>Ardelina Fejzullahu</title>
    
</head>

<body>
    <aside>
        <nav class="nav-bar">

            <img src="image/IMG_7392.JPG" alt="">
            <a href="#home"><i class="material-icons md-36">home</i>
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
   
    <div class="introduction" id="welcome-section" style="background-color:#f2f2f2;">
        <header class="home" id="home">
            <br><br><br><br><br><br><br><br><br>
        <h1 style="color:#78788c;">Hey,<?php echo $_SESSION['username']; ?></h1>
           
        </header>
    </div>



    </main>
</body>

</html>