<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <link rel="stylesheet" type="text/css" href="style.css">
    </head>
    <body>
        
        <div>
        
            <?php 
                $a = $_GET['a'];
                $b = $_GET['b'];
                $c = $_GET['c'];
                //Saco el cuadrado de b.
                $bcuadrado = ($b * $b);
                //saco el resultado de (b)^2 - 4(a)(c).
                $comprobar = $bcuadrado - ((4)* ($a * $c));
                //saco la raiz cuadrada de comprobar.
                $raizCuadrada = sqrt($comprobar);
                //saco las dos soluciones.s
                $solucionA = ((-($b)+$raizCuadrada)/(2 * $a));
                $solucionB = ((-($b)-$raizCuadrada)/(2 * $a));
                
                if ($comprobar < 0) {
                    //compruebo que el interior de la raiz cuadrada es 0, 
                    //si es así no se puede hacer la ecuación.
                    echo "<img id='saludo' SRC='images/NoSolucion.png'>";
                    echo "<h1>NO TIENE SOLUCIÓN!</h1>";
                    
                    //Compruebo si la solución de la raiz cuadrada es 0,
                    //si es así, solo tiene una solicíon.
                } else { if ($comprobar == 0) {
                    echo "<img id='saludo' SRC='images/SiSolucion.png'>";
                    echo "<h1>TIENE UNA SOLUCIÓN!</h1>";
                    echo "Solución = ", $solucionA;
                  }else{
                      //al no ser negativo ni 0, la ecuación tiene dos soluciones.
                     echo "<img id='saludo' SRC='images/SiSolucion.png'>";
                     echo "<h1>TIENE DOS SOLUCIONES!</h1>";
                     echo "Solución A = ", $solucionA, "<br>";
                     echo "Solución B = ", $solucionB, "<br>";
                   
                  }
                }
                
            ?>
            
            
        </div>
    </body>
</html>

