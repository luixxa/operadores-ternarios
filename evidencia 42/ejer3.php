<?php

 echo"Las medidas del terreno\n";

 $medida1 = readline();
 

 $medida2 = readline();

  
 $lote = (($medida1 >= 1000) && ($medida2 >= 1000)) ? "\nEs bueno para cultivos extensivos" : "Es buena opcion para el cultivo de jardín o huerto\n";
 
 echo $lote;

 ?>