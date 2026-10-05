# scrum-guiado

Plugin de Claude Code para **aprender y practicar Scrum paso a paso** en cualquier proyecto. No sabe nada de tu proyecto: lo descubre con preguntas (una a la vez), explica cada paso, no se salta ninguno y espera tu aprobación antes de avanzar.

## Instalación (una sola vez)
En una terminal:
```bash
claude plugin marketplace add codersfree/scrum-guiado
claude plugin install scrum-guiado@scrum-guiado
```
Para probarlo sin GitHub, desde la carpeta de este repositorio: `claude --plugin-dir ./plugins/scrum-guiado`.

## Uso
En la carpeta de tu proyecto, abre `claude` y escribe:
```
/scrum-guiado:empezar
```
Después sigue el comando que te indique cada paso. En cualquier momento, `/scrum-guiado:donde-estamos`.

## El flujo
| Paso | Comando | Produce |
|---|---|---|
| 1 | `/scrum-guiado:conocer` | La ficha del proyecto (`docs/proyecto.md`) |
| 2 | `/scrum-guiado:vision` | La visión del producto |
| 3 | `/scrum-guiado:epicas` | Las épicas |
| 4 | `/scrum-guiado:historias` | Las historias y el backlog |
| 5 | `/scrum-guiado:priorizar` | Backlog ordenado y corte del MVP |
| 6 | `/scrum-guiado:acuerdos` | Definición de Listo y de Terminado |
| 7 | `/scrum-guiado:sprint` | Planning del primer sprint |
| 8 | `/scrum-guiado:nueva-tarea` y siguientes | Tareas, `/daily`, `/cerrar-tarea`, `/review`, `/retro` |

Extras: `/scrum-guiado:modulos` (activar diseño, SEO, BI, captación, seguridad, despliegue), `/scrum-guiado:cambio`, `/scrum-guiado:pausar`, `/scrum-guiado:retomar`.

## Requisitos
Claude Code, PHP (para los hooks), Git y, opcionalmente, GitHub CLI (`gh`).

## Qué crea en tu proyecto
Solo documentos en `docs/` (ficha, visión, épicas, historias, acuerdos, sprints). No toca tu `CLAUDE.md`, `AGENTS.md` ni tus skills. Los avisos automáticos solo se activan en proyectos donde exista `docs/proyecto.md`.
