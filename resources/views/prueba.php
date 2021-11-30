<?php
require("Camiones.php");
$data = distribucion('coordenadas.txt');
$demanda = demandas('demandas.txt');
$distancia = distancia($data['p'][1],$data['c'][1]);
$demanda = ordenar($demanda,$data);

print_r($data);

echo "<br>";
echo "<br>";

echo "<br>";



print_r($demanda);