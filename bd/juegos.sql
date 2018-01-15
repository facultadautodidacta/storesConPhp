create database juegos;
use juegos;

create table t_juegos (id_juego int auto_increment, 
	nombre varchar(150), 
	anio varchar(150), 
	empresa varchar(150), 
	primary key(id_juego));
ALTER TABLE t_juegos CONVERT TO CHARACTER SET utf8;