<?php
    /*
    * @author Alvaro Cordero Miñambres, Rebeca Sánchez Pérez
    * @version 1.0
    * @since 22/11/2023
    */

    // REALIZAR CAMBIO PARA QUE SI RELLENAS MAL LA VENTANA EMERGENTE NO ENTRE EN EL EJERCICIO

    /**
     * @link https://www.php.net/manual/en/reserved.variables.server
     * 
     * $_SERVER['PHP_AUTH_USER'] -> se utiliza para obtener el nombre de usuario proporcionado por el cliente durante el proceso de autenticación HTTP básica.
     * $_SERVER['PHP_AUTH_PW'] -> se utiliza en el contexto de la autenticación básica HTTP. Esta variable contiene la contraseña proporcionada por el usuario  *durante el proceso de autenticación.
     */
    //Si el usuario no es PEPE y la contrasena no es paso y  ninguna de las variables esta vacio o es null entramos en el if
    if (!isset($_SERVER['PHP_AUTH_USER']) && !isset($_SERVER['PHP_AUTH_PW']) || $_SERVER['PHP_AUTH_USER'] != 'pepe' || $_SERVER['PHP_AUTH_PW'] != 'paso') {
        /**
         * @link https://www.php.net/manual/es/function.header.php
         * 
         * Cuando el navegador recibe este encabezado, mostrará un cuadro de diálogo de inicio de sesión al usuario, solicitándole un nombre de usuario y una  *contraseña. El usuario debe proporcionar las credenciales correctas para acceder al recurso protegido.
         */
        header('WWW-Authenticate: Basic Realm="Contenido restringido"');

        /**
         * @link https://developer.mozilla.org/es/docs/Web/HTTP/Status/401
         * 
         * Cuando un cliente realiza una solicitud a un recurso protegido y no proporciona credenciales válidas o no proporciona credenciales en absoluto, el  * *servidor puede responder con el código de estado 401 y el encabezado WWW-Authenticate para indicar al cliente que se requiere autenticación.
         */
        header('HTTP/1.0 401 Unauthorized');

        //Mostramos un error de autenticacion
        echo("<h2>Error de auntenticacion!!</h2><br>");

        /**
         *@link https://www.php.net/manual/es/function.exit.php
         * 
         *La función exit en PHP se utiliza para finalizar la ejecución del script inmediatamente en el punto donde se llama
         */
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
        <h2>Conexión a la base de datos con la cuenta usuario y tratamiento de errores</h2>
        <p>Hola, te has autentificado correctamente.</p>
        <?php
            /*
             * @author Rebeca Sánchez Pérez
             * @version 1.0
             * @since 22/11/2023
             */
        
            //Mostramos por pantalla los datos el usuario

            //Muestro el usuario
            echo "<p>Nombre de usuario: " . $_SERVER['PHP_AUTH_USER'] . "</p>";

            //Muestro la password
            echo "<p>Password: " . $_SERVER['PHP_AUTH_PW'] . "</p>";
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
