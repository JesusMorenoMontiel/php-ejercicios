<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <link rel="stylesheet" type="text/css" href="style.css">
    </head>
    <body>
        
        <div>
        
            <?php 
                $primera= $_GET['primera'];
                $segunda = $_GET['segunda'];
                $tercera = $_GET['tercera'];
                $nota = 0;
                
                if($primera == 2){
                    $nota++;
                }else{
                    echo "<h3>Primera pregunta incorrecta, Solución: Luis José</h3>";
                    
                }
                if($segunda == 1){
                    $nota++;
                }else{
                    echo "<h3>Segunda pregunta incorrecta, Solución: PHP</h3>";
                    
                }
                
                if($tercera == 3){
                    $nota++;
                }else{
                    echo "<h3>Tercera pregunta incorrecta, Solución: Linux</h3>";
                    
                }
                
                if($nota >= 2){
                   echo "<br> <h1>Ehnorabuena! has aprobado con un ", $nota, " de 3 puntos.</h1>";
                   echo "<img id='saludo' SRC='images/SiSolucion.png'>";
                }else{
                   echo "<br> <h1>Ooh quue pena! has suspendido con un ", $nota, "de 3 puntos.</h1>"; 
                   echo "<img id='saludo' SRC='images/NoSolucion.png'>";
                }
            ?>
            
            
        </div>
    </body>
</html>

