---
description: Paso 8 (ciclo) — inicia el trabajo en una historia: verifica que esté lista, crea la rama, define objetivo y plan y deja la bitácora
argument-hint: "<ID de historia>"
---

# Nueva tarea

Entrada: $ARGUMENTS. Sigue la skill `flujo-guiado`. Explica en 3 líneas, la primera vez, qué es una tarea (la ejecución de una historia) y qué es la **bitácora** (el cuaderno del trabajo: lo que se hizo y qué sigue, para poder retomar sin memoria).

## 1. Comprobar
- Lee `docs/scrum/progreso.md`: si la planificación (pasos 1 a 7) no está aprobada, detente y explica qué falta. 
- Abre `docs/scrum/items/<ID>-*.md`. Si no está `lista`, muestra qué falta de la Definición de Listo y pregunta si refinarla ahora. Si ya hay el máximo de tareas en curso acordado, avisa y pregunta qué pausar.

## 2. Preparar git (solo si el proyecto usa git)
```bash
git status --porcelain      # si hay cambios sin commitear, pregunta qué hacer; nunca los pierdas
git switch main && git pull --ff-only    # (omite el pull si no hay remoto)
git switch -c <tipo>/<ID>-<slug>        # feature/ historia, fix/ bug, chore/ técnica
```
Slug de 3–5 palabras en kebab-case sin tildes. Si la rama ya existe, usa `/retomar`.

## 3. Plan
- Si la historia toca varias capas, datos, integraciones o seguridad, delega en **`arquitecto`** el diseño técnico.
- Si tiene interfaz y el módulo `diseño` está activo, **`disenador-ui`** llena el diseño de pantalla.
- Escribe el **Objetivo de la tarea** (qué quedará funcionando y cómo se verifica) y un **Plan** de 3–8 pasos pequeños, cada uno con su verificación.

## 4. Actualizar el archivo
Frontmatter: `estado: en-progreso`, `rama`, `iniciado`, `sprint`. Bitácora: `- <AAAA-MM-DD HH:MM> — Tarea iniciada en rama <rama>. Objetivo: <...>`. **Próximo paso:** el paso 1 del plan, concreto. Actualiza el backlog.

## 5. Arranque
Commit `docs(scrum): inicia <ID> <título> [<ID>]`. Muestra objetivo, plan y próximo paso, y pregunta "¿Arranco con el paso 1?". Con el sí, delega en **`desarrollador`** pasándole la ruta del archivo.
