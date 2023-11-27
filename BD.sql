DROP SCHEMA IF EXISTS `asistencia`;

CREATE SCHEMA IF NOT EXISTS  `asistencia` DEFAULT CHARACTER SET utf8 COLLATE utf8_spanish2_ci;

USE `asistencia`;

create table usuarios(id int not null auto_increment primary key,
						nombre varchar(50) not null,
                        usuario varchar(50) not null,
                        no_cuenta int(10) not null,
                        email varchar(50), 
                        pass varchar(20) not null,                        
                        numero int(15), 
                        credencial int(11) not null default '2');  
insert into usuarios (nombre, usuario, no_cuenta, email, pass, numero, credencial) values('Abnermaster23ye', 'Abner', '319154694', 'abnerleguapo@gmail.com', '1234', '5540376746', '2');                                            
insert into usuarios (nombre, usuario, no_cuenta, email, pass, numero, credencial) values('Admin', 'Admin', '1234567890', 'Admin@gmail.com', 'Admin', '1234567890', '1');

select * from usuarios;