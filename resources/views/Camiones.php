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

    function menor_a_mayor($demandas)
    {
        for($i=0;$i<count($demandas);$i++)
        {
            for($j=0;$j<count($demandas)-1;$j++)
            {
                if($demandas[$j]["Distancia"]>$demandas[$j+1]["Distancia"])
                {
                    $aux = $demandas[$j];
                    $demandas[$j] = $demandas[$j+1];
                    $demandas[$j+1] = $aux;
                }
            }
        }
        return $demandas;
    }
  /* function caminos($demandas,$data)
    {
        $demandas = menor_a_mayor($demandas);
        $caminos = array();
        $camino = array();
        $camino["escrito"]= "C".$demandas[0]["c"]."-P".$demandas[0]["p"];
        $camino["ultimo"] = $demandas[0]["p"];
        array_push($camino,$caminos);
       for($i=1;$i<count($demandas);$i++)
       {
           for($j=0;$j<count($caminos);$j++)
           {
                if($demandas[$i]["distancia"]>distancia($data["c"][$demandas[$i]["p"]],$data["c"][$caminos[$j]["ultimo"]]))
                {
                    
                }
           }"
       }
    }

*/

?>