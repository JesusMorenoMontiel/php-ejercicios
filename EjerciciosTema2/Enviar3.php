<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <link rel="stylesheet" type="text/css" href="style.css">
    </head>
    <body>
        <div>
        <h1>Conversor Pst - Euros</h1>
        <?php 
        $numeroUno = $_GET['pst'];
        $euros = $numeroUno / 166.386;
        ?>
        <?php echo $numeroUno ?> Pst, son <?php echo round($euros,2) ?> Euros.
        </div>
    </body>
</html>

