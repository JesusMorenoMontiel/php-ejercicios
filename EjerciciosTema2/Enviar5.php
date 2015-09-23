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
        $base = $_GET['base'];
        $altura = $_GET['altura'];
        $area = ($base * $altura);
        echo 'Resultado: ', round($area,2), ' Metros Cuadrados. <br>';
        ?>
        </p>
        </div>
        
    </body>
</html>

