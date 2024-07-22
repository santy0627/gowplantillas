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
</head>
<body <?php if(isset($identificacion)){echo ("onLoad='javascript:guardarUsuario();'");} ?>>
  <header class='cabecera'>
    <h1 class='cabecera__titulo'>GowPlantillas</h1>
    <nav class='navegacion'>
      <ul class='navegacion__list'>
        <li class='list__element'><a  class='list__link' href='#landing'>Inicio</a></li>
        <li class='list__element'><a class='list__link' href='#catalogo'>Catalogo</a></li>
        <?php 
            if(isset($identificacion)){
            echo ("<p>Hola <span style='color: #F9C846'>" . $nombre . "</span>¡</p>");
            } else {
                echo("<li class='list__element'><a class='list__link' href='#login'>Registrarse</a></li>");
            }
        ?>
      </ul>
    </nav>
  </header>
  <main class="main-inicio">
    <section class='landing' id="landing">
      <div class='texts'>
        <p class='text1'>
          ¡Hola!, bienvenido a GowPlantila una página donde podrás encontrar miles de plantillas de páginas web ideales para esa idea que tienes en mente, ¿será una empresa?, ¿un anuncio? o talvez simplemente un blog, no importa la idea que tengas en mente, aqui en GowPlantila tenemos esa página de tus sueños.
        </p>
        <p class='text2'>
          Creado por Santiago Morales, Maria Sofia Gelvez y Sara Colorado.
        </p>
      </div>
      <div class='img' />
    </section>
    <section class="catalogo" id="catalogo">
      <h1 class="catalogo__titulo">CATALOGO</h1>
      <div class="plantillas">
      <?php 
        include "./inc/plantillas.php"
      ?>
      </div>
    </section>

    <section class="login" id="login"  <?php if(isset($identificacion)){
          echo("style='display:none;'");
      }
      ?>>
      <form action='nuevoUsuario.php' method="POST" >
          <h1 class='form__title'>Iniciar sesion</h1>

          <label htmlFor='nombre'>nombre:</label>
          <input type='text' name='nombre' />

          <label htmlFor='apellido'>apellido:</label>
          <input type='text' name='apellido' />

          <label htmlFor='correo'>correo:</label>
          <input type='text' name='correo' />

          <label htmlFor='id'>identificación:</label>
          <input type='number' name='id' />

          <label htmlFor='contrasena'>contraseña:</label>
          <input type='password' name='contrasena' />

          <center><input type='submit' class='btn' value='Enviar' /></center>
          <center><p>o si ya tienes una cuenta ingresa <a href="ingresar.php">aquí</a></p></center>
        </form>
    </section>
  </main>
</body>
</html>