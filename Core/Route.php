<?php
//Fitxer per gestionar les rutes
namespace Core;

use RuntimeException;
use App\Controllers\FilmController;
use App\Controllers\ActorController;

class Route
{
    //creem array en les rutes
    protected $routes = [];

    //creem funcio per afegir rutes a l'array
    public function register($route)
    {
        $this->routes[] = $route;
    }

    //funcio per rebre un array de rutes i assignar a la propietat routes
    public function define($route)
    {
        $this->routes = $route;
        return $this;
    }

    //funcio per redirigir la url solicitada a un controlador
    public function redirect($uri)
    {
        //partim la url
        $parts = explode('/', trim($uri, '/'));

        //Inici (Landing page)
        if ($uri === '/' || $uri === '') {
            $content = $this->getViewContent('../resources/views/landing.blade.php');

            echo $content;
            return;
        }

        //Films
        if ($uri === '/films') {
            $controller = 'App\Controllers\FilmController';
            $controllerInstance = new $controller();
            $data  = ['title' => 'Films'];
            $header = $this->getViewContent('../resources/views/layout/header.blade.php', $data);
            echo $header;
            $content = $controllerInstance->index();
            $footer = $this->getViewContent('../resources/views/layout/footer.blade.php');
            echo $footer;
            return;
        }

        //create
        if ($parts[0] === 'create') {
            $controller = 'App\Controllers\FilmController';
            $controllerInstance = new $controller();
            $data  = ['title' => 'Films'];
            $header = $this->getViewContent('../resources/views/layout/header.blade.php', $data);
            echo $header;
            $content = $controllerInstance->create();
            $footer = $this->getViewContent('../resources/views/layout/footer.blade.php');
            echo $footer;
            return;
        }

        //Utilitzant POST guardem
        if ($parts[0] === 'store' && $_SERVER['REQUEST_METHOD'] === 'POST') {
            $controller = 'App\Controllers\FilmController';
            //creem nova instancia
            $controllerInstance = new $controller();
            //creem variable per agafar les dades de la petició post
            $data = $_POST;
            return $controllerInstance->store($data);
        }


        //delete en GET  mirem que sigue delete en la id
        if ($parts[0] === 'delete' && isset($parts[1])) {
            $controller = 'App\Controllers\FilmController';
            $controllerInstance = new $controller();
            $data  = ['title' => 'Films'];
            $header = $this->getViewContent('../resources/views/layout/header.blade.php', $data);
            echo $header;
            return $controllerInstance->delete($parts[1]);
            $footer = $this->getViewContent('../resources/views/layout/footer.blade.php');
            echo $footer;
            return;
        }


        //destroy en POST
        if ($parts[0] === 'destroy' && $_SERVER['REQUEST_METHOD'] === 'POST') {
            $controller = 'App\Controllers\FilmController';
            //creem nova instancia
            $controllerInstance = new $controller();
            return $controllerInstance->destroy($_POST['id']);
        }


        //edit en GET
        if ($parts[0] === 'edit' && $parts[1]) {
            $controller = 'App\Controllers\FilmController';
            $controllerInstance = new $controller();
            $data  = ['title' => 'Films'];
            $header = $this->getViewContent('../resources/views/layout/header.blade.php', $data);
            echo $header;
            $content = $controllerInstance->edit($parts[1]);
            $footer = $this->getViewContent('../resources/views/layout/footer.blade.php');
            echo $footer;
            return;
        }

        //Actualitzar en POST
        if ($parts[0] === 'update' && $_SERVER['REQUEST_METHOD'] === 'POST') {
            $controller = 'App\Controllers\FilmController';
            //creem nova instancia
            $controllerInstance = new $controller();
            //creem variable per agafar les dades de la petició post
            $data = $_POST;
            return $controllerInstance->update($data['id'], $data);
        }

        //Actors (placeholder, to be implemented)
        if ($uri === '/actors') {
            $controller = 'App\Controllers\ActorController';
            $controllerInstance = new $controller();
            $data = ['title' => 'Actors'];
            $header = $this->getViewContent('../resources/views/layout/header.blade.php', $data);
            echo $header;
            $content = $controllerInstance->index();
            $footer = $this->getViewContent('../resources/views/layout/footer.blade.php');
            echo $footer;
            return;
        }

        //create
        if ($parts[0] == 'actors' && $parts[1] === 'create') {
            $controller = 'App\Controllers\ActorController';
            $controllerInstance = new $controller();
            $data  = ['title' => 'Actor '];
            $header = $this->getViewContent('../resources/views/layout/header.blade.php', $data);
            echo $header;
            $content = $controllerInstance->create();
            $footer = $this->getViewContent('../resources/views/layout/footer.blade.php');
            echo $footer;
            return;
        }

        //Utilitzant POST guardem
        if ($parts[0] == 'actors' && $parts[1] === 'store' && $_SERVER['REQUEST_METHOD'] === 'POST') {
            $controller = 'App\Controllers\ActorController';
            //creem nova instancia
            $controllerInstance = new $controller();
            //creem variable per agafar les dades de la petició post
            $data = $_POST;
            return $controllerInstance->store($data);
        }


        //delete en GET  mirem que sigue delete en la id
        if ($parts[0] == 'actors' && $parts[1] === 'delete' && isset($parts[2])) {
            $controller = 'App\Controllers\ActorController';
            $controllerInstance = new $controller();
            $data  = ['title' => 'Eliminar actor'];
            $header = $this->getViewContent('../resources/views/layout/header.blade.php', $data);
            echo $header;
            return $controllerInstance->delete($parts[2]);
            $footer = $this->getViewContent('../resources/views/layout/footer.blade.php');
            echo $footer;
            return;
        }


        //destroy en POST
        if ($parts[0] == 'actors' && $parts[1] === 'destroy' && $_SERVER['REQUEST_METHOD'] === 'POST') {
            $controller = 'App\Controllers\ActorController';
            //creem nova instancia
            $controllerInstance = new $controller();
            return $controllerInstance->destroy($_POST['id']);
        }


        //edit en GET
        if ($parts[0] == 'actors' && $parts[1] == 'edit' && $parts[2]) {
            $controller = 'App\Controllers\ActorController';
            $controllerInstance = new $controller();
            $data  = ['title' => 'Actor'];
            $header = $this->getViewContent('../resources/views/layout/header.blade.php', $data);
            echo $header;
            $content = $controllerInstance->edit($parts[2]);
            $footer = $this->getViewContent('../resources/views/layout/footer.blade.php');
            echo $footer;
            return;
        }

        //Actualitzar en POST
        if ($parts[0] == 'actors' && $parts[1] === 'update' && $_SERVER['REQUEST_METHOD'] === 'POST') {
            $controller = 'App\Controllers\ActorController';
            //creem nova instancia
            $controllerInstance = new $controller();
            //creem variable per agafar les dades de la petició post
            $data = $_POST;
            return $controllerInstance->update($data['id'], $data);
        }


        //si no es cap dels anteriors retornem la vista 404
        return require '../resources/views/errors/404.blade.php';


        //        //si ruta no existeix redirigim a vista d'error
        //        if(!array_key_exists($uri, $this->routes)) {
        //            require '../resources/views/errors/404.php';
        //            return $this;
        //        }
        //
        //        //si no troba el controlador
        //        if (!file_exists($this->routes[$uri])) {
        //            throw new RuntimeException("No s'ha trobat el controlador:". $this->routes[$uri]);
        //        }
        //
        //        require $this->routes[$uri];
        //        return $this;
    }

