CREAR ESTA BASE DE DATOS:
use base;

VERSION DE TABLA AUTOR PARA HACER AL FINAL
create table autor(
    id int primary key auto_increment,
    nombre varchar(20),
    apellido varchar(20),
    mail varchar(30),
    password varchar(255),
    foto varchar(50)
);

USAR ESTAS TABLAS POR AHORA

create table autor(
    id int primary key auto_increment NOT NULL,
    nombre varchar(20) NOT NULL,
    apellido varchar(20) NOT NULL,
    mail varchar(30) NOT NULL,
    password varchar(255) NOT NULL);


create table posteo (
id serial NOT NULL,
titulopost varchar(40) NOT NULL,
cuerpopost varchar(500) NOT NULL,
fechapost timestamp  NOT NULL,
PRIMARY KEY (id));