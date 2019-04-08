<table border="1">
<?php
echo "<b>impresion numeros 1-5 con for</b>";
for($i=1;$i<=5;$i++) //i++ es lo mismo que i=i+1
{
    echo "<tr><td>numero: ".$i."</td></tr>";
}
echo "</table>";
echo "<br><br>";
echo "<b>impresion numeros 1-10 con while</b>";
$j=1;
while ($j<=5)
{
    echo "<tr><td>numero: ".$j."</td></tr>";
    $j = $j + 1;//j++
}
echo "<br><br>";
echo "<b>impresion numeros 1-10  con do-while</b>";
?>
