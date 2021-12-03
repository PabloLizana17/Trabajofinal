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
        log::info("Distancia calculada");
        return $distancia;
        
    }

    function ordenar($demandas,$data)
    {
        for($i=0;$i<count($demandas);$i++)
        {
            $demandas[$i]["Distancia"] = distancia($data['p'][$demandas[$i]['p']],$data['c'][$demandas[$i]['c']]);
        }
        log::info("Demandas ordenadas");

        return $demandas;
    }


    function separar($demandas)
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
        log::info("Demandas separadas");
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
        log::info("Demandas ordenadas");
        return $demandas;
    }

    function caminos($demandas,$data)
    {
        $demandas = menor_a_mayor($demandas);
        $caminos = array();
        $camino = array();
        $camino["escrito"]= "C".$demandas[0]["c"]."-P".$demandas[0]["p"];
        $camino["ultimo"] = $demandas[0]["p"];
        $camino["distancia"] = $demandas[0]["Distancia"];
        $camino["cantidad"] = $demandas[0]["cantidad"];
        
       for($i=1;$i<count($demandas);$i++)
        {
            
           if($demandas[$i]["Distancia"]>distancia($data["p"][$demandas[$i]["p"]],$data["p"][$camino["ultimo"]]) && $demandas[$i]["Distancia"]+$camino["cantidad"]<1000)
                {
                    $camino["ultimo"]= $demandas[$i];
                    $camino ["escrito"]= $camino ["escrito"]."-P".$demandas[$i]["p"];
                    $camino["distancia"] = $camino["distancia"]+$demandas[$i]["Distancia"];
                    $camino["cantidad"] = $camino["cantidad"] + $demandas[$i]["cantidad"];
                }
            else
            {
                array_push($caminos,$camino);
                $camino = array();
                $camino["escrito"]= "C".$demandas[$i]["c"]."-P".$demandas[$i]["p"];
                $camino["ultimo"] = $demandas[$i]["p"];
                $camino["distancia"] = $demandas[$i]["Distancia"];
                $camino["cantidad"] = $demandas[$i]["Cantidad"];
            }
        }
        array_push($caminos,$camino);
        log::info("Caminos generados");
        return $caminos;

    }


    function Resultados($demandas, $data)
    {
        $resultados = array();
        for($i=0;$i<count($demandas['centros']);$i++)
        {
            array_push($resultados,caminos($demandas[$demandas['centros'][$i]],$data));
        }
        $aux = array();
        for($i=0;$i<count($resultados);$i++)
        {
            for($j=0;$j<count($resultados[$i]);$j++)
            {
                array_push($aux,$resultados[$i][$j]);
            }
        }
        log::info("Resultados generados, imprimiendo");

        return $aux;
    }



?>