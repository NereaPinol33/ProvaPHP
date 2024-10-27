<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta titulo="viewport" content="width=device-width, initial-scale=1.0">
    <title><?= $title ?></title>
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
</head>
<body class="bg-green-50 flex flex-col min-h-screen">
<header class="bg-green-700 text-white p-4">
    <div class="container mx-auto flex justify-between items-center">
        <h1 class="text-2xl font-bold">
            <a href="/" class="hover:text-green-200">Entertainment Database</a>
        </h1>
        <nav>
            <ul class="flex space-x-4">
                <li><a href="/" class="hover:text-green-200">Home</a></li>
                <li><a href="/films" class="hover:text-green-200">Films</a></li>
                <li><a href="/actors" class="hover:text-green-200">Actors</a></li>
            </ul>
        </nav>
    </div>
</header>
