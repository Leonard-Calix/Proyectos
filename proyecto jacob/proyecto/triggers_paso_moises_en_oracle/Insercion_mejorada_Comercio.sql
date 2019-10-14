create or replace 
PROCEDURE Create_Comercio(
    RTN INTEGER, 
    Cant_Maquinas INTEGER, 
    Nom_Com VARCHAR,
    Tipo_Com VARCHAR,
    Ubicacion VARCHAR,
    Zona VARCHAR,
    AVG_Rec FLOAT,
    Mont_Men FLOAT,
    Total_Rec FLOAT
    )
    AS
    aux INTEGER;
  Cod INTEGER;
    BEGIN
      IF(RTN<0 OR Cant_Maquinas<0) THEN
         raise_application_error (-20000,'NO puede haber NEGATIVOS o valores en NULL!');
      ELSIF (Tipo_Com!='MINORISTA' AND Tipo_Com!='MAYORISTA') THEN
        raise_application_error (-20002,'Error en ESTADO!');
      ELSE
       
       /*GENERAMOS LA LLAVE ALEATORIAMENTE. */
          WHILE (true)
          LOOP
            SELECT round(dbms_random.value(1,1000000))  INTO  Cod  from dual;
            SELECT COUNT(*) INTO aux FROM Recaudacion WHERE cod_rec=Cod;
            EXIT WHEN (aux<1);
          END LOOP;
          IF(Tipo_Com='MINORISTA')THEN 
           INSERT INTO COMERCIO VALUES(RTN, Cant_Maquinas, Nom_Com, '1', Ubicacion, Zona);
            INSERT INTO RECAUDACION VALUES(to_char(Cod),'N','N',0.0,'S',Mont_men,total_rec);/*La N significa que no esta en renegociacion*/
            
          ELSE
           INSERT INTO COMERCIO VALUES(RTN, Cant_Maquinas, Nom_Com, '2', Ubicacion, Zona);
           INSERT INTO RECAUDACION VALUES(to_char(Cod),'N','S',AVG_Rec,'N',0.0,total_rec);/*La N significa que no esta en renegociacion*/
        END IF;
         INSERT INTO RECAUDACION_COMERCIO VALUES(RTN,to_char(Cod));
      END IF;
    END;