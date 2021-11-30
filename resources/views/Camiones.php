<?php
require("manejoarchivo.php");

function distancia($Punto1,$punto2)
{
    $x1 = $Punto1["x"];
    $y1 = $Punto1["y"];
    $x2 = $punto2["x"];
    $y2 = $punto2["y"];
    $distancia = sqrt(pow(($x2-$x1),2)+pow(($y2-$y1),2));
    return $distancia;
    

}




?>