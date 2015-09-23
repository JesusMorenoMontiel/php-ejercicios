<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <link rel="stylesheet" type="text/css" href="style.css">
    </head>
    <body>
        <div>
        <?php 
        $numeroUno = $_GET['numeroUno'];
        $numeroDos = $_GET['numeroDos'];
        $multi = $numeroUno * $numeroDos;
        ?>
        Multiplicación: <?php echo $multi ?>
        </div>
    </body>
</html>

