<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <link rel="stylesheet" type="text/css" href="style.css">
    </head>
    <body>
        
        <div id="contenedor">
        
            <?php 
                $mes= $_GET['mes'];
                $dia = $_GET['dia'];
                $horoscopo = "hola";
               
                switch($mes) {
                    case "1":
                        if ($dia < 21) {
                            $horoscopo = "<h1>Tu Horospoco es Capricornio.</h1>"
                                    . "<img id='saludo' SRC='images/capricornio.png'>";
                         }
                         else {
                            $horoscopo = "<h1>Tu Horoscopo es Acuario.</h1>"
                                    . "<img id='saludo' SRC='images/acuario.png'>";
                         }
                    break;
                
                    case "2":
                        if ($dia < 22) {
                            $horoscopo = "<h1>Tu Horospoco es Acuario.</h1>"
                                    . "<img id='saludo' SRC='images/acuario.png'>";
                         }
                         else {
                            $horoscopo = "<h1>Tu Horoscopo es Piscis.</h1>"
                                    . "<img id='saludo' SRC='images/piscis.png'>";
                         }
                    break;
                    case "3":
                        if ($dia < 21) {
                            $horoscopo = "<h1>Tu Horospoco es Piscis.</h1>"
                                    . "<img id='saludo' SRC='images/piscis.png'>";
                         }
                         else {
                            $horoscopo = "<h1>Tu Horoscopo es Aries.</h1>"
                                    . "<img id='saludo' SRC='images/aries.png'>";
                         }
                    break;
                    case "4":
                        if ($dia < 21) {
                            $horoscopo = "<h1>Tu Horospoco es Aries.</h1>"
                                    . "<img id='saludo' SRC='images/aries.png'>";
                         }
                         else {
                            $horoscopo = "<h1>Tu Horoscopo es Tauro.</h1>"
                                    . "<img id='saludo' SRC='images/tauro.png'>";
                         }
                    break;
                    case "5":
                        if ($dia < 20) {
                            $horoscopo = "<h1>Tu Horospoco es Tauro.</h1>"
                                    . "<img id='saludo' SRC='images/tauro.png'>";
                         }
                         else {
                            $horoscopo = "<h1>Tu Horoscopo es Géminis.</h1>"
                                    . "<img id='saludo' SRC='images/geminis.png'>";
                         }
                    break;
                    case "6":
                        if ($dia < 22) {
                            $horoscopo = "<h1>Tu Horospoco es Géminis.</h1>"
                                    . "<img id='saludo' SRC='images/geminis.png'>";
                         }
                         else {
                            $horoscopo = "<h1>Tu Horoscopo es Cáncer.</h1>"
                                    . "<img id='saludo' SRC='images/cancer.png'>";
                         }
                    break;
                    case "7":
                        if ($dia < 22) {
                            $horoscopo = "<h1>Tu Horospoco es Cáncer.</h1>"
                                    . "<img id='saludo' SRC='images/cancer.png'>";
                         }
                         else {
                            $horoscopo = "<h1>Tu Horoscopo es Leo.</h1>"
                                    . "<img id='saludo' SRC='images/leo.png'>";
                         }
                    break;
                    case "8":
                        if ($dia < 24) {
                            $horoscopo = "<h1>Tu Horospoco es Leo.</h1>"
                                    . "<img id='saludo' SRC='images/leo.png'>";
                         }
                         else {
                            $horoscopo = "<h1>Tu Horoscopo es Virgo.</h1>"
                                    . "<img id='saludo' SRC='images/virgo.png'>";
                         }
                    break;
                    case "9":
                        if ($dia < 23) {
                            $horoscopo = "<h1>Tu Horospoco es Virgo.</h1>"
                                    . "<img id='saludo' SRC='images/virgo.png'>";
                         }
                         else {
                            $horoscopo = "<h1>Tu Horoscopo es Libra.</h1>"
                                    . "<img id='saludo' SRC='images/libra.png'>";
                         }
                    break;
                    case "10":
                        if ($dia < 23) {
                            $horoscopo = "<h1>Tu Horospoco es Libra.</h1>"
                                    . "<img id='saludo' SRC='images/libra.png'>";
                         }
                         else {
                            $horoscopo = "<h1>Tu Horoscopo es Escorpio.</h1>"
                                    . "<img id='saludo' SRC='images/escorpio.png'>";
                         }
                    break;
                    case "11":
                        if ($dia < 23) {
                            $horoscopo = "<h1>Tu Horospoco es Escorpio.</h1>"
                                    . "<img id='saludo' SRC='images/escorpio.png'>";
                         }
                         else {
                            $horoscopo = "<h1>Tu Horoscopo es Sagitario.</h1>"
                                    . "<img id='saludo' SRC='images/sagitario.png'>";
                         }
                    break;
                    case "12":
                        if ($dia < 21) {
                            $horoscopo = "<h1>Tu Horospoco es Sagitario.</h1>"
                                    . "<img id='saludo' SRC='images/sagitario.png'>";
                         }
                         else {
                            $horoscopo = "<h1>Tu Horoscopo es Capricornio.</h1>"
                                    . "<img id='saludo' SRC='images/capricornio.png'>";
                         }
                    break;                    
                        
                }
                echo $horoscopo;
                
            ?>
            
            
        </div>
    </body>
</html>

