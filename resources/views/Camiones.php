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


    function separar($demandas,$data)
    {
        $orden=array();
        $orden["centros"]=array();
        for($i=0;$i<count($demandas);$i++)
        {
            if(!(in_array($demandas[$i]["c"],$orden["centros"])))
            {
                array_push($orden["centros"],$demandas[$i]["c"]);
                $orden[$demandas[$i]["c"]]=array();
            }
        }

        for($i=0;$i<count($demandas);$i++)
        {
            array_push($orden[$demandas[$i]["c"]],$demandas[$i]);
        }

        return $orden;
    }


?>