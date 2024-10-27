<?php

namespace App\Models;

use Core\App;

class Actor
{
    protected static $table = 'actors';

    // Función para obtener todos los actores
    public static function getAll()
    {
        $db = App::get('database');
        $statement = $db->getConnection()->prepare('SELECT * FROM ' . self::$table);
        $statement->execute();
        return $statement->fetchAll();
    }

    // Función para buscar un actor por ID
    public static function find($id)
    {
        $db = App::get('database')->getConnection();
        $statement = $db->prepare('SELECT * FROM ' . self::$table . ' WHERE id = :id');
        $statement->execute(['id' => $id]);
        return $statement->fetch(\PDO::FETCH_OBJ);
    }

    // Función para crear un nuevo actor
    public static function create($data)
    {
        $db = App::get('database')->getConnection();
        $statement = $db->prepare('INSERT INTO ' . static::$table . " (nombre, fecha_nacimiento, nacionalidad, biografia) VALUES (:nombre, :fecha_nacimiento, :nacionalidad, :biografia)");
        $statement->bindValue(':nombre', $data['nombre']);
        $statement->bindValue(':fecha_nacimiento', $data['fecha_nacimiento']);
        $statement->bindValue(':nacionalidad', $data['nacionalidad']);
        $statement->bindValue(':biografia', $data['biografia']);
        $statement->execute();
    }

    // Función para actualizar un actor
    public static function update($id, $data)
    {
        $db = App::get('database')->getConnection();
        $statement = $db->prepare("UPDATE " . static::$table . " SET nombre = :nombre, fecha_nacimiento = :fecha_nacimiento, nacionalidad = :nacionalidad, biografia = :biografia WHERE id = :id");
        $statement->bindValue(':id', $id);
        $statement->bindValue(':nombre', $data['nombre']);
        $statement->bindValue(':fecha_nacimiento', $data['fecha_nacimiento']);
        $statement->bindValue(':nacionalidad', $data['nacionalidad']);
        $statement->bindValue(':biografia', $data['biografia']);
        $statement->execute();
    }

    // Función para eliminar un actor
    public static function delete($id)
    {
        $db = App::get('database')->getConnection();
        $statement = $db->prepare('DELETE FROM ' . static::$table . ' WHERE id = :id');
        $statement->bindValue(':id', $id);
        $statement->execute();
    }
}