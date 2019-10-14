CREATE PROCEDURE sp_delete_proveedor 
(@idBorrar int, 
 @pcMensaje int output)
 as
BEGIN
	DECLARE @conteo INT;
	set @pcMensaje=0;
	SET @conteo=0;

	SELECT @conteo=COUNT(*) FROM Proveedor WHERE rtnProveedor=@idBorrar;

	IF @conteo> 0 or @conteo IS NULL begin

			DELETE FROM Proveedor where @idBorrar=rtnProveedor
			SET @pcMensaje = 1;
			END;
	ELSE
	begin
		SET @pcMensaje = 0;
	END; 
END