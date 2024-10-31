
<main class="flex-grow p-4 sm:p-8">
    <div class="max-w-full mx-auto rounded-lg p-4 sm:p-6" style="background-color: transparent;">
        <h2 class="text-5xl sm:text-7xl font-bold mb-6 sm:mb-8 text-center uppercase tracking-wide text-shadow">
            <span class="spooky-font" style="background-color: transparent; color: white;">Actores</span>
        </h2>
        <div class="p-4 mb-4 backdrop-blur-xl flex justify-center hover-button" style="background-color: rgba(255, 255, 255, 0.1); border: 2px solid #F28F1C; width: fit-content; padding: 0;">
            <a href="/actores/create" class="text-white px-3 py-1 sm:px-9 sm:py-2 rounded text-lg sm:text-xl spooky-font" style="background-color: #ff66003f; box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1); transition: background-color 0.3s, box-shadow 0.3s; display: inline-block;" onmouseover="this.style.backgroundColor='#ff4500'; this.style.boxShadow='0 8px 12px rgba(0, 0, 0, 0.2)';" onmouseout="this.style.backgroundColor='#ff6600'; this.style.boxShadow='0 4px 6px rgba(0, 0, 0, 0.1)';">Añadir</a>
        </div>
        
        <div class="hidden md:block overflow-x-auto ">
            <table class="w-full border rounded-lg" style="background-color: rgba(255, 255, 255, 0.15); border-color: #F28F1C; backdrop-filter: blur(10px);">
                <thead>
                    <tr class="uppercase text-lg spooky-font" style="background-color: rgba(161, 91, 10, 0.85); color: #f0d9c7;">
                    <th class="py-2 px-4 font-serif text-center">ID</th>
                    <th class="py-2 px-4 font-serif text-center">NOMBRE</th>
                    <th class="py-2 px-4 font-serif text-center"">FECHA DE NACIMIENTO</th>
                    <th class="py-2 px-4 font-serif text-center">NACIONALIDAD</th>
                    <th class="py-2 px-4 font-serif text-center">BIOGRAFIA</th>
                    <th class="py-2 px-4 font-serif text-center">ACCIONES</th>
                </tr>
            </thead>
            <tbody class="text-lg text-center font-serif" style="color: #ffffff;">
                <?php if (empty($actors)): ?>
            <tr>
                    <td colspan="6" class="py-3 px-6 text-center">Actores no encontrados</td>
            </tr>
            <?php else: ?>
                <?php foreach ($actors as $actor): ?>
                <tr class="border-b hover-link" style="border-color: #F28F1C;">
                    <style>
                        .hover-link:hover {
                            background-color: #f28e1c4d;
                        }
                    </style>
                    <td class="py-3 px-6"><?=$actor['id'] ?></td>
                    <td class="py-3 px-6"><?= htmlspecialchars($actor['nombre']) ?></td>
                    <td class="py-3 px-6"><?= htmlspecialchars($actor['fecha_nacimiento']) ?></td>
                    <td class="py-3 px-6"><?= htmlspecialchars($actor['nacionalidad']) ?></td>
                    <td class="py-3 px-6"><?= htmlspecialchars($actor['biografia']) ?></td>
                    <td class="py-3 px-6">
                        <a href="/actores/edit/<?=$actor['id'] ?>" style="color: #d4abfa;">
                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="inline w-6 h-6">
                                <path stroke-linecap="round" stroke-linejoin="round" d="m16.862 4.487 1.687-1.688a1.875 1.875 0 1 1 2.652 2.652L10.582 16.07a4.5 4.5 0 0 1-1.897 1.13L6 18l.8-2.685a4.5 4.5 0 0 1 1.13-1.897l8.932-8.931Zm0 0L19.5 7.125M18 14v4.75A2.25 2.25 0 0 1 15.75 21H5.25A2.25 2.25 0 0 1 3 18.75V8.25A2.25 2.25 0 0 1 5.25 6H10" />
                            </svg>
                            </a>
                        <a href="/actores/delete/<?=$actor['id'] ?>" style="color: #f26b1c;">
                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="inline w-6 h-6">
                                <path stroke-linecap="round" stroke-linejoin="round" d="m14.74 9-.346 9m-4.788 0L9.26 9m9.968-3.21c.342.052.682.107 1.022.166m-1.022-.165L18.16 19.673a2.25 2.25 0 0 1-2.244 2.077H8.084a2.25 2.25 0 0 1-2.244-2.077L4.772 5.79m14.456 0a48.108 48.108 0 0 0-3.478-.397m-12 .562c.34-.059.68-.114 1.022-.165m0 0a48.11 48.11 0 0 1 3.478-.397m7.5 0v-.916c0-1.18-.91-2.164-2.09-2.201a51.964 51.964 0 0 0-3.32 0c-1.18.037-2.09 1.022-2.09 2.201v.916m7.5 0a48.667 48.667 0 0 0-7.5 0" />
                            </svg>
                        </a>
                    </td>
                </tr>
                <?php endforeach; ?>
                <?php endif; ?>
                </tbody>
            </table>
        </div>

        <div class="md:hidden space-y-4">
            <?php if (empty($actors)): ?>
                <p class="text-center text-shadow font-serif" style="color: #ffffff;">No hay actores</p>
            <?php else: ?>
                <?php foreach ($actors as $actor): ?>
                <div class="border rounded-lg p-4 shadow-sm" style="background-color: rgba(255, 255, 255, 0.15); border-color: #F28F1C; backdrop-filter: blur(10px);">
                    <p class="text-lg font-serif font-bold" style="color: #f0d9c7;">ID: <span style="color: #ffffff;"><?=$actor['id'] ?></span></p>
                    <h3 class="text-3xl font-bold font-serif mt-1 text-shadow" style="color: #ffa641;"><?= htmlspecialchars($actor['nombre']) ?></h3>
                    <p style="color: #f0d9c7;"><span class="font-serif font-bold">Fecha de nacimiento:</span> <span class="font-serif" style="color: #ffffff;"><?= htmlspecialchars($actor['fecha_nacimiento']) ?></span></p>
                    <p style="color: #f0d9c7;"><span class="font-serif font-bold">Nacionalidad:</span> <span class="font-serif" style="color: #ffffff;"><?= htmlspecialchars($actor['nacionalidad']) ?></span></p>
                    <p style="color: #f0d9c7;"><span class="font-serif font-bold">Biografia:</span> <span class="font-serif" style="color: #ffffff;"><?= htmlspecialchars($actor['biografia']) ?></span></p>
                    <td class="py-3 px-6">
                        <a href="/actores/edit/<?=$actor['id'] ?>" class="hover:text-blue-600" style="color: #d4abfa;">
                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="inline w-6 h-6">
                                <path stroke-linecap="round" stroke-linejoin="round" d="m16.862 4.487 1.687-1.688a1.875 1.875 0 1 1 2.652 2.652L10.582 16.07a4.5 4.5 0 0 1-1.897 1.13L6 18l.8-2.685a4.5 4.5 0 0 1 1.13-1.897l8.932-8.931Zm0 0L19.5 7.125M18 14v4.75A2.25 2.25 0 0 1 15.75 21H5.25A2.25 2.25 0 0 1 3 18.75V8.25A2.25 2.25 0 0 1 5.25 6H10" />
                            </svg>
                        </a>
                        <a href="/actores/delete/<?=$actor['id'] ?>" class="hover:text-red-600" style="color: #f26b1c;">
                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="inline w-6 h-6">
                                <path stroke-linecap="round" stroke-linejoin="round" d="m14.74 9-.346 9m-4.788 0L9.26 9m9.968-3.21c.342.052.682.107 1.022.166m-1.022-.165L18.16 19.673a2.25 2.25 0 0 1-2.244 2.077H8.084a2.25 2.25 0 0 1-2.244-2.077L4.772 5.79m14.456 0a48.108 48.108 0 0 0-3.478-.397m-12 .562c.34-.059.68-.114 1.022-.165m0 0a48.11 48.11 0 0 1 3.478-.397m7.5 0v-.916c0-1.18-.91-2.164-2.09-2.201a51.964 51.964 0 0 0-3.32 0c-1.18.037-2.09 1.022-2.09 2.201v.916m7.5 0a48.667 48.667 0 0 0-7.5 0" />
                            </svg>
                        </a>
                </div>
                <?php endforeach; ?>
            <?php endif; ?>
        </div>
    </div>
</main>
