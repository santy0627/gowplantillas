<?php
  include ("./inc/conexion.php");
  include ("./inc/recogerUsuario.php");
  
  echo("<script languaje='javascript' type='text/javascript'>");
    echo("function guardarUsuario() {");
        echo("let user = {");
            echo("nombre:'".$nombre."',");
            echo("apellido:'".$apellido."',");
            echo("correo:'".$correo."',");
            echo("identificacion:'".$identificacion)."'";
        echo("};");
        echo("console.log(user);");
        echo("localStorage.setItem('usuario', JSON.stringify(user))");
        echo("}");
    echo("</script>");
?>

<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="./style.css">
  <title>GowPlantillas</title>
  <script>
      function redirrecionar(event){
          document.location.href = "index.php";
      }
  </script>
</head>
<body>
  <header class='cabecera'>
    <h1 class='cabecera__titulo'>GowPlantillas</h1>
    <nav class='navegacion'>
      <ul class='navegacion__list'>
        <li class='list__element'><a  class='list__link' href='index.php'>Inicio</a></li>
        <?php 
            if(isset($identificacion)){
            echo ("<p>Hola <span style='color: #F9C846'>" . $nombre . "</span>¡</p>");
            } else {
                echo("<p>Bienvenido</p>");
            }
        ?>
      </ul>
    </nav>
  </header>
  <main class="main-catalogo">
    
  </main>
</body>
</html>