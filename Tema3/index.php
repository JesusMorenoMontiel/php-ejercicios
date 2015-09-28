<!DOCTYPE html>
<!--
Realiza un programa que pida una hora por teclado y que muestre luego 
buenos días, buenas tardes o buenas noches según la hora. Se utilizarán 
los tramos de 6 a 12, de 13 a 20 y de 21 a 5. respectivamente. Sólo se tienen
en cuenta las horas, los minutos no se deben introducir por teclado.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <link rel="stylesheet" type="text/css" href="style.css">
    </head>
    <body>
        <div>
            <h1>Act 2 -INTRODUCE HORA ACTUAL-</h1>
            <h3>no son necesario los minutos</h3>
            <form action="Enviar2.php" method="get">
                Hora:<input type="number" name="hora" min="00" max="24"><br>
            <input type="submit" value="ENVIAR">
            </form>
        </div>
        
        <div>
            <h1>Act 9 -ECUACIÓN DE SEGUNDO GRADO-</h1>
            <h3>Introduzca el valor de los 3 coeficientes</h3>
            <form action="Enviar9.php" method="get">
                A:<input type="number" name="a" step="0.01"><br>
                B:<input type="number" name="b" step="0.01"><br>
                C:<input type="number" name="c" step="0.01"><br>
            <input type="submit" value="ENVIAR">
            </form>
        </div>
        
        <div>
            <h1>Act 10 -HOROSCOPOS-</h1>
            <h3>Introduzca el Día y Mes de naciomiento</h3>
            <form action="Enviar10.php" method="get">
                MES: <select name="mes">
                        <option value="1">ENERO</option> 
                        <option value="2">FEBRERO</option> 
                        <option value="3">MARZO</option>
                        <option value="4">ABRIL</option> 
                        <option value="5">MAYO</option> 
                        <option value="6">JUNIO</option>
                        <option value="7">JULIO</option>
                        <option value="8">AGOSTO</option>
                        <option value="9">SEPTIEMBRE</option>
                        <option value="10">OCTUBRE</option>
                        <option value="11">NOVIEMBRE</option>
                        <option value="12">DICIEMBRE</option> 
                    </select>
                DÍA: <input type="number" name="dia" min="1" max="31"><br>
            <input type="submit" value="ENVIAR">
            </form>
        </div>
        
        <div>
            <h1>Act 12 -CUESTIONARIO-</h1>
            <h3>Breve cuestionario</h3>
            <form action="Enviar12.php" method="get">
                ¿Cómo se llama nuestro tutor? 
                <select name="primera">
                        <option value="1">Sergio Banderas</option> 
                        <option value="2">Luis José</option>
                        <option value="3">Eva María</option>
                </select>
                <br>
                
                ¿Qué lenguaje estudiamos con el?? 
                <select name="segunda">
                        <option value="1">PHP</option> 
                        <option value="2">CSS</option>
                        <option value="3">RUBY</option>
                </select>
                <br>
                
                ¿Qué sistema operativo usamos? 
                <select name="tercera">
                        <option value="1">Windows</option> 
                        <option value="2">Mac OS</option>
                        <option value="3">Linux</option>
                </select>
                <br>
                
            <input type="submit" value="ENVIAR">
            </form>
        </div>
        
        <div>
            <h1>Act 13 -ORDENAR 3 NÚMEROS-</h1>
            <h3>Introduzca el valor de los 3 números.</h3>
            <form action="Enviar13.php" method="get">
                A:<input type="number" name="a" step="0.01"><br>
                B:<input type="number" name="b" step="0.01"><br>
                C:<input type="number" name="c" step="0.01"><br>
            <input type="submit" value="ENVIAR">
            </form>
        </div>
        
    </body>
</html>
