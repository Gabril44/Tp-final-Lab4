<?php
session_start();
$score=$_GET['score'];
$uname = $_SESSION['usuario'];


$conexion=mysqli_connect("lab4.czqsnex935ev.sa-east-1.rds.amazonaws.com","admin","Lab4utn2021","memorygame");

$consulta="SELECT * FROM users where username='$uname'";
$resultado=mysqli_query($conexion,$consulta);
while($mostrar = mysqli_fetch_array($resultado)){
 $primerScore = $mostrar['score'];   

if($score<$primerScore){
      $update = "UPDATE users SET score='$score' WHERE username='$uname'";
      if($conexion->query($update) === TRUE){

      }else{
          echo "error";
      }
 }
}
mysqli_close($conexion);
//echo "tu puntaje es ". $fname;
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="confettistyle.css">
    <link rel="stylesheet" type="text/css" href="css/login.css">
    <link rel="stylesheet" href="css/cabecera.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.0.0/animate.min.css">
    <title>Ganaste!</title>
</head>
<body>
    <form action="inicio.php">
        <h1 class="animate__animated animate__backInLeft"> <p>GANASTE!!! 🎇</p></h1>
        Puntuacion: <?php echo $uname. " ".$score ." ". $primerScore;?>
        <input type="submit" value="volver al inicio" >
        <audio controls autoplay>
			<source src="boca_theme.mp3" type="audio/mpeg">
		</audio>
    </form>
    <script src="confetti.js"></script>
    <!-- Confetti  JS-->
    <script>

        // start

        const start = () => {
            setTimeout(function() {
                confetti.start()
            }, 1000); // 1000 is time that after 1 second start the confetti ( 1000 = 1 sec)
        };

        //  Stop

        const stop = () => {
            setTimeout(function() {
                confetti.stop()
            }, 5000); // 5000 is time that after 5 second stop the confetti ( 5000 = 5 sec)
        };

        start();
        stop();
    </script>
</body>
</html>