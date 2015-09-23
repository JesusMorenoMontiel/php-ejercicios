<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <link rel="stylesheet" type="text/css" href="style.css">
    </head>
    <body>
        <div>
            <h1>RESULTADOS</h1>
        <p>
        <?php 
        $numeroUno = $_GET['numeroUno'];
        $numeroDos = $_GET['numeroDos'];
        $suma = $numeroUno + $numeroDos;
        $resta = $numeroUno - $numeroDos;
        $multi = $numeroUno * $numeroDos;
        $division = $numeroUno / $numeroDos;
        echo 'Suma: ',$numeroUno, '+', $numeroDos, ' = ', $suma, '<br>';
        echo 'Resta: ',$numeroUno, '-', $numeroDos, ' = ', $resta, '<br>';
        echo 'Multiplicación: ',$numeroUno, 'x', $numeroDos, ' = ', $multi, '<br>';
        echo 'División: ',$numeroUno, '/', $numeroDos, ' = ', round($division,2), '<br>';
        ?>
        </p>
        </div>
        
    </body>
</html>

