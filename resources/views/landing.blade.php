<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Halloween PHP</title>
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
    <style>
        body {
            margin: 0;
            height: 100vh;
            overflow: hidden;
            background: radial-gradient(ellipse at bottom, #1B2735 0%, #090A0F 100%);
        }

        #stars, #stars2, #stars3 {
            position: absolute;
            top: 0;
            left: 0;
            width: 1px;
            height: 1px;
            background: transparent;
        }       
        #stars {
            box-shadow: 
                250px 100px #FFF, 
                1200px 500px #FFF, 
                700px 800px #FFF, 
                1500px 900px #FFF, 
                1900px 1500px #FFF,
                400px 300px #FFF, 
                600px 600px #FFF,
                100px 900px #FFF,
                300px 1200px #FFF,
                1100px 400px #FFF,
                900px 1600px #FFF,
                1400px 200px #FFF,
                200px 500px #FFF,
                1300px 300px #FFF,
                1600px 1200px #FFF,
                1800px 800px #FFF,
                50px 1500px #FFF,
                400px 1800px #FFF,
                800px 400px #FFF,
                150px 1600px #FFF,
                950px 900px #FFF,
                200px 200px #FFF,
                1700px 300px #FFF,
                1200px 1100px #FFF,
                300px 900px #FFF,
                1500px 1000px #FFF,
                1600px 500px #FFF,
                300px 1500px #FFF,
                400px 400px #FFF,
                1000px 200px #FFF, 
                1200px 1100px #FFF,
                300px 900px #FFF,
                1500px 1000px #FFF,
                1600px 500px #FFF,
                300px 1500px #FFF,
                400px 400px #FFF,
                1000px 200px #FFF; 
            animation: animStar 50s linear infinite;
        }       
        #stars2 {
            width: 2px;
            height: 2px;
            box-shadow: 
                500px 1000px #FFF, 
                800px 1200px #FFF, 
                1000px 600px #FFF, 
                1700px 500px #FFF, 
                1300px 1400px #FFF,
                200px 1000px #FFF,
                400px 600px #FFF,
                900px 1400px #FFF,
                600px 800px #FFF,
                300px 1600px #FFF,
                1200px 300px #FFF,
                700px 1300px #FFF,
                1500px 1100px #FFF,
                400px 500px #FFF,
                900px 700px #FFF,
                1000px 1000px #FFF,
                1600px 800px #FFF,
                200px 1500px #FFF,
                800px 300px #FFF,
                1200px 400px #FFF,
                500px 600px #FFF,
                400px 600px #FFF,
                900px 1400px #FFF,
                600px 800px #FFF,
                300px 1600px #FFF,
                1200px 300px #FFF,
                700px 1300px #FFF,
                1500px 1100px #FFF,
                400px 500px #FFF,
                900px 700px #FFF,
                1000px 1000px #FFF,
                1600px 800px #FFF,
                200px 1500px #FFF,
                800px 300px #FFF,
                1200px 400px #FFF,
                500px 600px #FFF; 
            animation: animStar 100s linear infinite;
        }
        #stars3 {
            width: 3px;
            height: 3px;
            box-shadow: 
                300px 1500px #FFF, 
                1000px 200px #FFF, 
                700px 1300px #FFF, 
                1400px 1600px #FFF, 
                1100px 900px #FFF,
                600px 700px #FFF,
                800px 300px #FFF,
                200px 100px #FFF,
                1200px 500px #FFF,
                1800px 300px #FFF,
                1300px 1200px #FFF,
                1600px 600px #FFF,
                50px 400px #FFF,
                500px 1000px #FFF,
                1100px 1400px #FFF,
                1400px 900px #FFF,
                1200px 1100px #FFF,
                600px 500px #FFF,
                800px 1200px #FFF,
                300px 1000px #FFF,
                1600px 500px #FFF,
                600px 500px #FFF,
                800px 1200px #FFF,
                300px 1000px #FFF,
                1600px 500px #FFF; 
            animation: animStar 150s linear infinite;
        }

        @keyframes animStar {
            from { transform: translateY(0); }
            to { transform: translateY(-2000px); }
        }

        .gradient-bg {
            background: linear-gradient(155deg, #F28F1C 10%, #151818 60%);
        }
        .text-shadow {
            text-shadow: 2px 2px 4px rgba(0,0,0,0.7);
        }
        .spooky-font {
            font-family: 'Creepster', cursive;
        }
        .spooky-button {
            background: linear-gradient(135deg, #F28F1C 0%, #feb47b 100%);
            color: #1a202c;
        }
        .spooky-button:hover {
            background: linear-gradient(135deg, #313131 0%, #6E3A9E 100%);
            color: #ffffff;
        }
        .spooky-border {
            border: 2px solid #ff7e5f;
            box-shadow: 0 0 10px rgba(255, 126, 95, 0.5);
        }
    </style>
    <link href="https://fonts.googleapis.com/css2?family=Creepster&display=swap" rel="stylesheet">
</head>
<body>
    <div id="stars"></div>
    <div id="stars2"></div>
    <div id="stars3"></div>

    <div class="gradient-bg min-h-screen flex flex-col justify-center items-center p-4">
        <div class="text-center text-white">
            <h1 class="text-6xl sm:text-7xl lg:text-8xl font-bold mb-8 text-shadow spooky-font">
                PHP de Halloween
            </h1>
            <p class="text-2xl sm:text-3xl mb-12 text-shadow spooky-font">
                Una base de datos de terror
            </p>
        </div>

        <div class="flex flex-col sm:flex-row justify-center items-center space-y-6 sm:space-y-0 sm:space-x-6 w-full max-w-2xl">
            <a href="/peliculas" class="spooky-button spooky-font py-4 px-8 rounded-full transition duration-300 ease-in-out transform hover:scale-105 w-full sm:w-auto text-center text-xl spooky-border">
                Descubre Películas de Terror
            </a>
            <a href="/actores" class="spooky-button spooky-font py-4 px-8 rounded-full transition duration-300 ease-in-out transform hover:scale-105 w-full sm:w-auto text-center text-xl spooky-border">
                Descubre Actores Terroríficos
            </a>
        </div>
    </div>
</body>
</html>
