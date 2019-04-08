<table border="1">
<?php
    echo "punto 1: <br><br>";
   
    for ($i=1; $i <=10 ; $i++) {
        if ($i%2==0) {
            echo "<td bgcolor='yellow'>nùmero: ".$i."</td>";
        }else {
            echo "<td bgcolor='orange'>nùmero: ".$i."</td>";
        }
         
        }
    echo "</table><br><br>"
    
    

?>

