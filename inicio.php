<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=, initial-scale=1.0">
    <link rel="stylesheet" href="css/login.css">
    <link rel="stylesheet" href="css/cabecera.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.0.0/animate.min.css">
    <title>Inicio</title>
</head>
<body>
   <header></header>
    <main>
    <form>
        <h1 class="animate__animated animate__backInLeft">Ranking mundial</h1>
       <div id= "tabla-container">
           <table>
                <thead>
                    <tr>
                        <th>Usuario</th> <th>Puntaje</th>
                    </tr>
                </thead>
                <tr>
                <?php
                  $conexion=mysqli_connect("lab4.czqsnex935ev.sa-east-1.rds.amazonaws.com","admin","Lab4utn2021","memorygame");
                  $consulta = "SELECT username, score FROM users ORDER BY score ASC LIMIT 10";
                  $resultado=mysqli_query($conexion,$consulta);
                  while($mostrar = mysqli_fetch_array($resultado)){
                      ?>
                    <td><?php echo $mostrar['username'] ?> </td><td><?php echo $mostrar['score'] ?> </td>
                    </tr>
                <?php 
         }
           ?>
           </table>
       </div> 
    </form>
    <form action="game.html">
        <input type="submit" value="Jugar">
    </form> 
    </main>

   <footer></footer> 
</body>
</html>
