-- Lean Los comentarios que se les agregue y piensen y digan que es mejor o no para el proyecto, este seria el DDL y el DML, empezare
-- Con los Procedimientos almacenados que pueda
-- Se crea la base de datos con el nombre se le puede agregar la condicion si existe eliminarla y volverla a crear
if object_id (proyecto_BD2) is not null
	drop database proyecto_BD2;
go
--drop database proyecto_maquinas_recreativas;
create database   proyecto_BD2;
go
-- Se debe seleccionar la base de datos antes de crear las tablas
use proyecto_BD2;
-- Se le agrego la palabra reservada identity para que se vaya incrementando el valor de 1 en un 1 
-- Escogi esos valores para que puedieran ingresar hasta un MAXIMO de 200 registros y que no tenga problemas
go
if object_id(Proveedor) is not null
	drop table Proveedor;
go

create table Proveedor(
rtnProveedor int primary key not null identity (701,1),
nombre varchar(30),
tipo varchar(30),
);
go
-- Se escogio el orden la creacion para que no tuviera problemas con las llaves foraneas que se declaran 
-- a continuacion la tabla tecnico es recursiva pero si se disenia en el modelo relacional tiene problemas para declararse por problemas con las llaves foraneas
if object_id(Tecnico) is not null
	drop table Tecnico;
go

create table Tecnico(
idTecnico int primary key not null identity (501,1),
nombre varchar(50),
cantRepa varchar(30),
idSuperTecnico int,

);
go
-- La especializacion Comercio y todo llevan el atributo tipoComercio y las subclases hijas tienen la primary key de la clase padre y su atributo unico
if object_id(Comercio) is not null
	drop table Comercio;
go

create table Comercio(
rtnComercio int primary key not null identity(301,1),
zona varchar(30),
tipoComercio varchar(30),
);
go
if object_id(Minorista) is not null
	drop table Minorista;
go

create table Minorista(
rtnComercio int not null,
pagoMensual varchar(30),

constraint FK_Comercio_Minorista
foreign key (rtnComercio) references Comercio(rtnComercio)
	on update cascade
	on delete cascade,
);
go
if object_id(Mayorista) is not null
	drop table Mayorista;
go

create table Mayorista(
rtnComercio int not null,
porcentaje varchar(30),

constraint FK_Comercio_Mayorista
foreign key (rtnComercio) references Comercio(rtnComercio)
	on update cascade
	on delete cascade,
);
go
-- Se dejo en cascade cada ves que se actualice o elimine para que vaya afectando las demas tablas
if object_id(Maquina) is not null
	drop table Maquina;
go

create table Maquina(
idMaquina int primary key not null identity (901,1),
nombre varchar(30),
estado varchar(30),
cantFallo varchar (30),
idTecnico int not null,
rtnComercio int not null,

constraint FK_Maquina_Tecnico
foreign key (idTecnico) references Tecnico(idTecnico)
	on update cascade
	on delete cascade,

constraint FK_Maquina_Comercio
foreign key (rtnComercio) references Comercio(rtnComercio)
	on update cascade
	on delete cascade,
);
go
-- Se debe eliminar la columna tipo en pieza ya que cuando herede la llave foranea de proveedor habra redundacia de datos, luego se modifica
if object_id(Pieza) is not null
	drop table Pieza;
go

create table Pieza(
idPieza int primary key not null identity (101,1),
tipo varchar(30),
estado varchar(30),
rtnProveedor int not null,
idMaquina int not null,

constraint FK_Pieza_Proveedor
foreign key (rtnProveedor) references Proveedor(rtnProveedor)
	on update cascade
	on delete cascade,
constraint FK_Pieza_Maquina
foreign key (idMaquina) references Maquina(idMaquina)
	on update cascade
	on delete cascade
);
-- Cuando se llega al valor null significa que es el tecnico jefe
select * from Tecnico;
insert into Tecnico values ('Allan Carlos Discua Hernandez',2,510);
insert into Tecnico values ('Jonathan Axel Gomez Rubio',3,511);
insert into Tecnico values ('Ever Daniel Chacon Alvarado',5,510);
insert into Tecnico values ('Juan Orlando Hernandez Alvarado',7,510);
insert into Tecnico values ('Juan Fernando Rodriguez Pacheco',1,510);
insert into Tecnico values ('Luis Enrique Gomez Padilla',9,510);
insert into Tecnico values ('Jose Mario Ponce Morazan',4,510);
insert into Tecnico values ('Rene Emilio Flores Izaguirre',7,510);
insert into Tecnico values ('Manuel Enrique Zelaya Alvarado',3,null);
-- los respectivos insert para proveedor
select * from Proveedor;
DELETE FROM  PROVEEDOR;
insert into Proveedor values ('Bandai','Placas');
insert into Proveedor values ('Nintendo','Placas');
insert into Proveedor values ('Sony','Placas');
insert into Proveedor values ('Samsung','Carcasas');
insert into Proveedor values ('Microsoft','Carcasas');
insert into Proveedor values ('Motorola','Carcasas');
insert into Proveedor values ('Marvel','Carcasas');
insert into Proveedor values ('Intel','Placas');
insert into Proveedor values ('Amd','Placas');
insert into Proveedor values('Apple','Carcasas');
-- Los insert en piezas no deberia llevar tipo se deberia eliminar esa columna por no tener claridad se dejara en NULL

