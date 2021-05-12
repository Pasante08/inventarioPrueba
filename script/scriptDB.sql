CREATE DATABASE nuruena;

/*Creación equipos*/
CREATE TABLE equipo (
  id INT(12) PRIMARY KEY AUTO_INCREMENT NOT NULL,
  serial VARCHAR(20) NOT NULL,
  computer VARCHAR(20) NOT NULL,
  provider VARCHAR(20) NOT NULL,
  model VARCHAR(30) NOT NULL,
  ip INT(5) NOT NULL,
  ipTel INT(5) NOT NULL,
  win_Version VARCHAR(20) NOT NULL,
  active CHAR NOT NULL,
  comment VARCHAR(500) NOT NULL,
  user_id INT(12) NOT NULL,
  workstation_id INT(12) NOT NULL
);

/*Creación de usuarios*/
CREATE TABLE users (
  id INT(12) PRIMARY KEY AUTO_INCREMENT NOT NULL,
  name VARCHAR(40) NOT NULL,
  userSap VARCHAR(30) NOT NULL,
  user VARCHAR(20) NOT NULL,
  password VARCHAR(20) NOT NULL,
  ext INT(10) NOT NULL,
  sede_id INT(12) NOT NULL,
  area_id INT(12) NOT NULL
);

/*Creación de sedes*/
CREATE TABLE area (
  id INT(12) PRIMARY KEY AUTO_INCREMENT NOT NULL,
  name VARCHAR(30) NOT NULL
);

/*Llave foranea usuarios - areas*/
ALTER TABLE
  users
ADD CONSTRAINT
  users_ibfk_1
FOREIGN KEY
  (area_id)
REFERENCES
  area(id);

/*Llave foranea cargos - areas*/
ALTER TABLE
  charge
ADD CONSTRAINT
  charge_ibfk_1
FOREIGN KEY
  (area_id)
REFERENCES
  area(id);

  /*Llave foranea equipos - usuarioz*/
  ALTER TABLE
    equipo
  ADD CONSTRAINT
    equipo_ibfk_1
  FOREIGN KEY
    (user_id)
  REFERENCES
    users(id);

  /*Llave foranea archivos - areas*/
  ALTER TABLE
    file
  ADD CONSTRAINT
    file_ibfk_1
  FOREIGN KEY
    (area_id)
  REFERENCES
    area(id);

  /*Llave foranea usuarios - sedes*/
  ALTER TABLE
    users
  ADD CONSTRAINT
    users_ibfk_1
  FOREIGN KEY
    (sede_id)
  REFERENCES
    sede(id);

  /*Llave foranea equipo - estacion de trabajo*/
  ALTER TABLE
    equipo
  ADD CONSTRAINT
    equipo_ibfk_1
  FOREIGN KEY
    (workstation_id)
  REFERENCES
    workstation(id);


/*Creación de cargo*/
CREATE TABLE charge (
  id INT(12) PRIMARY KEY AUTO_INCREMENT NOT NULL,
  name VARCHAR(30) NOT NULL,
  area_id INT(12) NOT NULL
)

/*Creación de archivos*/
CREATE TABLE file (
  id INT(12)PRIMARY KEY AUTO_INCREMENT NOT NULL,
  name VARCHAR(40) NOT NULL,
  location  VARCHAR(30) NOT NULL,
  area_id INT(12) NOT NULL
);

/*Creación de sedes*/
CREATE TABLE sede (
  id INT(12) PRIMARY KEY AUTO_INCREMENT NOT NULL,
  name VARCHAR(30) NOT NULL
);

/*Creacion de estacion de trabajo*/
CREATE TABLE workstation (
  id INT(12) PRIMARY KEY AUTO_INCREMENT NOT NULL,
  name VARCHAR(30) NOT NULL
);
