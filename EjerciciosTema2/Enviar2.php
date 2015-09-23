<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <link rel="stylesheet" type="text/css" href="style.css">
    </head>
    <body>
        <div>
            <h1>Conversor Euros - Pst</h1>
        <?php 
        $numeroUno = $_GET['euros'];
        $pesetas = $numeroUno * 166.386;
        ?>
        <?php echo $numeroUno ?> Euros, son <?php echo $pesetas ?> Pst.
        </div>
    </body>
</html>

