<?php
$nombre = $_POST["nombre"];
$pass = $_POST["password"];
$genero = $_POST["genero"];
$email = $_POST["email"];
$orientacion = $_POST["orientacion"];
$numero = $_POST["numero"];
$id = $_POST["id"];

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "datos";

// Create connection
$conn = mysqli_connect($servername, $username, $password, $dbname);

// Check connection
if (!$conn) {
  die("Connection failed: " . mysqli_connect_error());
}
echo "Connected successfully";

$sql = "UPDATE `informacion` SET `nombre`='".$nombre."',`password`='".$pass."',`genero`='".$genero."',`orienacion`='".$orientacion."',`telefono`='".$numero."',`correo`='".$email."' WHERE id = '".$id."';";

if ($conn->query($sql) === TRUE) {
  echo "New record created successfully";
} else {
  echo "Error: " . $sql . "<br>" . $conn->error;
}
header( 'Location:pagina_2.php' ) ; 
?>
