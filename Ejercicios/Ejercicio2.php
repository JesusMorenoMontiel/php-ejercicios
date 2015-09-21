<html>
<!--
Modifica el programa anterior para que muestre tu dirección y tu número de teléfono. Cada dato
se debe mostrar en una línea diferente. Mezcla de alguna forma las salidas por pantalla, utilizando
tanto HTML como PHP.
-->
    <head>
        <meta charset="UTF-8">
        <link rel="stylesheet" type="text/css" href="style.css">
    </head>
    <body>
        <div>
        Nombre y apellidos: 
        <?php
        $nombre = "Jesus";
        $apellidos = "Moreno Montiel";
        $direccion = "C/Los Chacones";
        $tlf = 671761350;
        echo $nombre,' ', $apellidos;
        ?>
        <br>Dirección: 
        <?php
        echo $direccion;
        ?>
        <br>Teléfono: 
        <?php
        echo $tlf;
        ?>
        </div>
        
        
       
    </body>
</html>

