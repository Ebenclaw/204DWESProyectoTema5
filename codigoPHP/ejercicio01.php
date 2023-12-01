<?php
    /*
    * @author Alvaro Cordero Miñambres, Rebeca Sánchez Pérez
    * @version 1.2
    * @since 27/11/2023
    */

    /**
     * $_SERVER['PHP_AUTH_USER'] -> se utiliza para obtener el nombre de usuario proporcionado por el cliente durante el proceso de autenticación HTTP básica.
     * $_SERVER['PHP_AUTH_PW'] -> se utiliza en el contexto de la autenticación básica HTTP. Esta variable contiene la contraseña proporcionada por el usuario  *durante el proceso de autenticación.
     */
    //Si el usuario no es PEPE y la contrasena no es paso y  ninguna de las variables esta vacio o es null entramos en el if
    if (!isset($_SERVER['PHP_AUTH_USER']) && !isset($_SERVER['PHP_AUTH_PW']) || $_SERVER['PHP_AUTH_USER'] != 'admin' || $_SERVER['PHP_AUTH_PW'] != 'paso') {
        /**
         * Cuando el navegador recibe este encabezado, mostrará un cuadro de diálogo de inicio de sesión al usuario, solicitándole un nombre de usuario y una  *contraseña. El usuario debe proporcionar las credenciales correctas para acceder al recurso protegido.
         */
        header('WWW-Authenticate: Basic Realm="Contenido restringido"');

        
        // Cuando un cliente realiza una solicitud a un recurso protegido y no proporciona credenciales válidas o no proporciona credenciales en absoluto, el  * *servidor puede responder con el código de estado 401 y el encabezado WWW-Authenticate para indicar al cliente que se requiere autenticación.
        header('HTTP/1.0 401 Unauthorized');

        //Mostramos un error de autenticacion
        echo("<h2>Error de auntenticacion!!</h2><br>");

        
        // La función exit() en PHP se utiliza para finalizar la ejecución del script inmediatamente en el punto donde se llama
        
        exit();
    }
?>
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
        <h1>Ejercicio 1</h1>
    </header>
    <main>
        <h2>Desarrollo de un control de acceso con identificación del usuario basado en la función header()</h2>
        
        <?php
            // Se muestra el mensaje de bienvenida
            echo('<div class="ejercicio">Bienvenido <b>'.$_SERVER['PHP_AUTH_USER'].'</b>, te has autentificado correctamente  ✅</div>');            
        
            // Se muestra el nombre del usuario
            echo('<div class="ejercicio">');
            echo('<h3>Informacion del usuario:</h3>');
            echo('<u>Nombre:</u> <b>' . $_SERVER['PHP_AUTH_USER'] . '</b><br>');

            // Se muestra la contraseña del usuario
            echo('<u>Contraseña:</u> <b>' . $_SERVER['PHP_AUTH_PW'] . '</b>');
            echo('</div>');
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
