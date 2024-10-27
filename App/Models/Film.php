<?php

namespace App\Models;

use Core\App;

class Film
{
    protected static $table = 'films';

    //funcio per a que torne totes les pelis
    public static function getAll()
    {
        $db = App::get('database');
        $statement = $db->getConnection()->prepare('SELECT * FROM ' . self::$table);
        $statement->execute();
        return $statement->fetchAll();
    }

    //funcio per a buscar una peli
    public static function find($id)
    {
        $db = App::get('database')->getConnection();
        $statement = $db->prepare('SELECT * FROM ' . self::$table . ' WHERE id = :id');
        $statement->execute(array('id' => $id));
        return $statement->fetch(\PDO::FETCH_OBJ);
    }

    //funcio create
    public static function create($data)
    {
        $db = App::get('database')->getConnection();
        $statement = $db->prepare('INSERT INTO '. static::$table . "(titulo, director, fecha_estreno, genero, duracion) VALUES (:titulo, :director, :fecha_estreno, :genero, :duracion)");
        $statement->bindValue(':titulo', $data['titulo']);
        $statement->bindValue(':director', $data['director']);
        $statement->bindValue(':fecha_estreno', $data['fecha_estreno']);
        $statement->bindValue(':genero', $data['genero']);
        $statement->bindValue(':duracion', $data['duracion']);
        $statement->execute();
    }

    //funcio update
    public static function update($id, $data)
    {
        $db = App::get('database')->getConnection();
        $statement = $db->prepare("UPDATE ". static::$table . " SET titulo = :titulo, director = :director, fecha_estreno = :fecha_estreno, genero = :genero, duracion = :duracion WHERE id = :id");
        $statement->bindValue(':id', $id);
        $statement->bindValue(':titulo', $data['titulo']);
        $statement->bindValue(':director', $data['director']);
        $statement->bindValue(':fecha_estreno', $data['fecha_estreno']);
        $statement->bindValue(':genero', $data['genero']);
        $statement->bindValue(':duracion', $data['duracion']);
        $statement->execute();
    }

    //funcio delete
    public static function delete($id)
    {
        $db = App::get('database')->getConnection();
        $statement = $db->prepare('DELETE FROM '. static::$table . ' WHERE id = :id');
        $statement->bindValue(':id', $id);
        $statement->execute();
    }

}
