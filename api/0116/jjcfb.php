<?php
$i = 0;
$j = 0;
    for ($i=1; $i <10 ; $i++) { 
        echo "<table border='1px'>";
        for ($j=1; $j <=$i ; $j++) { 
            // echo $j."<br/>";
            echo "<td>".$j."*".$i."=".$i*$j."</td>";
        }
        echo "</table>";
    }
