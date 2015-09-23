<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <link rel="stylesheet" type="text/css" href="style.css">
    </head>
    <body>
        <div>
            <h1>RESULTADO</h1>
        <p>
        <?php 
        $radio = $_GET['radio'];
        $altura = $_GET['altura'];
        $radioCuadrado = $radio * $radio;
        $volumen = (3.1415 * $radioCuadrado * $altura)/3;
        echo '<h2>Volumen = ', round($volumen,2), '</h2>';
        ?>
        </p>
        </div>
        
    </body>
</html>

