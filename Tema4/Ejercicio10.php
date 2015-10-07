<!DOCTYPE html>
<!--
Escribe un programa que calcule la media de un conjunto de números positivos 
introducidos por teclado. A priori, el programa no sabe cuántos números se 
introducirán. El usuario indicará que ha terminado de introducir los datos 
cuando meta un número negativo
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title>EJERCICIO 10</title>
        <link rel="stylesheet" type="text/css" href="style.css">
    </head>
    <body>
        <div>
            <?php
       
                if (isset($_GET['numero'])){
                    $numero= $_GET['numero'];
                }

                $contador = 0;
                if (isset($_GET['contador'])){
                    $contador= $_GET['contador'];
                }
                $total = 0;       
                if (isset($_GET['total'])){
                    $total= $_GET['total'];
                }
                
                if ($numero >= 0){
                   
                      $total += $numero;
                      $contador++;  
            ?>
                <form action="Ejercicio10.php" method="get">
                    <h1>Introduzca todos los numeros positivos deseados.</h1>
                    <h3>Se hará la media de dichos números, introduce uno negativo para finalizar.</h3>
                    <br>total: <?php echo $total; ?>
                    <br>contador: <?php echo $contador; ?>
                    <br>
                    <input type="number" name="numero">
                    <input type="hidden" name="total" value="<?php echo $total; ?>">
                    <input type="hidden" name="contador" value="<?php echo $contador; ?>">
                    <input type="submit" value="ENVIAR">
                </form>

            <?php
            
                } else {
                    echo "SOLUCION"; 
                    echo "<h3> La media de los números introducidos es: ", $total / ($contador - 1), ".</h3>";
                    echo "<h3> Has introducido: ",($contador - 1), " numeros. </h3>";
                
                }
                
            ?>
        </div>
    </body>
</html>
