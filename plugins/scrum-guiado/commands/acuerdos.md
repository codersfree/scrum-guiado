---
description: Paso 6 — acuerda las reglas del trabajo: Definición de Listo, Definición de Terminado y ritmo del sprint
---

# Paso 6 · Acuerdos de trabajo

Sigue la skill `flujo-guiado`. Comprueba que el paso 5 esté `aprobado`; si no, detente y explica.

## Antes de empezar
Explica en 4–5 líneas: antes de construir, el equipo acuerda cuándo una historia está **lista para empezar** (Definición de Listo, DoR) y cuándo está **terminada** (Definición de Terminado, DoD), y cada cuánto se trabaja (duración del sprint). Es el paso 6 porque ya hay historias reales a las que aplicarlas; sale un documento corto; tú lo apruebas. Da ejemplos con **su** proyecto. Marca el paso `en curso`.

## Cómo se hace
Usa al agente **`scrum-master`**. Parte de la ficha (stack, comandos, módulos activos) y propón, **una pregunta a la vez**:
1. **Duración del sprint** (recomendación: 1–2 semanas) y si hay días fijos para daily, review y retro (si trabaja solo, explica qué cambia).
2. **Definición de Listo**: lista corta (por ejemplo: historia con criterios claros, sin preguntas abiertas, dependencias identificadas).
3. **Definición de Terminado**: lista corta adaptada a la ficha (por ejemplo: criterios cumplidos, pruebas en verde con el comando de la ficha, formato correcto, sin restos de depuración, revisión aprobada, documentación actualizada). Añade líneas según los módulos activos (SEO, seguridad, diseño, BI).
4. **Flujo con git** (si hay): ramas por tarea, mensajes de commit, Pull Request y cómo se integra (recomienda GitHub Flow con squash merge y explícalo con un ejemplo).
5. **Límite de trabajo en curso** (recomendación: máximo 2 tareas en curso).

Crea:
- `docs/scrum/definicion-de-listo.md` y `docs/scrum/definicion-de-terminado.md` (listas con casillas).
- `docs/scrum/acuerdos-de-trabajo.md` (duración, ceremonias, git, límite).
- `docs/scrum/configuracion.md` con la tabla `| Parámetro | Valor |` incluyendo `| Sprint actual | (ninguno todavía) |`.

Con las nuevas definiciones, revisa el backlog: pasa a `lista` las historias que ya cumplan la Definición de Listo y señala qué les falta a las demás.

## Aprobación
Muestra los acuerdos y pide aprobación. Con el sí: paso 6 `aprobado`, bloque 📍📄🧭➡️ (rol: Scrum Master con el equipo; siguiente: `/scrum-guiado:sprint`).