    private function getViewContent($path, $data = [])
    {
        ob_start();
        extract($data);
        include $path;
        return ob_get_clean();
    }

    public function direct($uri)
    {
        if (array_key_exists($uri, $this->routes)) {
            return $this->callAction(
                ...explode('@', $this->routes[$uri])
            );
        }

        $this->handleDynamicRoutes($uri);

        throw new \Exception('No route defined for this URI.');
    }

    protected function callAction($controller, $action)
    {
        $controller = "App\\Controllers\\{$controller}";
        $controller = new $controller;

        if (! method_exists($controller, $action)) {
            throw new \Exception(
                "{$controller} does not respond to the {$action} action."
            );
        }

        return $controller->$action();
    }

    protected function handleDynamicRoutes($uri)
    {
        // Handle dynamic routes for films
        if (preg_match('/^films\/(\d+)\/edit$/', $uri, $matches)) {
            return (new FilmController())->edit($matches[1]);
        }

        if (preg_match('/^films\/(\d+)\/update$/', $uri, $matches)) {
            return (new FilmController())->update($matches[1]);
        }

        if (preg_match('/^films\/(\d+)\/delete$/', $uri, $matches)) {
            return (new FilmController())->delete($matches[1]);
        }

        if (preg_match('/^films\/(\d+)\/destroy$/', $uri, $matches)) {
            return (new FilmController())->destroy($matches[1]);
        }

        // Handle dynamic routes for actors
        if (preg_match('/^actors\/(\d+)\/edit$/', $uri, $matches)) {
            return (new ActorController())->edit($matches[1]);
        }

        if (preg_match('/^actors\/(\d+)\/update$/', $uri, $matches)) {
            return (new ActorController())->update($matches[1]);
        }

        if (preg_match('/^actors\/(\d+)\/delete$/', $uri, $matches)) {
            return (new ActorController())->delete($matches[1]);
        }

        if (preg_match('/^actors\/(\d+)\/destroy$/', $uri, $matches)) {
            return (new ActorController())->destroy($matches[1]);
        }
    }
}
