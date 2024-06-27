<?php

echo "¿Cuántos productos adquirió el usuario?\n";

$elnumero = readline();

$rebaja = ($elnumero >= 10) ? "\nvalor unitario - 10% (valor unitario)" : "valor unitario\n";

echo "La cantidad total" , $rebaja;

?>