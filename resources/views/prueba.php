<?php
require("manejoarchivo.php");
$data = distribucion('coordenadas.txt');
print_r($data);