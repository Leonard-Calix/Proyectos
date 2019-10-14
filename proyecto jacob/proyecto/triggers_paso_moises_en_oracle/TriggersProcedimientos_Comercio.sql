--Agrega la Inserci�n a la Bit�cora
CREATE OR REPLACE TRIGGER INSERT_COMERCIO
  AFTER INSERT ON COMERCIO
      FOR EACH ROW
        DECLARE
        V_USERNAME Varchar(20);
        V_FECHA DATE;
        BEGIN
          SELECT User INTO V_USERNAME FROM DUAL;
          SELECT CAST (SYSTIMESTAMP AS DATE) INTO V_FECHA FROM DUAL;
          INSERT INTO BITACORA (Accion,Usuario,Fecha ,Tabla) VALUES('Inserci�n '||:NEW.RTN, V_USERNAME,V_Fecha,'COMERCIO');
        END;
/

--Agrega la Eliminaci�n a la Bit�cora
CREATE OR REPLACE TRIGGER DELETE_COMERCIO
  BEFORE DELETE ON COMERCIO
      FOR EACH ROW
        DECLARE
        V_USERNAME Varchar(20);
        V_FECHA DATE;
        BEGIN
          SELECT User INTO V_USERNAME FROM DUAL;
          SELECT CAST (SYSTIMESTAMP AS DATE) INTO V_FECHA FROM DUAL;
          INSERT INTO BITACORA (Accion,Usuario,Fecha ,Tabla) VALUES('Eliminaci�n '||:OLD.RTN,V_USERNAME,V_Fecha,'COMERCIO');
        END;
/

--Agrega la Actualizaci�n a la Bit�cora
CREATE OR REPLACE TRIGGER UPDATE_COMERCIO
  AFTER UPDATE ON COMERCIO
      FOR EACH ROW
        DECLARE
        V_USERNAME Varchar(20);
        V_FECHA DATE;
        BEGIN
          SELECT User INTO V_USERNAME FROM DUAL;
          SELECT CAST (SYSTIMESTAMP AS DATE) INTO V_FECHA FROM DUAL;
          INSERT INTO BITACORA (Accion,Usuario,Fecha ,Tabla) VALUES('Actualizaci�n '||:NEW.RTN,V_USERNAME,V_Fecha,'COMERCIO');
        END;
/

--Procedimiento Almacenado para Crear un COMERCIO
CREATE OR REPLACE PROCEDURE Create_Comercio (
  RTN INTEGER,
  Cant_Maquinas INTEGER,
  Nom_Com VARCHAR,
  Tipo_Com VARCHAR,
  Ubicacion VARCHAR,
  Zona IN VARCHAR)
  AS
  BEGIN
    --El RTN y Cantidad de M�quinas no puede ser Negativo
        IF (RTN<0 OR Cant_Maquinas<0) THEN
          raise_application_error (-20000,'NO puede haber NEGATIVOS!');
        ELSE
          INSERT INTO COMERCIO VALUES (RTN, Cant_Maquinas, Nom_Com, Tipo_Com, Ubicacion, Zona);
        END IF;
  END;
/
--AS� SE EJECUTA
--EXECUTE CREATE_COMERCIO(1122,213,'DF','DF','DF','SDF');
--AS� SE ELIMINA
--DROP PROCEDURE CREATE_COMERCIO;

--Procedimiento Almacenado para Actualizar un COMERCIO
CREATE OR REPLACE PROCEDURE Update_Comercio(
  U_RTN INTEGER,
  U_Cant_Maquinas INTEGER,
  U_Nom_Com VARCHAR,
  U_Tipo_Com VARCHAR,
  U_Ubicacion VARCHAR,
  U_Zona VARCHAR)
  AS
  BEGIN
    --El RTN y Cantidad de M�quinas no puede ser Negativo
        IF (U_RTN<0 OR U_Cant_Maquinas<0) THEN
          raise_application_error (-20000,'NO puede haber NEGATIVOS!');
        ELSE
          UPDATE COMERCIO SET
          Cant_Maquinas=U_Cant_Maquinas,
          Nom_Com=U_Nom_Com,
          Tipo_Com=U_Tipo_Com,
          Ubicacion=U_Ubicacion,
          Zona=U_Zona
          WHERE RTN=U_RTN;
        END IF;
  END;
 /
--  EXECUTE CREATE_COMERCIO(1122,213,'DF','DF','DF','SDF');
--  SELECT * FROM COMERCIO;
--  EXECUTE Update_Comercio(1122,5513,'DGFF','DREDFF','DDDFF','SDDF');

--Procedimiento Almacenado para Eliminar un COMERCIO
CREATE OR REPLACE PROCEDURE Delete_Comercio (
  D_RTN IN INTEGER)
  AS
  BEGIN
    DELETE FROM COMERCIO WHERE RTN=D_RTN;
  END;
  /
--EXECUTE DELETE_COMERCIO (1122);