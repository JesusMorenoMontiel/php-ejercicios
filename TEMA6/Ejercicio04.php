<?php
session_start(); // Inicio de sesión

    $_SESSION['usuario']=admin;
    $_SESSION['contraseña']=admin;
    
    if(isset($_POST['usuario'])) {
        $usuario = $_POST['usuario'];
        $comprobar=true;
    }
    
    if(isset($_POST['contraseña'])) {
        $contraseña = $_POST['contraseña'];
    }
       

?>
<!DOCTYPE html>
<!--
Establece un control de acceso mediante nombre de usuario y contraseña para 
cualquiera de los programas de la relación anterior. La aplicación no nos 
dejará continuar hasta que iniciemos sesión con un nombre de usuario y 
contraseña correctos.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title>EJERCICIO 4</title>
        <link rel="stylesheet" type="text/css" href="style.css">
    </head>
    <body>
        <div>
            <h1>LOGIN</h1>

        <form action="Ejercicio04.php" method="post">
            USUARIO <input type="text" name="usuario"><br>
            CONTRASEÑA <input type="password" name="contraseña"><br><br>
            <input type="submit" value="Aceptar"><br>
        </form>
            
        <?php
        if($comprobar){
            if($usuario == $_SESSION['usuario'] && $contraseña == $_SESSION['contraseña']){
                echo 'LOGUEADO CORRECTAMENTE';
                header("Refresh:3; url=Ejercicio03.php");
            }
            
                if($usuario != $_SESSION['usuario'] && $contraseña != $_SESSION['contraseña']){
                    echo 'INTENTE DE NUEVO';
                }
        }
        
        ?>


        </div>
    </body>
</html>