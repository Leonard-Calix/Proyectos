-- Agregar Proveedores;
use proyecto_BD2;
if object_id(insertarProveedor) is not null
	drop procedure insertarProveedor;
go
create procedure insertarProveedor
@nombre varchar(30),
@tipo varchar(30)
as
begin
	if (@nombre is NULL) or (@tipo is NULL)
		print '!!!!Se debe insertar registros validos!!!!'	
	else
	--set identity_insert is on
	insert into dbo.Proveedor values
	(@nombre,@tipo)
	--set identity_insert is off
end
go
--select * from Proveedor;
--exec insertarProveedor 'Huawei','Placas';
--select * from Proveedor;


-- Modificar Proveedor
if object_id(modificarProveedor) is not null
	drop procedure modificarProveedor;
go
create procedure modificarProveedor
@rtnProveedor int,
@nombre varchar(30),
@tipo varchar(30)
as
begin
	if (@rtnProveedor is NULL) or (@nombre is  NUll ) or (@tipo is  NULL) 
		print 'ERROR----!!!Se debe insertar registros Validos!!!!'
	else
		update Proveedor set nombre=@nombre ,tipo=@tipo
		where rtnProveedor=@rtnProveedor;
		

end
go

select * from Proveedor;
exec modificarProveedor 710, 'Toshiba', 'Carcasas';
--exec modificarProveedor 510,'Donatelo Michelangelo', 2,null;
--exec modificarTecnico null,'Walter Zelaya',5,510;
--select * from Proveedor;
-- Eliminar Tecnico
go
if object_id(eliminarProveedor) is not null
	drop procedure eliminarProveedor;
go
create procedure eliminarProveedor
@rtnProveedor int
as
begin
	if (@rtnProveedor is NULL) 
		print 'Se debe insertar el id correcto'	
	else
	delete from Proveedor
	where rtnProveedor = @rtnProveedor;
end
go
--exec eliminarProveedor 711;
--select * from Proveedor;
