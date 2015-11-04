<?php
session_start(); // Inicio de sesión

if(isset($_SESSION['total'])) {
    if($_POST['n']>=0){
        $_SESSION['total']+= $_POST['n'];
    }
} else {
$_SESSION['total'] = 0;
}

if(isset($_SESSION['cuenta'])) {
$_SESSION['cuenta']++;
} else {
$_SESSION['cuenta'] = 0;
}

$numero = $_POST['n'];

if($numero < 0){
        $formulario = false;
   }else{
        $formulario = true;
   }

?>
<!DOCTYPE html>
<!--
Escribe un programa que calcule la media de un conjunto de números positivos introducidos por
teclado. A priori, el programa no sabe cuántos números se introducirán. El usuario indicará que ha
terminado de introducir los datos cuando meta un número negativo. Utiliza sesiones.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title>EJERCICIO 1</title>
        <link rel="stylesheet" type="text/css" href="style.css">
    </head>
    <body>
        <div>
            Este programa calcula la media de los números positivos introducidos.<br>
        Vaya introduciendo números (puede parar introduciendo un número negativo).<br>

        <?php
        if($formulario){
        ?>
        <p> Total:  <?php echo $_SESSION['total']; ?></p>
        <p> Numeros Introducidos: <?php echo $_SESSION['cuenta']; ?></p>
        
        <form action="Ejercicio01.php" method="post">
            <input type="number" name="n" autofocus>
            <input type="submit" value="Aceptar">
        </form>
        <?php
        }else{
        ?>

            <br><br>La media de los números introducidos es <?php echo $_SESSION['total'] / ($_SESSION['cuenta']-1); ?>
            <br>
            <br>
            
         <?php
        }
        ?>


        </div>
    </body>
</html>