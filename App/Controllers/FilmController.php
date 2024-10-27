<?php

namespace App\Controllers;

use App\Models\Film;
use Exception;

class FilmController
{
    public function index()
    {
        try {
            $films = Film::getAll();
            return view('films/index', ['films' => $films]);
        } catch (Exception $e) {
            error_log($e->getMessage());
            return view('errors/500', ['message' => 'Error retrieving films']);
        }
    }

    public function create()
    {
        return view('films/create');
    }

    public function store()
    {
        try {
            $data = [
                'titulo' => $_POST['titulo'],
                'director' => $_POST['director'],
                'fecha_estreno' => $_POST['fecha_estreno'],
                'genero' => $_POST['genero'],
                'duracion' => $_POST['duracion']
            ];
            
            $film = Film::create($data);
            header('Location: /films');
            exit();
        } catch (Exception $e) {
            error_log($e->getMessage());
            echo $e->getMessage(); // Imprime el mensaje de error
            return view('errors/500', ['message' => 'Error creating film']);
        }
    }

    public function edit($id)
    {
        try {
            $film = Film::find($id);
            if (!$film) {
                return view('errors/404', ['message' => 'Film not found']);
            }
            return view('films/edit', ['film' => $film]);
        } catch (Exception $e) {
            error_log($e->getMessage());
            return view('errors/500', ['message' => 'Error retrieving film']);
        }
    }

    public function update($id, $data)
    {
        try {
            $data = [
                'id' => $id,
                'titulo' => $_POST['titulo'],
                'director' => $_POST['director'],
                'fecha_estreno' => $_POST['fecha_estreno'],
                'genero' => $_POST['genero'],
                'duracion' => $_POST['duracion']
            ];

            Film::update($id, $data);
            header('Location: /films');
            exit();
        } catch (Exception $e) {
            error_log($e->getMessage());
            return view('errors/500', ['message' => 'Error updating film']);
        }
    }

    public function delete($id)
    {
        try {
            $film = Film::find($id);
            if (!$film) {
                return view('errors/404', ['message' => 'Film not found']);
            }
            return view('films/delete', ['film' => $film]);
        } catch (Exception $e) {
            error_log($e->getMessage());
            return view('errors/500', ['message' => 'Error retrieving film']);
        }
    }

    public function destroy($id)
    {
        try {
            Film::delete($id);
            header('Location: /films');
            exit();
        } catch (Exception $e) {
            error_log($e->getMessage());
            return view('errors/500', ['message' => 'Error deleting film']);
        }
    }
}
