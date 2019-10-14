--Agrega la Inserción a la Bitácora
CREATE OR REPLACE TRIGGER  Insertar_Maquina
  AFTER INSERT ON Maquina
      FOR EACH ROW 
        DECLARE 
        V_USERNAME Varchar(20);
        V_FECHA DATE;
        BEGIN 
          SELECT USER INTO V_USERNAME FROM DUAL;
          SELECT CAST (SYSTIMESTAMP AS DATE) INTO V_FECHA FROM DUAL;
          INSERT INTO Bitacora (Accion,Usuario,Fecha ,Tabla )VALUES('Insercion'||: NEW.NUM_SERIE,V_USERNAME,V_Fecha,'Maquina');
       END;
       /
       
--Agrega la Eliminación a la Bitácora
CREATE OR REPLACE TRIGGER Delete_Maquina
  BEFORE DELETE ON Maquina
      FOR EACH ROW 
        DECLARE 
        V_USERNAME Varchar(20);
        V_FECHA DATE;
        BEGIN 
          SELECT USER INTO V_USERNAME FROM DUAL;
          SELECT CAST (SYSTIMESTAMP AS DATE) INTO V_FECHA FROM DUAL;
          INSERT INTO Bitacora (Accion,Usuario,Fecha ,Tabla )VALUES('Eliminado'||: OLD.NUM_SERIE,V_USERNAME,V_Fecha,'Maquina');
       END;
       /
       
--Agrega la Actualización a la Bitácora
CREATE OR REPLACE TRIGGER Update_Maquina
  AFTER UPDATE ON Maquina
      FOR EACH ROW 
        DECLARE 
        V_USERNAME Varchar(20);
        V_FECHA DATE;
        BEGIN 
          SELECT USER INTO V_USERNAME FROM DUAL;
          SELECT CAST (SYSTIMESTAMP AS DATE) INTO V_FECHA FROM DUAL;
          INSERT INTO Bitacora (Accion,Usuario,Fecha ,Tabla )VALUES('Modificado'||: NEW.NUM_SERIE,V_USERNAME,V_Fecha,'Maquina');
       END;
        /
--Evita que el Numero de Fallos de Máquina sea negativo
--CREATE OR REPLACE TRIGGER INSERT_MAQUINA_VA
--  BEFORE INSERT OR UPDATE ON MAQUINA
--    FOR EACH ROW 
--      BEGIN
--        IF (:NEW.Num_Fallos<0) THEN
--        raise_application_error (-20001,'NO puede haber NEGATIVOS!');
--        END IF;
--      END;

--Procedimiento Almacenado para Crear un MAQUINA
CREATE OR REPLACE PROCEDURE Create_Maquina(
  Tipo_Maq VARCHAR,
  RTN_Com INTEGER)
  AS
  aux INTEGER;
  Nume_Serie INTEGER;
  BEGIN 
      WHILE (true)
        LOOP
          SELECT round(dbms_random.value(1,1000000))  INTO  Nume_Serie from dual;
          SELECT COUNT(*) INTO aux FROM MAQUINA WHERE Num_Serie=Nume_Serie;
          EXIT WHEN (aux<1);
        END LOOP;
      INSERT INTO MAQUINA VALUES (0, Tipo_Maq , Nume_Serie, 'FUNCIONANDO', RTN_Com);
  END;
  /
--EXECUTE Create_Maquina('FUNCIONANDO','FUNCIONANDO', 66);
--select * from bitacora;

--Procedimiento Almacenado para Actualizar un MAQUINA
CREATE OR REPLACE PROCEDURE Update_Maquina(
  U_Num_Fallos INTEGER,
  U_Tipo_Maq VARCHAR,
  U_Num_Serie VARCHAR,
  U_Estado_Maq VARCHAR,
  U_RTN_Com INTEGER)
  AS 
    Zona_Maq VARCHAR(30);
    aux INTEGER;
    CODI_REP INTEGER;
  BEGIN
    IF (U_Num_Fallos<0) THEN
        raise_application_error (-20001,'NO puede haber NEGATIVOS!');
    ELSIF (U_Estado_Maq!='FUNCIONANDO' AND U_Estado_Maq!='FALLANDO' AND U_Estado_Maq!='FUERA DE SERVICIO') THEN
        raise_application_error (-20002,'Error en ESTADO!');
    ELSE 
      UPDATE MAQUINA SET  
      Num_Fallos=U_Num_Fallos,
      Tipo_Maq=U_Tipo_Maq,
      Estado_Maq=U_Estado_Maq,
      RTN_Com=U_RTN_Com
      WHERE Num_Serie=U_Num_Serie;
      IF (U_Estado_Maq='FALLANDO') THEN
        SELECT Zona INTO Zona_Maq FROM COMERCIO WHERE RTN=U_RTN_Com;
        WHILE (true)
        LOOP
          SELECT round(dbms_random.value(1,1000000))  INTO  CODI_REP from dual;
          SELECT COUNT(*) INTO aux FROM REPARACION WHERE Cod_Rep=CODI_REP;
          EXIT WHEN (aux<1);
        END LOOP;
        INSERT INTO REPARACION VALUES (to_char(CODI_REP), Zona_Maq, (SELECT min(Reparaciones) from TECNICO), U_Num_Serie);
      END IF;
    END IF;
  END;
  /

--Procedimiento Almacenado para Eliminar un MAQUINA
CREATE OR REPLACE PROCEDURE Delete_Maquina(
  D_Num_Serie VARCHAR)
  AS 
  BEGIN
    DELETE FROM MAQUINA WHERE Num_Serie=D_Num_Serie;
  END;
/
--EXECUTE CREATE_COMERCIO(66,213,'DF','DF','DF','SDF');  
--EXECUTE Create_Maquina(6789,'T','F','T',66);
--SELECT * FROM Maquina;
--EXECUTE Update_Maquina(67189,'66g','F','Tdd',66);
--EXECUTE Delete_Maquina('F');