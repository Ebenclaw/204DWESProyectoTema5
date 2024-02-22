<?php
/*
 * @author Rebeca Sánchez Pérez
 * @version 1.0
 * @since 12/12/2023
 */

// DECLARACION E INICIALIZACION DE VARIABLES
// Se definen las constantes de la configuracion de la base de datos
define('IPMYSQL', 'db5014806751.hosting-data.io');
define('NOMBREDB', 'dbs12302420');
define('USUARIO', 'dbu1704580');
define('PASSWORD', 'daw2_Sauces');

// Se realiza el ejercicio con una consulta preparada
try {
    // Se instancia un objeto tipo PDO que establece la conexion a la base de datos con el usuario especificado
    $miDB = new PDO('mysql:host=' . IPMYSQL . '; dbname=' . NOMBREDB, USUARIO, PASSWORD);
    
    // Consulta de insercion de datos en la tabla departamento
    $sql1 = <<< SQL
        insert into dbs12302420.T02_Departamento values ("DAW","Desarrollo de aplicaciones web",now(),50.50,null),
        ("SMR","Sistemas microinformarticos y redes",now(),1.50,null),
        ("PRE","Proyectos de edificacion",now(),150,null),
        ("DAM","Desarrollo de aplicaciones multiplataforma",now(),10.25,null),
        ("ASI","Administracion de sistemas informaticos en red",now(),0.10,null);
    SQL;
    // Consulta de insercion de datos en la tabla usuario
    $sql2 = <<< SQL
        INSERT INTO dbs12302420.T01_Usuario (T01_CodUsuario, T01_Password, T01_DescUsuario, T01_Perfil) VALUES
        ('admin', SHA2('adminpaso', 256), 'administrador', 'administrador'),
        ('alvaro', SHA2('alvaropaso', 256), 'Álvaro Cordero Miñambres', 'usuario'),
        ('carlos', SHA2('carlospaso', 256), 'Carlos García Cachón', 'usuario'),
        ('oscar', SHA2('oscarpaso', 256), 'Oscar Pascual Ferrero', 'usuario'),
        ('borja', SHA2('borjapaso', 256), 'Borja Nuñez Refoyo', 'usuario'),
        ('rebeca', SHA2('rebecapaso', 256), 'Rebeca Sánchez Pérez', 'usuario'),
        ('erika', SHA2('erikapaso', 256), 'Erika Martínez Pérez', 'usuario'),
        ('ismael', SHA2('ismaelpaso', 256), 'Ismael Ferreras García', 'usuario'),
        ('heraclio', SHA2('heracliopaso', 256), 'Heraclio Borbujo Moran', 'administrador'),
        ('amor', SHA2('amorpaso', 256), 'Amor Rodriguez Navarro', 'administrador');
    SQL;
    // Consulta de insercion de datos en la tabla trabajo
    $sql3 = <<< SQL
        INSERT INTO T11_Trabajo (T11_CodTrabajo, T11_DescTrabajo, T11_FechaCreacion, T11_FechaInicio, T11_FechaFin, T11_Estado, T11_Coste) VALUES
        ('C01', 'Poner la lavadora', '2024-02-08 14:00:00', '2024-02-09 15:30:00', '2024-02-09 15:35:00', 'finalizado', 6),
        ('C02', 'Tender la ropa', '2024-02-08 14:00:00', '2024-02-09 16:45:00', NULL, 'en curso', 0),
        ('C03', 'Aprobar DWES', '2024-01-26 11:02:50', '2024-01-27 12:00:00', NULL, 'en curso', 10.05),
        ('F01', 'Ir a comprar al Mercadona', '2024-02-07 20:23:30', NULL, NULL, 'pendiente', 56.95),
        ('F02', 'Echarle gasolina al coche', '2024-02-05 18:20:00', '2024-02-06 20:00:00', '2024-02-06 20:10:00', 'finalizado', 40.34);
    SQL;
    
    // Se prepara la consulta
    $consulta1 = $miDB->prepare($sql1);
    $consulta2 = $miDB->prepare($sql2);
    $consulta3 = $miDB->prepare($sql3);
    // Se ejecuta la consulta
    $consulta1->execute();
    $consulta2->execute();
    $consulta3->execute();
   
    // Se muestra el mensaje de exito
    echo('Se han insertado los datos a las tablas "T02_Departamento", "T01_Usuario" y "T11_Trabajo" correctamente ✅');
} catch (PDOException $exception) {
    // Si aparecen errores, se muestra por pantalla el error
    echo('<div class="ejercicio"><span class="error">❌ Ha fallado la conexion: ' . $exception->getMessage() . '</span></div>');
} finally{
    // Se cierra la conexion con la base de datos
    unset($miDB);
}
?>