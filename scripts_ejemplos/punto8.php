<?php
    echo "<b> 10 numeros aleatorios</b><br><br>";
        
    $par = 0;
    $impar = 0;
    
    for ($i = 1; $i <= 10; $i++) {
        $rand = rand();
        $mod = $rand % 2;
        if ($mod == 0) {
            ++$par;
            echo $rand .'<br>';
        } else {
            ++$impar;
            echo $rand. '<br>';
        }
    }
        
    echo "<table border ='1'>";
    echo "<tr><td colspan='2'><center>Numeros Generados </center></td></tr>". '<br>';
    echo "<tr><td>cantidad de numeros pares </td><td>" .$par."</td></tr>". '<br>';
    echo "<tr><td>cantidad de numeros impares </td><td>" . $impar."</td></tr>". '<br>';
    echo "</table>";
           
?>