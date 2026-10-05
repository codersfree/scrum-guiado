<?php
// Stop: si en una rama de tarea hay cambios de código más recientes que la última
// actualización del archivo del ítem, pide a Claude que actualice la bitácora y el
// "Próximo paso" antes de terminar. Solo insiste una vez (stop_hook_active).
require __DIR__ . '/_comun.php';
if (!rk_activo()) {
    exit(0);
}

$entrada = json_decode(stream_get_contents(STDIN) ?: '{}', true) ?: [];
if (!empty($entrada['stop_hook_active'])) {
    exit(0);
}

$id = rk_id_de_rama(rk_rama());
if ($id === null) {
    exit(0);
}
$archivo = rk_archivo_item($id);
if ($archivo === null) {
    exit(0);
}

$mtimeItem = filemtime($archivo) ?: 0;
$dir = rk_dir();
$ultimoCambio = 0;

// Archivos modificados o nuevos sin commitear (excepto el propio ítem).
$estado = rk_git('status --porcelain --untracked-files=all') ?? '';
foreach (explode("\n", $estado) as $linea) {
    if (strlen($linea) < 4 || $linea[0] === 'D' || $linea[1] === 'D') {
        continue;
    }
    $ruta = trim(substr($linea, 3), '"');
    if (str_contains($ruta, ' -> ')) {
        $ruta = explode(' -> ', $ruta)[1];
    }
    $abs = $dir . '/' . $ruta;
    if (realpath($abs) === realpath($archivo) || !is_file($abs)) {
        continue;
    }
    $ultimoCambio = max($ultimoCambio, filemtime($abs) ?: 0);
}

// Último commit de la rama (si es posterior a la bitácora y no tocó el ítem).
$ultimoCommit = (int) (rk_git('log -1 --format=%ct') ?? 0);
$tocoItem = str_contains(rk_git('log -1 --name-only --format=') ?? '', basename($archivo));
if (!$tocoItem) {
    $ultimoCambio = max($ultimoCambio, $ultimoCommit);
}

if ($ultimoCambio > $mtimeItem + 60) {
    $rel = str_replace($dir . '/', '', $archivo);
    fwrite(STDERR, "Recordatorio de Scrum guiado: hay cambios en la rama de {$id} posteriores a la última actualización de {$rel}.\n"
        . "Antes de terminar, actualiza ese archivo: marca los pasos del Plan, agrega una línea a la Bitácora (fecha hora — qué se hizo y por qué) "
        . "y reescribe 'Próximo paso' para poder retomar sin contexto. Si no hubo avance real, agrega una línea breve indicándolo.\n");
    exit(2);
}

exit(0);
