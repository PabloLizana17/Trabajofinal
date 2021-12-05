<!DOCTYPE html>
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
            <h3>Ingrese de nuevo sus datos</h3>
         </section>
        <p>  
            <br>En la siguiente aplicac&iacute;on desarrollaremos una un sistema el cual se encarga de optimizar la ruta
            de reparto de una empresa, esta se encarga de minimizando las distancias
            totales (km) recorridos por todos los camiones diariamente.<br>
            Se debe considerar que: <br><br>
            <ul>
                <li>Las coordenadas GPS se deberán usar, por facilidad, como coordenadas X,Y enteras.<br></li>
                <li>Las coordenadas GPS deben ser cargadas en un archivo de parámetros, según especificación indicada
                    más adelante. Similar debe ser con el archivo de demandas descrito más adelante.<br></li>
                <li>La cantidad de camiones es variable (básicamente el software debería calcular indirectamente la
                    cantidad de camiones). Asuma que existe una flota infinita de camiones (no hay límite de cantidad y
                    dependerá netamente del resultado de rutas)</li>
                <li>La capacidad máxima de productos por camión es 1000. Un camión no puede transportar
                    “fracciones” de productos, mientras que un punto de venta puede ser abastecido diariamente sólo
                    por un camión (es decir, los camiones no pueden hacer despachos “a medias). No obstante, un
                    camión puede abastecer varios puntos de venta (siempre cuando sean pedidos “completos”).</li>
            </ul>
        </p>
        <p>
            Recuerde leer bien la informacion de los cuadros de abajo, una vez terminado de leer recuerde subir ambos
            archivos para un correcto funcionamiento.
        </p>
        <form action="recepcion" method="post" enctype="multipart/form-data">
            <input type="hidden" name="_token" value="{{csrf_token ()}}">
            <p id=derecha>Archivo 1:</p>
            <input type="File" name="Archivo1">
            <br>
            <br>
            <p id="derecha">Archivo 2:</p>
            <input type="File" name="Archivo2">
            <br><br><br>
            <input type="submit" value="Subir archivos">
        </form>

    </div>
    <div class="cuerpo">
        <div class="izquierda">
            <div class="box">
                <div id="texto">
                    <p>En esta ventana es necesario subir el archivo (formato .txt) donde se especifican los puntos de
                        partida "P" o "C", siendo "P" un
                        punto de venta t "C" un centro de distribuc&iacute;on, luego de eso se debe acompa&ntilde;ar con
                        un valor n&uacute;merico N (identificador n&uacute;merico), separado por un punto y coma (;),
                        luego a&ntilde;adimos otro punto y coma (;), terminando con las cordenadas en X,Y.
                        <br><br>Quedando de la siguiente manera P o C;N;X,Y. Abajo hay un ejemplo en detalle:</p>
                </div>
                <div id="foto">
                    <img src="img/Screenshot_11.png" alt="Ingreso de datos">
                </div>

            </div>
        </div>
        <div id="centro"></div>
        <div class="derecha">
            <div class="box">
                <div>
                    <p>En esta ventana es necesario subir el archivo (formato .txt) donde se especifica, el centro de
                        distribucion de partida (Por su n&uacute;mero identificador), luego se coloca un punto y coma
                        (;) como separador,
                        se coloca el punto de venta (con su n&uacute;mero identificador), se vuelve a separar por un
                        punto y coma (;), finalizando con la cantidad de productos a repartir.<br><br>
                        Quedando de la siguiente manera: C;P;N. Abajo se muestra un ejemplo extendido.
                    </p>
                </div>
                <div>
                    <img src="img/Screenshot_2.png" alt="Ingreso de datos">
                </div>

            </div>
        </div>
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
