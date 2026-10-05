---
description: Paso 4 — parte cada épica en historias de usuario con criterios de aceptación y arma el backlog
argument-hint: "[EP-##]  (opcional: trabaja una épica a la vez)"
---

# Paso 4 · Historias de usuario y backlog

Entrada: $ARGUMENTS. Sigue la skill `flujo-guiado`. Comprueba que el paso 3 esté `aprobado` y que existen épicas en `docs/scrum/epicas/`; si no, detente y explica.

## Antes de empezar
Explica en 4–5 líneas: una **historia de usuario** es una necesidad pequeña, escrita como "Como <rol>, quiero <acción>, para <beneficio>", que se puede construir en pocos días; es el paso 4 porque las épicas son demasiado grandes para construirse; al juntar todas las historias nace el **backlog** (la lista de todo lo pendiente); sale un archivo por historia y la tabla del backlog. Usa un ejemplo de **una épica real de su proyecto**. Marca el paso `en curso` (si ya lo estaba, continúa).

## Cómo se hace (una épica a la vez)
Usa al agente **`product-owner`**. Con el argumento, esa épica; sin él, la primera sin historias.
1. Propón la lista de historias de esa épica (título + "como/quiero/para") y ajusta con la persona **antes** de escribir archivos. Pregunta **de una en una** lo que no sepas.
2. Con la lista aprobada, crea `docs/scrum/items/HU-###-<slug>.md` (numeración correlativa) con:
```
---
id: HU-001
tipo: historia        # historia | bug | tecnica
titulo: ""
epica: EP-01
estado: borrador      # borrador | lista | en-progreso | pausada | en-revision | terminada
prioridad: ""         # se define en el paso 5
puntos: 0
sprint: ""
rama: ""
pr: ""
creado: AAAA-MM-DD
---
# HU-001 · <Título>
## Historia
**Como** <rol>, **quiero** <acción>, **para** <beneficio>.
## Criterios de aceptación
(Escenarios Dado / Cuando / Entonces: el camino feliz y al menos un caso negativo)
## Fuera de alcance
## Dependencias y preguntas abiertas
---
## Objetivo de la tarea
## Plan
## Próximo paso
## Bloqueos
Ninguno.
## Decisiones
## Bitácora
```
3. Añade las historias a `docs/scrum/backlog.md` (créalo si no existe):
`| ID | Título | Épica | Prioridad | Puntos | Estado | Sprint |`
4. Actualiza la sección "Historias" del archivo de la épica y márcala `refinada`.
5. Pregunta: "¿Seguimos con la épica EP-##?". Repite hasta cubrir todas, **una épica por vez**.

Si algo es demasiado grande para una historia, divídelo; si es demasiado pequeño, únelo. No estimes puntos aún salvo que la persona lo pida (eso es del sprint).

## Aprobación
Cuando todas las épicas tengan historias, muestra el conteo por épica y pide aprobación. Con el sí: paso 4 `aprobado`, bloque 📍📄🧭➡️ (rol: Product Owner con el equipo; siguiente: `/scrum-guiado:priorizar`).
