<html>
 <head><title>CALCULO DEL AREA DEL RECTANGULO</title></head>
 <body>
<?php
    $longitud = $_POST['longitud'];
    $apotema = $_POST['apotema'];
    $area = 0;
    echo "<h2 align='center'>RESULTADO DEL AREA DEL RECTANGULO</h2>";
    $area = (4 * $longitud) * $apotema;
    echo "<br><h3>Longitud: " . $longitud . "</h3>";
    echo "<br><h3>Apotema: ". $apotema  ."</h3>";
    echo "<br/><br/>";
    echo "<br><h3>Area del Rectangulo: " . $area . "</h3>";
    echo "<br/><br/>";
    echo "<a href='index.html'>Regresar</a>";
?>