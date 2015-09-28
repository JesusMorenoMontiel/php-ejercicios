<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <link rel="stylesheet" type="text/css" href="style.css">
    </head>
    <body>
        
        <div>
            <img id="saludo" SRC="images/saludo.png">
            <?php 
                $hora = $_GET['hora'];
                
                
                if ($hora >= 13 && $hora <=20) {
                    echo "<h1>BUENAS TARDES!</h1>";
                } else { if ($hora >= 6 && $hora <= 12) {
                    echo "<h1>BUENOS DÍAS!</h1>";
                  } else{
                      echo '<h1>BUENAS NOCHES!</h1>';
                  }
                }
            ?>
            
        </div>
    </body>
</html>
