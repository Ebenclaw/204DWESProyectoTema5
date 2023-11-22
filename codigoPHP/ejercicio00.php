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
        
            // Se muestra en pantalla la información de PHP de nuestro servidor
            phpinfo();

            // Print_r globales del servidor
            echo("<h2>Print_r \$_SERVER</h2>");
            echo('<div">');
            print_r($_SERVER);
            echo('</div>');

            // Foreach globales del servidor
            echo("<h2>Foreach \$_SERVER</h2>");
            foreach ($_SERVER as $key => $valor) {
                echo "$key => $valor<br>";
            }

            // Print_ r globales cookies
            echo("<h2>Print_r \$_COOKIE</h2>");
            echo('<div">');
            print_r($_COOKIE);
            echo('</div>');

            // Foreach globales cookies
            echo("<h2>Foreach \$_COOKIE</h2>");
            foreach ($_COOKIE as $key => $valor) {
                echo "$key => $valor<br>";
            }

            // Print_r variables globales
            echo("<h2>Print_r \$GLOBALS</h2>");
            echo('<div">');
            print_r($GLOBALS);
            echo('</div>');

            // Print_ r globales get
            echo("<h2>Print_r \$_GET</h2>");
            echo('<div">');
            print_r($_GET);
            echo('</div>');

            // Foreach globales get
            echo("<h2>Foreach \$_GET</h2>");
            foreach ($_GET as $key => $valor) {
                echo "$key => $valor<br>";
            }

            // Print_ r globales post
            echo("<h2>Print_r \$_POST</h2>");
            echo('<div">');
            print_r($_POST);
            echo('</div>');

            // Foreach globales post
            echo("<h2>Foreach \$_POST</h2>");
            foreach ($_POST as $key => $valor) {
                echo "$key => $valor<br>";
            }

            // Print_ r globales files
            echo("<h2>Print_r \$_FILES</h2>");
            echo('<div">');
            print_r($_FILES);
            echo('</div>');

            // Foreach globales files
            echo("<h2>Foreach \$_FILES</h2>");
            foreach ($_FILES as $key => $valor) {
                echo "$key => $valor<br>";
            }


            // Print_ r globales request
            echo("<h2>Print_r \$_REQUEST</h2>");
            echo('<div">');
            print_r($_REQUEST);
            echo('</div>');

            // Foreach globales request
            echo("<h2>Foreach \$_REQUEST</h2>");
            foreach ($_REQUEST as $key => $valor) {
                echo "$key => $valor<br>";
            }

            // Print_ r globales env
            echo("<h2>Print_r \$_ENV</h2>");
            echo('<div">');
            print_r($_ENV);
            echo('</div>');

            // Foreach globales env
            echo("<h2>Foreach \$_ENV</h2>");
            foreach ($_ENV as $key => $valor) {
                echo "$key => $valor<br>";
            }
        ?>
    </main>
    <footer>
        <div id="derechos">2023-2024 © Todos los derechos reservados: <a href="../../index.html">Rebeca Sánchez Pérez</a></div>
        <div id="fotos">
            <a href="https://github.com/Ebenclaw" target="_blank"><img id="git" src="../webroot/image/GitHub.png" alt="GitHub"></a>
            <a href="http://ieslossauces.centros.educa.jcyl.es/sitio/" target="_blank"><img id="sauces" src="../webroot/image/sauces.png" alt="Sauces"></a>
            <a href="../indexProyectoTema4.php"><img id="home" src="../webroot/image/home.png" alt="Inicio"></a>
    </footer>
</body>

</html>