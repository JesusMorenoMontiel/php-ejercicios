<!DOCTYPE html>
<!--
Escribe un programa que diga si un número introducido por teclado es 
o no primo. Un número primo es aquel que sólo es divisible entre él mismo 
y la unidad.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title>EJERCICIO 16</title>
        <link rel="stylesheet" type="text/css" href="style.css">
    </head>
    <body>
        <div>
            <?php
       
                if (isset($_GET['numero'])){
                    $numero= $_GET['numero'];
                }else{ 
                
                $numero = null;
                
                }

                $comprobar1 = ($numero/$numero);
                $comprobar2 = ($numero/1);
                
                
            ?>
            
            <form action="Ejercicio16.php" method="get">
                    <h1>NUMERO PRIMO.</h1>
                    <h3>INTRODUCE EL NUMERO QUE DESEA SABER SI ES PRIMO.</h3>
                    <br>
                    <input type="number" name="numero">
                    <input type="submit" value="ENVIAR">
                </form>
            
            <?php
            if (isset($_GET['numero'])){
            if ($comprobar1 == $numero && $comprobar2 == $numero){
                echo 'ESTE NUMERO ES PRIMO';
                }else{
                    echo 'ESTE NUMERO NO ES PRIMO';
                }
            }
            ?>
            
        </div>
    </body>
</html>
