<?php
  include ('./inc/conexion.php');
        
  if(isset($_POST['id'])){
    $identificacion = $_POST['id'];
    $consulta = "SELECT * FROM usuario WHERE id = $identificacion";
    $resultado = mysqli_query($conexion, $consulta);
            
    while ($consulta = mysqli_fetch_array($resultado)){
      $nombre = $consulta['nombre'];
      $apellido = $consulta['apellido'];
      $correo = $consulta['correo'];
      $identificacion = $consulta['id'];
    }
  }        
?>