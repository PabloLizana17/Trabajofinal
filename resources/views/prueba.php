<?php
require("Camiones.php");
$data = distribucion('coordenadas.txt');
$demanda = demandas('demandas.txt');
$distancia = distancia($data['p'][1],$data['c'][1]);
$demanda = ordenar($demanda,$data);
$ordenar = separar($demanda,$data);
$caminos = resultados($ordenar,$data);

print_r ($caminos);

?>








