<?php

$uname = val($_POST["uname"]);  
$upass = val($_POST["pass"]);
$rupass = val($_POST["rpass"]);  
$email = val($_POST["email"]);  

//BORRAMOS LO QUE SOBRA Y AÑADIMOS SEGURIDAD
function val($data) {
	$data = trim($data);
	$data = stripslashes($data);
	$data = htmlspecialchars($data);
	return $data;
}


$servername = "lab4.czqsnex935ev.sa-east-1.rds.amazonaws.com";
$username = "admin";
$password = "Lab4utn2021";
$dbname = "memorygame";

// Abrir conexion con base de datos
$conn = new mysqli($servername, $username, $password, $dbname);
// Comprobamos 
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 

//INSERTAMOS EN LA BASE DE DATOS EL USUARIO

$sql_command = "INSERT INTO users (username, email, password)
VALUES ('$uname', '$email', '$upass')";

if ($conn->query($sql_command) === TRUE) {
	header("Location: index.html");
} else {
    echo "Error: " . $sql_command . "<br>" . $conn->error;
}
$conn->close();
?>