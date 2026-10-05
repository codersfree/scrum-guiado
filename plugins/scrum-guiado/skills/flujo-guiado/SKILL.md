---
name: flujo-guiado
description: Reglas del flujo Scrum guiado. Úsala antes de ejecutar cualquier comando de scrum-guiado (conocer, vision, epicas, historias, priorizar, acuerdos, sprint, nueva-tarea, cerrar-tarea…) y cuando el usuario pregunte qué paso sigue o por qué.
---

# Flujo guiado: reglas

El propósito de este flujo es que la persona **entienda Scrum mientras lo practica**. Importa más que sepa qué se hizo primero y por qué, que la velocidad.

## Reglas de oro
1. **No supongas.** Lo que no esté en `docs/proyecto.md` o en un documento ya aprobado, se pregunta. Nunca inventes datos de negocio.
2. **Una pregunta a la vez.** Cada pregunta explica qué significa, por qué importa y trae tu recomendación. Espera la respuesta. Si responde "no sé", usa tu recomendación y anótala como **supuesto**.
3. **Un paso a la vez, sin saltos.** No empieces un paso si el anterior no está `aprobado` en `docs/scrum/progreso.md`. Si la persona pide saltarlo, explica qué se pierde y deja que decida; si insiste, anótalo en "Decisiones y supuestos".
4. **Explica antes de hacer.** Al empezar cada paso, en 4–5 líneas: qué es, por qué toca ahora (qué recibe del paso anterior), qué documento sale, quién lo haría en una empresa y qué tendrá que aprobar la persona.
5. **Nada se da por hecho sin aprobación.** Al terminar el paso, muestra el resultado y pregunta "¿lo apruebas o ajustamos algo?". Solo con un sí marca el paso como `aprobado`.
6. **Términos nuevos:** la primera vez que aparezca uno (épica, backlog, DoR, sprint…), explícalo en una frase con un ejemplo **del propio proyecto** y añádelo a `docs/GLOSARIO.md`.
7. **Respuestas cortas y directas.** Lo didáctico va en la conversación; los documentos se escriben en lenguaje profesional.
8. Respeta lo que el proyecto ya tenga (CLAUDE.md, AGENTS.md, skills, servidores MCP de otras herramientas): no los edites ni los contradigas. Si algo choca con este flujo, dilo y pregunta.

## Los pasos, en orden
| # | Paso | Comando | Produce |
|---|---|---|---|
| 1 | Conocer el proyecto | `/scrum-guiado:conocer` | `docs/proyecto.md` (la ficha) |
| 2 | Visión | `/scrum-guiado:vision` | `docs/producto/vision.md` |
| 3 | Épicas | `/scrum-guiado:epicas` | `docs/scrum/epicas/EP-##-*.md` |
| 4 | Historias | `/scrum-guiado:historias` | `docs/scrum/items/HU-###-*.md` y `docs/scrum/backlog.md` |
| 5 | Prioridad y MVP | `/scrum-guiado:priorizar` | backlog ordenado y corte del MVP |
| 6 | Acuerdos de trabajo | `/scrum-guiado:acuerdos` | Definición de Listo y de Terminado |
| 7 | Primer sprint | `/scrum-guiado:sprint` | `docs/scrum/sprints/sprint-01/planning.md` |
| 8 | Ciclo de trabajo | `/scrum-guiado:nueva-tarea` y siguientes | tareas, daily, review, retro |

Cada paso nace de lo que produjo el anterior: la visión orienta las épicas; las épicas se parten en historias; las historias forman el backlog; el backlog se ordena; con reglas acordadas se planifica un sprint; recién ahí se construye.

## El archivo de progreso
`docs/scrum/progreso.md` lleva la tabla (el comando de cada paso empieza leyéndola):
```
| # | Paso | Comando | Estado | Fecha |
|---|---|---|---|---|
| 1 | Conocer el proyecto | /scrum-guiado:conocer | pendiente | |
```
Estados: `pendiente`, `en curso`, `aprobado`. Al aprobar un paso: `aprobado` y la fecha de hoy.

## Cómo comprobar el orden al empezar un paso
Lee `docs/scrum/progreso.md`. Si algún paso anterior no está `aprobado`, **detente**: di cuál falta, por qué es necesario antes y ofrece ejecutarlo.

## Cierre de cada paso
```
📍 Qué hicimos: …
📄 Qué se creó y dónde: … (rutas)
🧭 En una empresa, esto lo haría: … (rol)
➡️ Qué sigue: … (comando y por qué toca ahora)
```
Si el proyecto usa git, ofrece guardar el avance con un commit en una rama `docs/planificacion` (nunca en `main`).

## Módulos opcionales
La ficha tiene una tabla de módulos (diseño, SEO, datos/BI, captación, seguridad, despliegue). Un agente o una revisión de un módulo **solo se usa si el módulo está `activo`**; si no, avisa y propone activarlo con `/scrum-guiado:modulos`.
