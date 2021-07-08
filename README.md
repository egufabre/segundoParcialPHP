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
    idautor serial primary key  NOT NULL,
    nombre varchar(20) NOT NULL,
    apellido varchar(20) NOT NULL,
    mail varchar(30) NOT NULL,
    password varchar(255) NOT NULL
);


create table posteo (
    idposteo serial PRIMARY KEY NOT NULL,
    titulopost varchar(40) NOT NULL,
    cuerpopost varchar(500) NOT NULL,
    fechapost timestamp  NOT NULL
);

create table autorPosteo (
    idautor serial primary key NOT NULL,
    idposteo serial PRIMARY KEY NOT NULL
);

ALTER TABLE autorPosteo
ADD FOREIGN KEY (idautor)
REFERENCES autor(idautor);

ALTER TABLE autorPosteo
ADD FOREIGN KEY (idposteo)
REFERENCES posteo(idposteo);