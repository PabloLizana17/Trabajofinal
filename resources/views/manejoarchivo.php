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