<!DOCTYPE html>
<?php
  require("Camiones.php");
?>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Trabajo Integral</title>
    <link rel="stylesheet" href="css/style.css">
    <link rel="shortcut icon" href="img/icono.png">
</head>

<body>
    <header>
        <section class="textos-header">

            <h1>Grafos y Lenguajes Formales</h1>

        </section>

    </header>
    <div class="menu">
        <ul>
            <li><a href="https://github.com/PabloLizana17/TrabajoGyL">Trabajo 1</a></li>
            <li><a href="https://github.com/PabloLizana17/GyL2">Trabajo 2</a></li>
            <li><a href="https://github.com/PabloLizana17/Trabajo3">Trabajo 3</a></li>

        </ul>
    </div>
    <div class="descripcion">

        <section class="textos-descripcion">
            <h2>Trabajo Integral</h2>

            <h3> Resultados: </h3>

        </section>
        <section >
            <p>
                <ul>
                    <?php 
                    
                        $data = distribucion('coordenadas.txt');
                        $demanda = demandas('demandas.txt');
                        $distancia = distancia($data['p'][1],$data['c'][1]);
                        $demanda = ordenar($demanda,$data);
                        $ordenar = separar($demanda,$data);
                        $caminos = resultados($ordenar,$data);

                        for($i=0; $i<sizeof($caminos);$i++)
                        {
                            $a=$i+1;
                            printf("<br>");
                            echo "<center><font face='fira code' size='5'>Camion: $a</font><center>";               
                            $b= $caminos[$i];
                            echo "<font face='fira code' size='5'>Camino: $b[escrito]</font>";
                            printf("<br>");
                            $c= $caminos[$i];
                            echo "<font face='fira code' size='5'>Camino: $c[distancia]</font>";
                            printf("<br>");
                            $d= $caminos[$i];
                            echo "<font face='fira code' size='5'>Camino: $d[cantidad]</font>";
                            printf("<br>");
                            printf("<br>");
                        }
                    ?>  
                </ul>
            </p>
        </section>
    </div>
    <footer>

        <div class="contacto-footer">Contacto</div>

        <div class="contenedor-footer">
            <div class="content-foo">
                <h4>Instragram</h4>
                <p><a href="https://www.instagram.com/losted_primaveral/?hl=es">Henry Huanquilen</a></p>
            </div>
            <div class="content-foo">
                <h4>Instagram</h4>
                <p><a href="https://www.instagram.com/p.pl.01/?hl=es">Pablo Lizana</a></p>
            </div>

            <div class="content-foo">
                <h4>Instragram</h4>
                <p><a href="https://www.instagram.com/hectorheck1/?hl=es">Hector Saldivia</a></p>
            </div>
            <div class="content-foo">
                <h4>Instagram</h4>
                <p><a href="https://www.instagram.com/lil_cmarxnin/?hl=es">Vicente Velasquez</a></p>
            </div>
        </div>
        <h2 class="titulo-final">&copy; | Gatitos Infernales |</h2>
    </footer>

    <body>


</html>
