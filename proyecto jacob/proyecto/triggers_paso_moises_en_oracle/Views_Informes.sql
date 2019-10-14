/*DEBE SELECCIONAR: Ubicacion de la maquina (disponible en la tabla Comercio)
Cantidad a Pagar Disponible en Recaudacion.
Recaudacion Mensual Disponible en recaudacion
La tabla transaccional entre ellas es recaudacion_comercio*/

CREATE OR REPLACE VIEW INFORME_MINORISTA (Ubicacion,Monto_Mensual,Recaudacion_Mensual)AS 
        (SELECT DISTINCT Co.ubicacion, R.Mont_Men,  R.Mont_Men*Co.Cant_Maquinas 
        FROM Recaudacion  R, Comercio  Co
        WHERE Co.Tipo_Com='1' AND R.Bol_Mayorista='S' AND (Co.RTN,R.Cod_Rec)IN(SELECT RTN_RC, COD_REC FROM Recaudacion  NATURAL JOIN Recaudacion_Comercio));
/
/*Debe seleccionar: Nombre del comercio(En la tabla comercio)
Recaudacion mensual del comercio 
y porcentaje que se queda (Tabla recaudación), y el total de dinero que se queda el comercio(Campo calculado, (avg/100)*(montmensual*cantidad maquinas) */

CREATE OR REPLACE VIEW INFORME_MAYORISTA  (Nombre_Mayorista,Monto_Mensual,Porcentaje_mayorista,Valor_Recaudado_por_may) AS
      ( SELECT DISTINCT Co.Nom_Com,R.Mont_Men,R.AVG_REC ,((R.AVG_REC/100)*(Co.Cant_Maquinas*R.Mont_Men))
        FROM Recaudacion  R, Comercio  Co
      WHERE Co.Tipo_Com='2' AND r.bol_minorista='S' AND (Co.RTN,R.Cod_Rec)IN(
                                                                              SELECT RTN_RC, COD_REC
                                                                              FROM Recaudacion  NATURAL JOIN Recaudacion_Comercio));
/      
/*Infome global de todas los comercios minoristas, solamente debe mostrar los datos del comercioñ
Los datos necesarios se encuentran  en la tabla Comercio
Tipo_Com determina si el comercio es minorista (1)*/

CREATE OR REPLACE VIEW INFORME_GLOBAL_MIN (RTN,Numero_Maquinas,Nombre,Ubicación,Zona) AS 
        (SELECT DISTINCT RTN,CANT_MAQUINAS,NOM_COM,UBICACION,ZONA
          FROM Comercio
          WHERE Tipo_Com='1');

/
/*Infome global de todas los comercios Mayoristas, solamente debe mostrar los datos del comercioñ
Los datos necesarios se encuentran en la tabla Comercio
Tipo_Com determina si el comercio es mayorista (2)*/

CREATE OR REPLACE VIEW INFORME_GLOBAL_MAY(RTN,Numero_Maquinas,Nombre,Ubicación,Zona) AS 
        (SELECT DISTINCT RTN,CANT_MAQUINAS,NOM_COM,UBICACION,ZONA
        FROM Comercio
        WHERE Tipo_Com='2');
/