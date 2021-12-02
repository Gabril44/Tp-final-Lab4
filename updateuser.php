<?php //arreglar este
$conexion=mysqli_connect("sql10.freesqldatabase.com","sql10455993","Z7IlgD8xzu","sql10455993");

$newuser = val($_POST["newuname"]);  
$newpass = val($_POST["newpass"]);  
$newemail = val($_POST["newemail"]);
//BORRAMOS LO QUE SOBRA Y AÑADIMOS SEGURIDAD
function val($data) {
	$data = trim($data);
	$data = stripslashes($data);
	$data = htmlspecialchars($data);
	return $data;
}
session_start();
$userViejo = $_SESSION['usuario'];
// sql to delete a record
$sql = "UPDATE users SET username='$newuser', email = '$newemail', password = '$newpass' WHERE username='$userViejo'";

if ($conexion->query($sql) === TRUE) {
	header("location:inicio.php");
} else {
    echo "Error deleting record: " . $conn->error;
}

$conn->close();
?>