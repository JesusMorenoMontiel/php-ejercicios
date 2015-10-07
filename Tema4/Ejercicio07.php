<!DOCTYPE html>
<!--
Realiza el control de acceso a una caja fuerte. La combinación será un número
de 4 cifras. El programa nos pedirá la combinación para abrirla. Si no
acertamos, se nos mostrará el mensaje “Lo siento, esa no es la combinación” 
y si acertamos se nos dirá “La caja fuerte se ha abierto satisfactoriamente”.
Tendremos cuatro oportunidades para abrir la caja fuerte.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title>EJERCICIO 7</title>
        <link rel="stylesheet" type="text/css" href="style.css">
    </head>
    <body>
        <div>
            <?php
                $combinacion= 0000;
            
              if (!isset($_POST['contador'])) {
                $numeroIntroducido = 999999;
                $contador = 4;
              } else {
                $contador = $_POST['contador'];
                $numeroIntroducido = $_POST['numeroIntroducido'];
              }

              if ($numeroIntroducido == $combinacion) {
                echo "<h1>La caja fuerte se ha abierto.</h1>";
              } else if ($contador == 0) {
                echo "<h1>La caja fuerte se bloqueará.</h1>";
                echo "Lo siento, has agotado todas tus oportunidades.";
              } else {
                echo "Te quedan ", $contador, " oportunidades para abrir la caja fuerte.<br>";
                $contador--;
                echo "<h1>introduce un número de cuatro digitos.</h1>";
                echo '<form action="Ejercicio07.php" method="post">';
                echo '<input type="hidden" name="contador" value="', $contador, '">';
                echo '<input type="number" min=0 max=9999 name="numeroIntroducido">';
                echo '<input type="submit" value="Continuar">';
                echo '</form>';
              }
            ?>
        </div>
    </body>
</html>
