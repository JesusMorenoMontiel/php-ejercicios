<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <link rel="stylesheet" type="text/css" href="style.css">
    </head>
    <body>
        <div>
            <h1>RESULTADO Mb --> Kb</h1>
        <p>
        <?php 
        $mb = $_GET['mb'];
        $resultado = $mb * 1024;
        echo '<h2>Kb = ', round($resultado,2), '</h2>';
        ?>
        </p>
        </div>
        
    </body>
</html>

