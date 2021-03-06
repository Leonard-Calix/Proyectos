--Agrega la Inserci�n a la Bit�cora
CREATE OR REPLACE TRIGGER INSERT_RECAUDACION_COMERCIO
  AFTER INSERT ON RECAUDACION_COMERCIO
      FOR EACH ROW
        DECLARE
        V_USERNAME Varchar(20);
        V_FECHA DATE;
        BEGIN
          SELECT User INTO V_USERNAME FROM DUAL;
          SELECT CAST (SYSTIMESTAMP AS DATE) INTO V_FECHA FROM DUAL;
          INSERT INTO BITACORA (Accion,Usuario,Fecha ,Tabla) VALUES('Inserci�n '||:NEW.RTN_RC, V_USERNAME,V_Fecha,'RECAUDACION_COMERCIO');
        END;
/

--Agrega la Eliminaci�n a la Bit�cora
CREATE OR REPLACE TRIGGER DELETE_RECAUDACION_COMERCIO
  BEFORE DELETE ON RECAUDACION_COMERCIO
      FOR EACH ROW
        DECLARE
        V_USERNAME Varchar(20);
        V_FECHA DATE;
        BEGIN
          SELECT User INTO V_USERNAME FROM DUAL;
          SELECT CAST (SYSTIMESTAMP AS DATE) INTO V_FECHA FROM DUAL;
          INSERT INTO BITACORA (Accion,Usuario,Fecha ,Tabla) VALUES('Eliminaci�n '||:OLD.RTN_RC,V_USERNAME,V_Fecha,'RECAUDACION_COMERCIO');
        END;
/

--Agrega la Actualizaci�n a la Bit�cora
CREATE OR REPLACE TRIGGER UPDATE_RECAUDACION_COMERCIO
  AFTER UPDATE ON RECAUDACION_COMERCIO
      FOR EACH ROW
        DECLARE
        V_USERNAME Varchar(20);
        V_FECHA DATE;
        BEGIN
          SELECT User INTO V_USERNAME FROM DUAL;
          SELECT CAST (SYSTIMESTAMP AS DATE) INTO V_FECHA FROM DUAL;
          INSERT INTO BITACORA (Accion,Usuario,Fecha ,Tabla) VALUES('Actualizaci�n '||:NEW.RTN_RC,V_USERNAME,V_Fecha,'RECAUDACION_COMERCIO');
        END;
/
--DROP PROCEDURE CREATE_COMERCIO;
--EXECUTE CREATE_COMERCIO(23432,234,'324','MAYORISTA','324','324');