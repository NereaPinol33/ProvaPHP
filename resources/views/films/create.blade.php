<main class="flex-grow p-4 sm:p-8">
    <div class="max-w-2xl mx-auto bg-white shadow-md rounded-lg p-6">
        <h1 class="text-2xl font-bold mb-4 text-green-700">Añadir nueva película</h1>
        <form action="/store" method="POST" class="space-y-4">
            <div class="mb-4">
                <label for="title" class="block text-sm font-medium text-green-600">Título:</label>
                <input type="text" name="titulo" required
                    class="mt-1 block w-full border border-green-300 rounded-md p-2 focus:ring-green-500 focus:border-green-500"
                    placeholder="Enter film title">
            </div>

            <div class="mb-4">
                <label for="director" class="block text-sm font-medium text-green-600">Director:</label>
                <input type="text" id="director" name="director" required
                    class="mt-1 block w-full border border-green-300 rounded-md p-2 focus:ring-green-500 focus:border-green-500"
                    placeholder="Introduce el director">
            </div>

            <div class="mb-4">
                <label for="fecha_estreno" class="block text-sm font-medium text-green-600">Fecha de estreno:</label>
                <input type="date" id="fecha_estreno" name="fecha_estreno" required
                    class="mt-1 block w-full border border-green-300 rounded-md p-2 focus:ring-green-500 focus:border-green-500"
                    placeholder="Enter release year">
            </div>

            <div class="mb-4">
                <label for="genero" class="block text-sm font-medium text-green-600">Género:</label>
                <select name="genero" id="genero" required
                    class="mt-1 block w-full border border-green-300 rounded-md p-2 focus:ring-green-500 focus:border-green-500">
                    <option value="">Selecciona un género</option>
                    <option value="Acción">Acción</option>
                    <option value="Terror">Terror</option>
                    <option value="Comedia">Comedia</option>
                    <option value="Fantasía">Fantasía</option>
                </select>
            </div>

            <div class="mb-4">
                <label for="duracion" class="block text-sm font-medium text-green-600">Duracion:</label>
                <input type="number" id="duracion" name="duracion" required
                    class="mt-1 block w-full border border-green-300 rounded-md p-2 focus:ring-green-500 focus:border-green-500"
                    placeholder="Introduce la duración">
            </div>


            <div>
                <button type="submit"
                    class="w-full bg-green-500 hover:bg-green-700 text-white font-bold py-2 px-4 rounded">
                    Añadir película
                </button>
            </div>
        </form>
    </div>
</main>
