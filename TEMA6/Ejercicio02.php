<?php
session_start(); // Inicio de sesión

    if(isset($_SESSION['cuenta'])) {
            $_SESSION['cuenta']++;
    } else {
        $_SESSION['cuenta'] = 0;
    }
    
    if(isset($_SESSION['sumaImpares'])) {
      if($_POST['n']>=0){
        if($_POST['n']%2==0){

        }else{
            $_SESSION['sumaImpares']+= $_POST['n'];
        }
     }
    } else {
        $_SESSION['sumaImpares'] = 0;
    }

    if(isset($_SESSION['cuentaImpares'])) {
      if($_POST['n']>=0){
        if($_POST['n']%2==0){
      
        }else{
            $_SESSION['cuentaImpares']++;
        }
      }
    } else {
        $_SESSION['cuentaImpares'] = 0;
    }

    if(isset($_SESSION['parMayor'])) {
      if($_POST['n']>=0){
        if($_POST['n']%2==0){
            if($_SESSION['parMayor'] < $_POST['n']){
                $_SESSION['parMayor'] = $_POST['n']; 
            }
        }
      }
    } else {
        $_SESSION['parMayor'] = 0;
    }

    if($_POST['n'] < 0){
            $formulario = false;
       }else{
            $formulario = true;
       }
       

?>
<!DOCTYPE html>
<!--
Realiza un programa que vaya pidiendo números hasta que se introduzca un numero negativo y
nos diga cuantos números se han introducido, la media de los impares y el mayor de los pares. El
número negativo sólo se utiliza para indicar el final de la introducción de datos pero no se incluye
en el cómputo. Utiliza sesiones.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title>EJERCICIO 2</title>
        <link rel="stylesheet" type="text/css" href="style.css">
    </head>
    <body>
        <div>
            Realiza un programa que vaya pidiendo números hasta que se introduzca 
            un numero negativo y nos diga cuantos números se han introducido, 
            la media de los impares y el mayor de los pares.
            
            <br>
            
            El número negativo sólo se utiliza para indicar el final 
            de la introducción de datos pero no se incluye en el cómputo. 
            Utiliza sesiones.
            <br>
            <br>

        <?php
        if($formulario){
        ?>
        <p> Contador Impar <?php echo $_SESSION['cuentaImpares']; ?></p>
        <p> Suma Total Impar <?php echo $_SESSION['sumaImpares']; ?></p>
        <p> Par Mayor: <?php echo $_SESSION['parMayor']; ?></p>
        <br>
        <form action="Ejercicio02.php" method="post">
            <input type="number" name="n" autofocus>
            <input type="submit" value="Aceptar">
        </form>
        <?php
        }else{
        ?>

            <br>
            <br>
            <p> Media Impares: <?php echo ($_SESSION['sumaImpares']/$_SESSION['cuentaImpares']); ?></p>
            <p> Par Mayor: <?php echo $_SESSION['parMayor'] ?></p>
            <p> Total Numeros Introducidos: <?php echo ($_SESSION['cuenta']-1) ?></p>
            <br>
            <br>
            
         <?php
        }
        ?>


        </div>
    </body>
</html>