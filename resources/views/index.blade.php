<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Demo Web - Leasing Coches</title>
    <link rel="stylesheet" href="styles.css">
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
            </div>
        </section>
    </div>

</body>
</html>