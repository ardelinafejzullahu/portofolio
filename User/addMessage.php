<?php 

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "portfolio";

try{

$conn = new PDO("mysql:host=$servername; dbname=$dbname", $username, $password);

$name = $_POST['name'];
$email = $_POST['email'];
$yourmessage = $_POST['yourmessage'];

$newyourmessage = $conn->prepare("INSERT INTO message(name, email, yourmessage) VALUES(:name, :email, :yourmessage)");

$newyourmessage->bindParam(':name', $name);
$newyourmessage->bindParam(':email', $email);
$newyourmessage->bindParam(':yourmessage', $yourmessage);

$newyourmessage->execute();

echo "Your yourmessage has been sent!";
echo "<br>";

}
catch(PDOExeption $e){
  echo "Error:" . $e->getMessage();
}

$conn = null;
header("Location: index.php");
?>
