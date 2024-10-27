
<main class="flex-grow p-4 sm:p-8">
    <div class="max-w-2xl mx-auto bg-white shadow-md rounded-lg p-6">
        <h1 class="text-2xl font-bold mb-4 text-green-700">Eliminar película</h1>
        <p class="text-green-600 mb-4">¿Quieres eliminar la película "<?= htmlspecialchars($actor->nombre) ?>"?</p>
        <form action="/actors/destroy" method="POST" class="mt-4">
            <input type="hidden" id="id" name="id" value="<?= $actor->id ?>">
            <button type="submit" class="bg-red-500 text-white px-4 py-2 rounded hover:bg-red-600 mr-2">Eliminar</button>
        </form>
        <a href="/actors" class="text-green-500 hover:text-green-700 mt-4 block">Volver a actores</a>
    </div>
</main>