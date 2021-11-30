<?php
require("manejoarchivo.php");
$data = distribucion('coordenadas.txt');
$demanda = demandas('demandas.txt');
print_r($demanda);