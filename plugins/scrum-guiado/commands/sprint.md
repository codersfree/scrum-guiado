---
description: Paso 7 — planifica el primer sprint: objetivo, historias elegidas y capacidad
---

# Paso 7 · Primer sprint (planning)

Sigue la skill `flujo-guiado`. Comprueba que el paso 6 esté `aprobado`; si no, detente y explica.

## Antes de empezar
Explica en 4–5 líneas: un **sprint** es un periodo corto (el acordado) en el que se construye un conjunto pequeño de historias; el **planning** elige cuáles caben y fija un **objetivo del sprint**; es el paso 7 porque ya hay backlog ordenado y reglas acordadas; sale `planning.md`; tú lo apruebas. Con un ejemplo de **su** proyecto. Marca el paso `en curso`.

## Cómo se hace
Usa al agente **`scrum-master`** (con `product-owner` para el valor y `arquitecto` para los riesgos técnicos si hace falta).
1. Pregunta la **capacidad** realista del sprint (horas o días disponibles; una persona sola trabaja con menos de lo que cree).
2. Propón un **objetivo del sprint** (una frase de valor para un usuario) y las historias de arriba del backlog que lo logren y estén en `lista`. Si hay historias sin estimar, estímalas con la persona en puntos (explica qué es un punto con un ejemplo de **su** proyecto) o en tallas S/M/L.
3. Ajusta hasta que la carga sea realista. Es mejor comprometer menos.
4. Crea `docs/scrum/sprints/sprint-01/planning.md` con: objetivo, fechas, capacidad, historias elegidas (ID, título, puntos) y riesgos. Actualiza el campo `sprint` en cada historia elegida y la columna Sprint del backlog. Pon `| Sprint actual | sprint-01 |` en `docs/scrum/configuracion.md`.
5. Marca la planificación como completa.

## Aprobación y cierre de la planificación
Pide aprobación. Con el sí: paso 7 `aprobado` y el paso 8 pasa a `en curso` (ciclo continuo). Si hay git y se trabajó en la rama `docs/planificacion`, ofrece abrir un Pull Request (la persona lo aprueba; no hagas push ni PR sin su permiso).
Cierra con el bloque 📍📄🧭➡️ (rol: Scrum Master; siguiente: `/scrum-guiado:nueva-tarea <ID>` con la primera historia del sprint) y explica el ciclo: tarea → daily → cerrar tarea → review → retro.
