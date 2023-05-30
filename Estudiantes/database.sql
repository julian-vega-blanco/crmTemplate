CREATE DATABASE campus;

CREATE TABLE campers(
    
    id INT primary key AUTO_INCREMENT,
    nombres VARCHAR(50) NOT NULL, 
    direccion VARCHAR(50),
    logros VARCHAR (60),
    review VARCHAR (60),
    skills VARCHAR (60),
    ser VARCHAR (60),
    ingles VARCHAR (60),
    especialidad VARCHAR (60)

);

CREATE TABLE users(
    id INT PRIMARY KEY AUTO_INCREMENT,
    idCamper INT NOT NULL,
    email VARCHAR (80) NOT NULL,
    username VARCHAR (80) NOT NULL,
    password VARCHAR (60) NOT NULL,
    FOREIGN KEY (idCamper) REFERENCES campers(id)
);


