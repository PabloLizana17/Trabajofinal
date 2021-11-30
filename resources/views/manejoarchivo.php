<?php
    use Illuminate\Foundation\Inspiring;
    use Illuminate\Support\Facades\Artisan;
    use Illuminate\Support\Facades\Log;  //Para registrar en el log



    function lectura_archivo($archivo)
    {
        Log::info("lectura de archivo iniciada");

        $fp = fopen ($archivo,"r");
        $i = 0 ;
        $datos = array();
        while (!feof($fp)){
            $linea = fgets($fp);
            array_push($datos,$linea);
        }
        
            return $datos;
    }          

    function distribucion($archivo)
    {   
        $datos = array();
        $data = lectura_archivo($archivo);
        for($i=0 ; $i<sizeof($data) ; $i++)
        {
            if($data[$i][0]== "P" || $data[$i][0]== "p")
            {   
                $cordenadas = array();
                $cont=2;
                $numero= '';
                while($data[$i][$cont]!= ";")
                {
                    $numero = $numero.$data[$i][$cont];
                    $cont++;
                }
                $numero = intval($numero);
                $cont++;
                $x= '';
                while($data[$i][$cont]!= ",")
                {
                    $x = $x.$data[$i][$cont];
                    $cont++;
                }
                $cordenadas["x"] = intval($x);
                $cont++;
                $y= '';
                while(strlen($data[$i])>$cont)
                {
                    $y = $y.$data[$i][$cont];
                    $cont++;
                }
                $cordenadas["y"] = intval($y);
                $datos['p'][$numero] = $cordenadas;
                log::info("Punto $numero: ".$cordenadas["x"]." ".$cordenadas["y"]);
            }

            else if($data[$i][0]== "C" || $data[$i][0]== "c")
            {
                $cordenadas = array();
                $cont=2;
                $numero= '';
                while($data[$i][$cont]!= ";")
                {
                    $numero = $numero.$data[$i][$cont];
                    $cont++;
                }
                $numero = intval($numero);
                $cont++;
                $x= '';
                while($data[$i][$cont]!= ",")
                {
                    $x = $x.$data[$i][$cont];
                    $cont++;
                }
                $cordenadas["x"] = intval($x);
                $cont++;
                $y= '';
                while(strlen($data[$i])-1>$cont)
                {
                    $y = $y.$data[$i][$cont];
                    $cont++;
                    
                }
                $cordenadas["y"] = intval($y);
                $datos['c'][$numero] = $cordenadas;
                
                log::info("cordenadas de c: ".$cordenadas["x"]." ".$cordenadas["y"]);
            }
            else
            {
                log::error("FALLA EN EL INGRESO DE DATO N".$i+1);

            }
        }
        return $datos;
    }
    
    ?>