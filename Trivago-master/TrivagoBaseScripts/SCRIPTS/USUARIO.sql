--Crear nuevo usuario(esquema) con el password "PASSWORD" 
CREATE USER TRIVAGO
  IDENTIFIED BY "oracle"
  DEFAULT TABLESPACE USERS
  TEMPORARY TABLESPACE TEMP;
--asignar cuota ilimitada al tablespace por defecto  
ALTER USER TRIVAGO QUOTA UNLIMITED ON USERS;

--Asignar privilegios basicos
GRANT create session TO TRIVAGO;
GRANT create table TO TRIVAGO;
GRANT create view TO TRIVAGO;
GRANT create any trigger TO TRIVAGO;
GRANT create any procedure TO TRIVAGO;
GRANT create sequence TO TRIVAGO;
GRANT create synonym TO TRIVAGO;
GRANT create materialized view TO TRIVAGO;