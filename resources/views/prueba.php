<?php
require("Camiones.php");
$data = distribucion('coordenadas.txt');
$demanda = demandas('demandas.txt');
$distancia = distancia($data['p'][1],$data['c'][1]);
$demanda = ordenar($demanda,$data);
$ordenar = separar($demanda,$data);

//$demanda = menor_a_mayor($demanda);

//print_r($data);

print_r($demanda);

print_r(matrizdistancia($data));






