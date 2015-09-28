<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <link rel="stylesheet" type="text/css" href="style.css">
    </head>
    <body>
        
        <div>
        
            <?php 
                $a= $_GET['a'];
                $b = $_GET['b'];
                $c = $_GET['c'];
                $aux = 0;
                
                // ordenar los dos primeros números
                if ($a > $ab) {
                    $aux = $a;
                    $a = $b;
                    $b = $aux;
                }
                
                // ordenar los dos últimos números
                if ($b > $c) {
                  $aux = $b;
                  $b = $c;
                  $c = $aux;
                }
                
                // volver a ordenar los dos primeros números
                if ($a > $b) {
                    $aux = $a;
                    $a = $b;
                    $b = $aux;
                }
                
                echo '<h2>Los números ordenados de mayor a menor son los siguientes: ';
                echo $a," , ", $b," , ", $c,"</h2>";
            ?>
            
            
        </div>
    </body>
</html>

