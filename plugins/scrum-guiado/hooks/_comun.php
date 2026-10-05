<?php
// Utilidades compartidas por los hooks de Scrum guiado.

function rk_dir(): string
{
    $dir = getenv('CLAUDE_PROJECT_DIR');
    $dir = ($dir !== false && $dir !== '') ? $dir : getcwd();
    return rtrim(str_replace('\\', '/', $dir), '/');
}

/** El flujo solo se activa en proyectos iniciados con /conocer (existe docs/proyecto.md). */
function rk_activo(): bool
{
    return is_file(rk_dir() . '/docs/proyecto.md');
}

function rk_git(string $args): ?string
{
    $cmd = 'git -C ' . escapeshellarg(rk_dir()) . ' ' . $args . ' 2>' . (PHP_OS_FAMILY === 'Windows' ? 'NUL' : '/dev/null');
    $out = shell_exec($cmd);
    return $out === null || $out === false ? null : rtrim($out, "\r\n");
}

function rk_rama(): ?string
{
    $rama = rk_git('branch --show-current');
    return ($rama === null || $rama === '') ? null : $rama;
}

/** Devuelve el ID (HU-012, BUG-3, TEC-004) contenido en la rama, o null. */
function rk_id_de_rama(?string $rama): ?string
{
    if ($rama && preg_match('/\b((?:HU|BUG|TEC)-\d+)/i', $rama, $m)) {
        return strtoupper($m[1]);
    }
    return null;
}

function rk_archivo_item(string $id): ?string
{
    $archivos = glob(rk_dir() . '/docs/scrum/items/' . $id . '-*.md') ?: [];
    if (!$archivos && is_file(rk_dir() . '/docs/scrum/items/' . $id . '.md')) {
        $archivos = [rk_dir() . '/docs/scrum/items/' . $id . '.md'];
    }
    return $archivos[0] ?? null;
}

/** Lee un campo simple del frontmatter YAML. */
function rk_campo(string $contenido, string $campo): string
{
    if (preg_match('/^' . preg_quote($campo, '/') . ':\s*"?([^"#\r\n]*)"?/m', $contenido, $m)) {
        return trim($m[1]);
    }
    return '';
}

/** Devuelve el cuerpo de una sección "## Titulo" hasta la siguiente "## ". */
function rk_seccion(string $contenido, string $titulo): string
{
    $patron = '/^##\s+' . preg_quote($titulo, '/') . '\s*$(.*?)(?=^##\s|\z)/msu';
    if (preg_match($patron, $contenido, $m)) {
        return trim(preg_replace('/<!--.*?-->/s', '', $m[1]));
    }
    return '';
}
