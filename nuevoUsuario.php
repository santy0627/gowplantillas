<html>
<head>
<script languaje="javascript" type="text/javascript">
    function volver() {
        document.retorno.submit();
    }
</script>
</head>
<body onLoad="javascript:volver() ;">
    <?php
        include ('./inc/conexion.php');
        
        $consulta="INSERT INTO usuario (nombre, apellido, correo, id, contrasena)" ;
        $consulta=$consulta."VALUES ('".$_POST["nombre"]."', '".$_POST["apellido"]."', '".$_POST["correo"]."', '".$_POST["id"]."', '".$_POST["contrasena"]."');";
        $result = mysqli_query($conexion,$consulta);
        mysqli_close($conexion) ;
    ?>
    <form action="index.php" name="retorno" id="retorno" method="post">

    </form>
</body>
</html>