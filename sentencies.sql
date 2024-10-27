CREATE TABLE films (
    id INT AUTO_INCREMENT PRIMARY KEY,
    titulo VARCHAR(255) NOT NULL,
    director VARCHAR(255) NOT NULL,
    fecha_estreno DATE NOT NULL,
    genero VARCHAR(100) NOT NULL,
    duracion INT NOT NULL
);

INSERT INTO films (titulo, director, fecha_estreno, genero, duracion) VALUES ('The Matrix', 'The Wachowskis', '1999-03-31', 'Science Fiction', 136);
INSERT INTO films (titulo, director, fecha_estreno, genero, duracion) VALUES ('The Matrix Reloaded', 'The Wachowskis', '2003-05-15', 'Science Fiction', 138);
INSERT INTO films (titulo, director, fecha_estreno, genero, duracion) VALUES ('The Matrix Revolutions', 'The Wachowskis', '2003-11-05', 'Science Fiction', 129);
INSERT INTO films (titulo, director, fecha_estreno, genero, duracion) VALUES ('The Matrix Resurrections', 'Lana Wachowski', '2021-12-22', 'Science Fiction', 148);

/* 
    Per entrar al nysql:
    mysql -u root -p
    password: root
    use phpTinkering;
*/

INSERT INTO films (title, year, director, genre) VALUES ('The Matrix', 1999, 'The Wachowskis', 'Science Fiction');
ALTER TABLE films ADD COLUMN genre varchar(255) not null;

CREATE TABLE actors (
    id INT PRIMARY KEY AUTO_INCREMENT,
    nombre VARCHAR(255) NOT NULL,
    fecha_nacimiento DATE,
    nacionalidad VARCHAR(100),
    biografia TEXT
);

INSERT INTO actors (nombre, fecha_nacimiento, nacionalidad, biografia) VALUES ('Keanu Reeves', '1964-09-02', 'Canadá', 'Keanu Charles Reeves es un actor, director, productor y músico canadiense.');
INSERT INTO actors (nombre, fecha_nacimiento, nacionalidad, biografia) VALUES ('Carrie-Anne Moss', '1967-08-21', 'Canadá', 'Carrie-Anne Moss es una actriz canadiense.');
INSERT INTO actors (nombre, fecha_nacimiento, nacionalidad, biografia) VALUES ('Laurence Fishburne', '1961-07-30', 'Estados Unidos', 'Laurence Fishburne es un actor, guionista, productor y director de cine estadounidense.');
