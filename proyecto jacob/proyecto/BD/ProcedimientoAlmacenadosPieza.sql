-- Agregar Pieza;
use proyecto_BD2;
if object_id(insertarPieza) is not null
	drop procedure insertarPieza;
go
create procedure insertarPieza
@tipo varchar(30),
@estado varchar(30),
@rtnProveedor int,
@idMaquina int
as
begin
	if (@tipo is NULL) or (@estado is NULL) or (@rtnProveedor is Null) or (@idMaquina is NUll)
		print 'Se debe insertar registros requeridos'	
	else
	--set identity_insert is on
	insert into dbo.Pieza values
	(@tipo,@estado,@rtnProveedor,@idMaquina)
	--set identity_insert is off
end
go
--select * from Pieza;
-- exec insertarTecnico 'Carcasa','Operativa', 703, 905;

-- Modificar Pieza
if object_id(modificarPieza) is not null
	drop procedure modificarPieza;
go
create procedure modificarPieza
@idPieza int,
@tipo varchar(30),
@estado varchar(30),
@rtnProveedor int,
@idMaquina int
as
begin
	if (@idPieza is  NUll ) or (@tipo is  NULL) or (@estado is NULL) or (@rtnProveedor is Null) or (@idMaquina is NUll)
		print 'ERROR----!!!Se debe insertar registros Validos!!!!'
	else
		update Pieza set tipo=@tipo, estado=@estado, rtnProveedor=@rtnProveedor, idMaquina=@idMaquina
		where idPieza=@idPieza;
		

end
go
-- select * from pieza
--exec modificarPieza 104,'Placa', 'Operativa',704,905;

select * from Pieza;

-- Eliminar Pieza

if object_id(eliminarPieza) is not null
	drop procedure eliminarPieza;
go
create procedure eliminarPieza
@idPieza int
as
begin
	if (@idPieza is NULL) 
		print 'Se debe insertar el id correcto'	
	else
	delete from Pieza
	where @idPieza = idPieza;
end
go
-- exec eliminarPieza 104;
-- select * from Pieza;