-- Primero se debe llenar los registros de Comercio para luego diferenciar las especialidades
select * from Comercio;
insert into Comercio values ('Torocagua','Minorista');
insert into Comercio values ('Bella Vista','Minorista');
insert into Comercio values ('Mall Multiplaza','Mayorista');
insert into Comercio values ('City Mall','Mayorista');
insert into Comercio values ('El Hato','Minorista');
insert into Comercio values ('Mall Las Cascadas','Mayorista');
insert into Comercio values ('El Reparto','Minorista');
insert into Comercio values ('Mall Premier','Mayorista');
insert into Comercio values ('La Kennedy','Minorista');
insert into Comercio values ('Metro Mall','Mayorista');
-- Aca se ingresa los registros segun la tabla comercio y sus registros si es mayorista o minorista segun eso solo se le agrega el procentaje el cual se puede decidir si es varchar 
-- o seria mas conveniente otro valor a considerar
select * from Mayorista;
insert into Mayorista values (303, '10%');
insert into Mayorista values (304, '12%');
insert into Mayorista values (306, '11%');
insert into Mayorista values (308, '9%');
insert into Mayorista values (310, '8%');
--  a considerar el valor de pagomensual si varchar o otro tipo, aunque si es varchar seria util para buscar valores pero a la ves podria dar probelmas
-- Tener en cuenta
select * from Minorista;
truncate table minorista;
insert into Minorista values (301, '1000');
insert into Minorista values (302, '800');
insert into Minorista values (305, '900');
insert into Minorista values (307, '500');
insert into Minorista values (309, '1500');
-- Como esta tabla tiene llaves foraneas se le ingresen datos que tengan relacion con los datos ingresados anteriormente
select * from Maquina;
insert into Maquina values ('Pac-Man','Operativa','2',501,301);
insert into Maquina values ('Mortal Kombat','Operativa','3',502,308);
insert into Maquina values ('Street-Fighter','Operativa','1',504,304);
insert into Maquina values ('Donkey Kong','Operativa','5',508,310);
insert into Maquina values ('Mario Bros','No Operativa','6',503,306);
insert into Maquina values ('Galaga','Operativa','4',505,302);
insert into Maquina values ('BreakOut','Operativa','1',506,303);
insert into Maquina values ('Asteroids','Operativa','2',507,305);
insert into Maquina values ('Daytona','Operativa','3',509,307);
insert into Maquina values ('Metal Slug','No Operativa','8',510,309);

-- La tabla tipo no se sabe sin dejar en null o por que seria redundacia de datos
-- Se tiene dudas ya que una maquina tiene dos piezas y aca solo esta especificando una pieza entonces no se si debera especificar las dos piezas que conforman la maquina
select * from Pieza;
SELECT * FROM MAQUINA;

insert into Pieza values ('Placas','Buen estado',701,901);
insert into Pieza values ('Nintendo','Buen estado',707,902);
insert into Pieza values ('Carcasas','Mal Estado',709,910);
insert into Pieza values ('Placas','Buen estado',710,909);
insert into Pieza values ('Carcasas','Buen estado',704,906);
insert into Pieza values ('Placas','Buen estado',705,908);
insert into Pieza values ('Carcasas','Mal Estado',702,905);
insert into Pieza values ('Carcasas','Buen estado',703,904);
insert into Pieza values ('Placas','Buen estado',706,903);
insert into Pieza values ('Carcasas','Buen estado',708,907);


select * from Mayorista;