<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <link rel="stylesheet" type="text/css" href="style.css">
    </head>
    <body>
        <div>
            <h1>RESULTADO Kb --> Mb</h1>
        <p>
        <?php 
        $kb = $_GET['kb'];
        $resultado = $kb / 1024;
        echo '<h2>Mb = ', round($resultado,2), '</h2>';
        ?>
        </p>
        </div>
        
    </body>
</html>

