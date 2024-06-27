<?php
echo "INGRESE SU EDAD\n";
$edad = readline();
$condicion = ($edad >= 18) ? (readline("TIENE LICENCIA?\n ") == "si" ? "PUEDE CONDUCIR" : "NO PUEDE CONDUCIR") : "NO TIENE EDAD SUFICIENTE";
echo $condicion;
