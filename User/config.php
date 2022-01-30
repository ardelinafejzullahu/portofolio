<html>
<body> 
<?php

$host = 'localhost';
$db = 'portfolio';
$user = 'root';
$pass = '';

try{

    $con = new PDO("mysql:host=$host; dbname=$db", $user, $pass);

    

    
}
catch(Exeption $e){
    echo "Something went wrong!";
}

?>
</body>
</html>