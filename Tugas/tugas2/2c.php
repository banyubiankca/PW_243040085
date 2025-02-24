<?php

 echo "<table cellspacing = '0' ; cellpadding : '20' style='border-collapse: collapse ; '>";
 for ($i = 10 ; $i >= 1 ; $i--) {
    echo " <tr> " ;
    for ($j = 1 ; $j <= $i ; $j++) {
       echo "<td style='border: 1px solid white ;background-color: black ; color : white ; text-align: center ; font-size : 24 ; padding : 10px ;'> $j </td> " ;
   }
    echo "</tr>" ;
 }

echo "</table>" ;

?>