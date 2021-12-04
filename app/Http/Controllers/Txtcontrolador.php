<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Foundation\Inspiring;
use Illuminate\Support\Facades\Artisan;
use Illuminate\Support\Facades\Log;
class Txtcontrolador extends Controller
{
    public function mform(){
        Log::info("Inicio de sesion");
        return view('index');
    }

    public function mguardar(Request $request){
        Log::info("Obtencion de archivos");
        
        if($request->hasFile("Archivo1"))
        {
            Log::info("Archivo 1 ingresado correctamente");
            $a= $request->file("Archivo1");
            $nombre = "coordenadas.txt";
            $ruta = public_path($nombre);
            print_r($a);
            var_dump($a->guessExtension());
            if($a->guessExtension()=="txt")
            {
                Log::info("Su archivo es un documento de texto");
                if(copy($a,$ruta))
                    Log::info("Documento de texto guardado correctamente");
                else
                    Log::info("Error al guardar documento");
            }
            else
            {
                Log::info("Su archivo no es documento de texto, vuelva a intentarlo");
            }
        }
        else
        {
            Log::info("Archivo 1 no ingresado");
        }
        if($request->hasFile("Archivo2"))
        {
            Log::info("Archivo 2 ingresado correctamente");
            $b=$request->file("Archivo2");
            $nombre = "demandas.txt";
            $ruta = public_path($nombre);
            if($b->guessExtension()=="txt")
            {
                Log::info("Su archivo es un documento de texto");
                if(copy($b,$ruta))
                    Log::info("Documento de texto guardado correctamente");
                else
                    Log::info("Error al guardar documento");
            }
            else
            {
                Log::info("Su archivo no es documento de texto, vuelva a intentarlo");
            }
        }
        else
        {
            Log::info("Archivo 2 no ingresado");
        }
        
    }
}
