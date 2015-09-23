<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <link rel="stylesheet" type="text/css" href="style.css">
    </head>
    <body>
        <div>
            <h1>RESULTADO - 21% IVA</h1>
        <p>
        <?php 
        $total = $_GET['total'];
        $iva = $total * 1.21;
        echo '<h1>', round($iva,2), '€ </h1>';
        ?>
        </p>
        </div>
        
    </body>
</html>

