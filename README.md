CREAR ESTA BASE DE DATOS:
use base;

create table autor(
    id int primary key auto_increment,
    nombre varchar(20),
    apellido varchar(20),
    mail varchar(30),
    password varchar(255),
    foto blob
);