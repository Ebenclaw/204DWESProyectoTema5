/*
* @author Rebeca Sánchez Pérez
* @version 1.2
* @since 27/11/2023
*/

/*Se pone en uso la base de datos*/
USE DB214DWESProyectoTema5;

/*Se insertan valores en la tabla Departamento*/
INSERT INTO T02_Departamento (T02_CodDepartamento, T02_DescDepartamento, T02_FechaCreacionDepartamento, T02_VolumenDeNegocio, T02_FechaBajaDepartamento) VALUES
    ('AAA', 'Departamento de Ventas', '2023-11-13 13:06:00', 100000.50, NULL),
    ('AAB', 'Departamento de Marketing', '2023-11-13 13:06:00', 50089.50, NULL),
    ('AAC', 'Departamento de Finanzas', '2022-11-13 13:06:00', 600.50, '2023-11-13 13:06:00');

/*Se insertan valores en la tabla Usuario*/
INSERT INTO T01_Usuario (T01_CodUsuario, T01_Password, T01_DescUsuario, T01_Perfil) VALUES
    ('admin', SHA2(CONCAT('adminpaso'), 256), 'administrador', 'administrador'),
    ('alvaro', SHA2(CONCAT('alvaropaso'), 256), 'Álvaro Cordero Miñambres', 'usuario'),
    ('carlos', SHA2(CONCAT('carlospaso'), 256), 'Carlos García Cachón', 'usuario'),
    ('oscar', SHA2(CONCAT('oscarpaso'), 256), 'Oscar Pascual Ferrero', 'usuario'),
    ('borja', SHA2(CONCAT('borjapaso'), 256), 'Borja Nuñez Refoyo', 'usuario'),
    ('rebeca', SHA2(CONCAT('rebecapaso'), 256), 'Rebeca Sánchez Pérez', 'usuario'),
    ('erika', SHA2(CONCAT('erikapaso'), 256), 'Erika Martínez Pérez', 'usuario'),
    ('ismael', SHA2(CONCAT('ismaelpaso'), 256), 'Ismael Ferreras García', 'usuario'),
    ('heraclio', SHA2(CONCAT('heracliopaso'), 256), 'Heraclio Borbujo Moran', 'administrador'),
    ('amor', SHA2(CONCAT('amorpaso'), 256), 'Amor Rodriguez Navarro', 'administrador');
