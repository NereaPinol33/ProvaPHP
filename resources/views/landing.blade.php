<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Films & Actors Database</title>
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
    <style>
        .gradient-bg {
            background: linear-gradient(135deg, #6a11cb 0%, #2575fc 100%);
        }
        .text-shadow {
            text-shadow: 2px 2px 4px rgba(0,0,0,0.5);
        }
    </style>
</head>
<body class="gradient-bg min-h-screen flex flex-col justify-center items-center p-4">
    <div class="text-center text-white">
        <h1 class="text-6xl sm:text-7xl lg:text-8xl font-bold mb-8 text-shadow">
            Films & Actors
        </h1>
        <p class="text-2xl sm:text-3xl mb-12 text-shadow">
            Explore our Entertainment Database
        </p>
    </div>
    
    <div class="flex flex-col sm:flex-row justify-center items-center space-y-6 sm:space-y-0 sm:space-x-6 w-full max-w-2xl">
        <a href="/films" class="bg-white hover:bg-purple-100 text-purple-700 font-bold py-4 px-8 rounded-full transition duration-300 ease-in-out transform hover:scale-105 w-full sm:w-auto text-center text-xl">
            Explore Films
        </a>
        <a href="/actors" class="bg-white hover:bg-blue-100 text-blue-700 font-bold py-4 px-8 rounded-full transition duration-300 ease-in-out transform hover:scale-105 w-full sm:w-auto text-center text-xl">
            Discover Actors
        </a>
    </div>
</body>
</html>