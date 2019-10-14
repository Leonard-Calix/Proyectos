--Agrega la Inserción a la Bitácora
CREATE OR REPLACE TRIGGER  Insertar_Proveedor
  AFTER INSERT ON Proveedores
      FOR EACH ROW 
        DECLARE 
        V_USERNAME Varchar(20);
        V_FECHA DATE;
        BEGIN 
          SELECT USER INTO V_USERNAME FROM DUAL;
          SELECT CAST (SYSTIMESTAMP AS DATE) INTO V_FECHA FROM DUAL;
          INSERT INTO Bitacora (Accion,Usuario,Fecha ,Tabla )VALUES('Insercion'||: NEW.ID_PROVEEDOR,V_USERNAME,V_Fecha,'Proveedores');
       END;
       /
       
--Agrega la Eliminación a la Bitácora
CREATE OR REPLACE TRIGGER Delete_Proveedor
  BEFORE DELETE ON Proveedores
      FOR EACH ROW 
        DECLARE 
        V_USERNAME Varchar(20);
        V_FECHA DATE;
        BEGIN 
          SELECT USER INTO V_USERNAME FROM DUAL;
          SELECT CAST (SYSTIMESTAMP AS DATE) INTO V_FECHA FROM DUAL;
          INSERT INTO Bitacora (Accion,Usuario,Fecha ,Tabla )VALUES('Eliminado'||: OLD.ID_PROVEEDOR,V_USERNAME,V_Fecha,'Proveedores');
       END;
       /
       
--Agrega la Actualización a la Bitácora
CREATE OR REPLACE TRIGGER Update_Proveedor
  AFTER UPDATE ON Proveedores
      FOR EACH ROW 
        DECLARE 
        V_USERNAME Varchar(20);
        V_FECHA DATE;
        BEGIN 
          SELECT USER INTO V_USERNAME FROM DUAL;
          SELECT CAST (SYSTIMESTAMP AS DATE) INTO V_FECHA FROM DUAL;
          INSERT INTO Bitacora (Accion,Usuario,Fecha ,Tabla )VALUES('Modificado'||: NEW.ID_PROVEEDOR,V_USERNAME,V_Fecha,'Proveedores');
       END;
        /

--Procedimiento Almacenado para Crear un PROVEEDOR
CREATE OR REPLACE PROCEDURE Create_Proveedor (
  ID_Proveedor INTEGER,
  Nom_Prov VARCHAR,
  Ubicacion VARCHAR)
  AS 
  BEGIN
        IF (ID_Proveedor<0) THEN
          raise_application_error (-20000,'NO puede haber NEGATIVOS!');
        ELSE 
          INSERT INTO PROVEEDORES VALUES (ID_Proveedor, Nom_Prov, Ubicacion);
        END IF;
  END;
/

--Procedimiento Almacenado para Actualizar un PROVEEDOR
CREATE OR REPLACE PROCEDURE Update_Proveedor(
  U_ID_Proveedor INTEGER,
  U_Nom_Prov VARCHAR,
  U_Ubicacion VARCHAR)
  AS 
  BEGIN
    IF (U_ID_Proveedor<0) THEN
          raise_application_error (-20000,'NO puede haber NEGATIVOS!');
    ELSE 
      UPDATE PROVEEDORES SET  
      Nom_Prov=U_Nom_Prov,
      Ubicacion=U_Ubicacion
      WHERE ID_Proveedor=U_ID_Proveedor;
    END IF;
  END;
 / 

--Procedimiento Almacenado para Eliminar un PROVEEDOR
CREATE OR REPLACE PROCEDURE Delete_Proveedor (
  D_ID_Proveedor INTEGER)
  AS 
  BEGIN
    DELETE FROM PROVEEDORES WHERE ID_Proveedor=D_ID_Proveedor;
  END;
  /
--EXECUTE Create_Proveedor(3456,'DFG','DFG');
--SELECT * FROM PROVEEDORES;
--EXECUTE UPDATE_PROVEEDOR(34456,'SDDFG','4');
--EXECUTE DELETE_PROVEEDOR(3456);