    <?php
        /**
         * @author Ismael Ferreras García
         * @version 1.0
         * @since 21/11/2023
         */
        // Variables de conexión con la base de datos
        define('HOST', '192.168.20.19');
        define('DBNAME', 'DB202DWESProyectoTema5');
        define('USERNAME', 'user202DWESProyectoTema5');
        define('PASSWORD', 'P@ssw0rd');

        try {
            // Conexión con la base de datos
            $miDB = new PDO("mysql:host=" . HOST . ";dbname=" . DBNAME, USERNAME, PASSWORD);

            if (!isset($_SERVER['PHP_AUTH_USER']) || !isset($_SERVER['PHP_AUTH_PW'])) {
                header('WWW-Authenticate: Basic realm="Acceso restringido"');
                header('HTTP/1.0 401 Unauthorized');
                echo 'Se requieren credenciales para acceder a esta página.';
                exit();
            }

            $usuario = $_SERVER['PHP_AUTH_USER'];
            $contrasena = $_SERVER['PHP_AUTH_PW'];
            $hashContrasena = hash('sha256', $usuario . $contrasena);

            $sql = "SELECT * FROM T01_Usuario WHERE T01_CodUsuario = ? AND T01_Password = ?";
            $stmt = $miDB->prepare($sql);
            $stmt->execute([$usuario, $hashContrasena]);

            $result = $stmt->fetch(PDO::FETCH_OBJ);

            if ($result) {
                $nombre_usuario = $result->T01_CodUsuario;
                echo "Bienvenido, $nombre_usuario!";
            } else {
                header('HTTP/1.1 401 Unauthorized');
                echo 'Credenciales incorrectas. Acceso denegado.';
            }
        } catch (PDOException $e) {
            die("Error en la conexión: " . $e->getMessage());
        }
    ?>
<!DOCTYPE html>
<html lang="es">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" type="text/css" href="../webroot/css/style.css">
        <title>DWES</title>
    </head>
    <body>
        <header>
            <h1>1. Desarrollo de un control de acceso con identificación del usuario basado en la función header().</h1>
        </header>
        <main>
        </main>
        <footer>
            <p>2023-2024 © Todos los derechos reservados. <a href="../indexProyectoTema5.php">Erika Martínez Pérez</a></p>
        </footer>
    </body>
</html>
