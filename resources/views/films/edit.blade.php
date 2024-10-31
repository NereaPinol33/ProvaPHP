<main class="flex-grow p-4 sm:p-8">
    <div class="max-w-2xl mx-auto bg-white shadow-md rounded-lg p-6" style="background: #f28e1c70 ">
        <h2 class="text-4xl sm:text-7xl font-bold mb-6 sm:mb-8 text-center uppercase tracking-wide text-shadow">
            <span class="spooky-font text-shadow" style="background-color: transparent; color: #ff9419;">Editar película</span>
        </h2>
        <form action="/peliculas/update/<?= $film->id ?>" method="POST" class="space-y-4">
            <input type="hidden" id="id" name="id" value="<?= htmlspecialchars($film->id) ?>" class="mt-1 block w-full border rounded-md p-2">
            <div class="font-serif" class="mb-4">
                <label for="title" style="color: #d4abfa" class="block text-xl text-shadow font-medium">Título:</label>
                <input type="text" name="titulo" required
                    class="mt-1 block w-full border border-green-300 rounded-md p-2"
                    placeholder="Enter film title" value="<?= htmlspecialchars($film->titulo) ?>">
            </div>
    
            <div class="font-serif" class="mb-4">
                <label for="director" style="color: #d4abfa" class="block text-xl text-shadow font-medium">Director:</label>
                <input type="text" id="director" name="director" required value="<?= htmlspecialchars($film->director) ?>"
                    class="mt-1 block w-full border border-green-300 rounded-md p-2 "
                    placeholder="Introduce el director">
            </div>
    
            <div class="font-serif class="mb-4">
                <label for="fecha_estreno" style="color: #d4abfa" class="block text-xl text-shadow font-medium">Fecha de estreno:</label>
                <input type="date" id="fecha_estreno" name="fecha_estreno" required value="<?= htmlspecialchars($film->fecha_estreno) ?>"
                    class="mt-1 block w-full border border-green-300 rounded-md p-2 "
                    placeholder="Enter release year">
            </div>
    
            <div class="font-serif class="mb-4">
                <label for="genero" style="color: #d4abfa" class="block text-xl text-shadow font-medium ">Género:</label>
                <select name="genero" id="genero" required
                    class="mt-1 block w-full border border-green-300 rounded-md p-2 ">
                    <option value="">Selecciona un género</option>
                    <option value="Acción" <?php if ($film->genero == 'Acción') echo 'selected'; ?>>Acción</option>
                    <option value="Terror" <?php if ($film->genero == 'Terror') echo 'selected'; ?>>Terror</option>
                    <option value="Comedia" <?php if ($film->genero == 'Comedia') echo 'selected'; ?>>Comedia</option>
                    <option value="Fantasía" <?php if ($film->genero == 'Fantasía') echo 'selected'; ?>>Fantasía</option>
                </select>
            </div>
    
            <div class="font-serif class="mb-4">
                <label for="duracion" style="color: #d4abfa" class="block text-xl text-shadow font-medium">Duracion:</label>
                <input type="number" id="duracion" name="duracion" required value="<?= htmlspecialchars($film->duracion) ?>"
                    class="mt-1 block w-full border border-green-300 rounded-md p-2"
                    placeholder="Introduce la duración">
            </div>
    
    
            <div>
                <button type="submit"
                class="text-white px-6 py-3 sm:px-12 sm:py-4 rounded text-xl sm:text-2xl spooky-font" 
                style="background-color: #ff66003f; box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1); transition: background-color 0.3s, box-shadow 0.3s;" 
                onmouseover="this.style.backgroundColor='#ff4500'; this.style.boxShadow='0 8px 12px rgba(0, 0, 0, 0.2)';" 
                onmouseout="this.style.backgroundColor='#ff6600'; this.style.boxShadow='0 4px 6px rgba(0, 0, 0, 0.1)';">
                Actulitzar película
                </button>
            </div>
        </form>
        <a href="/peliculas" style="color: #ff9419" class=" text-shadow mt-4 block">Volver a películas</a>
    </div>
</main>