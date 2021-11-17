<!DOCTYPE html>
<html>
<head>
    <title> Registrate </title>
    <link rel="stylesheet" type="text/css" href="css/login.css">
    <link rel="stylesheet" href="css/cabecera.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.0.0/animate.min.css">
</head>

<body>
<!-- mandamos con el metodo "post" a la pagina "register.php" todos los datos-->
<form action="updateuser.php" method="post">
  <h1 class="animate__animated animate__backInLeft">Editar Usuario</h1>
  <p>Usuario <input type="text" placeholder="ingrese su nuevo usuario" name="newuname"></p>
  <p>Email <input type="email" placeholder="ingrese su nuevo email" name="newemail"></p>
  <p>Password <input type="password" placeholder="ingrese su nueva contraseña" name="newpass"></p>
  <p>Repetir Password <input type="password" placeholder="repita la nueva contraseña" name="newrpass"></p>
  <p><input type="submit" value="Editar"></p> 

</form>
<form action="inicio.php">
  <input type="submit" value="Cancelar">
</form>

</body>

</html>