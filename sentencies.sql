Create table films (
    id serial primary key,
    title varchar(255) not null,
    year integer not null,
    director varchar(255) not null
);

Insert into films (title, year, director) values ('The Shawshank Redemption', 1994, 'Frank Darabont');
Insert into films (title, year, director) values ('The Godfather', 1972, 'Francis Ford Coppola');
Insert into films (title, year, director) values ('The Dark Knight', 2008, 'Christopher Nolan');
Insert into films (title, year, director) values ('The Lord of the Rings: The Return of the King', 2003, 'Peter Jackson');