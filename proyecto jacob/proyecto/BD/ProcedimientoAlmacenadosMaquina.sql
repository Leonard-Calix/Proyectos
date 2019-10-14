-- Agregar Maquina;
use proyecto_BD2;
if object_id(insertarMaquina) is not null
	drop procedure insertarMaquina;
go
create procedure insertarMaquina
@nombre varchar(30),
@estado varchar(30),
@cantFallo varchar(30),
@idTecnico int,
@rtnComercio int
as
begin
	if (@nombre is NULL) or (@estado is NULL) or (@cantFallo is Null) or (@idTecnico is NULL) or (@rtnComercio is NULL)
		print 'Se debe insertar registros'	
	else
	--set identity_insert is on
	insert into dbo.Maquina values
	(@nombre,@estado,@cantFallo,@idTecnico,@rtnComercio)
	--set identity_insert is off
end
go
--select * from Maquina;
--exec insertarMaquina 'ATARI', 'No Operativa',4,509, 305;

-- Modificar Maquina
if object_id(modificarMaquina) is not null
	drop procedure modificarMaquina;
go
create procedure modificarMaquina
@idMaquina int,
@nombre varchar(30),
@estado varchar(30),
@cantFallo varchar(30),
@idTecnico int,
@rtnComercio int
as
begin
	if (@idMaquina is  NUll ) or (@nombre is  NULL) or (@estado is NULL) or (@cantFallo is Null) or (@idTecnico is NUll) or (@rtnComercio is Null) 
		print 'ERROR----!!!Se debe insertar registros Validos!!!!'
	else
		update Maquina set nombre=@nombre, estado=@estado, cantFallo=@cantFallo, idTecnico=@idTecnico, rtnComercio=@rtnComercio
		where idMaquina=@idMaquina;
		
end
go

--select * from Maquina;
--exec modificarMaquina 905,'Dragon Ball Z','Operativa',2,508,309;
-- Eliminar Maquina
if object_id(eliminarMaquina) is not null
	drop procedure eliminarMaquina;
go
create procedure eliminarMaquina
@idMaquina int
as
begin
	if (@idMaquina is NULL) 
		print 'Se debe insertar el id correcto'	
	else
	delete from Maquina
	where @idMaquina = idMaquina;
end
go
-- exec eliminarTecnico 905;
-- select * from Maquina;
