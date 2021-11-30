<?php
require("manejoarchivo.php");

function distancia($Punto1,$punto2)
{
    $x1 = $Punto1["x"];
    $y1 = $Punto1["y"];
    $x2 = $punto2["x"];
    $y2 = $punto2["y"];
    $distancia = sqrt(pow(($x2-$x1),2)+pow(($y2-$y1),2));
    $distancia = bcdiv($distancia, '1', 5);
    return $distancia;
    

}

function ordenar($demandas,$data)
{
    for($i=0;$i<count($demandas);$i++)
    {
      $demandas[$i]["Distancia"] = distancia($data['p'][$demandas[$i]['p']],$data['c'][$demandas[$i]['c']]);
      
    }

    return $demandas;
}





?>