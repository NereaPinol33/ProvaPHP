
<main class="flex-grow p-4 sm:p-8">
    <div class="max-w-full mx-auto bg-white shadow-md rounded-lg p-4 sm:p-6">
        <h2 class="text-3xl sm:text-4xl font-bold mb-6 sm:mb-8 text-center text-green-700 uppercase tracking-wide">
            <span class="bg-green-100 px-3 py-1 sm:px-4 sm:py-2 rounded-lg shadow-sm">Actors</span>
        </h2>
        
        <div class="bg-green-100 p-4 rounded-lg mb-6">
                <a href="/actors/create" class="bg-green-500 text-white px-3 py-1 sm:px-4 sm:py-2 rounded hover:bg-green-600 font-bold text-sm sm:text-base">Añadir</a>
        </div>
        
        <div class="hidden md:block overflow-x-auto">
            <table class="w-full bg-white border border-green-200">
                <thead>
                <tr class="bg-green-100 text-green-700 uppercase text-sm leading-normal">
                    <th class="py-3 px-6 text-left">ID</th>
                    <th class="py-3 px-6 text-left">NOMBRE</th>
                    <th class="py-3 px-6 text-left">FECHA DE NACIMIENTO</th>
                    <th class="py-3 px-6 text-left">NACIONALIDAD</th>
                    <th class="py-3 px-6 text-left">biografia</th>
                    <th class="py-3 px-6 text-left">ACCIONES</th>
                </tr>
                </thead>
                <tbody class="text-green-600 text-sm font-light">
                <?php if (empty($actors)): ?>
                <tr>
                    <td colspan="6" class="py-3 px-6 text-center">Actor not found</td>
                </tr>
                <?php else: ?>
                    <?php foreach ($actors as $actor): ?>
                <tr class="border-b border-green-100 hover:bg-green-50">
                    <td class="py-3 px-6"><?=$actor['id'] ?></td>
                    <td class="py-3 px-6"><?= htmlspecialchars($actor['nombre']) ?></td>
                    <td class="py-3 px-6"><?= htmlspecialchars($actor['fecha_nacimiento']) ?></td>
                    <td class="py-3 px-6"><?= htmlspecialchars($actor['nacionalidad']) ?></td>
                    <td class="py-3 px-6"><?= htmlspecialchars($actor['biografia']) ?></td>
                    <td class="py-3 px-6">
                        <a href="/actors/edit/<?=$actor['id'] ?>" class="text-blue-500 hover:text-blue-600">
                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="inline w-6 h-6">
                                <path stroke-linecap="round" stroke-linejoin="round" d="m16.862 4.487 1.687-1.688a1.875 1.875 0 1 1 2.652 2.652L10.582 16.07a4.5 4.5 0 0 1-1.897 1.13L6 18l.8-2.685a4.5 4.5 0 0 1 1.13-1.897l8.932-8.931Zm0 0L19.5 7.125M18 14v4.75A2.25 2.25 0 0 1 15.75 21H5.25A2.25 2.25 0 0 1 3 18.75V8.25A2.25 2.25 0 0 1 5.25 6H10" />
                            </svg>
                            </a>
                        <a href="/actors/delete/<?=$actor['id'] ?>" class="text-red-500 hover:text-red-600">
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
            <p class="text-center text-green-600">No hay películas</p>
            <?php else: ?>
                <?php foreach ($actors as $actor): ?>
                <div class="bg-white border border-green-200 rounded-lg p-4 shadow-sm">
                    <input type="checkbox" titulo="selected" value="<?=$actor['id'] ?>" class="float-right" onchange="handleCheckboxChange(this)">
                    <p class="text-sm font-semibold text-green-700">ID: <?=$actor['id'] ?></p>
                    <h3 class="text-lg font-bold text-green-800 mt-1"><?= htmlspecialchars($actor['title']) ?></h3>
                    <p class="text-green-600"><span class="font-semibold">Director:</span> <?= htmlspecialchars($actor['director']) ?></p>
                    <p class="text-green-600"><span class="font-semibold">Year:</span> <?= htmlspecialchars($actor['year']) ?></p>
                    <p class="text-green-600"><span class="font-semibold">Genre:</span> <?= htmlspecialchars($actor['genre']) ?></p>
                </div>
                <?php endforeach; ?>
            <?php endif; ?>
        </div>
    </div>
</main>
