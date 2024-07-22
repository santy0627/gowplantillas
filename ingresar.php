<?php
  include ("./inc/conexion.php");
?>

<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="./style.css">
  <title>GowPlantillas</title>
  <script>
      function redirrecionar(event){
          document.location.href = "catalogo.php";
      }
  </script>
</head>
<body>
  <header class='cabecera'>
    <h1 class='cabecera__titulo'>GowPlantillas</h1>
    <nav class='navegacion'>
      <ul class='navegacion__list'>
        <li class='list__element'><a  class='list__link' href='index.php'>Inicio</a></li>
        <li class='list__element'><a class='list__link' href='index.php'>Catalogo</a></li>
        <li class='list__element'><a class='list__link' href='index.php'>Registrarse</a></li>
      </ul>
    </nav>
  </header>
  <main class="main-login">
    <section class="login" id="login">
      <form action='catalogo.php' method="POST" id="form" name="form">
          <h1 class='form__title'>Iniciar sesion</h1>

          <label htmlFor='correo'>correo:</label>
          <input type='text' name='correo' />

          <label htmlFor='id'>identificación:</label>
          <input type='number' name='id' />

          <label htmlFor='contrasena'>contraseña:</label>
          <input type='password' name='contrasena' />

          <center><input type='submit' class='btn' value='Enviar' id="boton" onclick="redirrecionar()"/></center>
          <center><p>o si aun no tienes una cuenta registrate <a href="index.php">aquí</a></p></center>
        </form>
    </section>
  </main>
</body>
</html>