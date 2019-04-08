<?php

    include("database.php");

    $codigo = $_POST["cod_prod"];
    $nombre = $_POST["nom_prod"];
    $cantidad = $_POST["cantidad"];

   $sql = "INSERT INTO productos (codigo_prod,nombre_prod,cantidad)   VALUES ('$codigo','$nombre',$cantidad)" ;

   if($conn->query($sql)===true){
       echo "producto registrado con exito";
       echo "<br><a href = 'inde.php>REGRESAR</a>";
    }else{
        echo "Error: " . $sql. $conn->error;
    }
?>