create DATABASE disqui;
use disqui;
create table artistas(
	artista_clave varchar(6) primary key,
    artista_nombre varchar(50) not null,
    artista_apep varchar(30) not null,
    artista_apem varchar(30) null,
    artista_nacimiento date NOT null
);
create table discos(
	disco_clave varchar(10) primary key,
    artista_clave varchar(6) not null,
    disco_fecha date not null,
    FOREIGN key(artista_clave) REFERENCES artistas(artista_clave)
);
