<?php
$id = $_GET["eliminar"];

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

$sql = "DELETE FROM `informacion` WHERE id = '".$id."';";

if ($conn->query($sql) === TRUE) {
  header( 'Location:pagina_2.php?op=1' ) ;
} else {
  echo "Error: " . $sql . "<br>" . $conn->error;
}



?>
