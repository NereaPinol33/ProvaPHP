<main class="flex-grow p-4 sm:p-8">
    <div class="max-w-2xl mx-auto bg-white shadow-md rounded-lg p-6" style="background: #f28e1c70 ">
        <h2 class="text-4xl sm:text-7xl font-bold mb-6 sm:mb-8 text-center uppercase tracking-wide text-shadow">
        <span class="spooky-font text-shadow" style="background-color: transparent; color: #ff9419;">Añadir nueva película</span>
        </h2>
        <form action="/peliculas/store" method="POST" class="space-y-4">
            <div class="font-serif" class="mb-4">
                <label for="title" style="color: #d4abfa" class="text-shadow block text-xl font-medium">Título:</label>
                <input type="text" name="titulo" required
                    class="mt-1 block w-full border rounded-md p-2 focus:ring-green-500 focus:border-green-500"
                    placeholder="Introduce el título">
            </div>

            <div class="font-serif" class="mb-4">
                <label for="director" style="color: #d4abfa" class="text-shadow block text-xl font-medium">Director:</label>
                <input type="text" id="director" name="director" required
                    class="mt-1 block w-full border rounded-md p-2 focus:ring-green-500 focus:border-green-500"
                    placeholder="Introduce el director">
            </div>

            <div class="font-serif" class="mb-4">
                <label for="fecha_estreno" style="color: #d4abfa" class="text-shadow block text-xl font-medium">Fecha de estreno:</label>
                <input type="date" id="fecha_estreno" name="fecha_estreno" required
                    class="mt-1 block w-full border rounded-md p-2 focus:ring-green-500 focus:border-green-500"
                    placeholder="Enter release year">
            </div>

            <div class="font-serif" class="mb-4">
                <label for="genero" style="color: #d4abfa" class="block text-xl text-shadow">Género:</label>
                <select  name="genero" id="genero" required
                    class="mt-1 block w-full border rounded-md p-2 focus:ring-green-500 focus:border-green-500">
                    <option class="font-serif" value="">Selecciona un género</option>
                    <option value="Acción">Acción</option>
                    <option value="Terror">Terror</option>
                    <option value="Comedia">Comedia</option>
                    <option value="Fantasía">Fantasía</option>
                </select>
            </div>

            <div class="font-serif" class="mb-4">
                <label for="duracion" style="color: #d4abfa"  class="text-shadow block text-xl font-medium">Duracion:</label>
                <input type="number" id="duracion" name="duracion" required
                    class="mt-1 block w-full border rounded-md p-2 focus:ring-green-500 focus:border-green-500"
                    placeholder="Introduce la duración">
            </div>
            <div>
                <button type="submit"
                    class="text-white px-6 py-3 sm:px-12 sm:py-4 rounded text-xl sm:text-2xl spooky-font" 
                    style="background-color: #ff66003f; box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1); transition: background-color 0.3s, box-shadow 0.3s;" 
                    onmouseover="this.style.backgroundColor='#ff4500'; this.style.boxShadow='0 8px 12px rgba(0, 0, 0, 0.2)';" 
                    onmouseout="this.style.backgroundColor='#ff6600'; this.style.boxShadow='0 4px 6px rgba(0, 0, 0, 0.1)';">
                    Añadir película
                </button>
            </div>
        </form>
        <a href="/peliculas" style="color: #ff9419" class=" text-shadow mt-4 block">Volver a películas</a>
    </div>
</main>
