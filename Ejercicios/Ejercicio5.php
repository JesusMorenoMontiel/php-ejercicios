<html>
<!--
Escribe un programa que utilice las variables $x y $y . Asignales los 
valores 144 y 999 respectivamente. A continuación, muestra por pantalla
el valor de cada variable, la suma, la resta, la división
y la multiplicación.
-->
    <head>
        <meta charset="UTF-8">
        <link rel="stylesheet" type="text/css" href="style.css">
    </head>
    <body>
        <?php
        $x = 144;
        $y = 999;
        ?>
        <div>
            <table>
                <tr>
                    <td>SUMA</td> <td><?php echo $x + $y; ?></td>
                </tr>
                <tr>
                    <td>RESTA</td> <td><?php echo $x - $y; ?></td>
                </tr>
                <tr>
                    <td>DIVISION</td> <td><?php echo $x / $y; ?></td>
                </tr>
                <tr>
                    <td>MULTIPLICACIÓN</td> <td><?php echo $x * $y; ?></td>
                </tr>
                
            </table> 
        </div>
        
        
       
    </body>
</html>


