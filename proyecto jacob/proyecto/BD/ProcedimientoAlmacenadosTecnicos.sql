use proyecto_maquinas_recreativas;
-- Agregar Tecnicos;
use proyecto_BD2;
if object_id(insertarTecnico) is not null
	drop procedure insertarTecnico;
go
create procedure insertarTecnico
@nombre varchar(50),
@cantRepa varchar(30),
@idSuperTecnico int
as
begin
	if (@nombre is NULL) or (@cantRepa is NULL)
		print 'Se debe insertar registros'	
	else
	--set identity_insert is on
	insert into dbo.Tecnico values
	(@nombre,@cantRepa,@idSuperTecnico)
	--set identity_insert is off
end
go
select * from Tecnico;
exec insertarTecnico 'Pablo Fernandez', 4, 510;

-- Modificar Tecnico
if object_id(modificarTecnico) is not null
	drop procedure modificarTecnico;
go
create procedure modificarTecnico
@idTecnico int,
@nombre varchar(50),
@cantRepa varchar(30),
@idSuperTecnico int
as
begin
	if (@idTecnico is  NUll ) or (@nombre is  NULL) or (@cantRepa is NULL)
	print 'ERROR----!!!Se debe insertar registros Validos!!!!'
	else
	update Tecnico set @nombre=nombre, @cantRepa=cantRepa, @idSuperTecnico=idSuperTecnico
	where @idTecnico=idTecnico;
		

end
go

exec modificarTecnico 509,'Rafael Leonardo', 4,510;
exec modificarTecnico null,'Walter Zelaya',5,510;
select * from Tecnico;
-- Eliminar Tecnico

if object_id(eliminarTecnico) is not null
	drop procedure eliminarTecnico;
go
create procedure eliminarTecnico
@idTecnico int
as
begin
	if (@idTecnico is NULL) 
		print 'Se debe insertar el id correcto'	
	else
	delete from Tecnico
	where @idTecnico = idTecnico;
end
go
exec eliminarTecnico 510;
select * from Tecnico
EXEC insertarTecnico 'KAGAWAMA HONDA', 4, NULL;