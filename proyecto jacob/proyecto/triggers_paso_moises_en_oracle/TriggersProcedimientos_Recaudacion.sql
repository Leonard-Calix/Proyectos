--Agrega la Inserción a la Bitácora
CREATE OR REPLACE TRIGGER INSERT_RECAUDACION
  AFTER INSERT ON RECAUDACION
      FOR EACH ROW 
        DECLARE 
        V_USERNAME Varchar(20);
        V_FECHA DATE;
        BEGIN 
          SELECT User INTO V_USERNAME FROM DUAL;
          SELECT CAST (SYSTIMESTAMP AS DATE) INTO V_FECHA FROM DUAL;
          INSERT INTO BITACORA (Accion,Usuario,Fecha ,Tabla) VALUES('Inserción '||:NEW.Cod_Rec, V_USERNAME,V_Fecha,'RECAUDACION');
        END;
/

--Agrega la Eliminación a la Bitácora
CREATE OR REPLACE TRIGGER DELETE_RECAUDACION
  BEFORE DELETE ON RECAUDACION
      FOR EACH ROW 
        DECLARE 
        V_USERNAME Varchar(20);
        V_FECHA DATE;
        BEGIN 
          SELECT User INTO V_USERNAME FROM DUAL;
          SELECT CAST (SYSTIMESTAMP AS DATE) INTO V_FECHA FROM DUAL;
          INSERT INTO BITACORA (Accion,Usuario,Fecha ,Tabla) VALUES('Eliminación '||:OLD.Cod_Rec,V_USERNAME,V_Fecha,'RECAUDACION');
        END;
/

--Agrega la Actualización a la Bitácora
CREATE OR REPLACE TRIGGER UPDATE_RECAUDACION
  AFTER UPDATE ON RECAUDACION
      FOR EACH ROW 
        DECLARE 
        V_USERNAME Varchar(20);
        V_FECHA DATE;
        BEGIN 
          SELECT User INTO V_USERNAME FROM DUAL;
          SELECT CAST (SYSTIMESTAMP AS DATE) INTO V_FECHA FROM DUAL;
          INSERT INTO BITACORA (Accion,Usuario,Fecha ,Tabla) VALUES('Actualización '||:NEW.Cod_Rec,V_USERNAME,V_Fecha,'RECAUDACION');
        END;
/
      
--Procedimiento Almacenado para Crear un RECAUDACION
CREATE OR REPLACE PROCEDURE Create_Recaudacion(
  Cod_Rec VARCHAR,
  Estado_Reneg VARCHAR,
  Bol_Minorista VARCHAR,
  Avg_Rec FLOAT,
  Bol_Mayorista VARCHAR,
  Mont_Men FLOAT,
  Total_Rec FLOAT)
  AS 
  BEGIN
    IF ((Bol_Minorista!='F' AND Bol_Minorista!='T') 
    OR (Bol_Mayorista!='F' AND Bol_Mayorista!='T')
    OR (Estado_Reneg!='F' AND Estado_Reneg!='T')) THEN
      raise_application_error (-20001,'El Tipo de RECAUDACIÓN Y/0 ESTADO deben ser DEFINIDOS!');
    ELSE 
      INSERT INTO RECAUDACION VALUES (Cod_Rec, Estado_Reneg, Bol_Minorista, Avg_Rec, Bol_Mayorista, Mont_Men, Total_Rec);
    END IF;
  END;
/

--Procedimiento Almacenado para Actualizar un RECAUDACION
CREATE OR REPLACE PROCEDURE Update_Recaudacion(
  U_Cod_Rec VARCHAR,
  U_Estado_Reneg VARCHAR,
  U_Bol_Minorista VARCHAR,
  U_Avg_Rec FLOAT,
  U_Bol_Mayorista VARCHAR,
  U_Mont_Men FLOAT,
  U_Total_Rec FLOAT)
  AS 
  BEGIN
    IF ((U_Bol_Minorista!='F' AND U_Bol_Minorista!='T') 
    OR (U_Bol_Mayorista!='F' AND U_Bol_Mayorista!='T')
    OR (U_Estado_Reneg!='F' AND U_Estado_Reneg!='T')) THEN
      raise_application_error (-20001,'El Tipo de RECAUDACIÓN Y/0 ESTADO deben ser DEFINIDOS!');
    ELSE 
      UPDATE RECAUDACION SET  
      Estado_Reneg=U_Estado_Reneg,
      Bol_Minorista=U_Bol_Minorista,
      Avg_Rec=U_Avg_Rec,
      Bol_Mayorista=U_Bol_Mayorista,
      Mont_Men=U_Mont_Men,
      Total_Rec=U_Total_Rec
      WHERE Cod_Rec=U_Cod_Rec;
    END IF;
  END;
 / 

--Procedimiento Almacenado para Eliminar un RECAUDACION
CREATE OR REPLACE PROCEDURE Delete_Recaudacion (
  D_Cod_Rec INTEGER)
  AS 
  BEGIN
    DELETE FROM RECAUDACION WHERE Cod_Rec=D_Cod_Rec;
  END;
  /
--EXECUTE Create_Recaudacion('1','T','F',1,'T',1,1);
--SELECT * FROM RECAUDACION;
--EXECUTE Update_Recaudacion('1','F','T',1,'F',1,1);
--EXECUTE Delete_Recaudacion('1');