CREATE OR REPLACE PROCEDURE Create_Reparacion(
  ZONA_REP IN VARCHAR,
  NUM_SERIE_MAQ IN VARCHAR)
  AS
    aux INTEGER;
    CODI_REP INTEGER;
    COD_TEC INTEGER;
    
    BEGIN
    WHILE (true)
        LOOP
          /*  SELECT T.ID_TEC INTO COD_TEC FROM TECNICO T WHERE T.REPARACIONES IN(SELECT MIN(REPARACIONES) FROM TECNICO GROUP BY REPARACIONES) AND rownum = 1;*/
          SELECT round(dbms_random.value(1,1000000))  INTO  CODI_REP from dual;
          SELECT COUNT(*) INTO aux FROM REPARACION WHERE Cod_Rep=CODI_REP;
          EXIT WHEN (aux<1);
        END LOOP;
        INSERT INTO REPARACION VALUES (to_char(CODI_REP), ZONA_REP, (SELECT T.ID_TEC  FROM TECNICO T WHERE T.REPARACIONES IN(SELECT MIN(REPARACIONES) FROM TECNICO GROUP BY REPARACIONES) AND rownum = 1), NUM_SERIE_MAQ);
        UPDATE TECNICO SET REPARACIONES=REPARACIONES+1 WHERE ID_TEC=COD_TEC;
    END;
    /
    
    create or replace 
PROCEDURE Update_Maquina(
  U_Tipo_Maq VARCHAR,
  U_Num_Serie VARCHAR,
  U_Estado_Maq VARCHAR,
  U_RTN_Com INTEGER)
  AS 
    Zona_Maq VARCHAR(30);
    aux INTEGER;
    CODI_REP INTEGER;
    U_Num_Fallos INTEGER;
  BEGIN
    IF (U_Num_Fallos<0) THEN
        raise_application_error (-20001,'NO puede haber NEGATIVOS!');
    ELSIF (U_Estado_Maq!='FUNCIONANDO' AND U_Estado_Maq!='FALLANDO' AND U_Estado_Maq!='FUERA DE SERVICIO') THEN
        raise_application_error (-20002,'Error en ESTADO!');
    ELSE 
      IF (U_Estado_Maq='FALLANDO') THEN
     SELECT num_fallos+1 INTO U_Num_Fallos FROM MAQUINA WHERE NUM_SERIE=u_num_serie;
        SELECT Zona INTO Zona_Maq FROM COMERCIO WHERE RTN=U_RTN_Com;
        WHILE (true)
        LOOP
          SELECT round(dbms_random.value(1,1000000))  INTO  CODI_REP from dual;
          SELECT COUNT(*) INTO aux FROM REPARACION WHERE Cod_Rep=CODI_REP;
          EXIT WHEN (aux<1);
          
        END LOOP;
          UPDATE TECNICO SET REPARACIONES=REPARACIONES+1 WHERE ID_TEC=(SELECT T.ID_TEC  FROM TECNICO T WHERE T.REPARACIONES IN(SELECT MIN(REPARACIONES) FROM TECNICO GROUP BY REPARACIONES) AND rownum = 1);
        INSERT INTO REPARACION VALUES (to_char(CODI_REP), Zona_Maq, ((SELECT T.ID_TEC  FROM TECNICO T WHERE T.REPARACIONES IN(SELECT MIN(REPARACIONES) FROM TECNICO GROUP BY REPARACIONES) AND rownum = 1)), U_Num_Serie);
        
        ELSE 
          SELECT num_fallos INTO U_Num_Fallos FROM MAQUINA WHERE NUM_SERIE=u_num_serie;
      END IF;
      
       UPDATE MAQUINA SET  
      Num_Fallos=U_Num_Fallos,
      Tipo_Maq=U_Tipo_Maq,
      Estado_Maq=U_Estado_Maq,
      RTN_Com=U_RTN_Com
      WHERE Num_Serie=U_Num_Serie;
      
    END IF;
  END;
  /