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

//Comprobamos si ya existe ese usuario

$consulta="SELECT*FROM users where username='$uname'";
$consultaf=mysqli_query($conn,$consulta);

$filas=mysqli_num_rows($consultaf);

if($filas){
  
    include("newslet.html");
	

  ?>
  <h1 class="bad">YA EXISTE ESE USUARIO</h1>
  <?php

}else{ //si no existe, lo agregamos a la base d datos
	$sql_command = "INSERT INTO users (username, email, password) VALUES ('$uname', '$email', '$upass')";
    if ($conn->query($sql_command) === TRUE) {
		header("Location: index.html");
	} else {
		echo "Error: " . $sql_command . "<br>" . $conn->error;
	}
	
}




$conn->close();
?>