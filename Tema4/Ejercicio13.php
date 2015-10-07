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
        <title>EJERCICIO 13</title>
        <link rel="stylesheet" type="text/css" href="style.css">
    </head>
    <body>
        <div>
            <?php
       
                if (isset($_GET['numero'])){
                    $numero= $_GET['numero'];
                }

                $contador = 11;
                if (isset($_GET['contador'])){
                    $contador= $_GET['contador'];
                }

                if (isset($_GET['numeroPositivo'])){
                    $numeroPositivo= $_GET['numeroPositivo'];
                }
                
                if ($contador >1){
                    if ($numero >= 0) {
                      $numeroPositivo++;
                      $contador--;  
                    } else{
                      $contador--;
                    }
            ?>
                <form action="Ejercicio13.php" method="get">
                    <h1>Introduzca hazta dies números.</h1>
                    <h3>Se contará cuantos positivos y negativos se han introducido.</h3>
                    <?php echo $contador; ?>
                    <input type="number" name="numero">
                    <input type="hidden" name="contador" value="<?php echo $contador; ?>">
                    <input type="hidden" name="numeroPositivo" value="<?php echo $numeroPositivo; ?>">
                    <input type="submit" value="ENVIAR">
                </form>

            <?php
            
                } else {
                    echo "Has intriducido."; 
                    echo "<br>", 10-$numeroPositivo, " Numeros Negativos";
                    echo "<br>", $numeroPositivo, " Numeros Positivos";
                
                }
                
            ?>
        </div>
    </body>
</html>

