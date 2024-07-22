<?php 
    include ("./inc/conexion.php");
    
    $resultado = mysqli_query($conexion, "SELECT * FROM productos");
    
    while ($consulta = mysqli_fetch_array($resultado)) {
        echo ("<section class='product'>");
        echo ("<aside>");
        echo ("<div class='txt'>");
        echo ("<h1 class='product__name'>" .$consulta['titulo'] ."</h1>");
        echo ("<p class='product__description'>".$consulta['descripcion']."</p>");
        echo ("</div>");
        echo ("<button class='btn'>Comprar</button>");
        echo ("</aside>");
        echo ("<img src='./img/" .$consulta['id'] .".jpg' alt='img' width='300px' height='100%' />");
        echo ("</section>");
    }
?>