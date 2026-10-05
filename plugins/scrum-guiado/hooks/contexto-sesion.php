<?php
// SessionStart: reglas del flujo, paso actual de la planificación y estado de la tarea activa (según la rama).
require __DIR__ . '/_comun.php';
if (!rk_activo()) {
    exit(0);
}

$salida = [];
$salida[] = '[Scrum guiado] Proyecto con flujo guiado. Lee docs/proyecto.md (la ficha: stack, comandos y módulos activos). '
    . 'Reglas: una pregunta a la vez; explica antes de cada paso; no saltes pasos ni avances sin aprobación; no supongas, pregunta.';

$progreso = @file_get_contents(rk_dir() . '/docs/scrum/progreso.md');
if ($progreso) {
    $pendiente = null;
    $hechos = 0;
    $total = 0;
    if (preg_match_all('/^\|\s*(\d+)\s*\|\s*([^|]+?)\s*\|\s*([^|]+?)\s*\|\s*([^|]+?)\s*\|/m', $progreso, $filas, PREG_SET_ORDER)) {
        foreach ($filas as $f) {
            $total++;
            if (stripos($f[4], 'aprobado') === 0) {
                $hechos++;
            } elseif ($pendiente === null) {
                $pendiente = $f;
            }
        }
    }
    if ($pendiente !== null) {
        $salida[] = "[Scrum guiado] Planificación: {$hechos}/{$total} pasos aprobados. Paso actual: {$pendiente[1]} · {$pendiente[2]} · comando {$pendiente[3]}. No avances a otro paso sin cerrar este.";
    } elseif ($total > 0) {
        $salida[] = '[Scrum guiado] Planificación completa. Trabajo en ciclo: /nueva-tarea, /daily, /review, /retro.';
    }
}

$rama = rk_rama();
if ($rama === null) {
    echo implode("\n", $salida) . "\n";
    exit(0);
}
$salida[] = "[Scrum guiado] Rama actual: {$rama}";

$config = @file_get_contents(rk_dir() . '/docs/scrum/configuracion.md');
if ($config && preg_match('/\|\s*Sprint actual\s*\|\s*([^|]+)\|/u', $config, $m)) {
    $salida[] = '[Scrum guiado] Sprint actual: ' . trim($m[1]);
}

$id = rk_id_de_rama($rama);
if ($id !== null) {
    $archivo = rk_archivo_item($id);
    if ($archivo === null) {
        $salida[] = "[Scrum guiado] ⚠ La rama apunta a {$id} pero no existe docs/scrum/items/{$id}-*.md.";
    } else {
        $c = file_get_contents($archivo);
        $rel = str_replace(rk_dir() . '/', '', $archivo);
        $salida[] = "[Scrum guiado] Tarea activa: {$id} · " . rk_campo($c, 'titulo') . ' · estado: ' . rk_campo($c, 'estado');
        $salida[] = "[Scrum guiado] Archivo de la tarea (su memoria; mantenlo actualizado): {$rel}";
        foreach (['Objetivo de la tarea' => 'Objetivo', 'Próximo paso' => 'Próximo paso'] as $sec => $et) {
            $v = rk_seccion($c, $sec);
            if ($v !== '') {
                $salida[] = "{$et}: {$v}";
            }
        }
        $bloqueos = rk_seccion($c, 'Bloqueos');
        if ($bloqueos !== '' && stripos($bloqueos, 'ninguno') === false) {
            $salida[] = "Bloqueos:\n{$bloqueos}";
        }
        $bitacora = rk_seccion($c, 'Bitácora');
        if ($bitacora !== '') {
            $lineas = array_values(array_filter(explode("\n", $bitacora), fn ($l) => str_starts_with(trim($l), '- ')));
            $salida[] = "Últimas entradas de la bitácora:\n" . implode("\n", array_slice($lineas, -5));
        }
        $salida[] = '[Scrum guiado] Si el usuario quiere continuar esta tarea, sigue el procedimiento de /retomar.';
    }
} else {
    $activos = [];
    foreach (glob(rk_dir() . '/docs/scrum/items/*.md') ?: [] as $f) {
        $c = file_get_contents($f);
        $estado = rk_campo($c, 'estado');
        if (in_array($estado, ['en-progreso', 'pausada'], true)) {
            $activos[] = '- ' . rk_campo($c, 'id') . ' · ' . rk_campo($c, 'titulo') . " · {$estado} · rama: " . rk_campo($c, 'rama');
        }
    }
    if ($activos) {
        $salida[] = "[Scrum guiado] Tareas en progreso o pausadas (usa /retomar <ID>):\n" . implode("\n", $activos);
    }
    if (in_array($rama, ['main', 'master'], true)) {
        $salida[] = '[Scrum guiado] Estás en main: no hagas commits aquí. Para trabajar, usa una rama (/nueva-tarea o git switch -c docs/<tema>).';
    }
}

echo implode("\n", $salida) . "\n";
exit(0);
