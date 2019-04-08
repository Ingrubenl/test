<?php
echo "<b>impresion numeros 1-5 con for</b>";
for($i=1;$i<=5;$i++) //i++ es lo mismo que i=i+1
{
    if($i%2==0)
    echo "<tr><td bgcolor='GREEN'>numero: ".$i."</td></tr>";
}
?>