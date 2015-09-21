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
        $palabra1 = "Plátano";
        $palabra2 = "Banana";
        $palabra3 = "Mesa";
        $palabra4 = "Table";
        $palabra5 = "Pelota";
        $palabra6 = "Ball";
        $palabra7 = "Luz";
        $palabra8 = "Light";
        $palabra9 = "Azul";
        $palabra10 = "Blue";        
        $palabra11 = "Radio";
        $palabra12 = "Radio";
        $palabra13 = "Rojo";
        $palabra14 = "Red";
        $palabra15 = "Vaqueros";
        $palabra16 = "Jeans";
        $palabra17 = "Luna";
        $palabra18 = "Moon";
        $palabra19 = "Sool";
        $palabra20 = "Sun";
        ?>
        <div>
            <table>
                <tr>
                    <th>Español</th> <th>Inglés</th>
                </tr>
                <tr>
                    <td><?= $palabra1 ?></td> <td><?php echo $palabra2; ?></td>
                </tr>
                <tr>
                    <td><?php echo $palabra3; ?></td> <td><?php echo $palabra4; ?></td>
                </tr>
                <tr>
                    <td><?php echo $palabra5; ?></td> <td><?php echo $palabra6; ?></td>
                </tr>
                <tr>
                    <td><?php echo $palabra7; ?></td> <td><?php echo $palabra8; ?></td>
                </tr>
                <tr>
                    <td><?php echo $palabra9; ?></td> <td><?php echo $palabra10; ?></td>
                </tr>
                <tr>
                    <td><?php echo $palabra11; ?></td> <td><?php echo $palabra12; ?></td>
                </tr>
                <tr>
                    <td><?php echo $palabra13; ?></td> <td><?php echo $palabra14; ?></td>
                </tr>
                <tr>
                    <td><?php echo $palabra15; ?></td> <td><?php echo $palabra16; ?></td>
                </tr>
                <tr>
                    <td><?php echo $palabra17; ?></td> <td><?php echo $palabra18; ?></td>
                </tr>
                <tr>
                    <td><?php echo $palabra19; ?></td> <td><?php echo $palabra20; ?></td>
                </tr>
                
            </table> 
        </div>
        
        
       
    </body>
</html>
