<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Demo Web - Leasing Coches</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>

    <header class="header">
        <h1 class="title">Llista de pel·lícules</h1>
    </header>

    <div class="main-content">
        <section class="search-section">
            <h2 class="titol-buscador">Quina peli estas buscant?</h2>
           
            <form method="GET" action="">
                <input type="text" name="search" placeholder="Escriu el nom, director o any..." value="<?php echo isset($_GET['search']) ? $_GET['search'] : ''; ?>">
                <button type="submit">Buscar</button>
            </form>
        </section>

        <section class="best-deals">
            <h2>¡Les millors pel·lícules!</h2>
            <div class="peli-deals">
                <?php
                $films = [
        [
            "name" => "Dune",
            "director" => "George Miller",
            "year" => "2015"
        ],
        [
            "name" => "Blade Runner 2049",
            "director" => "Denis Villeneuve",
            "year" => "2017"
        ],
        [
            "name" => "Mad Max: Fury Road",
            "director" => "George Miller",
            "year" => "2015"
        ],
        [
            "name" => "Avatar",
            "director" => "James Cameron",
            "year" => "2009"
        ],
        [
            "name" => "The Dark Knight",
            "director" => "Christopher Nolan",
            "year" => "2008"
        ]
    ];          

    $search = isset($_GET['search']) ? strtolower($_GET['search']) : '';

               
    function searchFilter($peli, $search) {
        return strpos(strtolower($peli['name']), $search) !== false || 
        strpos(strtolower($peli['director']), $search) !== false ||
        strpos(strtolower($peli['year']), $search) !== false;
    }

               
    $filteredfilms = array_filter($films, function($peli) use ($search) {
        return searchFilter($peli, $search);
    });

    if (count($filteredfilms) > 0) {
        foreach ($filteredfilms as $peli) {
            echo "<div class='peli'>";
            echo "<h3>{$peli['name']}</h3>";
            echo "<p class='director'>Director: {$peli['director']}</p>";
            echo "<p>{$peli['description']}</p>";
            echo "<p class='year'>Any: {$peli['year']}</p>";
            echo "</div>";
        }
                } else {
                    echo "<p>No s'han trobat pel·lícules per al terme de cerca '{$search}'</p>";
                }
                 // Función para mostrar la lista de películas
     function displayFilms($films, $title) {
        echo "<h2>$title</h2>";
        echo '<ul>';
        foreach ($films as $film) {
            echo '<li>';
            echo '<strong>Nombre:</strong> ' . htmlspecialchars($film['name']) . '<br>';
            echo '<strong>Director:</strong> ' . htmlspecialchars($film['director']) . '<br>';
            echo '<strong>Año:</strong> ' . htmlspecialchars($film['year']);
            echo '</li>';
        }
        echo '</ul>';
    }
      // Filtrar películas anteriores a 2010 usando una función lambda
    $filmsBefore2010 = array_filter($films, function($film) {
        return $film['year'] < 2010;
    });
    // Mostrar películas anteriores a 2010
    displayFilms($filmsBefore2010, "Pel·lícules anteriores al 2010");
                ?>
                <img src="chino.jpg" alt="Imatge giratòria" class="rotating">
            </div>
        </section>
    </div>

</body>
</html>
