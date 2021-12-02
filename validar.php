<?php
$uname = val($_POST["uname"]);  
$upass = val($_POST["pass"]);
$puntuacion;
function val($data) {
	$data = trim($data);
	$data = stripslashes($data);
	$data = htmlspecialchars($data);
	return $data;
}
session_start();
$_SESSION['usuario']=$uname;
$_SESSION['contraseña']=$upass;
$conexion=mysqli_connect("sql10.freesqldatabase.com","sql10455993","Z7IlgD8xzu","sql10455993");

$consulta="SELECT*FROM users where username='$uname' and password='$upass'";
$resultado=mysqli_query($conexion,$consulta);

$filas=mysqli_num_rows($resultado);

if($filas){  
    header("location:inicio.php");
}else{
    ?>
    <?php
    include("index.html");

  ?>
  <h1 class="bad">ERROR DE AUTENTIFICACION</h1>
  <?php
}
mysqli_free_result($resultado);
mysqli_close($conexion);
