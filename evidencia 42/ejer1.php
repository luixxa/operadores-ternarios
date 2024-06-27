<?php
/*OPERADOR TERNARIO */
echo "CUANTAS CAMISAS DESEA COMPRAR?\n";
$NUMERO = readline();
$descuento = ($NUMERO < 3) ? "\nSU DESCUENTO ES 10%": "SU DESCUENTO ES DEL 20%\n";  
echo $descuento;
