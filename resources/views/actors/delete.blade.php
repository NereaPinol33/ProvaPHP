
<main class="flex-grow p-4 sm:p-8">
    <div class="max-w-2xl mx-auto bg-white shadow-md rounded-lg p-6" style="background: #f28e1c70 ">
        <h2 class="text-4xl sm:text-7xl font-bold mb-6 sm:mb-8 text-center uppercase tracking-wide text-shadow">
            <span class="spooky-font text-shadow" style="background-color: transparent; color: #ff9419;">Eliminar Actor</span>
        </h2>        
            <p class="font-serif text-shadow text-xl" class=" mb-4" style="color: #d4abfa">¿Quieres eliminar el actor?"<?= htmlspecialchars($actor->nombre) ?>"?</p>
        <form action="/actores/destroy" method="POST" class="mt-4">
            <input type="hidden" id="id" name="id" value="<?= $actor->id ?>">
            <button type="submit" 
            class="text-white px-6 py-3 sm:px-12 sm:py-4 rounded text-xl sm:text-2xl spooky-font" 
            style="background-color: #ff66003f; box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1); transition: background-color 0.3s, box-shadow 0.3s;" 
            onmouseover="this.style.backgroundColor='#ff4500'; this.style.boxShadow='0 8px 12px rgba(0, 0, 0, 0.2)';" 
            onmouseout="this.style.backgroundColor='#ff6600'; this.style.boxShadow='0 4px 6px rgba(0, 0, 0, 0.1)';">
            Eliminar actor            
            </button>
        </form>
        <a href="/actores" style="color: #ff9419" class=" text-shadow mt-4 block">Volver a actores</a>
    </div>
</main>