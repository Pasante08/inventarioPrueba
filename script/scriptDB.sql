CREATE DATABASE inventarioPrueba;

CREATE TABLE equipo (
  id INT(12) PRIMARY KEY AUTO_INCREMENT NOT NULL,
  serial VARCHAR(20) NOT NULL,
  computer VARCHAR(20) NOT NULL,
  provider VARCHAR(20) NOT NULL,
  model VARCHAR(30) NOT NULL,
  ip INT(5) NOT NULL,
  ipTel INT(5) NOT NULL,
  workstation VARCHAR(20) NOT NULL,
  win_Version VARCHAR(20) NOT NULL,
  active CHAR NOT NULL,
  note VARCHAR(500) NOT NULL,
  user_id INT(12) NOT NULL
);

CREATE TABLE user (
  document INT(12) PRIMARY KEY NOT NULL,
  name VARCHAR(40) NOT NULL,
  userSap VARCHAR(30) NOT NULL,
  user VARCHAR(20) NOT NULL,
  password VARCHAR(20) NOT NULL,
  ext INT(10) NOT NULL,
  job VARCHAR(40) NOT NULL,
  area VARCHAR(40) NOT NULL
);

/*Llave foranea equipo - usuario*/
ALTER TABLE
  equipo
ADD CONSTRAINT
  equipo_ibfk_1
FOREIGN KEY
  (user_id)
REFERENCES
  user(document);
