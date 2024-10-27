<main class="flex-grow p-4 sm:p-8">
    <div class="max-w-2xl mx-auto bg-white shadow-md rounded-lg p-6">
        <h1 class="text-3xl font-bold mb-4 text-green-700">Edit Actor</h1>
        <form action="/actors/update/<?= $actor->id ?>" method="POST" class="space-y-4">
            <input type="hidden" id="id" name="id" value="<?= htmlspecialchars($actor->id) ?>" class="mt-1 block w-full border border-green-300 rounded-md p-2">
            
            <div class="mb-4">
                <label for="nombre" class="block text-sm font-medium text-green-600">Nombre:</label>
                <input type="text" id="nombre" name="nombre" required value="<?= htmlspecialchars($actor->nombre) ?>"
                    class="mt-1 block w-full border border-green-300 rounded-md p-2 focus:ring-green-500 focus:border-green-500"
                    placeholder="Introduce el nombre">
            </div>
            
            <div class="mb-4">
                <label for="fecha_nacimiento" class="block text-sm font-medium text-green-600">Fecha de nacimiento:</label>
                <input type="date" id="fecha_nacimiento" name="fecha_nacimiento" required value="<?= htmlspecialchars($actor->fecha_nacimiento) ?>"
                    class="mt-1 block w-full border border-green-300 rounded-md p-2 focus:ring-green-500 focus:border-green-500"
                    placeholder="Introduce la fecha de nacimiento">
            </div>

            <div class="mb-4">
                <label for="nacionalidad" class="block text-sm font-medium text-green-600">Nacionalidad:</label>
                <input type="text" id="nacionalidad" name="nacionalidad" required value="<?= htmlspecialchars($actor->nacionalidad) ?>"
                    class="mt-1 block w-full border border-green-300 rounded-md p-2 focus:ring-green-500 focus:border-green-500"
                    placeholder="Introduce la nacionalidad">
            </div>

            <div class="mb-4">
                <label for="biografia" class="block text-sm font-medium text-green-600">biografia:</label>
                <input type="text" id="biografia" name="biografia" required
                    class="mt-1 block w-full border border-green-300 rounded-md p-2 focus:ring-green-500 focus:border-green-500" value="<?= htmlspecialchars($actor->biografia) ?>"
                    placeholder="Introduce la biografia">
            </div>
    
            <div>
                <button type="submit"
                    class="w-full bg-green-500 hover:bg-green-700 text-white font-bold py-2 px-4 rounded">
                    Actualizar actor
                </button>
            </div>
        </form>
        <a href="/actors" class="text-green-500 hover:text-green-700 mt-4 block">Volver a actores</a>
    </div>
</main>