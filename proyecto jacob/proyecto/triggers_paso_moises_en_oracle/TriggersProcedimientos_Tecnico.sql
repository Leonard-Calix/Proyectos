--Agrega la Inserción a la Bitácora
CREATE OR REPLACE TRIGGER INSERT_TECNICO
  AFTER INSERT ON TECNICO
      FOR EACH ROW 
        DECLARE 
        V_USERNAME Varchar(20);
        V_FECHA DATE;
        BEGIN 
          SELECT User INTO V_USERNAME FROM DUAL;
          SELECT CAST (SYSTIMESTAMP AS DATE) INTO V_FECHA FROM DUAL;
          INSERT INTO BITACORA (Accion,Usuario,Fecha ,Tabla) VALUES('Inserción '||:NEW.ID_TEC,V_USERNAME,V_Fecha,'TECNICO');
        END;
/

--Agrega el la Eliminación a la Bitácora
CREATE OR REPLACE TRIGGER DELETE_TECNICO
  BEFORE DELETE ON TECNICO
      FOR EACH ROW 
        DECLARE 
        V_USERNAME Varchar(20);
        V_FECHA DATE;
        BEGIN 
          SELECT User INTO V_USERNAME FROM DUAL;
          SELECT CAST (SYSTIMESTAMP AS DATE) INTO V_FECHA FROM DUAL;
          INSERT INTO BITACORA (Accion,Usuario,Fecha ,Tabla) VALUES('Eliminación '||:OLD.ID_TEC,V_USERNAME,V_Fecha,'TECNICO');
        END;
/

--Agrega el la Eliminación a la Bitácora
CREATE OR REPLACE TRIGGER UPDATE_TECNICO
  AFTER UPDATE ON TECNICO
      FOR EACH ROW 
        DECLARE 
        V_USERNAME Varchar(20);
        V_FECHA DATE;
        BEGIN 
          SELECT User INTO V_USERNAME FROM DUAL;
          SELECT CAST (SYSTIMESTAMP AS DATE) INTO V_FECHA FROM DUAL;
          INSERT INTO BITACORA (Accion,Usuario,Fecha ,Tabla) VALUES('Actualización '||:NEW.ID_TEC,V_USERNAME,V_Fecha,'TECNICO');
        END;
/

--Procedimiento Almacenado para Crear un TÉCNICO
CREATE OR REPLACE PROCEDURE Create_Tecnico (
  ID_Tec INTEGER,
  Nom_Tec VARCHAR,
  Sueldo_Tec FLOAT)
  AS 
  BEGIN
        IF (ID_Tec<0 OR Sueldo_Tec<0) THEN
          raise_application_error (-20000,'NO puede haber NEGATIVOS!');
        ELSE 
          INSERT INTO TECNICO VALUES (ID_Tec, Nom_Tec, Sueldo_Tec,0);
        END IF;
  END;
/

--Procedimiento Almacenado para Actualizar un TÉCNICO
CREATE OR REPLACE PROCEDURE Update_Tecnico(
  U_ID_Tec INTEGER,
  U_Nom_Tec VARCHAR,
  U_Sueldo_Tec FLOAT,
  U_Reparaciones INTEGER)
  AS
  BEGIN
    IF (U_ID_Tec<0 OR U_Sueldo_Tec<0) THEN
          raise_application_error (-20000,'NO puede haber NEGATIVOS!');
    ELSE
      UPDATE TECNICO SET
      Nom_Tec=U_Nom_Tec,
      Sueldo_Tec=U_Sueldo_Tec,
      Reparaciones = U_Reparaciones
      WHERE ID_Tec=U_ID_Tec;
    END IF;
    END;
 / 

--Procedimiento Almacenado para Eliminar un TÉCNICO
CREATE OR REPLACE PROCEDURE Delete_Tecnico (
  D_ID_Tec IN INTEGER)
  AS 
  BEGIN
    DELETE FROM TECNICO WHERE ID_Tec=D_ID_Tec;
  END;
  /