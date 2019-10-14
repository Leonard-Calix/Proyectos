--Agrega la Inserci�n a la Bit�cora
CREATE OR REPLACE TRIGGER INSERT_HACER_MAQUINA
  AFTER INSERT ON HACER_MAQUINA
      FOR EACH ROW
        DECLARE
        V_USERNAME Varchar(20);
        V_FECHA DATE;
        BEGIN
          SELECT User INTO V_USERNAME FROM DUAL;
          SELECT CAST (SYSTIMESTAMP AS DATE) INTO V_FECHA FROM DUAL;
          INSERT INTO BITACORA (Accion,Usuario,Fecha ,Tabla) VALUES('Inserci�n '||:NEW.COD_ENSAM, V_USERNAME,V_Fecha,'HACER_MAQUINA');
        END;
/

--Agrega la Eliminaci�n a la Bit�cora
CREATE OR REPLACE TRIGGER DELETE_HACER_MAQUINA
  BEFORE DELETE ON HACER_MAQUINA
      FOR EACH ROW
        DECLARE
        V_USERNAME Varchar(20);
        V_FECHA DATE;
        BEGIN
          SELECT User INTO V_USERNAME FROM DUAL;
          SELECT CAST (SYSTIMESTAMP AS DATE) INTO V_FECHA FROM DUAL;
          INSERT INTO BITACORA (Accion,Usuario,Fecha ,Tabla) VALUES('Eliminaci�n '||:OLD.COD_ENSAM,V_USERNAME,V_Fecha,'HACER_MAQUINA');
        END;
/

--Agrega la Actualizaci�n a la Bit�cora
CREATE OR REPLACE TRIGGER UPDATE_HACER_MAQUINA
  AFTER UPDATE ON HACER_MAQUINA
      FOR EACH ROW
        DECLARE
        V_USERNAME Varchar(20);
        V_FECHA DATE;
        BEGIN
          SELECT User INTO V_USERNAME FROM DUAL;
          SELECT CAST (SYSTIMESTAMP AS DATE) INTO V_FECHA FROM DUAL;
          INSERT INTO BITACORA (Accion,Usuario,Fecha ,Tabla) VALUES('Actualizaci�n '||:NEW.COD_ENSAM,V_USERNAME,V_Fecha,'HACER_MAQUINA');
        END;
/