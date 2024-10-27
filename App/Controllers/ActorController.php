<?php

namespace App\Controllers;

use App\Models\Actor;
use Exception;

class ActorController
{
    public function index()
    {
        try {
            $actors = Actor::getAll();
            return view('actors/index', ['actors' => $actors]);
        } catch (Exception $e) {
            // Log the error
            error_log($e->getMessage());
            return view('errors/500', ['message' => 'Error retrieving actors']);
        }
    }

    public function create()
    {
        return view('actors/create');
    }

    public function store()
    {
        try {
            $data = [
                'nombre' => $_POST['nombre'],
                'fecha_nacimiento' => $_POST['fecha_nacimiento'],
                'nacionalidad' => $_POST['nacionalidad'],
                'biografia' => $_POST['biografia']
            ];

            Actor::create($data);
            header('Location: /actors');
        } catch (Exception $e) {
            // Log the error
            error_log($e->getMessage());
            return view('errors/500', ['message' => 'Error creating actor']);
        }
    }

    public function edit($id)
    {
        try {
            $actor = Actor::find($id);
            if (!$actor) {
                return view('errors/404', ['message' => 'Actor not found']);
            }
            return view('actors/edit', ['actor' => $actor]);
        } catch (Exception $e) {
            // Log the error
            error_log($e->getMessage());
            return view('errors/500', ['message' => 'Error retrieving actor']);
        }
    }

    public function update($id)
    {
        try {
            $data = [
                'nombre' => $_POST['nombre'],
                'fecha_nacimiento' => $_POST['fecha_nacimiento'],
                'nacionalidad' => $_POST['nacionalidad'],
                'biografia' => $_POST['biografia']
            ];

            Actor::update($id, $data);
            header('Location: /actors');
        } catch (Exception $e) {
            // Log the error
            error_log($e->getMessage());
            return view('errors/500', ['message' => 'Error updating actor']);
        }
    }

    public function delete($id)
    {
        try {
            $actor = Actor::find($id);
            if (!$actor) {
                return view('errors/404', ['message' => 'Actor not found']);
            }
            return view('actors/delete', ['actor' => $actor]);
        } catch (Exception $e) {
            // Log the error
            error_log($e->getMessage());
            return view('errors/500', ['message' => 'Error retrieving actor']);
        }
    }

    public function destroy($id)
    {
        try {
            Actor::delete($id);
            header('Location: /actors');
        } catch (Exception $e) {
            // Log the error
            error_log($e->getMessage());
            return view('errors/500', ['message' => 'Error deleting actor']);
        }
    }
}
