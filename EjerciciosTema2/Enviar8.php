<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <link rel="stylesheet" type="text/css" href="style.css">
    </head>
    <body>
        <div>
            <h1>RESULTADO - 12€ LA HORA</h1>
        <p>
        <?php 
        $horas = $_GET['horas'];
        $toal = $horas * 12;
        echo '<h2>', round($toal,2), '€</h2>';
        ?>
        </p>
        </div>
        
    </body>
</html>

