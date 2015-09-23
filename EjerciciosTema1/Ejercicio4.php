<html>
<!--
Escribe un programa que muestre por pantalla 10 palabras en inglés junto a su 
correspondiente traducción al castellano. Las palabras deben estar 
distribuidas en dos columnas. Utiliza la etiqueta
<table> de HTML.
-->
    <head>
        <meta charset="UTF-8">
        <link rel="stylesheet" type="text/css" href="style.css">
    </head>
    <body>
        <?php
        $DAWEC = "DAWEC";
        $DAWES = "DAWES";
        $DIW = "DIW";
        $EMPRESA = "EINEM";
        $DAW = "DAW";
        $HLC = "HLC";
        ?>
        <div>
            <table>
                <tr>
                    <th>LUNES</th> <th>MARTES</th><th>MIÉRCOLES</th><th>JUEVES</th><th>VIERNES</th>
                </tr>
                <tr>
                    <td><?php echo $DAWES; ?></td> <td><?php echo $DAWEC; ?></td> <td><?php echo $DAWES; ?></td> <td><?php echo $DAWEC; ?></td> <td><?php echo $DIW; ?></td>
                </tr>
                <tr>
                    <td><?php echo $DAWES; ?></td> <td><?php echo $DAWEC; ?></td> <td><?php echo $DAWES; ?></td> <td><?php echo $DAWEC; ?></td> <td><?php echo $DIW; ?></td>
                </tr>
                <tr>
                    <td><?php echo $DAWES; ?></td> <td><?php echo $DAWEC; ?></td> <td><?php echo $DAWES; ?></td> <td><?php echo $DAWEC; ?></td> <td><?php echo $DIW; ?></td>
                </tr>
                <tr>
                    <td>RECREO</td><td>RECREO</td><td>RECREO</td><td>RECREO</td><td>RECREO</td>
                </tr>
                <tr>
                    <td><?php echo $EMPRESA; ?></td> <td><?php echo $DAW; ?></td> <td><?php echo $HLC; ?></td> <td><?php echo $EMPRESA; ?></td> <td><?php echo $DIW; ?></td>
                </tr>
                <tr>
                    <td><?php echo $DIW; ?></td> <td><?php echo $DAW; ?></td> <td><?php echo $HLC; ?></td> <td><?php echo $EMPRESA; ?></td> <td><?php echo $DAWEC; ?></td>
                </tr>
                <tr>
                    <td><?php echo $DIW; ?></td> <td><?php echo $DAW; ?></td> <td><?php echo $HLC; ?></td> <td><?php echo $EMPRESA; ?></td> <td><?php echo $DAWEC; ?></td>
                </tr>
      
                
            </table> 
        </div>
        
        
       
    </body>
</html>