/*Creació de la taula pel·lícules*/
CREATE TABLE films (
    id INT AUTO_INCREMENT PRIMARY KEY,
    titulo VARCHAR(255) NOT NULL,
    director VARCHAR(255) NOT NULL,
    fecha_estreno DATE NOT NULL,
    genero VARCHAR(100) NOT NULL,
    duracion INT NOT NULL
);

/*Inserim dades en la taula*/
INSERT INTO films (titulo, director, fecha_estreno, genero, duracion) VALUES ('The Matrix', 'The Wachowskis', '1999-03-31', 'Comedia', 136);

/*Creació de la taula actors*/
CREATE TABLE actors (
    id INT PRIMARY KEY AUTO_INCREMENT,
    nombre VARCHAR(255) NOT NULL,
    fecha_nacimiento DATE,
    nacionalidad VARCHAR(100),
    biografia TEXT
);

/*Inserim dades en la taula*/
INSERT INTO actors (nombre, fecha_nacimiento, nacionalidad, biografia) VALUES ('Laurence Fishburne', '1961-07-30', 'Estados Unidos', 'Laurence Fishburne es un actor, guionista, productor y director de cine estadounidense.');
