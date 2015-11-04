<?php
session_start(); // Inicio de sesión
    
    $formulario = true;

    if(isset($_SESSION['cuenta'])) {
            $_SESSION['cuenta']++;
    } else {
        $_SESSION['cuenta'] = 0;
    }
    
    if(isset($_SESSION['sumaTotal'])) {
      if($_POST['n']>=0){
        if($_SESSION['sumaTotal']+$_POST['n'] <= 10000){
            $_SESSION['sumaTotal']+= $_POST['n'];
        }else{
            $formulario = false;
        }
      }
    } else {
        $_SESSION['sumaTotal'] = 0;
    }
       

?>
<!DOCTYPE html>
<!--
Escribe un programa que permita ir introduciendo una serie indeterminada de 
números mientras su suma no supere el valor 10000. Cuando esto último ocurra, 
se debe mostrar el total acumulado, el contador de los números introducidos 
y la media. Utiliza sesiones.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title>EJERCICIO 3</title>
        <link rel="stylesheet" type="text/css" href="style.css">
    </head>
    <body>
        <div>
            <h3>LOGUEADO COMO: <?php echo $_SESSION['usuario']; ?></h3>
            Escribe un programa que permita ir introduciendo una serie 
            indeterminada de números mientras su suma no supere el valor 10000.
            
            <br>
            
            Cuando esto último ocurra, se debe mostrar el total acumulado, 
            el contador de los números introducidos y la media. 
            Utiliza sesiones.
            <br>
            <br>

        <?php
        if($formulario){
        ?>
        <p> suma Total <?php echo $_SESSION['sumaTotal']; ?></p>
        <p> cuenta <?php echo $_SESSION['cuenta']; ?></p>
        <br>
        <form action="Ejercicio03.php" method="post">
            <input type="number" name="n" autofocus>
            <input type="submit" value="Aceptar">
        </form>
        <?php
        }else{
        ?>

            <br>
            <br>
            <p> Suma Total: <?php echo $_SESSION['sumaTotal']; ?></p>
            <p> numero Introducidos: <?php echo $_SESSION['cuenta'] - 1 ?></p>
            <p> Media Numeros Introducidos: <?php echo ($_SESSION['sumaTotal']/($_SESSION['cuenta'] - 1)) ?></p>
            <br>
            <br>
            
         <?php
        }
        ?>


        </div>
    </body>
</html>