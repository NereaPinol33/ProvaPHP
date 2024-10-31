<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta titulo="viewport" content="width=device-width, initial-scale=1.0">
    <title><?= $title ?></title>
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
    <style>
        .gradient-bg {
            background: linear-gradient(155deg, #F28F1C 10%, #151818 60%);
        }
        .text-shadow {
            text-shadow: 2px 2px 4px rgba(0,0,0,0.7);
        }
        .spooky-font {
            font-family: 'Creepster', cursive;
        }
        .spooky-link:hover {
            color: #ff7e5f;
        }
    </style>
    <link href="https://fonts.googleapis.com/css2?family=Creepster&display=swap" rel="stylesheet">
</head>
<body class="gradient-bg flex flex-col min-h-screen">
<header class="text-white p-4 text-shadow spooky-font">
    <div class="container mx-auto flex justify-between items-center">
        <h1 class="text-2xl font-bold">
            <a href="/" class="hover:text-green-200 spooky-link">PHP DE HALLOWEEN</a>
        </h1>
        <nav>
            <ul class="flex space-x-4">
                <li><a href="/" class="hover:text-green-200 spooky-link">Inicio</a></li>
                <li><a href="/peliculas" class="hover:text-green-200 spooky-link">Películas</a></li>
                <li><a href="/actores" class="hover:text-green-200 spooky-link">Actores</a></li>
            </ul>
        </nav>
    </div>
</header>