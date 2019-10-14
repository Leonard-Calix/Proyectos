--Agrega la Inserci�n a la Bit�cora
CREATE OR REPLACE TRIGGER INSERT_ENSAMBLAJE
  AFTER INSERT ON ENSAMBLAJE
      FOR EACH ROW
        DECLARE
        V_USERNAME Varchar(20);
        V_FECHA DATE;
        BEGIN
          SELECT User INTO V_USERNAME FROM DUAL;
          SELECT CAST (SYSTIMESTAMP AS DATE) INTO V_FECHA FROM DUAL;
          INSERT INTO BITACORA (Accion,Usuario,Fecha ,Tabla) VALUES('Inserci�n '||:NEW.COD_ENSAM, V_USERNAME,V_Fecha,'ENSAMBLAJE');
        END;
/

--Agrega la Eliminaci�n a la Bit�cora
CREATE OR REPLACE TRIGGER DELETE_ENSAMBLAJE
  BEFORE DELETE ON ENSAMBLAJE
      FOR EACH ROW
        DECLARE
        V_USERNAME Varchar(20);
        V_FECHA DATE;
        BEGIN
          SELECT User INTO V_USERNAME FROM DUAL;
          SELECT CAST (SYSTIMESTAMP AS DATE) INTO V_FECHA FROM DUAL;
          INSERT INTO BITACORA (Accion,Usuario,Fecha ,Tabla) VALUES('Eliminaci�n '||:OLD.COD_ENSAM,V_USERNAME,V_Fecha,'ENSAMBLAJE');
        END;
/

--Agrega la Actualizaci�n a la Bit�cora
CREATE OR REPLACE TRIGGER UPDATE_ENSAMBLAJE
  AFTER UPDATE ON ENSAMBLAJE
      FOR EACH ROW
        DECLARE
        V_USERNAME Varchar(20);
        V_FECHA DATE;
        BEGIN
          SELECT User INTO V_USERNAME FROM DUAL;
          SELECT CAST (SYSTIMESTAMP AS DATE) INTO V_FECHA FROM DUAL;
          INSERT INTO BITACORA (Accion,Usuario,Fecha ,Tabla) VALUES('Actualizaci�n '||:NEW.COD_ENSAM,V_USERNAME,V_Fecha,'ENSAMBLAJE');
        END;
/
-- procedimientos almacenados PARA
CREATE OR REPLACE PROCEDURE Create_Ensamblaje(
  ID_TEC_HA IN INTEGER,
  ID_TEC_RE IN INTEGER)
  AS
  aux INTEGER;
  num_Ensam INTEGER;
  BEGIN
    IF (ID_TEC_RE<0 OR ID_TEC_HA<0  ) THEN
      raise_application_error (-20000,'NO puede haber NEGATIVOS o valores en NULL!');
    ELSE 
      WHILE (true)
        LOOP
          SELECT round(dbms_random.value(1,1000000))  INTO  num_Ensam from dual;
          SELECT COUNT(*) INTO aux FROM ENSAMBLAJE WHERE Cod_Ensam=num_Ensam;
          EXIT WHEN (aux<1);
        END LOOP;
      INSERT INTO ENSAMBLAJE VALUES (to_char(num_Ensam), 'COMPROBANDO', ID_TEC_HA, ID_TEC_RE);
    END IF;
  END;
/
--select * from tecnico;
--execute create_tecnico(122,'2',234);
--execute create_ensamblaje(122,122);
--execute create_ensamblaje(122,122);
--EXECUTE UPDATE_ENSAMBLAJE('658452','FUNCIONANDO',122,122);
--select * from ensamblaje;
--select * from Maquina

--Procedimiento Almacenado para Actualizar un de la tabla ENSAMBLAJE
  CREATE OR REPLACE PROCEDURE Update_Ensamblaje(
    U_COD_ENSAM VARCHAR,
    U_ESTADO_EN VARCHAR,
    U_ID_TEC_HA INTEGER,
    U_ID_TEC_RE INTEGER)
    AS
    aux INTEGER;
    Nume_Serie INTEGER;
    Com INTEGER;
    BEGIN
      IF (U_ID_TEC_RE<0 OR U_ID_TEC_HA<0 ) THEN
        raise_application_error (-20000,'NO puede haber NEGATIVOS');
      ELSIF (U_ESTADO_EN!='FUNCIONANDO' AND U_ESTADO_EN!='NO FUNCIONANDO' AND U_ESTADO_EN!='COMPROBANDO') THEN
        raise_application_error (-20002,'Error en ESTADO!');  
      ELSE
          UPDATE ENSAMBLAJE SET
          ESTADO_EN = U_ESTADO_EN,
          ID_TEC_HA = U_ID_TEC_HA,
          ID_TEC_RE = U_ID_TEC_RE
          WHERE COD_ENSAM=U_COD_ENSAM;
          if(U_ESTADO_EN = 'FUNCIONANDO') then
            WHILE (true)
            LOOP
                SELECT round(dbms_random.value(1,1000000))  INTO  Nume_Serie from dual;
                SELECT COUNT(*) INTO aux FROM MAQUINA WHERE Num_Serie=Nume_Serie;
                EXIT WHEN (aux<1);
            END LOOP;
              SELECT RTN INTO Com FROM (SELECT RTN FROM COMERCIO ORDER BY dbms_random.value) WHERE rownum = 1;
              INSERT INTO MAQUINA VALUES (0, 'NO DEFINIDO' , to_char(Nume_Serie), 'FUNCIONANDO' , Com);
              --Create_Maquina('NO DEFINIDO', 'FUNCIONANDO', TO_NUMBER(SELECT RTN FROM (SELECT RTN FROM COMERCIO ORDER BY dbms_random.value) WHERE rownum = 1));
          END IF;
        END IF;
    END;
/
SELECT * FROM MAQUINA;
/
  --Procedimiento Almacenado para Eliminar de la Tabla Ensamblaje
  CREATE OR REPLACE PROCEDURE Delete_Ensamblaje (
    D_COD_ENSAM IN VARCHAR)
    AS
    BEGIN
      DELETE FROM ENSAMBLAJE WHERE COD_ENSAM=D_COD_ENSAM;
    END;
/