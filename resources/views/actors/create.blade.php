<main class="flex-grow p-4 sm:p-8">
    <div class="max-w-2xl mx-auto bg-white shadow-md rounded-lg p-6" style="background: #f28e1c70 ">
        <h2 class="text-4xl sm:text-7xl font-bold mb-6 sm:mb-8 text-center uppercase tracking-wide text-shadow">
            <span class="spooky-font text-shadow" style="background-color: transparent; color: #ff9419;">Añadir nuevo actor</span>
        </h2>
        <form action="/actores/store" method="POST" class="space-y-4">
            <div class="font-serif" class="mb-4">
                <label for="nombre"  style="color: #d4abfa" class="text-shadow block text-xl font-medium">Nombre:</label>
                <input type="text" id="nombre" name="nombre" required
                    class="mt-1 block w-full border rounded-md p-2 focus:ring-green-500 focus:border-green-500"
                    placeholder="Introduce el nombre">
            </div>

            <div class="font-serif" class="mb-4">
                <label for="fecha_nacimiento" style="color: #d4abfa" class="text-shadow block text-xl font-medium">Fecha de nacimiento:</label>
                <input type="date" id="fecha_nacimiento" name="fecha_nacimiento" required
                    class="mt-1 block w-full border rounded-md p-2 focus:ring-green-500 focus:border-green-500"
                    placeholder="Introduce la fecha de nacimiento">
            </div>

            <div class="font-serif" class="mb-4">
                <label for="nacionalidad" style="color: #d4abfa" class="text-shadow block text-xl font-medium">Nacionalidad:</label>
                <input type="text" id="nacionalidad" name="nacionalidad" required
                    class="mt-1 block w-full border rounded-md p-2 focus:ring-green-500 focus:border-green-500"
                    placeholder="Introduce la nacionalidad">
            </div>

            <div class="font-serif" class="mb-4">
                <label for="biografia" style="color: #d4abfa" class="text-shadow block text-xl font-medium">Biografia:</label>
                <input type="text" id="biografia" name="biografia" required
                    class="mt-1 block w-full border rounded-md p-2 focus:ring-green-500 focus:border-green-500"
                    placeholder="Introduce la biografia">
            </div>

            <div>
                <button type="submit"
                class="text-white px-6 py-3 sm:px-12 sm:py-4 rounded text-xl sm:text-2xl spooky-font" 
                style="background-color: #ff66003f; box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1); transition: background-color 0.3s, box-shadow 0.3s;" 
                onmouseover="this.style.backgroundColor='#ff4500'; this.style.boxShadow='0 8px 12px rgba(0, 0, 0, 0.2)';" 
                onmouseout="this.style.backgroundColor='#ff6600'; this.style.boxShadow='0 4px 6px rgba(0, 0, 0, 0.1)';">
                Añadir actor
                </button>
            </div>
        </form>
        <a href="/actores" style="color: #ff9419" class=" text-shadow mt-4 block">Volver a actores</a>

    </div>
</main>
