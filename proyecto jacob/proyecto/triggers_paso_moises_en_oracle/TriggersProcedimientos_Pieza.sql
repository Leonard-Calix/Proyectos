--Agrega la Inserción a la Bitácora
CREATE OR REPLACE TRIGGER INSERT_PIEZA
  AFTER INSERT ON PIEZA
      FOR EACH ROW 
        DECLARE 
        V_USERNAME Varchar(20);
        V_FECHA DATE;
        BEGIN 
          SELECT User INTO V_USERNAME FROM DUAL;
          SELECT CAST (SYSTIMESTAMP AS DATE) INTO V_FECHA FROM DUAL;
          INSERT INTO BITACORA (Accion,Usuario,Fecha ,Tabla) VALUES('Inserción '||: NEW.NO_SERIE, V_USERNAME,V_Fecha,'PIEZA');
        END;
/

--Agrega la Eliminaión a la Bitácora
CREATE OR REPLACE TRIGGER DELETE_PIEZA
  BEFORE DELETE ON PIEZA
      FOR EACH ROW 
        DECLARE 
        V_USERNAME Varchar(20);
        V_FECHA DATE;
        BEGIN 
          SELECT User INTO V_USERNAME FROM DUAL;
          SELECT CAST (SYSTIMESTAMP AS DATE) INTO V_FECHA FROM DUAL;
          INSERT INTO BITACORA (Accion,Usuario,Fecha ,Tabla) VALUES('Eliminación '||: OLD.NO_SERIE,V_USERNAME,V_Fecha,'PIEZA');
        END;
/

--Agrega la Actualización a la Bitácora
CREATE OR REPLACE TRIGGER UPDATE_PIEZA
  AFTER UPDATE ON PIEZA
      FOR EACH ROW 
        DECLARE 
        V_USERNAME Varchar(20);
        V_FECHA DATE;
        BEGIN 
          SELECT User INTO V_USERNAME FROM DUAL;
          SELECT CAST (SYSTIMESTAMP AS DATE) INTO V_FECHA FROM DUAL;
          INSERT INTO BITACORA (Accion,Usuario,Fecha ,Tabla) VALUES('Actualización '||: NEW.NO_SERIE,V_USERNAME,V_Fecha,'PIEZA');
        END;
/

--Procedimiento Almacenado para Crear un PIEZA
CREATE OR REPLACE PROCEDURE Create_Pieza(
  Num_Serie_MPieza VARCHAR,
  ID_Proveedor_Pieza INTEGER,
  No_Serie VARCHAR,
  Marca_Pieza VARCHAR,
  Cod_Rep_Pieza VARCHAR,
  Tipo_Pieza VARCHAR)
  AS 
  BEGIN 
    INSERT INTO PIEZA VALUES (Num_Serie_MPieza, ID_Proveedor_Pieza, No_Serie, Marca_Pieza, Cod_Rep_Pieza, Tipo_Pieza);
  END;
/

--Procedimiento Almacenado para Actualizar un PIEZA
CREATE OR REPLACE PROCEDURE Update_Pieza(
  U_Num_Serie_MPieza VARCHAR,
  U_ID_Proveedor_Pieza INTEGER,
  U_No_Serie VARCHAR,
  U_Marca_Pieza VARCHAR,
  U_Cod_Rep_Pieza VARCHAR,
  U_Tipo_Pieza VARCHAR)
  AS 
  BEGIN
    UPDATE PIEZA SET  
    Num_Serie_MPieza=U_Num_Serie_MPieza,
    ID_Proveedor_Pieza=U_ID_Proveedor_Pieza,
    Marca_Pieza=U_Marca_Pieza,
    Cod_Rep_Pieza=U_Cod_Rep_Pieza,
    Tipo_Pieza=U_Tipo_Pieza
    WHERE No_Serie=U_No_Serie;
  END;
 / 

--Procedimiento Almacenado para Eliminar un RECAUDACION
CREATE OR REPLACE PROCEDURE Delete_Pieza(
  D_No_Serie INTEGER)
  AS 
  BEGIN
    DELETE FROM PIEZA WHERE No_Serie=D_No_Serie;
  END;
  /