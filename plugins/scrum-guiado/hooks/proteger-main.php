<?php
// PreToolUse (Bash): impide commits, merges o pushes directos a main/master y los force-push a main.
// Exit code 2 = bloquear; el mensaje de STDERR le llega a Claude.
require __DIR__ . '/_comun.php';
if (!rk_activo()) {
    exit(0);
}

$entrada = json_decode(stream_get_contents(STDIN) ?: '{}', true) ?: [];
$comando = (string) ($entrada['tool_input']['command'] ?? '');
if ($comando === '' || !preg_match('/\bgit\b/', $comando)) {
    exit(0);
}

$principales = ['main', 'master'];
$rama = rk_rama();
$enPrincipal = in_array($rama, $principales, true);

// 1) Force push (sin lease) hacia main, desde cualquier rama.
if (preg_match('/\bgit\s+push\b/', $comando)
    && preg_match('/(\s--force(?!-with-lease)\b|\s-f\b)/', $comando)
    && (preg_match('/\b(main|master)\b/', $comando) || $enPrincipal)) {
    fwrite(STDERR, "Bloqueado por el hook de Scrum guiado: no se permite force-push a main.\n");
    exit(2);
}

if (!$enPrincipal) {
    exit(0);
}

// 2) Commit o merge estando en main.
if (preg_match('/\bgit\s+(commit|merge|cherry-pick|revert|am)\b/', $comando)) {
    fwrite(STDERR, "Bloqueado por el hook de Scrum guiado: estás en '{$rama}'. GitHub Flow: nunca hagas commit directo en main.\n"
        . "Crea una rama para el trabajo (p. ej. /nueva-tarea <ID>, o `git switch -c docs/<slug>` para cambios de documentación) y vuelve a intentarlo.\n");
    exit(2);
}

// 3) Push de la rama main (se permiten los tags: git push origin vX.Y.Z / --tags).
if (preg_match('/\bgit\s+push\b/', $comando)
    && !preg_match('/(--tags|\bv\d+\.\d+\.\d+\b|--delete)/', $comando)) {
    fwrite(STDERR, "Bloqueado por el hook de Scrum guiado: no se hace push de main. Los cambios llegan a main solo por Pull Request (squash merge).\n");
    exit(2);
}

exit(0);
