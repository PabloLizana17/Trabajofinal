<?php
require("Camiones.php");
$data = distribucion('coordenadas.txt');
$demanda = demandas('demandas.txt');
$distancia = distancia($data['p'][1],$data['c'][1]);
$demanda = ordenar($demanda,$data);
$ordenar = separar($demanda,$data);
$caminos = caminos($ordenar[1],$data);

//$demanda = menor_a_mayor($demanda);
//print_r($data);
echo "<br>";
echo "<br>";
echo "<br>";
echo "<br>";
echo "<br>";
echo "<br>";
//print_r($demanda);
echo "<br>";
echo "<br>";
echo "<br>";
echo "<br>";
echo "<br>";
echo "<br>";
//print_r($ordenar);
echo "<br>";
echo "<br>";
echo "<br>";
echo "<br>";
echo "<br>";
echo "<br>";
print_r($caminos);








