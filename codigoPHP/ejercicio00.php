<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../webroot/css/style.css">
    <link rel="icon" type="image/x-icon" href="../webroot/image/flora.png">
    <title>Rebeca Sánchez Pérez</title>
</head>

<body>
    <header>
        <a href="../../index.html"><img id="logo" src="../webroot/image/logo.png" alt="Logo"></a>
        <h1>Ejercicio 0</h1>
    </header>
    <main>
        <h2>Mostrar el contenido de las variables superglobales y phpinfo()</h2>
        <?php
            /*
             * @author Rebeca Sánchez Pérez
             * @version 1.0
             * @since 22/11/2023
             */

            // $_SERVER
            echo('<div class="ejercicio">');
            echo('<h3>$_SERVER</h3>');
            foreach ($_SERVER as $key => $valor) {
                echo('<u>'.$key.'</u> => <b>'.$valor.'</b><br>');
            }
            echo('</div>');

            // $_COOKIE
            echo('<div class="ejercicio">');
            echo('<h3>$_COOKIE</h3>');
            foreach ($_COOKIE as $key => $valor) {
                echo('<u>'.$key.'</u> => <b>'.$valor.'</b><br>');
            }
            echo('</div>');

            // $GLOBALS
            echo('<div class="ejercicio">');
            echo('<h3>$GLOBALS</h3>');
            foreach ($GLOBALS as $key => $valor) {
                foreach ($valor as $clave => $valor2) {
                    echo('<u>'.$clave.'</u> => <b>'.$valor2.'</b><br>');
                }
            }
            echo('</div>');

            // $_GET
            echo('<div class="ejercicio">');
            echo('<h3>$_GET</h3>');
            foreach ($_GET as $key => $valor) {
                echo('<u>'.$key.'</u> => <b>'.$valor.'</b><br>');
            }
            echo('</div>');

            // $_POST
            echo('<div class="ejercicio">');
            echo('<h3>$_POST</h3>');
            foreach ($_POST as $key => $valor) {
                echo('<u>'.$key.'</u> => <b>'.$valor.'</b><br>');
            }
            echo('</div>');

            // $_FILES
            echo('<div class="ejercicio">');
            echo('<h3>$_FILES</h3>');
            foreach ($_FILES as $key => $valor) {
                echo('<u>'.$key.'</u> => <b>'.$valor.'</b><br>');
            }
            echo('</div>');

            // $_REQUEST
            echo('<div class="ejercicio">');
            echo('<h3>$_REQUEST</h3>');
            foreach ($_REQUEST as $key => $valor) {
                echo('<u>'.$key.'</u> => <b>'.$valor.'</b><br>');
            }
            echo('</div>');

            // $_ENV
            echo('<div class="ejercicio">');
            echo('<h3>$_ENV</h3>');
            foreach ($_ENV as $key => $valor) {
                echo('<u>'.$key.'</u> => <b>'.$valor.'</b><br>');
            }
            echo('</div>');
            
            // Se muestra en pantalla la información de PHP de nuestro servidor
            phpinfo();
        ?>
    </main>
    <footer>
        <div id="derechos">2023-2024 © Todos los derechos reservados: <a href="../../index.html">Rebeca Sánchez Pérez</a></div>
        <div id="fotos">
            <a href="https://github.com/Ebenclaw" target="_blank"><img id="git" src="../webroot/image/GitHub.png" alt="GitHub"></a>
            <a href="http://ieslossauces.centros.educa.jcyl.es/sitio/" target="_blank"><img id="sauces" src="../webroot/image/sauces.png" alt="Sauces"></a>
            <a href="../indexProyectoTema5.php"><img id="home" src="../webroot/image/home.png" alt="Inicio"></a>
    </footer>
</body>

</html>